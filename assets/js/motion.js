(function () {
    var reduceMotion = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    function initAos() {
        if (!window.AOS) return;

        AOS.init({
            duration: 800,
            easing: "ease-out-cubic",
            once: true,
            offset: 80
        });
    }

    function initLenis() {
        if (!window.Lenis || reduceMotion) return null;

        var lenis = new Lenis({
            duration: 1.1,
            smoothWheel: true,
            wheelMultiplier: 0.9,
            touchMultiplier: 1.5
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
        window.lenis = lenis;

        return lenis;
    }

    function initGsap(lenis) {
        if (!window.gsap) return;

        if (window.ScrollTrigger) {
            gsap.registerPlugin(ScrollTrigger);

            if (lenis) {
                lenis.on("scroll", ScrollTrigger.update);
            }
        }

        document.querySelectorAll("[data-gsap='fade-up']").forEach(function (element) {
            gsap.from(element, {
                y: 40,
                autoAlpha: 0,
                duration: 0.8,
                ease: "power2.out",
                scrollTrigger: window.ScrollTrigger ? {
                    trigger: element,
                    start: "top 85%",
                    once: true
                } : undefined
            });
        });

        if (reduceMotion) return;

        document.querySelectorAll('[data-home-reveal]').forEach(function (section) {
            var wrapper = section.firstElementChild || section;
            var mode = section.getAttribute('data-home-reveal');
            var firstItem = wrapper.firstElementChild;
            var items = [];

            if (mode === 'cards') {
                items = Array.from(wrapper.querySelectorAll('.home-category-trial__item, article'));
                if (firstItem && items.indexOf(firstItem) === -1) items.unshift(firstItem);
            } else if (mode === 'timeline') {
                items = Array.from(wrapper.querySelectorAll('ol > li'));
                if (firstItem) items.unshift(firstItem);
            } else if (mode === 'gallery') {
                items = Array.from(wrapper.querySelectorAll('.grid > a:not(.hidden)'));
                if (firstItem) items.unshift(firstItem);
            } else {
                items = Array.from(wrapper.children).filter(function(item) {
                    return item.tagName !== 'SVG' && !item.classList.contains('hidden');
                });
            }

            if (!items.length) items = [wrapper];

            var animation = {
                autoAlpha: 0,
                duration: mode === 'timeline' ? 0.62 : 0.78,
                ease: 'power2.out',
                stagger: mode === 'timeline' ? 0.055 : 0.09,
                clearProps: 'transform,opacity,visibility',
                scrollTrigger: window.ScrollTrigger ? {
                    trigger: section,
                    start: 'top 82%',
                    once: true
                } : undefined
            };

            if (mode === 'split') {
                animation.x = function(index) { return index % 2 === 0 ? -42 : 42; };
            } else {
                animation.y = mode === 'timeline' ? 24 : 38;
            }

            if (mode === 'timeline') animation.scale = 0.97;

            gsap.from(items, animation);
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        initAos();
        initGsap(initLenis());
    });
})();
