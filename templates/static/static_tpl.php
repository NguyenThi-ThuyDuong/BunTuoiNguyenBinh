<div class="title page-title">
    <span><?= (!empty($static['ten' . $lang])) ? $static['ten' . $lang] : 'Giới thiệu' ?></span>
</div>

<div class="content-main w-clear">
    <?= (!empty($static['noidung' . $lang])) ? htmlspecialchars_decode($static['noidung' . $lang]) : '' ?>
</div>

<div class="share">
    <b>Chia sẻ:</b>
    <div class="social-plugin w-clear">
        <div class="website_share d-flex align-items-center pr-2">
            <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>" data-oaid="<?= (!empty($optsetting['oaidzalo'])) ? $optsetting['oaidzalo'] : '579745863508352884' ?>" data-layout="1" data-color="blue" data-customize="true">
                <img width="20" height="20" src="assets/images/zalo1.png">
                <span style="color: #fff; font-size: 11px; font-weight: 500;letter-spacing: 0.5px">Share</span>
            </div>
        </div>
        <div class="sharethis-inline-share-buttons"></div>
    </div>
</div>