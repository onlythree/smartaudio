<?php
$lang = config('app.locale');
?>

<?php $__env->startSection('content'); ?>
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="£" class="text-black text-decoration-none">Trang cá nhân</a></div>
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
            <form action="<?php echo e(route('update-account-info'), false); ?>" method="post" id="update-account">
                <?php echo csrf_field(); ?>
                <div class="form-group my-2">
                    <label for="fullname">Họ Tên</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" <?php if(!empty($user)): ?> value="<?php echo e($user->fullname, false); ?>" <?php endif; ?>>
                    <div class="fullname_alert text-danger"></div>
                </div>
                <div class="form-group my-2">
                    <label for="username">Tên truy cập</label>
                    <input type="text" class="form-control" id="username" name="username" readonly <?php if(!empty($user)): ?> value="<?php echo e($user->username, false); ?>" <?php endif; ?>>
                </div>
                <div class="form-group my-2">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" <?php if(!empty($user)): ?> value="<?php echo e($user->phone, false); ?>" <?php endif; ?>>
                    <div class="phone_alert text-danger"></div>
                </div>
                <div class="form-group my-2">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" <?php if(!empty($user)): ?> value="<?php echo e($user->email, false); ?>" <?php endif; ?>>
                    <div class="email_alert text-danger"></div>
                </div>
                <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message'), false); ?>

                </div>
                <?php endif; ?>
                <?php if(session()->has('error')): ?>
                <div class="alert alert-error">
                    <?php echo e(session()->get('error'), false); ?>

                </div>
                <?php endif; ?>
                <div class="form-group mt-3">
                    <button class="btn btn-primary">Cập nhật</button>
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
        $('#update-account').on("submit", function() {
            var phone = $("#phone").val();
            var email = $("#email").val();
            var fullname = $("#fullname").val();
            var check = false;
            if (phone == "") {
                $('.phone_alert').html('* Số điện thoại không được để trống');
            } else if (fullname == "") {
                $('.fullname_alert').html('* Họ tên không được để trống');
            } else if (email == "") {
                $('.email_alert').html('* Email không được để trống');
            } else {
                check = true;
            }
            if (check) {
                $(this).submit();
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/user/info.blade.php ENDPATH**/ ?>