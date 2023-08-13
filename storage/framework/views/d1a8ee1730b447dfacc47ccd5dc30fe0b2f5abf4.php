
<?php $__env->startSection('content'); ?>
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="#" class="text-black text-decoration-none">Giỏ hàng</a></div>
        </div>
    </div>
</div>
<?php if(session('shopping_cart') != null): ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8">
            <div class="border">
                <div style="font-weight: 500;font-size: 20px;margin-bottom: 0;line-height: normal;text-transform: capitalize;padding:10px;"><?php echo e(__('order.cart'), false); ?></div>
            </div>
            <div class="border bg-white px-3">
                <?php
                $total = 0;
                $sumary = 0;
                ?>
                <?php $__currentLoopData = session('shopping_cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $lineTotal = 0;
                ?>
                <div class="row <?php if($loop->index % 2 == 1): ?> bg-gray <?php endif; ?> py-2">
                    <div class="product_removeItem col-1 d-flex justify-content-center align-items-center flex-column">
                        <span class="quantity_plus cursor-pointer" data-product-id="<?php echo e($cart['prod_info']->id, false); ?>"><i class="bi bi-caret-up"></i></span>
                        <span class="remove_cart_item cursor-pointer" data-product-id="<?php echo e($cart['prod_info']->id, false); ?>"><i class="bi bi-trash" style="font-size: 22px;"></i></span>
                        <span class="quantity_sub cursor-pointer" data-product-id="<?php echo e($cart['prod_info']->id, false); ?>"><i class="bi bi-caret-down"></i></span>
                    </div>
                    <div class="product_images col-3 col-sm-2 d-flex justify-content-center align-items-center"><img class="img-fluid" src="<?php echo e(Storage::url($cart['prod_info']->images), false); ?>" alt="<?php echo e($cart['prod_info']->title, false); ?>">
                    </div>
                    <div class="product_info col-8 col-sm-5 py-2">
                        <div class="title d-flex">
                            <div class="product_title"><?php echo e($cart['prod_info']->title, false); ?></div>
                        </div>
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
                    <div class="product_quantity col-2 d-none d-sm-block py-2">
                        <input type="number" id="cart_quantity_<?php echo e($cart['prod_info']->id, false); ?>" value="<?php echo e($cart['quantity'], false); ?>" class="form-control" disabled>
                    </div>
                    <div class="product_totalPrice col-2 d-none d-sm-block py-2"><?php echo e(number_format($lineTotal, 0), false); ?></div>
                </div>
                <?php
                $total += $lineTotal;
                ?>
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
        <div class="col-12 col-sm-4">

            <div class="border bg-white py-2">
                <div class=" d-flex justify-content-between align-items-center card-block">
                    <div class="total_text "><?php echo e(__('order.total'), false); ?>:</div>
                    <div class="total_price "><?php echo e(number_format($total, 0), false); ?> <span class="symbol">vnđ</span></div>
                </div>
                <div class="d-flex justify-content-between align-items-center card-block">
                    <div class="total_text"><?php echo e(__('order.ship'), false); ?>:</div>
                    <div class="total_price  ">
                        <?php echo e(number_format(((config('tax_vi')*$total)/100), 0), false); ?> (<?php echo e(config('tax_vi'), false); ?>%)
                        <?php
                        $sumary = $total + ((config('tax_vi')/$total)*100);
                        ?>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center card-block">
                    <div class="total_text" style=""><?php echo e(__('order.totalpay'), false); ?>:</div>
                    <div class="total_price" style="">
                        <b><?php echo e(number_format($sumary, 0), false); ?> <span class="symbol">vnđ</span></b>
                    </div>
                </div>
                <div class="checkout text-center pt-2">
                    <a href="<?php echo e(route('payment'), false); ?>" class="text-decoration-none color-white">
                        <button class="button-red fs-6"><?php echo e(__('order.paynow'), false); ?></button>
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>
<?php else: ?>
<?php if(request()->get('ref') != null): ?>
<div class="container text-center">
    <p>Hiện tại chưa có sản phẩm nào trong giỏ hàng.</p>
    <button class="btn btn-success btn-lg"><a href="<?php echo e(request()->get('ref'), false); ?>" class="text-decoration-none color-white">Quay lại</a></button>
</div>
<?php else: ?>
<div class="container text-center">
    <p>Hiện tại chưa có sản phẩm nào trong giỏ hàng.</p>
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

        $(".oc_bestseller").owlCarousel({
            margin: 10,
            nav: true,
            dots: false,
            loop: true,
            navText: ["<div class='nav-btn prev-slide'><i class=\"bi bi-chevron-compact-left\" style=\"font-size: 30px;\"></i></div>", "<div class='nav-btn next-slide'><i class=\"bi bi-chevron-compact-right\" style=\"font-size: 30px;\"></i></div>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        });
        $('.quantity_plus').on('click', function() {
            var productId = $(this).attr('data-product-id');
            var quantity = $('#cart_quantity_' + productId).val();
            var $data = {
                "_token": "<?php echo e(csrf_token(), false); ?>",
                "productId": productId,
                "quantity": parseInt(quantity) + 1,
            };
            $.ajax({
                url: "<?php echo e(route('addToCart'), false); ?>",
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
        $('.quantity_sub').on('click', function() {
            var productId = $(this).attr('data-product-id');
            var quantity = $('#cart_quantity_' + productId).val();
            var $data = {
                "_token": "<?php echo e(csrf_token(), false); ?>",
                "productId": productId,
                "quantity": parseInt(quantity) - 1,
            };
            $.ajax({
                url: "<?php echo e(route('addToCart'), false); ?>",
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
        $('.remove_cart_item ').on('click', function() {
            var productId = $(this).attr('data-product-id');
            var $data = {
                "_token": "<?php echo e(csrf_token(), false); ?>",
                "productId": productId,
                "quantity": 0,
            };
            $.ajax({
                url: "<?php echo e(route('addToCart'), false); ?>",
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
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/shopping_cart/order.blade.php ENDPATH**/ ?>