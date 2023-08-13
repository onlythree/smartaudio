<div class="product-bestseller-tabs">
    <nav>
        <div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
            <?php if(getCategoryBestSellerCase() != null): ?>
            <?php $__currentLoopData = getCategoryBestSellerCase(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button class="nav-link <?php if($loop->index==0): ?> active <?php endif; ?>" id="nav-<?php echo e($cate->slug, false); ?>-tab-bestseller" data-bs-toggle="tab" data-bs-target="#nav-<?php echo e($cate->slug, false); ?>-bestseller" type="button" role="tab" aria-controls="nav-<?php echo e($cate->slug, false); ?>-bestseller" aria-selected="true"><?php echo e($cate->title, false); ?></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </nav>
    <div class="tab-content mt-4" id="nav-tabContent">
        <?php if(getCategoryActiveCase() != null): ?>
        <?php $__currentLoopData = getCategoryActiveCase(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $products = getAllProductByCateId($cate->id, 18);
        ?>
        <div class="tab-pane fade <?php if($loop->index==0): ?> show active <?php endif; ?>" id="nav-<?php echo e($cate->slug, false); ?>-bestseller" role="tabpanel" aria-labelledby="nav-<?php echo e($cate->slug, false); ?>-tab-bestseller" tabindex="0">
            <div class="list-product">
                <?php if(!empty($products)): ?>
                <div class="owl-carousel oc_bestseller my-3">
                    <?php
                    $node = 0;
                    foreach ($products as $prod) {
                        $cate = getCateById($prod->cate_id);
                        $productRate = getProductRate($prod->id);
                        if (!is_array($prod['other_image'])) {
                            $poi = explode(',', $prod['other_image']);
                        } else {
                            $poi = $prod['other_image'];
                        }
                        if ($node == 0) {
                            echo '<div class="col-2-items" style="margin-right:-5px;">';
                        }
                    ?>
                        <div class="products-items mb-4 border-end ">
                            <div class="product-box-border bg-white ">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="product-images w-100 position-relative">
                                            <div class="position-absolute" style="right: 20px;top: 10px;">
                                                <div class="label">
                                                    <?php if($prod['hot'] == 1): ?>
                                                    <label class="button-red">Hot</label>
                                                    <?php elseif($prod['best_seller'] == 1): ?>
                                                    <label class="button-green">Bán chạy</label>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="position-relative product_images">
                                                <div class="first-image">
                                                    <a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod['slug']]), false); ?>">
                                                        <img src="<?php echo e(Storage::url($prod['images']), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                                                    </a>
                                                </div>
                                                <div class="second-image position-absolute top-0" style="width: 100%;height: 100%;">
                                                    <a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod['slug']]), false); ?>">
                                                        <?php if($poi[0] != null): ?>
                                                        <img src="<?php echo e(Storage::url($poi[0]), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                                                        <?php else: ?>
                                                        <img src="<?php echo e(Storage::url($prod['images']), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                                                        <?php endif; ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="product-infor mt-3 px-1">
                                            <?php echo $__env->make('products.product-rate',['product_rate',$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <div class="cat-products"><a href="" class="text-decoration-none color-gray"><?php echo e($cate->title, false); ?></a></div>
                                            <h3 class="product-title"><a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod['slug']]), false); ?>" class="text-decoration-none fw-bold"><?php echo e($prod['title'], false); ?></a></h3>
                                            <div class="product-price d-flex align-items-baseline flex-column">
                                                <?php
                                                if ($prod['base_price'] > 0 && $prod['sale_price'] > 0) {
                                                ?>
                                                    <div class="product-base-price text-decoration-line-through" style="font-size: 13px;color: #636363;padding-right:10px;"><?php echo e(number_format($prod['base_price'],0,',','.'), false); ?>

                                                        <smal style="font-size: 13px;">đ</smal>
                                                    </div>
                                                    <div class="product-sale-price" style="color: #ea3d01;font-weight: bold;"><?php echo e(number_format($prod['sale_price'],0,',','.'), false); ?>

                                                        <smal style="font-size: 13px;">đ</smal>
                                                    </div>
                                                <?php
                                                } else if ($prod['base_price'] > 0 && $prod['sale_price'] <= 0) {
                                                ?>
                                                    <div class="product-base-price" style="color: #444;font-weight: bold;"><?php echo e(number_format($prod['base_price'],0,',','.'), false); ?>

                                                        <smal style="font-size: 13px;">đ</smal>
                                                    </div>
                                                <?php
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($node == 1) {
                            echo '</div>';
                        }
                        $node++;
                        if ($node > 1) {
                            $node = 0;
                        }
                    } ?>
                </div> 
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <?php endif; ?>
    </div>
</div><?php /**PATH /var/www/resources/views/homepage/category-best-seller.blade.php ENDPATH**/ ?>