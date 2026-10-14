<div class="boxfooter_container !bg-[#062461] !bg-[url('../images/bg-footer.webp')] !bg-cover !bg-no-repeat ![background-position:center_78%] !pb-0 !pt-12 font-hanken lg-max:!pt-10" id="background-footer">
    <div class="fixwidth">
        <div class="mb-10 grid grid-cols-[minmax(0,0.9fr)_minmax(360px,1.1fr)] items-center gap-10 border-b border-white/15 pb-9 lg-max:grid-cols-1 lg-max:gap-5 sm-max:mb-8 sm-max:pb-8">
            <div>
                <p class="mb-2 text-[11px] font-bold uppercase tracking-[0.2em] text-[#f1a6a9]">Kết nối cùng Nguyễn Bính</p>
                <h2 class="mb-2 text-[22px] font-extrabold uppercase leading-tight text-white sm-max:text-[19px]">Đăng ký nhận tin</h2>
                <p class="mb-0 max-w-[560px] text-[14px] leading-6 text-white/70">Nhận thông tin sản phẩm mới và các chương trình ưu đãi.</p>
            </div>
            <form class="flex min-w-0 overflow-hidden rounded-[10px] bg-white shadow-[0_12px_30px_rgba(0,0,0,0.18)] sm-max:flex-col sm-max:gap-2.5 sm-max:overflow-visible sm-max:rounded-none sm-max:bg-transparent sm-max:shadow-none" method="post" action="" autocomplete="on">
                <label class="sr-only" for="footer-newsletter-name">Họ tên</label>
                <input class="h-14 min-w-0 flex-1 border-0 border-r border-[#e3e7ee] bg-white px-5 text-[14px] text-[#172a4d] outline-none placeholder:text-[#8a95a8] focus-visible:ring-2 focus-visible:ring-[#ed3237] focus-visible:ring-inset sm-max:h-12 sm-max:w-full sm-max:flex-none sm-max:rounded-[8px] sm-max:border sm-max:border-white/20 sm-max:px-4" type="text" id="footer-newsletter-name" name="name-newsletter" placeholder="Nhập họ tên" autocomplete="name" required />
                <label class="sr-only" for="footer-newsletter-phone">Số điện thoại</label>
                <input class="h-14 min-w-0 flex-1 border-0 bg-white px-5 text-[14px] text-[#172a4d] outline-none placeholder:text-[#8a95a8] focus-visible:ring-2 focus-visible:ring-[#ed3237] focus-visible:ring-inset sm-max:h-12 sm-max:w-full sm-max:flex-none sm-max:rounded-[8px] sm-max:border sm-max:border-white/20 sm-max:px-4" type="tel" id="footer-newsletter-phone" name="phone-newsletter" placeholder="Nhập số điện thoại" autocomplete="tel" required />
                <button class="flex h-14 w-16 shrink-0 items-center justify-center border-0 bg-[#e3262e] text-[22px] text-white transition hover:bg-[#c91f27] focus:outline-none focus-visible:ring-4 focus-visible:ring-white/30 sm-max:h-12 sm-max:w-full sm-max:gap-3 sm-max:rounded-[8px] sm-max:text-[14px] sm-max:font-bold sm-max:uppercase" type="submit" name="submit-newsletter" value="Đăng ký" aria-label="Gửi thông tin đăng ký">
                    <span class="hidden sm-max:inline">Đăng ký</span>
                    <i class="far fa-long-arrow-right" aria-hidden="true"></i>
                </button>
                <input type="hidden" name="recaptcha_response_newsletter" value="" />
            </form>
        </div>

        <div class="grid grid-cols-[1.55fr_1fr_0.72fr_1.15fr] gap-10 xl-max:gap-7 lg-max:grid-cols-2 md-max:grid-cols-1 md-max:gap-8">
            <div>
                <h2 class="mb-0 text-[28px] font-extrabold uppercase leading-tight tracking-[-0.02em] text-white sm-max:text-[23px]">
                    HỢP TÁC CÙNG NGUYỄN BÍNH
                </h2>
                <div class="mt-4 max-w-[480px] text-[15px] font-medium uppercase leading-7 text-white/80 [&_*]:!m-0 [&_*]:!text-inherit">
                    <p>PHÁT TRIỂN BỀN VỮNG - CÙNG NHAU VƯƠN XA</p>
                </div>

                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="<?= !empty($optsetting['fanpage']) ? $optsetting['fanpage'] : 'https://www.facebook.com/buntuoisachnguyenbinh' ?>" target="_blank" class="flex h-11 w-11 items-center justify-center overflow-hidden rounded-full bg-white/10 p-2 transition duration-300 hover:-translate-y-0.5 hover:bg-[#e3262e] focus:outline-none focus-visible:ring-4 focus-visible:ring-white/20" title="Facebook">
                        <img class="max-h-full max-w-full object-contain"
                            onerror="this.onerror=null;this.src='thumbs/30x30x2/assets/images/noimage.png';"
                            src="upload/photo/facebook-f-brands-solid-8395.png"
                            alt="Facebook" />
                    </a>
                    <a href="https://youtube.com" target="_blank" class="flex h-11 w-11 items-center justify-center overflow-hidden rounded-full bg-white/10 p-2 transition duration-300 hover:-translate-y-0.5 hover:bg-[#e3262e] focus:outline-none focus-visible:ring-4 focus-visible:ring-white/20" title="Youtube">
                        <img class="max-h-full max-w-full object-contain"
                            onerror="this.onerror=null;this.src='thumbs/30x30x2/assets/images/noimage.png';"
                            src="upload/photo/youtube-brands-solid-1523.png"
                            alt="Youtube" />
                    </a>
                    <a href="https://tiktok.com" target="_blank" class="flex h-11 w-11 items-center justify-center overflow-hidden rounded-full bg-white/10 p-2 transition duration-300 hover:-translate-y-0.5 hover:bg-[#e3262e] focus:outline-none focus-visible:ring-4 focus-visible:ring-white/20" title="Tiktok">
                        <img class="max-h-full max-w-full object-contain"
                            onerror="this.onerror=null;this.src='thumbs/30x30x2/assets/images/noimage.png';"
                            src="upload/photo/tiktok-brands-solid-6283.png"
                            alt="Tiktok" />
                    </a>
                </div>
                
                <!-- ảnh bộ công thương & chứng nhận -->
                <div class="mt-6 flex flex-wrap items-center gap-4 sm-max:gap-3">
                    <img class="w-[210px] object-contain sm-max:w-[170px]"
                        src="assets/images/bocongthuong.png"
                        alt="Đã thông báo Bộ Công Thương" />
                    <img class="w-[82px] object-contain sm-max:w-[68px]"
                        src="assets/images/chung-nhan-1.png"
                        alt="Chứng nhận Hệ Thống Phân Phối" />
                </div>
            </div>

            <div>
                <h3 class="mb-5 text-[16px] font-extrabold uppercase text-white">Thông tin liên hệ</h3>
                <ul class="mb-0 space-y-4 text-[14px] leading-6 text-white/80">
                    <li class="flex items-start gap-3">
                        <i class="far fa-map-marker-alt mt-1 w-5 shrink-0 text-center text-[18px] text-white" aria-hidden="true"></i>
                        <span><?= !empty($optsetting['diachi']) ? $optsetting['diachi'] : '18/23 Huỳnh Văn Nghệ, Phường Tân Sơn, TP. Hồ Chí Minh' ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="far fa-phone-alt mt-1 w-5 shrink-0 text-center text-[18px] text-white" aria-hidden="true"></i>
                        <a class="text-inherit transition hover:text-white" href="tel:<?= preg_replace('/[^0-9]/', '', !empty($optsetting['hotline']) ? $optsetting['hotline'] : '0984050679') ?>">
                            <?= !empty($optsetting['hotline']) ? $optsetting['hotline'] : '0984050679' ?>
                        </a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="far fa-envelope mt-1 w-5 shrink-0 text-center text-[18px] text-white" aria-hidden="true"></i>
                        <a class="break-all text-inherit transition hover:text-white" href="mailto:<?= !empty($optsetting['email']) ? $optsetting['email'] : 'bunthuducnguyenbinh@gmail.com' ?>">
                            <?= !empty($optsetting['email']) ? $optsetting['email'] : 'bunthuducnguyenbinh@gmail.com' ?>
                        </a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="far fa-globe mt-1 w-5 shrink-0 text-center text-[18px] text-white" aria-hidden="true"></i>
                        <span><?= !empty($optsetting['website']) ? $optsetting['website'] : 'https://buntuoinguyenbinh.vn/' ?></span>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="mb-5 text-[16px] font-extrabold uppercase text-white">Liên kết nhanh</h3>
                <nav aria-label="Liên kết cuối trang">
                    <ul class="mb-0 space-y-3 text-[14px] text-white/80">
                        <li><a class="text-inherit transition hover:pl-1 hover:text-white" href="gioi-thieu">Giới thiệu</a></li>
                        <li><a class="text-inherit transition hover:pl-1 hover:text-white" href="san-pham">Sản phẩm</a></li>
                        <li><a class="text-inherit transition hover:pl-1 hover:text-white" href="tin-tuc">Tin tức</a></li>
                        <li><a class="text-inherit transition hover:pl-1 hover:text-white" href="lien-he">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>

            <div>
                <h3 class="mb-5 text-[16px] font-extrabold uppercase text-white">Bản đồ</h3>
                <div class="footer-map" style="width: 100%; height: 210px; border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.15); background-color: rgba(255,255,255,0.1); box-shadow: 0 12px 30px rgba(0,0,0,0.18);">
                    <style>
                        .footer-map iframe {
                            width: 100% !important;
                            height: 100% !important;
                            border: 0 !important;
                            display: block !important;
                        }
                    </style>
                    <?php 
                        $map_code = !empty($optsetting['toado_iframe']) 
                            ? htmlspecialchars_decode($optsetting['toado_iframe']) 
                            : '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7314348167806!2d106.63202407333375!3d10.8318528581724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529bb1e90219d%3A0xc651000512dfd507!2zQsO6biBUxrDGoWkgTmd1eeG7hW4gQsOtbmg!5e0!3m2!1svi!2s!4v1790240209387!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>';
                    ?>
                    <?= $map_code ?>
                </div>
            </div>
        </div>
    </div>

    <div class="boxfooter_bottom !mt-10 !border-t !border-white/15 !py-5 !text-white">
        <div class="fixwidth d-flex justify-content-between flex-wrap">
            <div>Copyright © 2026 Bún Tươi Nguyễn Bính. Design by <a href="#" onclick="return false;" title="Thiết Kế Web SOTA" style="color: #fff;">Thiết Kế Web SOTA</a></div>
            <div>Online: <?= $online ?? 1 ?> | Hôm nay: <?= $counter['today'] ?? 45 ?> | Tổng: <?= $counter['total'] ?? 13501 ?></div>
        </div>
    </div>
</div>