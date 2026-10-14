<div class="news-list-page news-list-page--tin-tuc">
    <div class="title page-title"><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?></div>
    <div class="content-main w-clear">
        <?php if(!empty($news) && count($news) > 0) { ?>
            <div class="content-main news-list-grid w-clear">
                <?php foreach($news as $k => $v) { 
                    $n_img = (!empty($v['photo']) && file_exists(UPLOAD_NEWS_L . $v['photo']))
                        ? 'thumbs/480x360x1/' . UPLOAD_NEWS_L . $v['photo']
                        : 'assets/images/noimage.png';
                    $n_date = (!empty($v['ngaytao'])) ? date('d/m/Y', $v['ngaytao']) : date('d/m/Y');
                    $n_iso = (!empty($v['ngaytao'])) ? date('Y-m-d', $v['ngaytao']) : date('Y-m-d');
                ?>
                    <article class="news w-clear">
                        <p class="pic-news scale-img">
                            <a class="text-decoration-none" href="<?= $v['tenkhongdauvi'] ?>" title="<?= $v['ten' . $lang] ?>">
                                <img onerror="this.src='thumbs/480x360x2/assets/images/noimage.png';" src="<?= $n_img ?>" alt="<?= $v['ten' . $lang] ?>"/>
                            </a>
                        </p>
                        <div class="info-news">
                            <h3 class="name-news">
                                <a class="text-decoration-none" href="<?= $v['tenkhongdauvi'] ?>" title="<?= $v['ten' . $lang] ?>">
                                    <?= $v['ten' . $lang] ?>
                                </a>
                            </h3>
                            <p class="time-news"><i class="fas fa-user mr-2"></i>Admin</p>
                            <div class="desc-news text-split">
                                <?= $v['mota' . $lang] ?>
                            </div>
                            <div class="news-card-footer">
                                <time class="news-date" datetime="<?= $n_iso ?>">
                                    <i class="far fa-calendar-alt" aria-hidden="true"></i><?= $n_date ?>
                                </time>
                                <a class="news-detail-link text-decoration-none" href="<?= $v['tenkhongdauvi'] ?>" title="<?= $v['ten' . $lang] ?>">
                                    Xem chi tiết <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
            <div class="clear"></div>
            <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
        <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        <?php } ?>
        <div class="clear"></div>
    </div>
</div>