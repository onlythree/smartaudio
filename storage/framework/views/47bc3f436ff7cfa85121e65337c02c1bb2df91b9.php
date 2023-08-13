
<?php $__env->startSection('content'); ?>
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="#" class="text-black text-decoration-none">Sản phẩm yêu thích</a></div>
        </div>
    </div>
</div>
<?php if(session('lovecart') != null): ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="border">
                <div style="font-weight: 500;font-size: 20px;margin-bottom: 0;line-height: normal;text-transform: capitalize;padding:10px;">Danh sách sản phẩm yêu thích</div>
            </div>
            <div class="border bg-white px-3">
                <?php $__currentLoopData = session('lovecart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $cate = getCateById($cart['prod_info']->cate_id);
                $productRate = getProductRate($cart['prod_info']->id);
                ?>
                <div class="row <?php if($loop->index % 2 == 1): ?> bg-gray <?php endif; ?> py-2">

                    <div class="product_images col-12 col-sm-2 col-xxl-1 d-flex justify-content-center align-items-center"><img class="img-fluid" src="<?php echo e(Storage::url($cart['prod_info']->images), false); ?>" alt="<?php echo e($cart['prod_info']->title, false); ?>">
                    </div>
                    <div class="product_info col-12 col-sm-10 col-xxl-11 py-2">
                        <div class="row">
                            <div class="col-12 col-sm-4">

                                <div class="product-rate d-flex justify-content-start align-items-center">
                                    <?php echo $__env->make('products.product-rate',['productRate'=>$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="cat-products"><a href="<?php echo e(route('detail',$cate->slug), false); ?>" class="text-decoration-none color-gray"><?php echo e($cate->title, false); ?></a></div>
                                <h3 class="product-title"><a href="<?php echo e(route('detail',$cart['prod_info']->slug), false); ?>" class="text-decoration-none fw-bold"><?php echo e($cart['prod_info']->title, false); ?></a></h3>

                                <div class="price_area">
                                    <?php if($cart['prod_info']->sale_price != 0): ?>
                                    <div class="product_baseprice " style="color: #ccc">
                                        <span class="text-decoration-line-through fst-italic"><?php echo e(number_format($cart['prod_info']->base_price, 0), false); ?></span> <span class="card-discount">-<?php echo e(round((($cart['prod_info']->base_price - $cart['prod_info']->sale_price)/$cart['prod_info']->base_price)*100), false); ?>%</span>
                                    </div>
                                    <div class="product_saleprice fw-bold  color-green">
                                        <?php echo e(number_format($cart['prod_info']->sale_price, 0), false); ?>

                                    </div>
                                    <?php
                                    $lineTotal = $cart['prod_info']->sale_price * $cart['quantity'];
                                    ?>
                                    <?php else: ?>
                                    <div class="product_baseprice fw-bold color-green">
                                        <?php echo e(number_format($cart['prod_info']->base_price, 0), false); ?>

                                    </div>
                                    <?php
                                    $lineTotal = $cart['prod_info']->base_price * $cart['quantity'];
                                    ?>
                                    <?php endif; ?>
                                </div>
                                <div class="mobile_quantity d-block d-sm-none">x <?php echo e($cart['quantity'], false); ?> =
                                    <?php echo e(number_format($lineTotal, 0), false); ?>

                                </div>

                            </div>
                            <div class="col-12 col-sm-4">
                                <?php if($cart['prod_info']->short_description != null): ?>
                                <div class="short-description border rounded p-2 my-1">
                                    <?php echo Str::words(nl2br($cart['prod_info']->short_description),30,'...'); ?>

                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex justify-content-start align-items-left flex-column">
                                    <div class="add-to-cart-button m-2">
                                        <button class="button-red addtocart__button cursor-pointer" data-product-id="<?php echo e($cart['prod_info']->id, false); ?>" style="min-width:150px;"><i class="bi bi-plus-circle"></i> Thêm vào giỏ</button>
                                    </div>

                                    <div class="product_removeItem m-2">
                                        <button class="button-red addtocart__button cursor-pointer" style="background: #6bc235;min-width:150px;">
                                            <span class="remove_cart_item cursor-pointer button-green" data-product-id="<?php echo e($cart['prod_info']->id, false); ?>"><i class="bi bi-x-octagon"></i> Xóa</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="continues">
                <?php if(request()->get('ref') != null): ?>
                <div class="py-3 text-start">
                    <a href="<?php echo e(request()->get('ref'), false); ?>" class="text-decoration-none text-black"><i class="bi bi-arrow-left"></i> <?php echo e(__('order.continues'), false); ?></a>
                </div>
                <?php else: ?>
                <div class="py-3 text-start">
                    <a href="/" class="text-decoration-none text-black"><i class="bi bi-arrow-left"></i> <?php echo e(__('order.continues'), false); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<?php if(request()->get('ref') != null): ?>
<div class="container text-center">
    <p>Hiện tại chưa có sản phẩm nào trong danh sách yêu thích.</p>
    <button class="btn btn-success btn-lg"><a href="<?php echo e(request()->get('ref'), false); ?>" class="text-decoration-none color-white">Quay lại</a></button>
</div>
<?php else: ?>
<div class="container text-center">
    <p>Hiện tại chưa có sản phẩm nào trong danh sách yêu thích.</p>
    <button class="btn btn-success btn-lg"><a href="/" class="text-decoration-none color-white">Trang
            chủ</a></button>
</div>
<?php endif; ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('asset/owl.carousel.css'), false); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script src="<?php echo e(asset('asset/owl.carousel.min.js'), false); ?>"></script>

<script>
    $(document).ready(function() {
 
        $('.remove_cart_item ').on('click', function() {
            var productId = $(this).attr('data-product-id');
            var $data = {
                "_token": "<?php echo e(csrf_token(), false); ?>",
                "productId": productId,
                "quantity": 0,
            };
            $.ajax({
                url: "<?php echo e(route('addToLove'), false); ?>",
                method: "post",
                data: $data,
                success: function(res) {
                    window.location.reload();
                },
                error: function(request, status, error) {
                    console.log("ajax call went wrong:" + request.responseText);
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/shopping_cart/love-list.blade.php ENDPATH**/ ?>