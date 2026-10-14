<?php
    $email_display = !empty($optsetting['email']) ? $optsetting['email'] : 'bunthuducnguyenbinh@gmail.com';
    $diachi_display = !empty($optsetting['diachi']) ? $optsetting['diachi'] : '18/23 Huỳnh Văn Nghệ, Phường Tân Sơn, TP. Hồ Chí Minh';
    $hotline_display = !empty($optsetting['hotline']) ? $optsetting['hotline'] : (!empty($optsetting['dienthoai']) ? $optsetting['dienthoai'] : '0984 050 679');
    $company_name = !empty($setting['ten' . $lang]) ? $setting['ten' . $lang] : 'Bún Tươi Nguyễn Bính - Thương hiệu từ bún Thủ Đức chính gốc';
    
    // Dynamic Logo
    $logo_img = '';
    if (!empty($logo['photo']) && file_exists(UPLOAD_PHOTO_L . $logo['photo'])) {
        $logo_img = UPLOAD_PHOTO_L . $logo['photo'];
    } elseif (file_exists('upload/photo/logo-9379.png')) {
        $logo_img = 'upload/photo/logo-9379.png';
    } else {
        $logo_img = 'assets/images/logo.png';
    }
    $logo_alt = $company_name;

    // Cart count
    $cart_count = 0;
    if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        $cart_count = count($_SESSION['cart']);
    }
?>

<div class="header-type-1">
    <div class="header-cachtop header-type-1__mobile">
        <div class="header-top">
            <div class="fixwidth d-flex justify-content-between align-items-center flex-wrap">
                <div class="menu_mobi align-self-center">
                    <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                    <a href="./" class="home_mobi"><i class="fa fa-home" aria-hidden="true"></i></a>
                </div>
                <div class="header_left_mobile align-self-center">
                    <a class="header_logo" href="./" title="<?= $company_name ?>">
                        <img onerror="this.src='assets/images/noimage.png';"
                            src="<?= $logo_img ?>" alt="<?= $logo_alt ?>">
                    </a>
                </div>
                <div class="menu_mobi_add">
                    <div class="mobile-sidebar-header">
                        <a class="mobile-sidebar-logo" href="./" title="<?= $company_name ?>">
                            <img onerror="this.src='assets/images/noimage.png';"
                                src="<?= $logo_img ?>" alt="<?= $logo_alt ?>">
                        </a>
                        <button type="button" class="close_menu" aria-label="Đóng menu">
                            <i class="fas fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="mobile-menu-list"></div>
                    <div class="mobile-sidebar-contact">
                        <div class="mobile-sidebar-contact__title">Thông tin liên hệ</div>
                        <div class="mobile-sidebar-contact__item">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <span><?= $diachi_display ?></span>
                        </div>
                        <a class="mobile-sidebar-contact__item" href="tel:<?= preg_replace('/[^0-9]/', '', $hotline_display) ?>">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i>
                            <span><?= $hotline_display ?></span>
                        </a>
                        <a class="mobile-sidebar-contact__item" href="mailto:<?= $email_display ?>">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <span><?= $email_display ?></span>
                        </a>
                    </div>
                </div>
                <div class="menu_baophu"></div>
                <div class="header-type-1__mobile-actions align-self-center">
                    <a class="header-type-1__cart header-type-1__cart--mobile" href="gio-hang" title="Giỏ hàng" aria-label="Giỏ hàng">
                        <span class="header-type-1__cart-icon">
                            <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                            <span class="count-cart"><?= $cart_count ?></span>
                        </span>
                    </a>
                    <div class="menu_mobi align-self-center">
                        <p class="icon_menu_mobi1 open_search"><i class="fas fa-search"></i></p>
                        <p class="icon_menu_mobi1 close_search"><i class="fas fa-times"></i></p>
                    </div>
                </div>
                <div class="frm_timkiem frmtim1">
                    <input type="text" class="input" id="keyword2345" placeholder="Tìm kiếm ..."
                        onkeypress="doEnter(event,'keyword2345');">
                    <button type="submit" class="nut_tim" onclick="onSearch('keyword2345');">
                        <i class="far fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="header-height header-type-1__height">
        <div id="menu_top" class="header-type-1__menu-top">
            <div class="fixwidth header-type-1__inner">
                <a class="header-type-1__logo" href="./" title="<?= $company_name ?>">
                    <img onerror="this.src='assets/images/noimage.png';"
                        src="<?= $logo_img ?>" alt="<?= $logo_alt ?>">
                </a>
                <div class="menu header-type-1__menu">
                    <ul class="menu_cap_cha d-flex">
                        <li class="menulicha trangchu <?= ($source == 'index' || empty($com)) ? 'active' : '' ?>">
                            <a href="./" title="Trang chủ">Trang chủ</a>
                        </li>
                        <li class="menulicha <?= ($com == 'gioi-thieu') ? 'active' : '' ?>">
                            <a href="gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                        </li>
                        <li class="menulicha <?= ($com == 'san-pham') ? 'active' : '' ?>">
                            <a href="san-pham" title="Sản phẩm">Sản phẩm <i class="far fa-chevron-down header-type-1__submenu-icon" aria-hidden="true"></i></a>
                            <?php if(!empty($splistmenu)) { ?>
                            <ul class="menu_cap_con">
                                <?php foreach($splistmenu as $spcat) { ?>
                                <li>
                                    <a href="<?= $spcat['tenkhongdauvi'] ?>" title="<?= $spcat['ten' . $lang] ?>">
                                        <?= $spcat['ten' . $lang] ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <li class="menulicha <?= ($com == 'dich-vu') ? 'active' : '' ?>">
                            <a href="dich-vu" title="Dịch vụ">Dịch vụ <i class="far fa-chevron-down header-type-1__submenu-icon" aria-hidden="true"></i></a>
                            <?php if(!empty($dv_listmenu)) { ?>
                            <ul class="menu_cap_con">
                                <?php foreach($dv_listmenu as $dvcat) { ?>
                                <li>
                                    <a href="<?= $dvcat['tenkhongdauvi'] ?>" title="<?= $dvcat['ten' . $lang] ?>">
                                        <?= $dvcat['ten' . $lang] ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <li class="menulicha <?= ($com == 'tuyen-dung') ? 'active' : '' ?>">
                            <a href="tuyen-dung" title="Tuyển dụng">Tuyển dụng</a>
                        </li>
                        <li class="menulicha <?= ($com == 'tin-tuc') ? 'active' : '' ?>">
                            <a href="tin-tuc" title="Tin tức">Tin tức</a>
                        </li>
                        <li class="menulicha <?= ($com == 'lien-he') ? 'active' : '' ?>">
                            <a href="lien-he" title="Liên hệ">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <a class="header-type-1__cart" href="gio-hang" title="Giỏ hàng" aria-label="Giỏ hàng">
                    <span class="header-type-1__cart-icon">
                        <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                        <span class="count-cart"><?= $cart_count ?></span>
                    </span>
                </a>
                <a class="header-type-1__hotline" href="tel:<?= preg_replace('/[^0-9]/', '', $hotline_display) ?>"
                    title="Gọi <?= $hotline_display ?>">
                    <span class="header-type-1__hotline-icon"><i class="fas fa-phone-alt" aria-hidden="true"></i></span>
                    <strong><?= $hotline_display ?></strong>
                </a>
            </div>
        </div>
    </div>
</div>