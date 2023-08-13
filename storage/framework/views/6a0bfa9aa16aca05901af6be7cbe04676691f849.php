<div class="intro-slider">
    <div class="text-center p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">

            <div class="carousel-indicators ">
                <div class="text-center">
                    <?php if(getSlide('after-feature-product') != null): ?>
                    <?php $__currentLoopData = getSlide('after-feature-product'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo e($loop->index, false); ?>" class="<?php if($loop->index ==0): ?> active <?php endif; ?>" aria-current="true" aria-label="Slide <?php echo e($loop->index, false); ?>"></button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="carousel-inner">
                <?php if(getSlide('after-feature-product') != null): ?>
                <?php $__currentLoopData = getSlide('after-feature-product'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($loop->index == 0): ?> active <?php endif; ?>">

                    <div class="col-12 position-relative">
                        <div class="image">
                            <img src="<?php echo e(Storage::url($slide->images), false); ?>" class="d-block w-100">
                        </div>
                        <div class="top-0 position-absolute w-100 mt-4 mt-xxl-5">

                            <div class="title text-center text-white">
                                <?php echo $slide->title; ?>

                            </div>
                            <div class="sub-title text-white text-center">
                                <?php echo $slide->sub_title; ?>

                            </div>
                            <div class="readmore text-center">
                                <a href="<?php echo e($slide->slide_link, false); ?>" class="button-white">Chi tiết <span style="margin-left: 5px;"><i class="bi bi-arrow-right-circle"></i></span> </a>
                            </div>

                        </div>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
</div><?php /**PATH /home/smartaudio/domains/smartaudio.vn/public_html/resources/views/homepage/slide_after_feature_product.blade.php ENDPATH**/ ?>