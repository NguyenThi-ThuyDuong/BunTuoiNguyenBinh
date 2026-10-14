<div class="wrap-main w-clear">
    <form class="form-cart validation-cart cart-page" data-recaptcha-action="order" novalidate method="post" action="" enctype="multipart/form-data">
        <div class="wrap-cart d-flex align-items-stretch justify-content-between">
            <?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])) { ?>
                <div class="top-cart">
                    <p class="title-cart">Giỏ hàng của bạn:</p>
                    <div class="list-procart">
                        <div class="procart procart-label d-flex align-items-start justify-content-between">
                            <div class="pic-procart">Hình ảnh</div>
                            <div class="info-procart">Tên sản phẩm</div>
                            <div class="quantity-procart">
                                <p>Số lượng</p>
                                <p>Thành tiền</p>
                            </div>
                            <div class="price-procart">Thành tiền</div>
                        </div>

                        <?php 
                        $max = count($_SESSION['cart']); 
                        for($i=0; $i<$max; $i++) {
                            $pid = $_SESSION['cart'][$i]['productid'];
                            $quantity = $_SESSION['cart'][$i]['qty'];
                            $code = $_SESSION['cart'][$i]['code'] ?? '';
                            $proinfo = $cart->get_product_info($pid);
                            $pro_price = !empty($proinfo['giamoi']) ? $proinfo['giamoi'] : $proinfo['gia'];
                            $pro_total = $pro_price * $quantity;
                            $pro_img = (!empty($proinfo['photo']) && file_exists(UPLOAD_PRODUCT_L . $proinfo['photo']))
                                ? UPLOAD_PRODUCT_L . $proinfo['photo']
                                : 'assets/images/noimage.png';
                        ?>
                            <div class="procart procart-<?= $code ?> d-flex align-items-start justify-content-between">
                                <div class="pic-procart">
                                    <a class="text-decoration-none" href="<?= $proinfo[$sluglang] ?>" target="_blank" title="<?= $proinfo['ten' . $lang] ?>">
                                        <img onerror="this.onerror=null;this.src='assets/images/noimage.png';" src="<?= $pro_img ?>" alt="<?= $proinfo['ten' . $lang] ?>">
                                    </a>
                                    <a class="del-procart text-decoration-none" data-code="<?= $code ?>">
                                        <i class="fa fa-times-circle"></i>
                                        <span>Xóa</span>
                                    </a>
                                </div>
                                <div class="info-procart">
                                    <h3 class="name-procart">
                                        <a class="text-decoration-none" href="<?= $proinfo[$sluglang] ?>" target="_blank" title="<?= $proinfo['ten' . $lang] ?>">
                                            <?= $proinfo['ten' . $lang] ?>
                                        </a>
                                    </h3>
                                    <div class="properties-procart"></div>
                                </div>
                                <div class="quantity-procart">
                                    <div class="price-procart price-procart-rp">
                                        <p class="price-new-cart load-price-<?= $code ?>">
                                            <?= $func->format_money($pro_total) ?>
                                        </p>
                                    </div>
                                    <div class="quantity-counter-procart quantity-counter-procart-<?= $code ?> d-flex align-items-stretch justify-content-between">
                                        <span class="counter-procart-minus counter-procart">-</span>
                                        <input type="number" class="quantity-procat" min="1" value="<?= $quantity ?>" data-pid="<?= $pid ?>" data-code="<?= $code ?>" />
                                        <span class="counter-procart-plus counter-procart">+</span>
                                    </div>
                                    <div class="pic-procart pic-procart-rp">
                                        <a class="text-decoration-none" href="<?= $proinfo[$sluglang] ?>" target="_blank" title="<?= $proinfo['ten' . $lang] ?>">
                                            <img onerror="this.onerror=null;this.src='assets/images/noimage.png';" src="<?= $pro_img ?>" alt="<?= $proinfo['ten' . $lang] ?>">
                                        </a>
                                        <a class="del-procart text-decoration-none" data-code="<?= $code ?>">
                                            <i class="fa fa-times-circle"></i>
                                            <span>Xóa</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="price-procart">
                                    <p class="price-new-cart load-price-<?= $code ?>">
                                        <?= $func->format_money($pro_total) ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="money-procart">
                        <div class="total-procart d-flex align-items-center justify-content-between">
                            <p>Tổng tiền:</p>
                            <p class="total-price load-price-total"><?= $func->format_money($cart->get_order_total()) ?></p>
                        </div>
                        <input type="hidden" class="price-temp" name="price-temp" value="<?= $cart->get_order_total() ?>">
                        <input type="hidden" class="price-ship" name="price-ship">
                        <input type="hidden" class="price-total" name="price-total" value="<?= $cart->get_order_total() ?>">
                    </div>
                </div>

                <div class="bottom-cart">
                    <div class="section-cart">
                        <p class="title-cart">Thông tin giao hàng:</p>
                        <div class="information-cart">
                            <div class="input-double-cart w-clear">
                                <div class="input-cart">
                                    <input type="text" class="form-control" id="ten" name="ten" placeholder="Họ tên" required />
                                    <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                </div>
                                <div class="input-cart">
                                    <input type="tel" class="form-control" id="dienthoai" name="dienthoai" placeholder="Số điện thoại"
                                        inputmode="numeric" autocomplete="tel" minlength="10" maxlength="10" pattern="[0-9]{10}" required />
                                    <div class="invalid-feedback">Vui lòng nhập đúng 10 chữ số điện thoại</div>
                                </div>
                            </div>
                            <div class="input-cart">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                                <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                            </div>
                            <div class="input-cart">
                                <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa chỉ" required />
                                <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
                            </div>
                            <div class="input-double-cart delivery-schedule-cart w-clear">
                                <div class="input-cart">
                                    <label class="delivery-schedule-cart__label" for="ngaygiao">
                                        <i class="far fa-calendar-alt" aria-hidden="true"></i> Ngày giao
                                    </label>
                                    <select class="custom-select" id="ngaygiao" name="ngaygiao" required>
                                        <?php 
                                            $thu_arr = ['Sunday' => 'Chủ nhật', 'Monday' => 'Thứ hai', 'Tuesday' => 'Thứ ba', 'Wednesday' => 'Thứ tư', 'Thursday' => 'Thứ năm', 'Friday' => 'Thứ sáu', 'Saturday' => 'Thứ bảy'];
                                            for($d=0; $d<=7; $d++) {
                                                $ts = strtotime("+$d day");
                                                $dayVN = $thu_arr[date('l', $ts)];
                                                $valDate = date('Y-m-d', $ts);
                                                $labelDate = ($d == 0) ? "Hôm nay, {$dayVN} - " . date('d/m/Y', $ts) : "{$dayVN} - " . date('d/m/Y', $ts);
                                        ?>
                                            <option value="<?= $valDate ?>"><?= $labelDate ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">Vui lòng chọn ngày giao</div>
                                </div>
                                <div class="input-cart">
                                    <label class="delivery-schedule-cart__label" for="giogiao">
                                        <i class="far fa-clock" aria-hidden="true"></i> Giờ giao
                                    </label>
                                    <select class="custom-select" id="giogiao" name="giogiao" required>
                                        <option value="">Chọn khung giờ giao</option>
                                        <option value="08:00 - 10:00">08:00 - 10:00</option>
                                        <option value="10:00 - 12:00">10:00 - 12:00</option>
                                        <option value="13:00 - 15:00">13:00 - 15:00</option>
                                        <option value="15:00 - 17:00">15:00 - 17:00</option>
                                    </select>
                                    <div class="invalid-feedback">Vui lòng chọn giờ giao</div>
                                </div>
                            </div>
                            <div class="input-cart">
                                <textarea class="form-control" id="yeucaukhac" name="yeucaukhac" placeholder="Yêu cầu khác (không bắt buộc)"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="recaptcha_response_order" value="">
                        <input type="submit" class="btn-cart btn btn-primary btn-lg btn-block" name="thanhtoan" value="Thanh toán">
                    </div>
                </div>
            <?php } else { ?>
                <div class="empty-cart text-center py-5 w-100">
                    <p class="title-cart">Giỏ hàng của bạn:</p>
                    <div class="py-5">
                        <i class="fas fa-shopping-cart fa-3x mb-3 text-muted" style="color: #cbd5e1;"></i>
                        <p class="text-secondary font-weight-bold" style="font-size: 15px;">Không có sản phẩm nào trong giỏ hàng!</p>
                        <a href="san-pham" class="btn btn-danger mt-2" style="background-color: #e3262e; border-color: #e3262e; border-radius: 6px; font-weight: 600;">
                            Tiếp tục mua hàng
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </form>
</div>