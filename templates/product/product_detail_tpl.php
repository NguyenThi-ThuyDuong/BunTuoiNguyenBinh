<?php
    $pro_img = (!empty($row_detail['photo']) && file_exists(UPLOAD_PRODUCT_L . $row_detail['photo']))
        ? 'thumbs/760x760x2/' . UPLOAD_PRODUCT_L . $row_detail['photo']
        : 'assets/images/noimage.png';
    $pro_price = !empty($row_detail['giamoi']) ? $row_detail['giamoi'] : $row_detail['gia'];
    $company_hotline = !empty($optsetting['hotline']) ? $optsetting['hotline'] : '0984050679';
    $company_zalo = !empty($optsetting['zalo']) ? $optsetting['zalo'] : '0369050679';
    $ten_danhmuc = !empty($pro_list['ten' . $lang]) ? $pro_list['ten' . $lang] : 'Bún Tươi';
    $luotxem_sp = !empty($row_detail['luotxem']) ? $row_detail['luotxem'] : 16;
    $masp_val = !empty($row_detail['masp']) ? $row_detail['masp'] : 'Đang cập nhật';
?>

<div class="clearfix product-detail-page">
    <div class="wrap_left_detail d-none">
        <div class="title-left-detail">DANH MỤC SẢN PHẨM</div>
        <div class="catagory-list-detail">
            <ul>
                <li><a title="Bún Tươi" href="bun"><img src="assets/images/img-data/list.png"> Bún Tươi</a></li>
                <li><a title="Bánh Phở" href="banh-pho"><img src="assets/images/img-data/list.png"> Bánh Phở</a></li>
                <li><a title="Mì Quảng" href="mi-quang"><img src="assets/images/img-data/list.png"> Mì Quảng</a></li>
                <li><a title="Bánh Hỏi" href="banh-hoi"><img src="assets/images/img-data/list.png"> Bánh Hỏi</a></li>
                <li><a title="Bánh Canh" href="banh-canh"><img src="assets/images/img-data/list.png"> Bánh Canh</a></li>
                <li><a title="Hủ Tiếu" href="hu-tieu"><img src="assets/images/img-data/list.png"> Hủ Tiếu</a></li>
                <li><a title="Bánh Ướt" href="banh-uot"><img src="assets/images/img-data/list.png"> Bánh Ướt</a></li>
                <li><a title="Nui" href="nui"><img src="assets/images/img-data/list.png"> Nui</a></li>
            </ul>
        </div>
    </div>
    <div class="wrap_right_detail w-100">
        <div class="grid-pro-detail w-clear product-detail-layout">
            <div class="left-pro-detail w-clear">
                <div class="product-detail-gallery">
                    <div class="gallery-thumb-pro">
                        <a class="thumb-pro-detail mz-thumb-selected" data-zoom-id="Zoom-1"
                            href="<?= $pro_img ?>"
                            title="<?= $row_detail['ten' . $lang] ?>">
                            <img onerror="this.onerror=null;this.src='thumbs/760x760x2/assets/images/noimage.png';"
                                src="<?= $pro_img ?>"
                                alt="<?= $row_detail['ten' . $lang] ?>">
                        </a>
                        <?php if (!empty($hinhanhsp)) { foreach ($hinhanhsp as $v) { 
                            $thumb_child = 'thumbs/760x760x2/' . UPLOAD_PRODUCT_L . $v['photo'];
                        ?>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                            href="<?= $thumb_child ?>"
                            title="<?= $row_detail['ten' . $lang] ?>">
                            <img onerror="this.onerror=null;this.src='thumbs/760x760x2/assets/images/noimage.png';"
                                src="<?= $thumb_child ?>"
                                alt="<?= $row_detail['ten' . $lang] ?>">
                        </a>
                        <?php } } ?>
                    </div>
                    <a id="Zoom-1" class="MagicZoom product-detail-main-image"
                        data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;"
                        href="<?= $pro_img ?>"
                        title="<?= $row_detail['ten' . $lang] ?>">
                        <img onerror="this.onerror=null;this.src='thumbs/760x760x2/assets/images/noimage.png';"
                            src="<?= $pro_img ?>"
                            alt="<?= $row_detail['ten' . $lang] ?>">
                    </a>
                </div>
            </div>
            <div class="right-pro-detail w-clear">
                <span class="product-detail-category">
                    <?= $ten_danhmuc ?>
                </span>
                <p class="title-pro-detail"><?= $row_detail['ten' . $lang] ?></p>
                <div class="product-detail-rating" aria-label="Đánh giá 5 trên 5">
                    <span class="product-detail-stars" aria-hidden="true">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </span>
                    <strong>5</strong>
                    <span>(0 đánh giá)</span>
                </div>
                <div class="social-plugin social-plugin-pro-detail w-clear">
                    <div class="website_share d-flex align-items-center pr-2">
                        <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>"
                            data-oaid="579745863508352884"
                            data-layout="1" data-color="blue" data-customize=true>
                            <img width="20" height="20" src="../../assets/images/zalo1.png">
                            <span style="color: #fff; font-size: 11px; font-weight: 500;letter-spacing: 0.5px">Share</span>
                        </div>
                    </div>
                    <div class="sharethis-inline-share-buttons"></div>
                </div>

                <div class="product-detail-meta">
                    <div><span>Mã sản phẩm</span><strong><?= $masp_val ?></strong></div>
                    <div><span>Thương hiệu</span><strong>Nguyễn Bính</strong></div>
                    <div><span>Lượt xem</span><strong><?= $luotxem_sp ?></strong></div>
                </div>

                <ul class="attr-pro-detail">
                    <li class="w-clear product-detail-price-row">
                        <label class="attr-label-pro-detail">Giá bán:</label>
                        <div class="attr-content-pro-detail">
                            <span class="price-new-pro-detail"><?= $func->format_money($pro_price) ?></span>
                        </div>
                        <div class="product-detail-stock">
                            <strong><i class="fas fa-check-circle"></i> Còn hàng</strong>
                            <span>Sẵn sàng giao ngay</span>
                        </div>
                    </li>

                    <li class="product-detail-purchase w-clear">
                        <label class="attr-label-pro-detail">Số lượng:</label>
                        <div class="quantity-pro-detail">
                            <button type="button" class="quantity-minus-pro-detail" aria-label="Giảm số lượng">−</button>
                            <input type="number" id="quantity" min="1" value="1" aria-label="Số lượng sản phẩm">
                            <button type="button" class="quantity-plus-pro-detail" aria-label="Tăng số lượng">+</button>
                        </div>
                        <button class="contact_cart addcart" type="button" data-action="addnow"
                            data-id="<?= $row_detail['id'] ?>">
                            <i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng
                        </button>
                    </li>
                    <li class="contact_pro d-flex justify-content-around mt-2">
                        <a class="contact_zalo" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $company_zalo) ?>"
                            target="_blank" rel="noopener">
                            <i class="fas fa-comments"></i> Chat zalo
                        </a>
                        <a class="contact_hotline" href="tel:<?= preg_replace('/[^0-9]/', '', $company_hotline) ?>">
                            <i class="fas fa-phone-alt"></i> Gọi điện
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>

            <div class="tabs-pro-detail">
                <ul class="ul-tabs-pro-detail w-clear">
                    <li class="active transition" data-tabs="info-pro-detail">Thông tin chi tiết</li>
                    <li class="transition" data-tabs="commentfb-pro-detail">Bình luận</li>
                    <li class="transition" data-tabs="rating-pro-detail">Đánh giá</li>
                </ul>
                <div class="content-tabs-pro-detail info-pro-detail active">
                    <?= !empty($row_detail['noidung' . $lang]) ? htmlspecialchars_decode($row_detail['noidung' . $lang]) : '' ?>
                </div>
                <div class="content-tabs-pro-detail commentfb-pro-detail">
                    <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3"
                        data-colorscheme="light" data-width="100%"></div>
                </div>
                <div class="content-tabs-pro-detail rating-pro-detail">
                    <div class="title11">Đánh giá</div>
                    <ul class="d-flex rank_danhgia">
                        <li class="star" data-star="1">1 <i class="fas fa-star"></i></li>
                        <li class="star" data-star="2">2 <i class="fas fa-star"></i></li>
                        <li class="star" data-star="3">3 <i class="fas fa-star"></i></li>
                        <li class="star" data-star="4">4 <i class="fas fa-star"></i></li>
                        <li class="star" data-star="5">5 <i class="fas fa-star"></i></li>
                        <li class="send_danhgia" data-id="<?= $row_detail['id'] ?>">Gửi đánh giá <i
                                class="fas fa-paper-plane"></i></li>
                    </ul>
                    <div class="result_danhgia pt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="title">Sản phẩm cùng loại</div>
<div class="content-main w-clear">
    <div class="loadkhung_product1 mainkhung_product product-related-grid">
        <?php if (!empty($product) && count($product) > 0) { 
            foreach ($product as $k => $v) { 
                $rel_img = (!empty($v['photo']) && file_exists(UPLOAD_PRODUCT_L . $v['photo']))
                    ? 'thumbs/380x270x2/' . UPLOAD_PRODUCT_L . $v['photo']
                    : 'assets/images/noimage.png';
        ?>
        <div class="boxproduct_item">
            <a class="boxproduct_img" href="<?= $v['tenkhongdau' . $lang] ?>"><span><img
                        onerror="this.src='thumbs/380x270x2/assets/images/noimage.png';"
                        src="<?= $rel_img ?>"
                        alt="<?= $v['ten' . $lang] ?>" /></span></a>
            <div class="boxproduct_info">
                <div class="boxproduct_name"><a href="<?= $v['tenkhongdau' . $lang] ?>"
                        title="<?= $v['ten' . $lang] ?>"><?= $v['ten' . $lang] ?></a></div>
                <div class="boxproduct_price">
                    Giá:
                    <span><?= $func->format_money($v['gia']) ?></span>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>
    <div class="clear"></div>
    <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
</div>