<div class="product-box-border item-view-list bg-white row ">
    <div class="product-images position-relative col-5">
        <div class="position-absolute" style="right: 20px;top: 10px;z-index: 99;">
            <div class="label">
                <?php if($prod->hot == 1): ?>
                <label class="button-red">Hot</label>
                <?php elseif($prod->best_seller == 1): ?>
                <label class="button-green">Bán chạy</label>
                <?php endif; ?>
            </div>
        </div>
        <div class="position-relative product_images">
            <div class="first-image">
                <img src="<?php echo e(Storage::url($prod->images), false); ?>" alt="<?php echo e($prod->title, false); ?>" class="w-100">
            </div>
            <div class="second-image position-absolute top-0">
                <?php
                $poi = null;
                if (!is_array($prod->other_image)) {
                    $poi = explode(',', $prod->other_image);
                } else {
                    $poi = $prod->other_image;
                }

                ?>
                <a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod->slug]), false); ?>" class="text-decoration-none">
                    <?php if($poi[0] != null): ?>
                    <img src="<?php echo e(Storage::url($poi[0]), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                    <?php else: ?>
                    <img src="<?php echo e(Storage::url($prod->images), false); ?>" alt="<?php echo e($prod->title, false); ?>" class="w-100">
                    <?php endif; ?>
                </a>
                <div class="product-button">
                    <div class="d-flex">
                        <div class="product-button-icon quickview" data-product-title="<?php echo e($prod->title, false); ?>" data-product-image="<?php echo e(Storage::url($prod->images), false); ?>" data-product-other-image='<div id="quickview-img" class="carousel slide">
                        <div class="carousel-indicators">
                            <?php if(count($poi)>1): ?>  
                            <?php $__currentLoopData = $poi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button" data-bs-target="#quickview-img" data-bs-slide-to="<?php echo e($loop->index, false); ?>" class="<?php if($loop->index==0): ?> active <?php endif; ?>" aria-current="true" aria-label="Slide <?php echo e($loop->index, false); ?>"></button> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?> 
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="<?php echo e(Storage::url($prod->images), false); ?>" class="d-block w-100" alt="slide popup quickview">
                            </div>
                            <?php if(count($poi)>1): ?>
                            <?php $__currentLoopData = $poi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item">
                            <img src="<?php echo e(Storage::url($oi), false); ?>" class="d-block w-100" alt="slide popup quickview">
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?> 
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#quickview-img" data-bs-slide="prev" style="padding: 0px !important;margin: 0 !important;border-radius: 0;height: 10px !important;color: #000;border: none !important;">
                            <i class="bi bi-arrow-left-circle-fill" style="font-size: 30px;color: #7c7c7c !important;"></i> 
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#quickview-img" data-bs-slide="next" style="padding: 0px !important;margin: 0 !important;border-radius: 0;height: 10px !important;color: #000;border: none !important;">
                            <i class="bi bi-arrow-right-circle-fill" style="font-size: 30px;color: #7c7c7c !important;"></i> 
                        </button>
                        </div>' data-product-base-price="<?php echo e(number_format($prod->base_price,0,'.',','), false); ?>"
                         data-product-sale-price="<?php echo e(number_format($prod->sale_price,0,'.',','), false); ?>" 
                         data-product-short-description="<?php echo e(nl2br($prod->short_description), false); ?>" 
                         data-product-detail="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod->slug]), false); ?>" data-product-rate="<?php echo e($productRate, false); ?>" data-product-category="<?php echo e($cate->title, false); ?>">
                            <i class="bi bi-eye"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-infor col-7">
        <div class="product-rate d-flex justify-content-start align-items-center">
            <?php echo $__env->make('products.product-rate',['productRate'=>$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="cat-products"><a href="<?php echo e(route('detail',$cate->slug), false); ?>" class="text-decoration-none color-gray"><?php echo e($cate->title, false); ?></a></div>
        <h3 class="product-title"><a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod->slug]), false); ?>" class="text-decoration-none fw-bold"><?php echo e($prod->title, false); ?></a></h3>
        <div class="product-price d-flex align-items-baseline">
            <?php
            if ($prod->base_price > 0 && $prod->sale_price > 0) {
            ?>
                <div class="product-base-price text-decoration-line-through" style="font-size: 13px;color: #636363;padding-right:10px;"><?php echo e(number_format($prod->base_price,0,',','.'), false); ?>

                    <smal style="font-size: 13px;">đ</smal>
                </div>
                <div class="product-sale-price" style="color: #ea3d01;font-weight: bold;"><?php echo e(number_format($prod->sale_price,0,',','.'), false); ?>

                    <smal style="font-size: 13px;">đ</smal>
                </div>
            <?php
            } else if ($prod->base_price > 0 && $prod->sale_price <= 0) {
            ?>
                <div class="product-base-price" style="color: #444;font-weight: bold;"><?php echo e(number_format($prod->base_price,0,',','.'), false); ?>

                    <smal style="font-size: 13px;">đ</smal>
                </div>
            <?php
            }
            ?>
        </div>
        <?php if($prod->short_description != null): ?>
        <div class="short-description">
            <?php echo nl2br($prod->short_description); ?>

        </div>
        <?php endif; ?>
        <div class="d-flex justify-content-start align-items-center mt-2">
            <div class="me-2">
                <div class="text-decoration-none button-white text-white addtocart__button cursor-pointer" data-product-id="<?php echo e($prod->id, false); ?>" style="background-color: #ea3d01; color:#FFF">Thêm vào giỏ</div>
            </div>
            <div class="mx-2">
                <div  class="text-decoration-none button-white border addtolove__button cursor-pointer"  data-product-id="<?php echo e($prod->id, false); ?>" style="padding: 5px 8px;"><i class="bi bi-heart"></i></div>
            </div>
            <div class="mx-2">
                <div class="text-decoration-none button-white border addtocompare__button cursor-pointer"  data-product-id="<?php echo e($prod->id, false); ?>" style="padding: 5px 8px;"><i class="bi bi-bezier2"></i></div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\smartaudio\resources\views/products/items-view-list.blade.php ENDPATH**/ ?>