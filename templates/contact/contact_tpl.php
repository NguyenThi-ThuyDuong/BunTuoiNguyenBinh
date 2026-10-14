<div class="title page-title"><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?></div>
<div class="content-main w-clear">
    <div class="top-contact">
        <div class="article-contact">
            <?= (!empty($lienhe['noidung' . $lang])) ? htmlspecialchars_decode($lienhe['noidung' . $lang]) : '' ?>
        </div>
        <form class="form-contact validation-contact" data-recaptcha-action="contact" novalidate method="post" action="" enctype="multipart/form-data" autocomplete="on">
            <div class="row">
                <div class="input-contact col-sm-6">
                    <input type="text" class="form-control" id="ten" name="ten" autocomplete="name"
                        placeholder="Họ tên" required />
                    <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                </div>
                <div class="input-contact col-sm-6">
                    <input type="number" class="form-control" id="dienthoai" name="dienthoai" autocomplete="tel"
                        placeholder="Số điện thoại" required />
                    <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                </div>
            </div>
            <div class="row">
                <div class="input-contact col-sm-6">
                    <input type="text" class="form-control" id="diachi" name="diachi" autocomplete="street-address"
                        placeholder="Địa chỉ" required />
                    <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
                </div>
                <div class="input-contact col-sm-6">
                    <input type="email" class="form-control" id="email" name="email" autocomplete="email"
                        placeholder="Email" required />
                    <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                </div>
            </div>
            <div class="input-contact">
                <input type="text" class="form-control" id="tieude" name="tieude" placeholder="Chủ đề" required />
                <div class="invalid-feedback">Vui lòng nhập chủ đề</div>
            </div>
            <div class="input-contact">
                <textarea class="form-control" id="noidung" name="noidung" placeholder="Nội dung" required></textarea>
                <div class="invalid-feedback">Vui lòng nhập nội dung</div>
            </div>
            <div class="input-contact">
                <input type="file" class="custom-file-input" name="file">
                <label class="custom-file-label" for="file" title="Chọn">Đính kèm file</label>
            </div>
            <input type="submit" class="btn btn-primary" name="submit-contact" value="Gửi" disabled />
            <input type="reset" class="btn btn-secondary" value="Nhập lại" />
            <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
        </form>
    </div>
    <div class="bottom-contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7314348167806!2d106.63202407333375!3d10.8318528581724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529bb1e90219d%3A0xc651000512dfd507!2zQsO6biBUxrDGoWkgTmd1eeG7hW4gQsOtbmg!5e0!3m2!1svi!2s!4v1790240209387!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </div>
</div>