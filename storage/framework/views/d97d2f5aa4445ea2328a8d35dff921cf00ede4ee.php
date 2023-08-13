<?php
$agent = new Jenssegers\Agent\Agent();
?>

<div class="footer-subscribe container" style="border-radius: 100px;padding: 0 40px;position: relative;bottom: -40px;">
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="d-flex flex-row align-items-center">
                <div class="icon me-3">
                    <i class="bi bi-envelope-paper" style="color:#FFF;font-size:50px;"></i>
                </div>
                <div class="">
                    <p class="text-white mb-0 bold">Đăng ký nhận thông báo mới.</p>
                    <p class="text-white mb-0 bold">Nhập email của bạn để nhận thông tin ưu đãi từ AMZ.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="position-relative" style="top:-6px;">
                <form method="post" id="fsendContact">
                    <?php echo csrf_field(); ?>
                    <div class="position-relative">
                        <div class="position-absolute w-100">
                            <input type="text" id="femail_dangky" name="femail_dangky" class="form-control rounded-5 mb-0" placeholder="Nhập email của bạn" style="padding: 0 20px;height: 50px;margin-bottom: 20px;">
                        </div>
                        <div class="position-absolute" style="right: 8px;top: 8px;">
                            <button id="fsubmit_dangkynhanemail" type="button" class="button rounded-5 m-0" style="border:none; outline:none">Đăng ký</button>
                        </div>
                        <div class="fsendContactRes" style="max-width: 230px;margin-top: 20px;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container-fluid px-0" style="padding-top: 60px;">
        <div class="before_footer">
            <div class="container d-flex justify-content-between <?php if($agent->isMobile()): ?> flex-column <?php endif; ?>">
                <div class="footer1 col-12 col-sm-3 my-3">
                    <?php echo config('footer1'); ?>

                </div>
                <div class="footer2 col-12 col-sm-2 my-3">
                    <?php echo config('footer2' ); ?>

                </div>
                <div class="footer3 col-12 col-sm-2 my-3">
                    <?php echo config('footer3'); ?>

                </div>
                <div class="footer4 col-12 col-sm-2 my-3">
                    <?php echo config('footer4'); ?>

                </div>

            </div>
        </div>
        <hr style="color: #d4d4d4;">
    </div>
    <div class="end pb-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="copyright">
                        <p class="mb-0 text-left">© 2023 CÔNG TY CỔ PHẦN AMZ. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="float-end">
                        <img src="<?php echo e(asset('asset/image/payment-logo.webp'), false); ?>" alt="payment access" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="shoppingCartModal" tabindex="-1" aria-labelledby="shoppingCartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title fs-5" id="shoppingCartModalLabel">Thông báo</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12 text-center mb-2">Đã thêm sản phẩm vào giỏ hàng!</div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6">
                        <button data-bs-dismiss="modal" class="btn btn-black w-100 px-3" style="background: #6bc235;color: #FFF;">Tiếp tục</button>
                    </div>
                    <div class="col-6 col-sm-6">
                        <a href="<?php echo e(route('shoppingCartOrder'), false); ?>">
                            <button class="btn btn-black w-100 px-3" style="background: #ea3d01;color: #FFF;">Đến trang đặt hàng</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="loveModal" tabindex="-1" aria-labelledby="loveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title fs-5" id="loveModalLabel">Thông báo</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12 text-center mb-2">Đã thêm sản phẩm danh sách yêu thích!</div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6">
                        <button data-bs-dismiss="modal" class="btn btn-black w-100 px-3" style="background: #6bc235;color: #FFF;">Tiếp tục</button>
                    </div>
                    <div class="col-6 col-sm-6">
                        <a href="<?php echo e(route('love-list'), false); ?>">
                            <button class="btn btn-black w-100 px-3" style="background: #ea3d01;color: #FFF;">Danh sách yêu thích</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="compareModal" tabindex="-1" aria-labelledby="compareModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title fs-5" id="compareModalLabel">Thông báo</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12 text-center mb-2">Đã thêm sản phẩm danh sách so sánh!</div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6">
                        <button data-bs-dismiss="modal" class="btn btn-black w-100 px-3" style="background: #6bc235;color: #FFF;">Tiếp tục</button>
                    </div>
                    <div class="col-6 col-sm-6">
                        <a href="<?php echo e(route('compare-list-page'), false); ?>">
                            <button class="btn btn-black w-100 px-3" style="background: #ea3d01;color: #FFF;">Danh sách so sánh</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title fs-5" id="alertModalLabel">Thông báo</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3 text-center" id="alertContent">

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="quickviewModal" tabindex="-1" aria-labelledby="quickviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5 qv-product-title">Modal title</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-5">
                        <div class="qv-product-image"></div>
                        <div class="qv-product-other-image"></div>
                    </div>
                    <div class="col-12 col-sm-7">
                        <div class="qv-product-category"></div>
                        <div class="qv-product-price"></div>
                        <div class="qv-product-saleprice"></div>
                        <div class="qv-product-short-description"></div>
                        <div class="qv-product-detail mt-3 mb-2"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5 qv-product-title">Tài khoản khách hàng</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <?php
                    $user = auth()->user();
                    if (empty($user)) {
                    ?>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h3 style="font-size:18px">Đăng nhập</h3>
                                <div class="is-divider small bg-black"></div>
                                <div class="form-login">

                                    <div class="my-2">
                                        <label for="username">Số điện thoại <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="username" name="username">
                                        <div class="username_alert"></div>
                                    </div>
                                    <div class="my-2">
                                        <label for="password">Mật khẩu <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password" onkeypress="Javascript: if (event.keyCode==13) fnSubmit();">
                                        <div class="password_alert"></div>
                                    </div>
                                    <div class="my-2">
                                        <a id="loginButton" class="btn btn-default bg-black text-white rounded-0">Đăng nhập</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-sm-6 border-start">
                                <h3 style="font-size:18px">Đăng ký tài khoản</h3>
                                <div class="is-divider small bg-black"></div>
                                <div class="my-2">
                                    <label for="fullname">Họ & Tên <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fullname" name="fullname">
                                    <div class="fullname_alert"></div>
                                </div>
                                <div class="my-2">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email">
                                    <div class="email_alert"></div>
                                </div>

                                <div class="iclass">
                                    <i>* Sử dụng thông tin số điện thoại và mật khẩu để đăng nhập vào hệ thống</i>
                                </div>
                                <div class="my-2">
                                    <a class="btn btn-default bg-black text-white rounded-0" id="btnRegister">Đăng ký ngay</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else { ?>
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="avatar d-flex justify-content-center">
                                    <div class="rounded-circle d-flex justify-content-center align-items-center" style="width: 150px;text-align: center;border: 1px solid #dfdcdc36;height: 150px;font-size: 55px;background: beige;">
                                        <?php echo e(substr($user->fullname,0,2), false); ?>

                                    </div>
                                </div>
                                <div class="fullname text-center py-3">
                                    <?php echo e($user->fullname, false); ?>

                                </div>
                            </div>
                            <div class="col-12 col-sm-8">
                                <ul class="user-menu">
                                    <li class="d-flex"><i class="bi bi-caret-right-fill"></i><a class="text-decoration-none text-black" href="<?php echo e(route('profile'), false); ?>">Trang cá nhân</a></li>
                                    <li class="d-flex"><i class="bi bi-caret-right-fill"></i><a class="text-decoration-none text-black" href="<?php echo e(route('getOrder'), false); ?>">Đơn hàng đã mua</a></li>
                                    <li class="d-flex"><i class="bi bi-caret-right-fill"></i><a class="text-decoration-none text-black" href="<?php echo e(route('change-password'), false); ?>">Đổi mật khẩu</a></li>
                                    <li class="d-flex"><i class="bi bi-caret-right-fill"></i><a class="text-decoration-none text-black" href="<?php echo e(route('logout'), false); ?>">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="widget-contact">
    <a class="zalo-wg" href="http://zalo.me/0900000000" title="Click để chat Zalo: 0900000000" target="_blank">
        <img src="<?php echo e(asset('asset/image/zalo-icon-circle.png'), false); ?>" alt="zalo icon">
    </a>
	
	<a class="zalo-wg" href="https://www.facebook.com/messages/t/" title="liên hệ qua messages" target="_blank">
        <img src="<?php echo e(asset('asset/image/messenger.webp'), false); ?>" alt="messenger icon">
    </a>
	
	<a class="zalo-wg" href="https://telegram.me/telegramUsername" title="liên hệ qua telegram" target="_blank">
        <img src="<?php echo e(asset('asset/image/teleg.png'), false); ?>" alt="telegram icon">
    </a>
	
	<a class="zalo-wg" href="tel:0900000000" title="liên hệ qua hotline" target="_blank">
        <img src="<?php echo e(asset('asset/image/whatapp.png'), false); ?>" alt="hotline">
    </a>
</div><?php /**PATH /var/www/resources/views/master/footer.blade.php ENDPATH**/ ?>