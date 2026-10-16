<?php  
	if(!defined('SOURCES')) die("Error");
 
    $slider = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where (type = ? or type = ?) and hienthi > 0 order by stt,id desc", array('slider', 'slide'));
    $danhmuc_list = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao, photo, id from #_product_list where hienthi>0 and type='san-pham' order by stt,id desc");
    $sanpham_nb = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, masp, gia, giamoi, ngaytao, photo, id from #_product where noibat>0 and hienthi>0 and type='san-pham' order by stt,id desc limit 0,8");
    $spnb = $sanpham_nb;
    $gioithieu = $d->rawQueryOne("select ten$lang, mota$lang, noidung$lang, photo, photo1 from #_static where type = ?", array('gioi-thieu'));
    $tintuc = $d->rawQuery("select ten$lang, tenkhongdauvi, mota$lang, ngaytao, id, photo from #_news where type = ? and hienthi > 0 order by stt asc,id desc limit 0,6", array('tin-tuc'));
    $newsnb = $tintuc;
    $dichvu = $d->rawQuery("select ten$lang, tenkhongdauvi, id, photo, mota$lang from #_news where type = ? and hienthi > 0 order by stt,id desc limit 0,6", array('dich-vu'));
    $doitac = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc", array('doi-tac'));
    $chungnhan = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc", array('chung-nhan'));

    /* SEO */
    $seoDB = $seo->getSeoDB(0,'setting','capnhat','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->setSeo('description',$seoDB['description'.$seolang]);
    $seo->setSeo('url',$func->getPageURL());
    if (!empty($logo['photo']) && file_exists(UPLOAD_PHOTO_L . $logo['photo'])) {
        $img_json_bar = (isset($logo['options']) && $logo['options'] != '') ? json_decode($logo['options'], true) : null;
        if ($img_json_bar == null || (isset($img_json_bar['p']) && $img_json_bar['p'] != $logo['photo'])) {
            $img_json_bar = $func->getImgSize($logo['photo'], UPLOAD_PHOTO_L . $logo['photo']);
            if (!empty($logo['id'])) {
                $seo->updateSeoDB(json_encode($img_json_bar), 'photo', $logo['id']);
            }
        }
        if (is_array($img_json_bar) && !empty($img_json_bar['w'])) {
            $seo->setSeo('photo', $config_base . THUMBS . '/' . $img_json_bar['w'] . 'x' . $img_json_bar['h'] . 'x2/' . UPLOAD_PHOTO_L . $logo['photo']);
            $seo->setSeo('photo:width', $img_json_bar['w']);
            $seo->setSeo('photo:height', $img_json_bar['h']);
            $seo->setSeo('photo:type', $img_json_bar['m']);
        }
    }
?>