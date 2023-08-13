<?php
$lang = config('app.locale');
?>

<?php $__env->startSection('content'); ?>
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="#" class="text-black text-decoration-none">Đặt hàng thành công</a></div>
        </div>
    </div>
</div>
<div class="container py-3">
    <h1 class="fs-5 color-green text-center">Đặt hàng thành công</h1>
</div>

<div class="container">
    <div class="icon text-center"><i class="bi bi-check2-circle" style="font-size:200px;color:green"></i></div>
    <div class="status text-center mb-4">
        <h2 class="entry_title"><?php echo e(__('order.payment_success'), false); ?></h2>
        <p><?php echo __('order.checkemail'); ?></p>
        <a href="<?php echo e(route('home'), false); ?>"><button class="btn btn-success"><?php echo e(__('order.backtohomepage'), false); ?></button></a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script src="<?php echo e(asset('asset/check.js'), false); ?>"></script>
<script>
    $(document).ready(function() {

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/shopping_cart/thankyou.blade.php ENDPATH**/ ?>