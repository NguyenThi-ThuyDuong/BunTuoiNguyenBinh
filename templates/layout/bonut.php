<ul class="all-icons">
    <!-- Trang chủ -->
    <li>
        <a href="./" rel="nofollow">
            <img src="assets/images/icon_home.png" alt="Trang chủ">
            <span class="">Trang chủ</span>
        </a>
    </li>
    <!-- Hotline -->
    <li>
        <a class="icon-phone hl" href="tel:<?= preg_replace('/[^0-9]/','', !empty($optsetting['hotline']) ? $optsetting['hotline'] : '0984050679') ?>" target="_blank" rel="nofollow">
            <svg class="homenest-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="white" style="display: inline-block;">
                <path d="M493.4 24.6l-104-24c-11.7-2.7-23.9 3.3-29.2 14.7l-48 112c-4.2 9.8-1.4 21.3 6.8 28.8l60.6 52.4c-36 76-98.5 138.5-174.5 174.5l-52.4-60.6c-7.5-8.2-19-11-28.8-6.8l-112 48c-11.4 4.9-17.4 17.3-14.7 29.2l24 104c2.6 11.3 13.1 19.4 24.8 19.4 256 0 464-208 464-464 0-11.7-8.1-22.2-19.4-24.8z"></path>
            </svg>
            <span class="">Hotline</span>
        </a>
    </li>
    <!-- Zalo -->
    <li>
        <a href="https://zalo.me/<?= preg_replace('/[^0-9]/','', !empty($optsetting['zalo']) ? $optsetting['zalo'] : '0369050679') ?>" target="_blank" rel="nofollow">
            <svg class="homenest-icon" width="100%" height="100%" viewBox="7 8 35 35" version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2; display: inline-block;">
                <path d="M25.004,10.45l-0.015,-0c-7.978,-0 -14.544,6.565 -14.544,14.543c0,2.609 0.702,5.17 2.032,7.415l-1.951,5.367c-0.053,0.145 -0.08,0.298 -0.08,0.453c0,0.725 0.597,1.322 1.322,1.322c0.154,0 0.307,-0.027 0.452,-0.079l5.368,-1.952c2.245,1.33 4.807,2.031 7.416,2.031c7.982,0 14.551,-6.568 14.551,-14.55c-0,-7.982 -6.569,-14.55 -14.551,-14.55Zm0.939,18.021l-0,0.021c-0,0.293 0.254,0.548 0.56,0.548l0.752,-0l0,-6.143l-1.312,-0l-0,0.435c-0.528,-0.386 -1.181,-0.613 -1.888,-0.613c-1.759,-0 -3.186,1.427 -3.186,3.186c-0,1.759 1.427,3.186 3.186,3.186c0.706,0 1.359,-0.23 1.888,-0.62Zm7.976,-5.803c-1.772,-0 -3.212,1.44 -3.212,3.211c0,1.772 1.44,3.212 3.212,3.212c1.771,-0 3.211,-1.44 3.211,-3.212c0,-1.771 -1.44,-3.211 -3.211,-3.211Zm-5.073,6.372l0.931,-0l-0,-8.131l-1.402,-0l-0,7.659c-0,0.255 0.204,0.472 0.471,0.472Zm-8.321,-8.131l-6.538,-0l-0,1.402l4.537,-0l-4.474,5.544c-0.14,0.204 -0.242,0.395 -0.242,0.828l0,0.357l6.169,-0c0.306,-0 0.56,-0.255 0.56,-0.561l0,-0.752l-4.766,0l4.206,-5.276c0.063,-0.077 0.178,-0.217 0.229,-0.28l0.026,-0.039c0.242,-0.357 0.293,-0.662 0.293,-1.032l-0,-0.191Zm3.53,6.869c-1.033,0 -1.874,-0.841 -1.874,-1.873c0,-1.032 0.841,-1.873 1.874,-1.873c1.032,-0 1.873,0.841 1.873,1.873c0,1.032 -0.828,1.873 -1.873,1.873Zm9.864,0c-1.045,0 -1.886,-0.841 -1.886,-1.886c-0,-1.045 0.841,-1.886 1.886,-1.886c1.045,-0 1.886,0.841 1.886,1.886c0,1.045 -0.841,1.886 -1.886,1.886Z" style="fill:#fff;"></path>
            </svg>
            <span class="">Zalo</span>
        </a>
    </li>
    <!-- Messenger -->
    <li>
        <a href="<?= !empty($optsetting['fanpage']) ? $optsetting['fanpage'] : 'https://www.facebook.com/buntuoisachnguyenbinh' ?>" rel="nofollow" target="_blank">
            <img src="assets/images/mess.png" alt="Messenger">
            <span class="">Messenger</span>
        </a>
    </li>
    <!-- Mobile toggle -->
    <li class="all-icons__toggle-item">
        <button class="all-icons__toggle" type="button" aria-expanded="false" aria-label="Mở các kênh liên hệ">
            <i class="fas fa-comments" aria-hidden="true"></i>
            <span>Liên hệ</span>
        </button>
    </li>
</ul>

<div class="modal fade quick-quote-modal" id="quick-quote-modal" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="quick-quote-title-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="quick-quote-modal__close" data-dismiss="modal" aria-label="Đóng form báo giá">&times;</button>
        </div>
    </div>
</div>

<style>
/* Start tab icon */
ul.all-icons {
    position: fixed;
    top: 50%;
    right: 5px;
    list-style: none;
    transform: translateY(-50%);
    border-radius: 5px;
    overflow: hidden;
    transition: all .3s;
    z-index: 99;
}
ul.all-icons.hide {
    right: -50px;
}
ul.all-icons>li:not(:last-of-type)>a {
    box-sizing: border-box;
}
ul.all-icons>li>a {
    --size: 60px;
    display: flex;
    width: var(--size);
    height: var(--size);
    color: #fff;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    margin-bottom: 5px;
}
ul.all-icons>li>a::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    background: linear-gradient(92.16deg, #082867 25%, #1A85F8 56.7%, #66E5FB 75%);
    transform: scale(2) rotate(0deg);
    transition: all .5s ease;
}
ul.all-icons>li>a:hover::before {
    transform: scale(2) rotate(-180deg);
}
ul.all-icons>li>a>i {
    font-size: 19px;
    margin-bottom: 3px;
    margin-top: 5px;
}
ul.all-icons>li>a img {
    width: 23px !important;
    margin-bottom: 5px;
}
ul.all-icons>li>a svg {
    width: 23px !important;
    max-height: 23px;
    margin-bottom: 5px;
}
ul.all-icons>li>a.hl svg {
    width: 20px !important;
}
ul.all-icons>li>a>span {
    font-size: 10px;
    line-height: 1em;
    font-weight: 300;
}
.all-icons__toggle-item {
    display: none;
}
@media (max-width: 767px) {
    ul.all-icons,
    ul.all-icons.hide {
        align-items: flex-end;
        bottom: 112px;
        display: flex;
        flex-direction: column;
        overflow: visible;
        right: 10px;
        top: auto;
        transform: none;
    }
    ul.all-icons > li:not(.all-icons__toggle-item) {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        pointer-events: none;
        transform: translate3d(0, 10px, 0) scale(0.88);
        transform-origin: right bottom;
        transition: max-height 0.28s ease, opacity 0.2s ease, transform 0.28s ease;
    }
    ul.all-icons.is-open > li:not(.all-icons__toggle-item) {
        max-height: 65px;
        opacity: 1;
        overflow: visible;
        pointer-events: auto;
        transform: translate3d(0, 0, 0) scale(1);
    }
    ul.all-icons > li > a {
        --size: 54px;
    }
    .all-icons__toggle-item {
        display: block;
    }
    .all-icons__toggle {
        align-items: center;
        background: linear-gradient(135deg, #082867, #1A85F8);
        border: 2px solid rgba(255, 255, 255, 0.82);
        border-radius: 50%;
        box-shadow: 0 8px 22px rgba(2, 35, 83, 0.3);
        color: #fff;
        display: flex;
        flex-direction: column;
        height: 54px;
        justify-content: center;
        padding: 0;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        width: 54px;
    }
    .all-icons__toggle i {
        font-size: 18px;
        line-height: 1;
        transition: transform 0.28s ease;
    }
    .all-icons__toggle span {
        font-size: 9px;
        line-height: 1;
        margin-top: 4px;
    }
    .all-icons.is-open .all-icons__toggle {
        box-shadow: 0 10px 26px rgba(2, 35, 83, 0.4);
        transform: scale(1.04);
    }
    .all-icons.is-open .all-icons__toggle i {
        transform: rotate(180deg);
    }
}
@media (prefers-reduced-motion: reduce) {
    ul.all-icons > li,
    .all-icons__toggle,
    .all-icons__toggle i {
        transition: none !important;
    }
}
</style>

<script>
const target = document.querySelector('.all-icons');
const floatingActionsToggle = target ? target.querySelector('.all-icons__toggle') : null;
const floatingActionsMobile = window.matchMedia('(max-width: 767px)');
let lastScroll = 0;
let isHovering = false;

function closeFloatingActions() {
    if (!target || !floatingActionsToggle) return;
    target.classList.remove('is-open');
    floatingActionsToggle.setAttribute('aria-expanded', 'false');
    floatingActionsToggle.setAttribute('aria-label', 'Mở các kênh liên hệ');
}

if (floatingActionsToggle) {
    floatingActionsToggle.addEventListener('click', (event) => {
        event.stopPropagation();
        const isOpen = target.classList.toggle('is-open');
        floatingActionsToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        floatingActionsToggle.setAttribute('aria-label', isOpen ? 'Thu gọn các kênh liên hệ' : 'Mở các kênh liên hệ');
    });

    document.addEventListener('click', (event) => {
        if (floatingActionsMobile.matches && !target.contains(event.target)) closeFloatingActions();
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') closeFloatingActions();
    });
}

if (target) {
    target.addEventListener('mouseenter', () => {
        isHovering = true;
        if (target.classList.contains('hide')) {
            target.classList.remove('hide');
        }
    });

    target.addEventListener('mouseleave', () => {
        isHovering = false;
    });

    window.addEventListener('scroll', () => {
        if (floatingActionsMobile.matches) return;
        let currentScroll = window.pageYOffset;
        if (!isHovering) {
            if (currentScroll > lastScroll) {
                target.classList.add('hide');
            } else {
                target.classList.remove('hide');
            }
        }
        lastScroll = currentScroll;
    });
}
</script>
