<?php
$lang = config('app.locale');
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-12 col-sm-9 mt-4">

            <div class="box">
                <h3 style="font-size:20px;">Đơn hàng Sản phẩm</h3>
                <div class="is-divider small bg-black"></div>
                <?php if(!empty($orderList)): ?>
                <table class="table table-bordered">
                    <tr>
                        <td>STT</td>
                        <td>Tên sản phẩm</td>
                        <td>Tổng tiền</td>
                        <td>Trạng thái</td>
                        <td>Ngày mua</td>
                    </tr>

                    <?php $__currentLoopData = $orderList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php 
                    $product = getProductByid($ol->product_id); 
                    ?>
                    <tr>
                        <td><?php echo e($loop->index+1, false); ?></td>
                        <td><?php echo e($product->title, false); ?></td>
                        <td><?php echo e(number_format($ol->order_sumary,0,',','.'), false); ?></td>

                        <td><?php if($ol->payment_status == 'da-thanh-toan'): ?> <label class="btn btn-sm btn-success">Đã thanh toán</label>
                            <?php elseif($ol->payment_status == 'cho-thanh-toan'): ?> <label class="btn btn-sm btn-warning">Chờ thanh toán</label><?php endif; ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($ol->created_at)->format('d/m/Y h:i:s'), false); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/user/order-list.blade.php ENDPATH**/ ?>