<?php
$lang = config('app.locale');
?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-sm-6 rounded-2 border p-3" style="margin:80px auto;">
            <div class="row">
                <div class="col-12">
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
                            <a id="loginButton" class="btn btn-default bg-black text-white rounded-0">ĐĂNG NHẬP</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/user/login.blade.php ENDPATH**/ ?>