<div class="product-catalog-page">
    <div class="title page-title">Sản phẩm</div>
    <div class="content-main w-clear">
        <?php if(isset($product) && count($product) > 0) { ?>
            <div class="grid grid-cols-2 gap-5 md:grid-cols-4 lg-max:gap-4 sm-max:gap-2.5">
                <?php foreach($product as $k => $v) { 
                    $p_img = (!empty($v['photo']) && file_exists(UPLOAD_PRODUCT_L . $v['photo']))
                        ? UPLOAD_PRODUCT_L . $v['photo']
                        : 'assets/images/noimage.png';
                    $price_str = (!empty($v['gia']) && $v['gia'] > 0) ? number_format($v['gia'], 0, ',', '.') . 'đ' : 'Liên hệ';
                ?>
                    <article class="group relative flex min-w-0 flex-col overflow-hidden rounded-[18px] border border-white/90 bg-white/95 shadow-[0_12px_34px_rgba(8,40,103,0.1)] transition duration-300 hover:-translate-y-1.5 hover:border-[#cddcf0] hover:shadow-[0_22px_46px_rgba(8,40,103,0.18)] sm-max:rounded-[13px]">
                        <a class="featured-product__image relative flex aspect-[4/3] items-center justify-center overflow-hidden bg-[radial-gradient(circle_at_50%_42%,#ffffff_0%,#f4f8fc_66%,#e5edf7_100%)] p-4 sm-max:aspect-square sm-max:p-1.5"
                            href="<?= $v['tenkhongdauvi'] ?>" title="<?= $v['ten' . $lang] ?>">
                            <span class="absolute left-0 top-0 z-[1] flex h-[35px] w-[43px] flex-col items-center justify-center rounded-br-[20px] bg-[#ed3237] text-white shadow-[7px_8px_20px_rgba(237,50,55,0.24)] transition duration-300 sm-max:h-[25px] sm-max:w-[30px] sm-max:rounded-br-[11px]" aria-hidden="true">
                                <i class="fas fa-seedling text-[18px] transition duration-300 group-hover:scale-110 sm-max:text-[14px]"></i>
                            </span>
                            <img class="h-full w-full object-contain transition duration-500 ease-out group-hover:scale-[1.06]"
                                onerror="this.onerror=null;this.src='assets/images/noimage.png';"
                                src="<?= $p_img ?>"
                                alt="<?= $v['ten' . $lang] ?>" />
                        </a>

                        <div class="flex flex-col px-4 pb-4 pt-3 sm-max:px-2.5 sm-max:pb-2.5 sm-max:pt-2">
                            <h3 class="mb-3 line-clamp-2 min-h-9 text-[16px] font-bold leading-5 text-[#082867] transition duration-300 group-hover:text-[#ed3237] sm-max:mb-2 sm-max:min-h-9 sm-max:text-[14px] sm-max:leading-[18px]">
                                <a href="<?= $v['tenkhongdauvi'] ?>" title="<?= $v['ten' . $lang] ?>">
                                    <?= $v['ten' . $lang] ?>
                                </a>
                            </h3>
                            <div class="mt-auto flex items-end justify-between gap-3 border-t border-[#e5ebf3] pt-2 sm-max:block">
                                <p class="mb-0 min-w-0 text-[12px] font-semibold leading-5 text-[#68758a] sm-max:flex sm-max:items-center sm-max:justify-between sm-max:gap-1.5 sm-max:pb-3 sm-max:pt-1 sm-max:text-[11px] sm-max:leading-4">
                                    <span class="block">Giá:</span>
                                    <strong class="block truncate text-[18px] font-extrabold tabular-nums text-[#ed3237] sm-max:text-[14px]">
                                        <?= $price_str ?>
                                    </strong>
                                </p>
                                <button class="addcart inline-flex h-9 shrink-0 items-center justify-center gap-2 rounded-[9px] border-0 bg-[#ed3237] px-3 text-[11px] font-bold uppercase text-white shadow-[0_8px_18px_rgba(237,50,55,0.2)] transition duration-300 hover:bg-[#082867] hover:shadow-[0_10px_22px_rgba(8,40,103,0.22)] active:scale-[0.97] focus:outline-none focus-visible:ring-4 focus-visible:ring-[#ed3237]/20 sm-max:mt-1.5 sm-max:h-7 sm-max:w-full sm-max:px-2 sm-max:text-[9px]"
                                    type="button" data-action="addnow" data-id="<?= $v['id'] ?>">
                                    Đặt hàng
                                    <i class="far fa-arrow-right text-[10px]" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
            <div class="clear"></div>
            <div class="pagination-home">
                <?= (isset($paging) && $paging != '') ? $paging : '' ?>
            </div>
        <?php } else { ?>
            <div class="alert alert-warning text-center" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        <?php } ?>
    </div>
</div>