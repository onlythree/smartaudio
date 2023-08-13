<div class="product-feature-tabs">
    <nav>
        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
            <?php if(getCategoryActiveCase() != null): ?>
            <?php $__currentLoopData = getCategoryActiveCase(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button class="nav-link <?php if($loop->index==0): ?> active <?php endif; ?>" id="nav-<?php echo e($cate->slug, false); ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo e($cate->slug, false); ?>" type="button" role="tab" aria-controls="nav-<?php echo e($cate->slug, false); ?>" aria-selected="true"><?php echo e($cate->title, false); ?></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <?php if(getCategoryActiveCase() != null): ?>
        <?php $__currentLoopData = getCategoryActiveCase(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <?php    
        $products = getAllProductByCateId($cate->id,9); 
        ?>
        <div class="tab-pane fade <?php if($loop->index==0): ?> show active <?php endif; ?>" id="nav-<?php echo e($cate->slug, false); ?>" role="tabpanel" aria-labelledby="nav-<?php echo e($cate->slug, false); ?>-tab" tabindex="0">

            <?php
            if (count($products) > 0) {
                $checkProductIndex = 0;
                foreach ($products as $prod) {
                    $cate = getCateById($prod->cate_id);
                    $productRate = getProductRate($prod->id);
                    if (!is_array($prod['other_image'])) {
                        $poi = explode(',', $prod['other_image']);
                    } else {
                        $poi = $prod['other_image'];
                    }

                    if ($checkProductIndex < 4) {
                        if ($checkProductIndex == 0) {
                            echo ('<div class="row my-4"><div class="col-12 col-sm-4 left-col"><div class="row">');
                        }
            ?>
                        <div class="col-6 mb-4">
                            <?php echo $__env->make('homepage.product-items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php

                    } elseif ($checkProductIndex == 4) {
                        //dong index =0 
                        echo ('</div></div><div class="col-12 col-sm-4 center-col">');
                    ?>

                        <div class="col-12">
                            <?php echo $__env->make('homepage.product-items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                    <?php
                        echo ('</div><div class="col-12 col-sm-4 right-col"><div class="row">');
                    } elseif ($checkProductIndex > 4) {
                    ?>
                        <div class="col-6 mb-4">
                            <?php echo $__env->make('homepage.product-items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                <?php
                    }
                    $checkProductIndex++;
                }
                echo ('</div></div></div>');
            } else {
                ?>
                <div class="p-4 text-center">Chưa có sản phẩm nào trong danh muc <?php echo e($cate->title, false); ?></div>
            <?php
            }
            ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div><?php /**PATH /var/www/resources/views/homepage/category_active_case.blade.php ENDPATH**/ ?>