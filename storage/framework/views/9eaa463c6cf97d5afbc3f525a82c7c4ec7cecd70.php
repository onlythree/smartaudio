<?php
$lang = config('app.locale');
?>

<?php $__env->startSection('content'); ?>
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="£" class="text-black text-decoration-none">Đổi mật khẩu</a></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-12 col-sm-9 mt-4">
            <h3>Cập nhật thông tin</h3>
            <form action="<?php echo e(route('change-password-process'), false); ?>" method="post" id="changePassword">
                <?php echo csrf_field(); ?>
                <input type="hidden" id="user_id" name="user_id" <?php if(!empty($user)): ?> value="<?php echo e($user->user_id, false); ?>" <?php endif; ?>>
                <div class="form-group my-2">
                    <label for="currentPassword">Mật khẩu hiện tại</label>
                    <input type="text" class="form-control" id="currentPassword" name="currentPassword">
                    <div class="currentPassword_alert text-danger"></div>
                </div>
                <div class="form-group my-2">
                    <label for="newPassword">Mật khẩu mới</label>
                    <input type="text" class="form-control" id="newPassword" name="newPassword">
                    <div class="newPassword_alert text-danger"></div>
                </div>
                <div class="form-group my-2">
                    <label for="renewPassword">Xác nhận Mật khẩu mới</label>
                    <input type="text" class="form-control" id="renewPassword" name="renewPassword">
                    <div class="renewPassword_alert text-danger"></div>
                </div>
                <?php if(session()->has('error')): ?>
                <div class="alert alert-warning">
                    <?php echo e(session()->get('error'), false); ?>

                </div>
                <?php endif; ?>
                <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message'), false); ?>

                </div>
                <?php endif; ?>
                <div class="form-group mt-3">
                    <a id="btnChangePass" class="btn btn-primary text-white">Cập nhật</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script>
    $(document).ready(function() {
        $('#btnChangePass').on("click", function() {
            var currentPassword = $("#currentPassword").val();
            var newPassword = $("#newPassword").val();
            var renewPassword = $("#renewPassword").val();
            var check = false;
            if (currentPassword == "") {
                $('.currentPassword_alert').html('* Mật khẩu không được để trống');
            } else if (newPassword == "" || newPassword.trim().length < 6 ) {
                $('.newPassword_alert').html('* Mật khẩu mới không được để trống hoặc phải > 6 kí tự');
            } 
            else if (renewPassword == "" || renewPassword.trim().length < 6) {
                $('.renewPassword_alert').html('* Xác nhận mật khẩu không được để trống hoặc phải > 6 kí tự');
            } 
            else if (renewPassword != newPassword) {
                $('.newPassword_alert').html('* Mật khẩu không giống nhau');
                $('.renewPassword_alert').html('* Xác nhận Mật khẩu không giống nhau');
            }else {
                check = true;
            }
            if (check) {
                $('#changePassword').submit();
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/user/change-password.blade.php ENDPATH**/ ?>