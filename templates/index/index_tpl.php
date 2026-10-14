<?php
    $hero_slide = (!empty($slider) && is_array($slider)) ? $slider[0] : null;
    $hero_bg = (!empty($hero_slide['photo']) && file_exists(UPLOAD_PHOTO_L . $hero_slide['photo']))
        ? UPLOAD_PHOTO_L . $hero_slide['photo']
        : 'upload/photo/slide1-edited-7871.webp';
?>

<!-- BANNER SLIDER CHÍNH -->
<section class="wrap_slider home-hero" aria-label="Nội dung nổi bật">
    <div class="slideshow home-hero__slideshow">
        <button type="button" class="control-slideshow prev-slideshow transition" aria-label="Slide trước">
            <i class="fas fa-chevron-left" aria-hidden="true"></i>
        </button>

        <div id="slider" class="owl-carousel owl-theme owl-slideshow">
            <?php if(!empty($slider) && count($slider) > 0) { 
                foreach($slider as $slide) { 
                    $slide_bg = (!empty($slide['photo']) && file_exists(UPLOAD_PHOTO_L . $slide['photo'])) 
                        ? UPLOAD_PHOTO_L . $slide['photo'] 
                        : 'upload/photo/slide1-edited-7871.webp';
            ?>
                <article class="item_slider home-hero__slide">
                    <img class="home-hero__background"
                        onerror="this.src='thumbs/1366x700x2/assets/images/noimage.png';"
                        src="<?= $slide_bg ?>"
                        alt="<?= $slide['ten' . $lang] ?? 'Bún Tươi Nguyễn Bính' ?>">

                    <div class="home-hero__container fixwidth">
                        <div class="home-hero__content">
                            <div class="home-hero__content-scale">
                                <p class="home-hero__eyebrow">Tinh hoa từ hạt gạo Việt</p>
                                <h2 class="home-hero__title">Bún Tươi<span>Nguyễn Bính</span></h2>
                                <div class="home-hero__heritage sm-max:hidden">
                                    <span>Thương hiệu từ</span>
                                    <strong>1999</strong>
                                </div>
                                <div class="home-hero__description sm-max:hidden">
                                    Chuyên sản xuất và cung cấp các sản phẩm chế biến từ gạo tươi ngon, an toàn, chất lượng.
                                </div>
                                <div class="home-hero__actions">
                                    <a class="home-hero__button home-hero__button--primary" href="san-pham" title="Xem sản phẩm">
                                        <span>Xem sản phẩm</span>
                                        <i class="far fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                    <a class="home-hero__button home-hero__button--outline" href="lien-he" title="Liên hệ hợp tác">
                                        <span>Liên hệ hợp tác</span>
                                        <i class="far fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="home-hero__visual" aria-hidden="true">
                            <img class="home-hero__object home-hero__object--noodles"
                                src="assets/images/hero-2.webp" alt="">
                            <img class="home-hero__object home-hero__object--products"
                                src="assets/images/hero-1.webp" alt="">
                        </div>
                    </div>
                </article>
            <?php } } else { ?>
                <article class="item_slider home-hero__slide">
                    <img class="home-hero__background"
                        onerror="this.src='thumbs/1366x700x2/assets/images/noimage.png';"
                        src="upload/photo/slide1-edited-7871.webp"
                        alt="Bún Tươi Nguyễn Bính">

                    <div class="home-hero__container fixwidth">
                        <div class="home-hero__content">
                            <div class="home-hero__content-scale">
                                <p class="home-hero__eyebrow">Tinh hoa từ hạt gạo Việt</p>
                                <h2 class="home-hero__title">Bún Tươi<span>Nguyễn Bính</span></h2>
                                <div class="home-hero__heritage sm-max:hidden">
                                    <span>Thương hiệu từ</span>
                                    <strong>1999</strong>
                                </div>
                                <div class="home-hero__description sm-max:hidden">Chuyên sản xuất và cung cấp các sản phẩm chế biến từ gạo tươi ngon, an toàn, chất lượng.</div>
                                <div class="home-hero__actions">
                                    <a class="home-hero__button home-hero__button--primary" href="san-pham" title="Xem sản phẩm">
                                        <span>Xem sản phẩm</span>
                                        <i class="far fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                    <a class="home-hero__button home-hero__button--outline" href="lien-he" title="Liên hệ hợp tác">
                                        <span>Liên hệ hợp tác</span>
                                        <i class="far fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="home-hero__visual" aria-hidden="true">
                            <img class="home-hero__object home-hero__object--noodles"
                                src="assets/images/hero-2.webp" alt="">
                            <img class="home-hero__object home-hero__object--products"
                                src="assets/images/hero-1.webp" alt="">
                        </div>
                    </div>
                </article>
            <?php } ?>
        </div>

        <button type="button" class="control-slideshow next-slideshow transition" aria-label="Slide tiếp theo">
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
        </button>
    </div>

    <div class="home-hero__benefits">
        <img class="home-hero__benefits-bowl" src="assets/images/hero-3.webp" alt="" aria-hidden="true">
        <div class="fixwidth home-hero__benefits-grid"></div>
    </div>
</section>

<div class="wrap-home w-clear">
    <!-- VỀ CHÚNG TÔI -->
    <section class="home-about" data-home-reveal="split">
        <div class="fixwidth home-about__grid">
            <div class="home-about__content">
                <p class="home-about__eyebrow">Giới thiệu</p>
                <h2 class="home-about__title"><?= !empty($gioithieu['ten' . $lang]) ? $gioithieu['ten' . $lang] : 'NGUYỄN BÍNH' ?></h2>
                <p class="home-about__tagline">Lấy chữ Tâm để phục vụ – Lấy chữ Tín để đi lên</p>
                <div class="home-about__description">
                    <p>Thành lập từ năm 1999, Bún Tươi Nguyễn Bính là thương hiệu chuyên sản xuất các sản phẩm chế biến từ gạo như bún tươi, phở, hủ tiếu, bánh canh, phục vụ đa dạng nhu cầu ẩm thực truyền thống Việt Nam. Với nguyên liệu chính từ gạo nguyên chất, không pha trộn bột năng và hạn chế hóa chất trong sản xuất, sản phẩm của Nguyễn Bính có màu trắng tự nhiên, hương vị đặc trưng, độ dai mềm vừa phải, không dễ bở nát khi chế biến – phù hợp với các món như bún bò, bún riêu, bún mắm, bún thịt nướng, hủ tiếu và nhiều món ăn truyền thống khác. Trải qua hơn 25 năm hoạt động, công ty không ngừng đầu tư máy móc, hiện đại hóa quy trình sản xuất, đồng thời chú trọng kiểm soát chất lượng và vệ sinh an toàn thực phẩm theo đúng quy định. Nhờ đó, Nguyễn Bính đã khẳng định được uy tín trên thị trường bằng chất lượng ổn định và sự tin cậy trong cung ứng.</p>
                </div>
                <a href="gioi-thieu" class="home-about__button">
                    <span>Tìm hiểu thêm</span>
                    <i class="far fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>

            <svg class="home-about__clip-defs" width="0" height="0" aria-hidden="true" focusable="false">
                <defs>
                    <clipPath id="homeAboutMediaClip" clipPathUnits="objectBoundingBox">
                        <path d="M .18 0 H .975 Q 1 0 1 .04 V .96 Q 1 1 .97 1 H .02 Q 0 1 0 .96 C .015 .72 .065 .25 .18 0 Z" />
                    </clipPath>
                </defs>
            </svg>

            <div class="home-about__media">
                <?php
                    $gioithieu_pic = (!empty($gioithieu['photo']) && file_exists(UPLOAD_STATIC_L . $gioithieu['photo'])) 
                        ? UPLOAD_STATIC_L . $gioithieu['photo'] 
                        : (file_exists('upload/news/11-8004.png') ? 'upload/news/11-8004.png' : 'upload/photo/slide1-edited-7871.webp');
                ?>
                <img onerror="this.onerror=null;this.src='upload/photo/slide1-edited-7871.webp';"
                    src="<?= $gioithieu_pic ?>" alt="NGUYỄN BÍNH" />

                <a class="home-about__video video" data-fancybox="video" href="https://youtu.be/oQTfzdKlhnQ?si=8HHne-bQsOW1RfJV"
                    title="Xem video nhà máy"
                    aria-label="Xem video nhà máy">
                    <span class="home-about__play"><i class="fas fa-play" aria-hidden="true"></i></span>
                    <span>Xem video<br>nhà máy</span>
                </a>
                
                <div class="home-about__stats">
                    <div class="home-about__stat">
                        <span>Từ năm</span>
                        <strong>1999</strong>
                    </div>
                    <div class="home-about__stat">
                        <strong>100%</strong>
                        <span>Gạo nguyên chất</span>
                    </div>
                    <div class="home-about__stat">
                        <strong>An toàn</strong>
                        <span>Vệ sinh thực phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DANH MỤC SẢN PHẨM -->
    <section class="home-category-trial" data-home-reveal="cards">
        <div class="fixwidth">
            <div class="home-category-trial__head">
                <h2>Danh mục sản phẩm</h2>
            </div>
            <div class="home-category-trial__carousel">
                <div class="home-category-trial__grid">
                    <?php if(!empty($splistmenu) && count($splistmenu) > 0) { 
                        foreach($splistmenu as $cat) { 
                            $c_img = (!empty($cat['photo']) && file_exists(UPLOAD_PRODUCT_L . $cat['photo']))
                                ? UPLOAD_PRODUCT_L . $cat['photo']
                                : 'assets/images/noimage.png';
                    ?>
                        <a class="home-category-trial__item" href="<?= $cat['tenkhongdauvi'] ?>" title="<?= $cat['ten' . $lang] ?>">
                            <span class="home-category-trial__img">
                                <img
                                    onerror="this.src='thumbs/120x100x2/assets/images/noimage.png';"
                                    src="<?= $c_img ?>"
                                    alt="<?= $cat['ten' . $lang] ?>" />
                            </span>
                            <span class="home-category-trial__name"><?= $cat['ten' . $lang] ?></span>
                        </a>
                    <?php } } else { ?>
                        <a class="home-category-trial__item" href="bun" title="Bún Tươi">
                            <span class="home-category-trial__img">
                                <img onerror="this.src='thumbs/120x100x2/assets/images/noimage.png';" src="upload/product/bun-tuoi-4868.png" alt="Bún Tươi" />
                            </span>
                            <span class="home-category-trial__name">Bún Tươi</span>
                        </a>
                        <a class="home-category-trial__item" href="banh-pho" title="Bánh Phở">
                            <span class="home-category-trial__img">
                                <img onerror="this.src='thumbs/120x100x2/assets/images/noimage.png';" src="upload/product/chatgpt-image-100427-29-thg-7-2026-3553.png" alt="Bánh Phở" />
                            </span>
                            <span class="home-category-trial__name">Bánh Phở</span>
                        </a>
                        <a class="home-category-trial__item" href="mi-quang" title="Mì Quảng">
                            <span class="home-category-trial__img">
                                <img onerror="this.src='thumbs/120x100x2/assets/images/noimage.png';" src="upload/product/chatgpt-image-120133-29-thg-7-2026-1225.png" alt="Mì Quảng" />
                            </span>
                            <span class="home-category-trial__name">Mì Quảng</span>
                        </a>
                        <a class="home-category-trial__item" href="banh-hoi" title="Bánh Hỏi">
                            <span class="home-category-trial__img">
                                <img onerror="this.src='thumbs/120x100x2/assets/images/noimage.png';" src="upload/product/chatgpt-image-095057-29-thg-7-2026-4862.png" alt="Bánh Hỏi" />
                            </span>
                            <span class="home-category-trial__name">Bánh Hỏi</span>
                        </a>
                    <?php } ?>
                </div>
                <button class="home-category-trial__next" type="button" aria-label="Xem danh mục tiếp theo">
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                </button>
            </div>
            <a class="home-category-trial__all" href="san-pham" title="Xem tất cả sản phẩm">
                Xem tất cả sản phẩm <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>

    <!-- SẢN PHẨM NỔI BẬT -->
    <section class="relative overflow-hidden bg-[#f3f7fc] py-14 font-hanken lg-max:py-12 sm-max:py-10" data-home-reveal="cards">
        <span class="pointer-events-none absolute -left-24 top-12 h-64 w-64 rounded-full bg-[#dceafb]/60 blur-3xl" aria-hidden="true"></span>
        <span class="pointer-events-none absolute -right-20 bottom-0 h-72 w-72 rounded-full bg-white/80 blur-3xl" aria-hidden="true"></span>

        <div class="relative mx-auto w-[min(100%-32px,1366px)]">
            <div class="mb-10 text-center sm-max:mb-7">
                <div class="mx-auto max-w-[720px]">
                    <p class="mb-2 text-[12px] font-bold uppercase tracking-[0.22em] text-[#ed3237]">Tinh hoa từ hạt gạo Việt</p>
                    <h2 class="mb-0 text-[32px] font-extrabold uppercase leading-tight tracking-[-0.025em] text-[#082867] sm-max:text-[26px]">
                        Sản phẩm nổi bật
                    </h2>
                    <span class="mx-auto mt-4 flex h-[3px] w-20 overflow-hidden rounded-full" aria-hidden="true">
                        <span class="flex-1 bg-[#ed3237]"></span>
                        <span class="w-3 bg-[#082867]"></span>
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-5 md:grid-cols-4 lg-max:gap-4 sm-max:gap-2.5">
                <?php if(!empty($spnb) && count($spnb) > 0) { 
                    foreach($spnb as $sp) { 
                        $sp_img = (!empty($sp['photo']) && file_exists(UPLOAD_PRODUCT_L . $sp['photo']))
                            ? UPLOAD_PRODUCT_L . $sp['photo']
                            : 'assets/images/noimage.png';
                        $price_text = (!empty($sp['gia']) && $sp['gia'] > 0) ? number_format($sp['gia'], 0, ',', '.') . 'đ' : 'Liên hệ';
                ?>
                    <article class="group relative flex min-w-0 flex-col overflow-hidden rounded-[18px] border border-white/90 bg-white/95 shadow-[0_12px_34px_rgba(8,40,103,0.1)] transition duration-300 hover:-translate-y-1.5 hover:border-[#cddcf0] hover:shadow-[0_22px_46px_rgba(8,40,103,0.18)] sm-max:rounded-[13px]">
                        <a class="featured-product__image relative flex aspect-[4/3] items-center justify-center sm-max:aspect-square
                         overflow-hidden bg-[radial-gradient(circle_at_50%_42%,#ffffff_0%,#f4f8fc_66%,#e5edf7_100%)] 
                         p-4 sm-max:p-1.5"
                            href="<?= $sp['tenkhongdauvi'] ?>" title="<?= $sp['ten' . $lang] ?>">
                            <span class="absolute left-0 top-0 z-[1] flex h-[35px] w-[43px] flex-col items-center
                            justify-center rounded-br-[20px] bg-[#ed3237] text-white
                            shadow-[7px_8px_20px_rgba(237,50,55,0.24)] transition duration-300
                            sm-max:h-[25px] sm-max:w-[30px] sm-max:rounded-br-[15px]" aria-hidden="true">
                                <i class="fas fa-seedling text-[18px] transition duration-300 group-hover:scale-110 sm-max:text-[14px]"></i>
                            </span>
                            <img
                                class="h-full w-full object-contain transition duration-500 ease-out group-hover:scale-[1.06]"
                                onerror="this.onerror=null;this.src='thumbs/500x500x2/assets/images/noimage.png';"
                                src="<?= $sp_img ?>"
                                alt="<?= $sp['ten' . $lang] ?>" />
                            <span class="absolute inset-x-6 bottom-0 h-px origin-center scale-x-0 bg-[#ed3237] transition duration-500 group-hover:scale-x-100 sm-max:inset-x-3" aria-hidden="true"></span>
                        </a>

                        <div class="flex flex-col px-4 pb-4 pt-3 sm-max:px-2.5 sm-max:pb-2.5 sm-max:pt-2">
                            <h3 class="mb-3 line-clamp-2 min-h-9 text-[16px] font-bold leading-5
                            text-[#082867] transition duration-300 group-hover:text-[#ed3237] sm-max:mb-2
                            sm-max:min-h-9 sm-max:text-[14px] sm-max:leading-[18px]">
                                <a href="<?= $sp['tenkhongdauvi'] ?>" title="<?= $sp['ten' . $lang] ?>">
                                    <?= $sp['ten' . $lang] ?>
                                </a>
                            </h3>
                            <div class="mt-auto flex items-end justify-between gap-3 border-t border-[#e5ebf3] pt-2 sm-max:block">
                                <p class="mb-0 min-w-0 text-[12px] font-semibold leading-5 text-[#68758a] sm-max:text-[11px] sm-max:leading-4
                                sm-max:flex sm-max:items-center sm-max:justify-between sm-max:gap-1.5 sm-max:pt-1 sm-max:pb-3">
                                    <span class="block">Giá bán: </span>
                                    <strong class="block truncate text-[18px] font-extrabold tabular-nums text-[#ed3237] sm-max:text-[14px]">
                                        <?= $price_text ?>
                                    </strong>
                                </p>
                                <button class="addcart inline-flex h-9 shrink-0 items-center justify-center gap-2 rounded-[9px]
                                border-0 bg-[#ed3237] px-3 text-[11px] font-bold uppercase text-white shadow-[0_8px_18px_rgba(237,50,55,0.2)]
                                transition duration-300 hover:bg-[#082867] hover:shadow-[0_10px_22px_rgba(8,40,103,0.22)] active:scale-[0.97]
                                focus:outline-none focus-visible:ring-4 focus-visible:ring-[#ed3237]/20 sm-max:mt-1.5 sm-max:h-7 sm-max:w-full 
                                sm-max:px-2 sm-max:text-[9px]" type="button" data-action="addnow" data-id="<?= $sp['id'] ?>">
                                    Thêm giỏ hàng
                                    <i class="far fa-arrow-right text-[10px]" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </article>
                <?php } } ?>
            </div>

            <div class="mt-8 text-center sm-max:mt-6">
                <a class="inline-flex items-center gap-3 border-b border-[#082867]/25 pb-1 text-[13px] font-extrabold uppercase text-[#082867] transition duration-300 hover:gap-4 hover:border-[#ed3237] hover:text-[#ed3237] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#31568f]/20"
                    href="san-pham" title="Xem tất cả sản phẩm">
                    Xem tất cả sản phẩm
                    <i class="far fa-long-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- NĂNG LỰC SẢN XUẤT -->
    <section class="overflow-hidden bg-white pb-8 pt-12 font-hanken lg-max:pb-9 lg-max:pt-11 sm-max:pb-8 sm-max:pt-10" data-home-reveal="split">
        <div class="mx-auto grid w-[min(100%-32px,1366px)] grid-cols-[205px_minmax(0,1fr)] items-center gap-6 lg-max:grid-cols-1 lg-max:gap-7">
            <div class="relative pr-4 lg-max:pr-0">
                <h2 class="mb-0 text-[30px] font-extrabold uppercase leading-[1.35] tracking-[-0.02em] text-[#082867] sm-max:text-[25px]">
                    Năng lực<br class="lg-max:hidden"> sản xuất
                </h2>
                <span class="mt-4 flex h-[3px] w-12 overflow-hidden rounded-full" aria-hidden="true">
                    <span class="w-7 bg-[#ed3237]"></span>
                    <span class="flex-1 bg-[#c8d0df]"></span>
                </span>
                <p class="mb-0 mt-4 text-[14px] leading-6 text-[#536078]">
                    Nhà xưởng hiện đại, dây chuyền khép kín cùng đội ngũ nhân sự kinh nghiệm, đảm bảo năng lực sản xuất lớn và chất lượng đồng đều trong từng sản phẩm.
                </p>
            </div>

            <div class="relative lg-max:px-11 sm-max:px-0">
                <button class="production-capacity__prev absolute left-[-18px] top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-[#8fa3c5] bg-white text-[16px] text-[#31568f] shadow-[0_8px_20px_rgba(8,40,103,0.12)] transition hover:border-[#082867] hover:text-[#082867] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#31568f]/20 lg-max:left-0 [&.swiper-button-disabled]:pointer-events-none [&.swiper-button-disabled]:opacity-30" type="button" aria-label="Công đoạn trước">
                    <i class="far fa-chevron-left" aria-hidden="true"></i>
                </button>

                <div class="swiper production-capacity-swiper">
                    <div class="swiper-wrapper">
                        <?php 
                            $capacities = [
                                ['Kho lưu trữ gạo', 'chatgpt-image-154411-5-thg-8-2026-8150.png'],
                                ['Máy trộn bột', 'chatgpt-image-151244-29-thg-7-2026-8575.png'],
                                ['Hệ thống luộc sợi', 'chatgpt-image-152138-29-thg-7-2026-9581.png'],
                                ['Hệ thống nước RO', 'z52833268580121b9b1621c156633d1866b98d72170e45-8232.webp'],
                                ['Kiểm soát chất lượng', '17853136373217466316115759264172g887267081163203022743a17e991e9996850ed09352c83ba0e1-3712.jpg'],
                                ['Đóng gói & kho vận', 'chatgpt-image-152138-29-thg-7-2026-1067.png'],
                                ['Khu vực rửa và làm ráo bún', 'hinh-bun-nguyen-binh-134-17761319930942093195720-7638.jpg'],
                                ['Thiết bị đóng gói sản phẩm', 'may-dong-goi-bun-banh-canh-3-9313.jpg'],
                                ['Thiết bị ép và tạo sợi', 'dau-cua-may-bun-2491-5251.jpg'],
                                ['Máy xay bột', 'images-6299.jpg'],
                                ['Bồn ngâm gạo', 'img20230816152349-16922460567181329403011-3280.jpg']
                            ];
                            foreach($capacities as $cap) {
                        ?>
                            <div class="swiper-slide h-auto">
                                <article class="group relative aspect-[3/4] h-full overflow-hidden rounded-[12px] bg-[#e8edf5] shadow-[0_10px_25px_rgba(8,40,103,0.16)]">
                                    <img
                                        class="absolute inset-0 h-full w-full object-cover transition duration-700 ease-out group-hover:scale-[1.06]"
                                        onerror="this.onerror=null;this.src='thumbs/400x520x2/assets/images/noimage.png';"
                                        src="upload/news/<?= $cap[1] ?>"
                                        alt="<?= $cap[0] ?>" />
                                    <span class="absolute inset-0 bg-[#061d50]/20 transition duration-500 group-hover:bg-[#061d50]/5" aria-hidden="true"></span>
                                    <div class="absolute inset-x-0 bottom-0 flex min-h-[92px] items-end bg-gradient-to-t from-[#061d50]/95 via-[#061d50]/78 to-transparent px-4 pb-4 pt-9 text-white transition duration-500 group-hover:from-[#061d50]/82 group-hover:via-[#061d50]/55">
                                        <div class="translate-y-1 transition duration-500 ease-out group-hover:-translate-y-1">
                                            <h3 class="mb-0 line-clamp-2 text-[14px] font-extrabold uppercase leading-5"><?= $cap[0] ?></h3>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <button class="production-capacity__next absolute right-[-18px] top-1/2 z-10 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-[#8fa3c5] bg-white text-[16px] text-[#31568f] shadow-[0_8px_20px_rgba(8,40,103,0.12)] transition hover:border-[#082867] hover:text-[#082867] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#31568f]/20 lg-max:right-0 [&.swiper-button-disabled]:pointer-events-none [&.swiper-button-disabled]:opacity-30" type="button" aria-label="Công đoạn tiếp theo">
                    <i class="far fa-chevron-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- QUY TRÌNH SẢN XUẤT -->
    <section class="production-process production-process--zigzag" data-home-reveal="timeline">
        <div class="production-process__container">
            <header class="production-process__heading">
                <h2>Quy trình <span>sản xuất</span></h2>
                <span class="production-process__heading-mark" aria-hidden="true"><i></i></span>
                <p>Quy trình khép kín, hiện đại, đảm bảo vệ sinh an toàn thực phẩm</p>
            </header>

            <div class="production-process__track production-process__timeline">
                <span class="production-process__route production-process__route--top" aria-hidden="true"></span>
                <span class="production-process__route production-process__route--bottom" aria-hidden="true"></span>
                <span class="production-process__route-turn" aria-hidden="true"></span>

                <ol class="production-process__row production-process__row--top">
                    <li class="production-process__step">
                        <span class="production-process__number">01</span>
                        <span class="production-process__node">
                            <img onerror="this.onerror=null;this.src='thumbs/220x220x2/assets/images/noimage.png';"
                                src="upload/news/chatgpt-image-154411-5-thg-8-2026-6283.png" alt="Nguyên liệu" />
                        </span>
                        <span class="production-process__icon" aria-hidden="true"><i class="fas fa-seedling"></i></span>
                        <div class="production-process__copy">
                            <h3>Nguyên liệu</h3>
                            <p>Lựa chọn gạo ngon, kiểm tra chất lượng nghiêm ngặt</p>
                        </div>
                    </li>
                    <li class="production-process__step">
                        <span class="production-process__number">02</span>
                        <span class="production-process__node">
                            <img onerror="this.onerror=null;this.src='thumbs/220x220x2/assets/images/noimage.png';"
                                src="upload/news/chatgpt-image-152138-29-thg-7-2026-6046.png" alt="Ngâm gạo" />
                        </span>
                        <span class="production-process__icon" aria-hidden="true"><i class="fas fa-tint"></i></span>
                        <div class="production-process__copy">
                            <h3>Ngâm gạo</h3>
                            <p>Ngâm gạo theo thời gian tiêu chuẩn để hạt gạo mềm đều.</p>
                        </div>
                    </li>
                    <li class="production-process__step">
                        <span class="production-process__number">03</span>
                        <span class="production-process__node">
                            <img onerror="this.onerror=null;this.src='thumbs/220x220x2/assets/images/noimage.png';"
                                src="upload/news/chatgpt-image-151258-29-thg-7-2026-1288.png" alt="Xay và lọc bột" />
                        </span>
                        <span class="production-process__icon" aria-hidden="true"><i class="fas fa-filter"></i></span>
                        <div class="production-process__copy">
                            <h3>Xay và lọc bột</h3>
                            <p>Xay mịn và lọc bột, loại bỏ tạp chất, giữ độ ổn định.</p>
                        </div>
                    </li>
                    <li class="production-process__step">
                        <span class="production-process__number">04</span>
                        <span class="production-process__node">
                            <img onerror="this.onerror=null;this.src='thumbs/220x220x2/assets/images/noimage.png';"
                                src="upload/news/chatgpt-image-151244-29-thg-7-2026-7447.png" alt="Trộn bột" />
                        </span>
                        <span class="production-process__icon" aria-hidden="true"><i class="fas fa-random"></i></span>
                        <div class="production-process__copy">
                            <h3>Trộn bột</h3>
                            <p>Đưa bột qua hệ thống ép và cắt sợi đồng đều, đúng độ.</p>
                        </div>
                    </li>
                    <li class="production-process__step">
                        <span class="production-process__number">05</span>
                        <span class="production-process__node">
                            <img onerror="this.onerror=null;this.src='thumbs/220x220x2/assets/images/noimage.png';"
                                src="upload/news/chatgpt-image-151229-29-thg-7-2026-8030.png" alt="Chạy sợi" />
                        </span>
                        <span class="production-process__icon" aria-hidden="true"><i class="fas fa-wave-square"></i></span>
                        <div class="production-process__copy">
                            <h3>Chạy sợi</h3>
                            <p>Trộn bột với nước theo tỷ lệ chuẩn, đảm bảo độ dẻo dai.</p>
                        </div>
                    </li>
                </ol>

                <ol class="production-process__row production-process__row--bottom" start="6">
                    <li class="production-process__step" style="--process-column: 4;">
                        <span class="production-process__number">06</span>
                        <span class="production-process__node">
                            <img onerror="this.onerror=null;this.src='thumbs/220x220x2/assets/images/noimage.png';"
                                src="upload/news/17853124390467466316115759264172g887267081163203022734bd9ed8658d5253d083b848b91710f9-5096.jpg" alt="Luộc sợi" />
                        </span>
                        <span class="production-process__icon" aria-hidden="true"><i class="fas fa-temperature-low"></i></span>
                        <div class="production-process__copy">
                            <h3>Luộc sợi</h3>
                            <p>Luộc chín, làm nguội bằng nước sạch, đảm bảo độ tươi ngon.</p>
                        </div>
                    </li>
                    <li class="production-process__step" style="--process-column: 3;">
                        <span class="production-process__number">07</span>
                        <span class="production-process__node">
                            <img onerror="this.onerror=null;this.src='thumbs/220x220x2/assets/images/noimage.png';"
                                src="upload/news/17853124328547466316115759264172g8872670811632030227dba548b0564218788bf42166f3ba4807-4156.jpg" alt="Rửa bằng nước ro" />
                        </span>
                        <span class="production-process__icon" aria-hidden="true"><i class="fas fa-tint"></i></span>
                        <div class="production-process__copy">
                            <h3>Rửa bằng nước ro</h3>
                            <p>Đóng gói tự động, bảo quản tốt, bảo quản lâu.</p>
                        </div>
                    </li>
                    <li class="production-process__step" style="--process-column: 2;">
                        <span class="production-process__number">08</span>
                        <span class="production-process__node">
                            <img onerror="this.onerror=null;this.src='thumbs/220x220x2/assets/images/noimage.png';"
                                src="upload/news/17853124276787466316115759264172g8872670811632030227c6cadd52db130e019ce16ccfd4bee7c7-3028.jpg" alt="Làm ráo và kiểm tra" />
                        </span>
                        <span class="production-process__icon" aria-hidden="true"><i class="fas fa-shield-alt"></i></span>
                        <div class="production-process__copy">
                            <h3>Làm ráo và kiểm tra</h3>
                            <p>Đóng gói tự động, bảo quản tốt, bảo quản lâu.</p>
                        </div>
                    </li>
                    <li class="production-process__step production-process__step--final" style="--process-column: 1;">
                        <span class="production-process__number">09</span>
                        <span class="production-process__node">
                            <img onerror="this.onerror=null;this.src='thumbs/220x220x2/assets/images/noimage.png';"
                                src="upload/news/thiet-ke-chua-co-ten-1-5440-2448.png" alt="Đóng gói thành phẩm" />
                        </span>
                        <span class="production-process__icon" aria-hidden="true"><i class="fas fa-box-open"></i></span>
                        <div class="production-process__copy">
                            <h3>Đóng gói thành phẩm</h3>
                            <p>Bảo quản đúng tiêu chuẩn, giao hàng chủ động.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- HÀNH TRÌNH THƯƠNG HIỆU -->
    <section class="overflow-hidden bg-[#fbfcfe] pb-12 pt-10 font-hanken sm-max:pb-9 sm-max:pt-7" data-home-reveal="timeline">
        <div class="mx-auto w-[min(100%-32px,1440px)]">
            <div class="mb-5 text-center">
                <h2 class="mb-0 text-[30px] font-extrabold uppercase leading-tight tracking-[-0.02em] text-[#082867] sm-max:text-[24px]">
                    Hành trình thương hiệu
                </h2>
                <span class="mx-auto mt-2 block h-[3px] w-[4.5rem] bg-[#ed3237]" aria-hidden="true"></span>
            </div>

            <div class="overflow-x-auto pb-3 [scrollbar-width:thin] [scrollbar-color:#aebbd0_transparent]">
                <ol class="relative flex min-w-[1280px] items-stretch px-1 before:absolute before:left-0 before:right-0 before:top-[11px] before:h-px before:bg-[#8fa5ca]">
                    <li class="relative z-[1] flex min-w-0 flex-[1.16] flex-col items-center px-4 text-center">
                        <span class="relative flex h-[22px] w-[22px] items-center justify-center rounded-full bg-[#fbfcfe]" aria-hidden="true">
                            <span class="h-3.5 w-3.5 bg-[#123b89] rounded-full border-2 border-white shadow-[0_0_0_1px_#8fa5ca]"></span>
                        </span>
                        <h3 class="mb-0 mt-3 flex h-12 items-start justify-center text-[18px] font-extrabold uppercase leading-[1.4] text-[#082867]">
                            1999
                        </h3>
                        <p class="mb-0 mt-1 line-clamp-3 h-[66px] max-w-[190px] text-[13px] leading-[1.65] text-[#536078]">
                            Khởi nguồn từ cơ sở sản xuất bún tươi thủ công tại Thủ Đức.
                        </p>
                        <span class="mt-3 block h-[82px] w-[164px] rounded-[8px] overflow-hidden bg-[#e7ebf2] shadow-[0_8px_20px_rgba(8,40,103,0.1)]">
                            <img class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                onerror="this.onerror=null;this.src='thumbs/200x100x2/assets/images/noimage.png';"
                                src="upload/news/178592000352134840860018579134483484086001857913448b6976d01c92b07091e41663e7066a5c8-8015.jpg"
                                alt="1999" />
                        </span>
                    </li>

                    <li class="relative z-[1] flex min-w-0 flex-1 flex-col items-center px-4 text-center">
                        <span class="relative flex h-[20px] w-[20px] items-center justify-center rounded-full bg-[#fbfcfe]" aria-hidden="true">
                            <span class="h-3 w-3 bg-[#123b89] rounded-full border-2 border-white shadow-[0_0_0_1px_#8fa5ca]"></span>
                        </span>
                        <h3 class="mb-0 mt-3 flex h-12 items-start justify-center text-[15px] font-extrabold uppercase leading-[1.4] text-[#082867]">
                            2006
                        </h3>
                        <p class="mb-0 mt-1 line-clamp-3 h-[66px] max-w-[190px] text-[13px] leading-[1.65] text-[#536078]">
                            Đầu tư máy móc, mở rộng quy mô sản xuất.
                        </p>
                        <span class="mt-3 block h-[66px] w-[142px] rounded-[5px] overflow-hidden bg-[#e7ebf2] shadow-[0_8px_20px_rgba(8,40,103,0.1)]">
                            <img class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                onerror="this.onerror=null;this.src='thumbs/200x100x2/assets/images/noimage.png';"
                                src="upload/news/chatgpt-image-154411-5-thg-8-2026-6670.png"
                                alt="2006" />
                        </span>
                    </li>

                    <li class="relative z-[1] flex min-w-0 flex-1 flex-col items-center px-4 text-center">
                        <span class="relative flex h-[20px] w-[20px] items-center justify-center rounded-full bg-[#fbfcfe]" aria-hidden="true">
                            <span class="h-3 w-3 bg-[#123b89] rounded-full border-2 border-white shadow-[0_0_0_1px_#8fa5ca]"></span>
                        </span>
                        <h3 class="mb-0 mt-3 flex h-12 items-start justify-center text-[15px] font-extrabold uppercase leading-[1.4] text-[#082867]">
                            2008
                        </h3>
                        <p class="mb-0 mt-1 line-clamp-3 h-[66px] max-w-[190px] text-[13px] leading-[1.65] text-[#536078]">
                            Đa dạng hóa sản phẩm, nâng cao chất lượng và dịch vụ.
                        </p>
                        <span class="mt-3 block h-[66px] w-[142px] rounded-[5px] overflow-hidden bg-[#e7ebf2] shadow-[0_8px_20px_rgba(8,40,103,0.1)]">
                            <img class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                onerror="this.onerror=null;this.src='thumbs/200x100x2/assets/images/noimage.png';"
                                src="upload/news/17853136417927466316115759264172g887267081163203022764b82686a5b7812f010f5c0383fcee50-3174.jpg"
                                alt="2008" />
                        </span>
                    </li>

                    <li class="relative z-[1] flex min-w-0 flex-1 flex-col items-center px-4 text-center">
                        <span class="relative flex h-[20px] w-[20px] items-center justify-center rounded-full bg-[#fbfcfe]" aria-hidden="true">
                            <span class="h-3 w-3 bg-[#123b89] rounded-full border-2 border-white shadow-[0_0_0_1px_#8fa5ca]"></span>
                        </span>
                        <h3 class="mb-0 mt-3 flex h-12 items-start justify-center text-[15px] font-extrabold uppercase leading-[1.4] text-[#082867]">
                            PHÁT TRIỂN
                        </h3>
                        <p class="mb-0 mt-1 line-clamp-3 h-[66px] max-w-[190px] text-[13px] leading-[1.65] text-[#536078]">
                            Mở rộng hệ thống phân phối, phục vụ khắp các tỉnh thành.
                        </p>
                        <span class="mt-3 block h-[66px] w-[142px] rounded-[5px] overflow-hidden bg-[#e7ebf2] shadow-[0_8px_20px_rgba(8,40,103,0.1)]">
                            <img class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                onerror="this.onerror=null;this.src='thumbs/200x100x2/assets/images/noimage.png';"
                                src="upload/news/chatgpt-image-165248-29-thg-7-2026-4616.png"
                                alt="PHÁT TRIỂN" />
                        </span>
                    </li>

                    <li class="relative z-[1] flex min-w-0 flex-1 flex-col items-center px-4 text-center">
                        <span class="relative flex h-[20px] w-[20px] items-center justify-center rounded-full bg-[#fbfcfe]" aria-hidden="true">
                            <span class="h-3 w-3 bg-[#123b89] rounded-full border-2 border-white shadow-[0_0_0_1px_#8fa5ca]"></span>
                        </span>
                        <h3 class="mb-0 mt-3 flex h-12 items-start justify-center text-[15px] font-extrabold uppercase leading-[1.4] text-[#082867]">
                            MỞ RỘNG THỊ TRƯỜNG
                        </h3>
                        <p class="mb-0 mt-1 line-clamp-3 h-[66px] max-w-[190px] text-[13px] leading-[1.65] text-[#536078]">
                            Hợp tác với nhiều đối tác lớn trong và ngoài nước.
                        </p>
                        <span class="mt-3 block h-[66px] w-[142px] rounded-[5px] overflow-hidden bg-[#e7ebf2] shadow-[0_8px_20px_rgba(8,40,103,0.1)]">
                            <img class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                onerror="this.onerror=null;this.src='thumbs/200x100x2/assets/images/noimage.png';"
                                src="upload/news/chatgpt-image-153625-29-thg-7-2026-9812.png"
                                alt="MỞ RỘNG THỊ TRƯỜNG" />
                        </span>
                    </li>

                    <li class="relative z-[1] flex min-w-0 flex-[1.28] flex-col items-center px-4 text-center">
                        <span class="relative flex h-[24px] w-[24px] items-center justify-center rounded-full bg-[#fbfcfe]" aria-hidden="true">
                            <span class="h-4 w-4 bg-[#ed3237] rounded-full border-2 border-white shadow-[0_0_0_1px_#8fa5ca]"></span>
                        </span>
                        <h3 class="mb-0 mt-3 flex h-12 items-start justify-center text-[18px] font-extrabold uppercase leading-[1.4] text-[#d92532]">
                            SHARK TANK VIỆT NAM
                        </h3>
                        <p class="mb-0 mt-1 line-clamp-3 h-[66px] max-w-[190px] text-[13px] leading-[1.65] text-[#536078]">
                            Tham gia Shark Tank, khẳng định uy tín thương hiệu.
                        </p>
                        <span class="mt-3 block h-[96px] w-[190px] rounded-[10px] overflow-hidden bg-[#e7ebf2] shadow-[0_8px_20px_rgba(8,40,103,0.1)]">
                            <img class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                onerror="this.onerror=null;this.src='thumbs/200x100x2/assets/images/noimage.png';"
                                src="upload/news/shark-tank-5076.jpg"
                                alt="SHARK TANK VIỆT NAM" />
                        </span>
                    </li>

                    <li class="relative z-[1] flex min-w-0 flex-1 flex-col items-center px-4 text-center">
                        <span class="relative flex h-[20px] w-[20px] items-center justify-center rounded-full bg-[#fbfcfe]" aria-hidden="true">
                            <span class="h-3 w-3 bg-[#123b89] rounded-full border-2 border-white shadow-[0_0_0_1px_#8fa5ca]"></span>
                        </span>
                        <h3 class="mb-0 mt-3 flex h-12 items-start justify-center text-[15px] font-extrabold uppercase leading-[1.4] text-[#082867]">
                            HIỆN NAY
                        </h3>
                        <p class="mb-0 mt-1 line-clamp-3 h-[66px] max-w-[190px] text-[13px] leading-[1.65] text-[#536078]">
                            Không ngừng đổi mới, nâng cao năng lực, phục vụ tốt hơn mỗi ngày.
                        </p>
                        <span class="mt-3 block h-[66px] w-[142px] rounded-[5px] overflow-hidden bg-[#e7ebf2] shadow-[0_8px_20px_rgba(8,40,103,0.1)]">
                            <img class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                onerror="this.onerror=null;this.src='thumbs/200x100x2/assets/images/noimage.png';"
                                src="upload/news/59077413913810272073672105473286868664564245n-7742.jpg"
                                alt="HIỆN NAY" />
                        </span>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- HOẠT ĐỘNG SỰ KIỆN NGUYỄN BÍNH -->
    <section class="bg-white py-12 font-hanken lg-max:py-10 sm-max:py-8" data-home-reveal="gallery">
        <div class="mx-auto w-[min(100%-32px,1440px)]">
            <div class="mb-8 text-center sm-max:mb-6">
                <h2 class="mb-0 text-[32px] font-extrabold uppercase leading-tight tracking-[-0.02em] text-[#082867] md-max:text-[26px] sm-max:text-[22px]">
                    HOẠT ĐỘNG SỰ KIỆN NGUYỄN BÍNH
                </h2>
                <span class="mx-auto mt-3 flex h-[3px] w-16 overflow-hidden rounded-full" aria-hidden="true">
                    <span class="w-8 bg-[#ed3237]"></span>
                    <span class="flex-1 bg-[#082867]"></span>
                </span>
            </div>

            <style>
                .nb-events-wrapper {
                    display: flex;
                    gap: 20px;
                    height: 510px;
                    width: 100%;
                }
                .nb-events-left {
                    flex: 1.48;
                    height: 100%;
                    min-width: 0;
                }
                .nb-events-right {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                    height: 100%;
                    min-width: 0;
                }
                .nb-event-card {
                    position: relative;
                    display: block;
                    width: 100%;
                    overflow: hidden;
                    border-radius: 20px;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
                    background-color: #f1f5f9;
                    text-decoration: none;
                }
                .nb-events-left .nb-event-card {
                    height: 100%;
                }
                .nb-events-right .nb-event-card {
                    height: calc(50% - 10px);
                }
                .nb-event-card img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    display: block;
                    transition: transform 0.6s ease;
                }
                .nb-event-card:hover img {
                    transform: scale(1.05);
                }
                .nb-event-card .nb-event-overlay {
                    position: absolute;
                    inset: 0;
                    background: linear-gradient(to top, rgba(0, 0, 0, 0.88) 0%, rgba(0, 0, 0, 0.35) 45%, rgba(0, 0, 0, 0) 80%);
                    pointer-events: none;
                }
                .nb-event-card .nb-event-title {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    padding: 24px;
                    color: #ffffff;
                    font-weight: 700;
                    font-size: 18px;
                    line-height: 1.4;
                    text-shadow: 0 1px 4px rgba(0, 0, 0, 0.7);
                    transition: color 0.3s ease;
                }
                .nb-events-right .nb-event-title {
                    font-size: 15px;
                    padding: 16px 20px;
                    line-height: 1.4;
                }
                .nb-event-card:hover .nb-event-title {
                    color: #ffd8d8;
                }
                @media (max-width: 991px) {
                    .nb-events-wrapper {
                        flex-direction: column;
                        height: auto;
                        gap: 16px;
                    }
                    .nb-events-left {
                        height: 340px;
                    }
                    .nb-events-right {
                        height: auto;
                        gap: 16px;
                    }
                    .nb-events-right .nb-event-card {
                        height: 200px;
                    }
                }
            </style>

            <div class="nb-events-wrapper">
                <div class="nb-events-left">
                    <?php 
                        $n_main = !empty($newsnb[0]) ? $newsnb[0] : null;
                        $n_main_img = (!empty($n_main['photo']) && file_exists(UPLOAD_NEWS_L . $n_main['photo'])) 
                            ? UPLOAD_NEWS_L . $n_main['photo'] 
                            : (file_exists('upload/news/doanh-nhan-nguyen-thi-binh-tu-hao-noi-nghiep-nghe-to1518857854-8916.jpg') ? 'upload/news/doanh-nhan-nguyen-thi-binh-tu-hao-noi-nghiep-nghe-to1518857854-8916.jpg' : 'assets/images/noimage.png');
                        $n_main_title = !empty($n_main['ten' . $lang]) ? $n_main['ten' . $lang] : 'Doanh Nhân Nguyễn Thị Bính: Tự Hào Nối Nghiệp Nghề Tổ Bún Sạch Việt Nam';
                        $n_main_url = !empty($n_main['tenkhongdauvi']) ? $n_main['tenkhongdauvi'] : 'doanh-nhan-nguyen-thi-binh-tu-hao-noi-nghiep-nghe-to-bun-sach-viet-nam';
                    ?>
                    <a class="nb-event-card" href="<?= $n_main_url ?>" title="<?= $n_main_title ?>">
                        <img src="<?= $n_main_img ?>" alt="<?= $n_main_title ?>" onerror="this.src='thumbs/800x520x2/assets/images/noimage.png';" />
                        <span class="nb-event-overlay"></span>
                        <span class="nb-event-title"><?= $n_main_title ?></span>
                    </a>
                </div>

                <div class="nb-events-right">
                    <?php 
                        // Item 2
                        $n_sub1 = !empty($newsnb[1]) ? $newsnb[1] : null;
                        $n_sub1_img = (!empty($n_sub1['photo']) && file_exists(UPLOAD_NEWS_L . $n_sub1['photo'])) 
                            ? UPLOAD_NEWS_L . $n_sub1['photo'] 
                            : (file_exists('upload/news/1631756121713-1631085786958-thiet-ke-khong-ten-2021-09-08t002253248-6153.png') ? 'upload/news/1631756121713-1631085786958-thiet-ke-khong-ten-2021-09-08t002253248-6153.png' : 'assets/images/noimage.png');
                        $n_sub1_title = !empty($n_sub1['ten' . $lang]) ? $n_sub1['ten' . $lang] : 'Doanh nhân Nguyễn Thị Bính: Tiên phong đưa bún tươi Việt Nam xuất ngoại';
                        $n_sub1_url = !empty($n_sub1['tenkhongdauvi']) ? $n_sub1['tenkhongdauvi'] : 'doanh-nhan-nguyen-thi-binh-tien-phong-dua-bun-tuoi-viet-nam-xuat-ngoai';

                        // Item 3
                        $n_sub2 = !empty($newsnb[2]) ? $newsnb[2] : null;
                        $n_sub2_img = (!empty($n_sub2['photo']) && file_exists(UPLOAD_NEWS_L . $n_sub2['photo'])) 
                            ? UPLOAD_NEWS_L . $n_sub2['photo'] 
                            : (file_exists('upload/news/shark-tank-5076.jpg') ? 'upload/news/shark-tank-5076.jpg' : 'assets/images/noimage.png');
                        $n_sub2_title = !empty($n_sub2['ten' . $lang]) ? $n_sub2['ten' . $lang] : 'Bà Nguyễn Thị Bính tham gia chương trình SHARK TANK mùa 2 với màn gọi vốn 8 triệu đô';
                        $n_sub2_url = !empty($n_sub2['tenkhongdauvi']) ? $n_sub2['tenkhongdauvi'] : 'ba-nguyen-thi-binh-tham-gia-chuong-trinh-shark-tank-mua-2-voi-man-goi-von-8-trieu-do';
                    ?>
                    <a class="nb-event-card" href="<?= $n_sub1_url ?>" title="<?= $n_sub1_title ?>">
                        <img src="<?= $n_sub1_img ?>" alt="<?= $n_sub1_title ?>" onerror="this.src='thumbs/800x520x2/assets/images/noimage.png';" />
                        <span class="nb-event-overlay"></span>
                        <span class="nb-event-title"><?= $n_sub1_title ?></span>
                    </a>
                    <a class="nb-event-card" href="<?= $n_sub2_url ?>" title="<?= $n_sub2_title ?>">
                        <img src="<?= $n_sub2_img ?>" alt="<?= $n_sub2_title ?>" onerror="this.src='thumbs/800x520x2/assets/images/noimage.png';" />
                        <span class="nb-event-overlay"></span>
                        <span class="nb-event-title"><?= $n_sub2_title ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CHỨNG NHẬN & ĐỐI TÁC -->
    <section class="overflow-hidden bg-[#eef5fb] py-8 font-hanken lg-max:py-8 sm-max:py-7" data-home-reveal="split">
        <div class="mx-auto grid w-[min(100%-32px,1440px)] grid-cols-[1.05fr_0.95fr] gap-7 lg-max:grid-cols-1 lg-max:gap-8">
            <div class="grid min-w-0 grid-cols-[180px_minmax(0,1fr)] gap-6 border-r border-[#cbd5e4] pr-8 lg-max:border-b lg-max:pb-9 lg-max:grid-cols-1 lg-max:border-r-0 lg-max:pr-0">
                <div class="flex flex-col justify-center">
                    <h2 class="mb-0 text-[24px] font-extrabold uppercase leading-[1.4] tracking-[-0.02em] text-[#082867] sm-max:text-[23px]">
                        Chứng nhận<br class="lg-max:hidden"> & Thành tích
                    </h2>
                    <span class="mt-5 flex h-[3px] w-14 overflow-hidden rounded-full" aria-hidden="true">
                        <span class="w-8 bg-[#ed3237]"></span>
                        <span class="flex-1 bg-[#c8d0df]"></span>
                    </span>
                </div>

                <div class="certificate-marquee min-w-0 pb-2">
                    <div class="certificate-marquee__track flex w-max gap-3">
                        <div class="certificate-marquee__group flex shrink-0 gap-3">
                            <article class="w-[112px] shrink-0 text-center">
                                <span class="flex h-[142px] w-full items-center justify-center overflow-hidden rounded-[4px] bg-white p-1.5 shadow-[0_7px_18px_rgba(8,40,103,0.12)]">
                                    <img class="max-h-full max-w-full object-contain"
                                        onerror="this.onerror=null;this.src='thumbs/160x220x2/assets/images/noimage.png';"
                                        src="upload/photo/10-91090.png"
                                        alt="Giấy chứng nhận Đăng ký doanh nghiệp" />
                                </span>
                                <h3 class="mb-0 mt-3 line-clamp-2 text-[11px] font-semibold leading-[1.55] text-[#274675]">
                                    Giấy chứng nhận Đăng ký doanh nghiệp
                                </h3>
                            </article>
                            <article class="w-[112px] shrink-0 text-center">
                                <span class="flex h-[142px] w-full items-center justify-center overflow-hidden rounded-[4px] bg-white p-1.5 shadow-[0_7px_18px_rgba(8,40,103,0.12)]">
                                    <img class="max-h-full max-w-full object-contain"
                                        onerror="this.onerror=null;this.src='thumbs/160x220x2/assets/images/noimage.png';"
                                        src="upload/photo/12-94220.png"
                                        alt="Giấy chứng nhận Nhãn hiệu" />
                                </span>
                                <h3 class="mb-0 mt-3 line-clamp-2 text-[11px] font-semibold leading-[1.55] text-[#274675]">
                                    Giấy chứng nhận Nhãn hiệu
                                </h3>
                            </article>
                            <article class="w-[112px] shrink-0 text-center">
                                <span class="flex h-[142px] w-full items-center justify-center overflow-hidden rounded-[4px] bg-white p-1.5 shadow-[0_7px_18px_rgba(8,40,103,0.12)]">
                                    <img class="max-h-full max-w-full object-contain"
                                        onerror="this.onerror=null;this.src='thumbs/160x220x2/assets/images/noimage.png';"
                                        src="upload/photo/2-11470.jpg"
                                        alt="Giấy chứng nhận ATTP" />
                                </span>
                                <h3 class="mb-0 mt-3 line-clamp-2 text-[11px] font-semibold leading-[1.55] text-[#274675]">
                                    Giấy chứng nhận ATTP
                                </h3>
                            </article>
                            <article class="w-[112px] shrink-0 text-center">
                                <span class="flex h-[142px] w-full items-center justify-center overflow-hidden rounded-[4px] bg-white p-1.5 shadow-[0_7px_18px_rgba(8,40,103,0.12)]">
                                    <img class="max-h-full max-w-full object-contain"
                                        onerror="this.onerror=null;this.src='thumbs/160x220x2/assets/images/noimage.png';"
                                        src="upload/photo/3-32930.jpg"
                                        alt="Giấy chứng nhận HACCP Codex" />
                                </span>
                                <h3 class="mb-0 mt-3 line-clamp-2 text-[11px] font-semibold leading-[1.55] text-[#274675]">
                                    Giấy chứng nhận HACCP Codex
                                </h3>
                            </article>
                            <article class="w-[112px] shrink-0 text-center">
                                <span class="flex h-[142px] w-full items-center justify-center overflow-hidden rounded-[4px] bg-white p-1.5 shadow-[0_7px_18px_rgba(8,40,103,0.12)]">
                                    <img class="max-h-full max-w-full object-contain"
                                        onerror="this.onerror=null;this.src='thumbs/160x220x2/assets/images/noimage.png';"
                                        src="upload/photo/5-71780.jpg"
                                        alt="Top 10 Thương hiệu Uy tín – Chất lượng" />
                                </span>
                                <h3 class="mb-0 mt-3 line-clamp-2 text-[11px] font-semibold leading-[1.55] text-[#274675]">
                                    Top 10 Thương hiệu Uy tín – Chất lượng
                                </h3>
                            </article>
                        </div>
                    </div>
                </div>
            </div>

            <div class="min-w-0">
                <h2 class="mb-5 text-[24px] font-extrabold uppercase leading-tight tracking-[-0.02em] text-[#082867] sm-max:text-[20px]">
                    Khách hàng & Đối tác
                </h2>
                <div class="home-partner-grid grid grid-cols-4 gap-2.5 md-max:grid-cols-3 sm-max:grid-cols-2">
                    <?php 
                        $partners = [
                            'logo3-23400.png',
                            'logo-1-19230.png',
                            'logo3-91600.png',
                            'logo2-25460.jpg',
                            'logo3-63300.png',
                            'logo2-88000.jpg',
                            'logo-1-50560.png',
                            'logo2-26760.jpg'
                        ];
                        foreach($partners as $ptn) {
                    ?>
                        <span class="group flex h-[66px] items-center justify-center overflow-hidden rounded-[7px] bg-white p-2.5 shadow-[0_6px_18px_rgba(8,40,103,0.07)] transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_10px_24px_rgba(8,40,103,0.13)]">
                            <img class="max-h-full max-w-full object-contain transition duration-300 group-hover:scale-105"
                                onerror="this.onerror=null;this.src='thumbs/160x80x2/assets/images/noimage.png';"
                                src="upload/photo/<?= $ptn ?>"
                                alt="Đối tác Bún Tươi Nguyễn Bính" />
                        </span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>