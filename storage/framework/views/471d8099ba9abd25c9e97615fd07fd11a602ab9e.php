<div class="homepage">
    <div class="container my-3">
        <div class="row homepage-banner">
            <?php if(getSlide('after-top-slideshow') != null): ?>
            <?php $__currentLoopData = getSlide('after-top-slideshow'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-4">
                <div class="col-12 position-relative">
                    <div class="image">
                        <img src="<?php echo e(Storage::url($slide->images), false); ?>" class="d-block w-100">
                    </div>
                    <div class="position-absolute top-0 container-fluid margin-auto">
                        <div class="container homepage-banner-image" style="margin-top: 100px;">
                            <div class="row">
                                <div class="sub-title">
                                    <?php echo $slide->sub_title; ?>

                                </div>
                                <div class="title">
                                    <?php echo $slide->title; ?>

                                </div>
                                <div class="readmore">
                                    <a href="<?php echo e($slide->slide_link, false); ?>" class="button-white">Chi tiết <span style="margin-left: 5px;"><i class="bi bi-arrow-right-circle" style="color:#ea3d01"></i></span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="dealtoday-products mb80">
        <div class="container">
            <div class="content-title">
                <div class="hot-product-title">
                    <h2>Ưu đãi hôm nay</h2>
                </div>
                <div class="countdown">
                    <div>Kết thúc sau:</div>
                    <div id="clock" class="d-flex flex-row"></div>
                </div>
            </div>
            <div class="list-product">
                <?php if(!empty(getDealToday())): ?>
                <div class="owl-carousel oc_dealtoday my-3">
                    <?php $__currentLoopData = getDealToday(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    // $cate = getCategoryRootByProductSlug($prod->slug);
                    $cate = getCateById($prod->cate_id);
                    $productRate = getProductRate($prod->id);
                    ?>
                    <?php echo $__env->make('products/items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="product-categories mb80">
        <div class="container py70">
            <div class="top-category mb-3">
                <h2>Danh mục sản phẩm</h2>
            </div>
            <div class="product-categories-list d-flex flex-row my-4">
                <?php if(getCategoryShowHome() != null): ?>
                <div class="owl-carousel oc_categories">
                    <?php $__currentLoopData = getCategoryShowHome(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="items-cate mx-2">
                        <a href="<?php echo e(route('detail',$cate->slug), false); ?>" class="text-decoration-none text-black">
                            <div class="cate-image position-relative">
                                <div class="bg-cate-image"><img src="<?php echo e(asset('../asset/image/plus-cate.webp'), false); ?>" alt="nen danh muc" /></div>
                                <div class="cate-image-icon">
                                    <img src="<?php echo e(Storage::url($cate->images), false); ?>" alt="<?php echo e($cate->title, false); ?>" class="rounded-circle item-thumbnail" />
                                </div>
                            </div>
                            <div class="cate-title text-center"><?php echo e($cate->title, false); ?></div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="product-feature mb80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <div class="left-feature">
                        <?php if(getSlide('left-feature') != null): ?>
                        <?php $__currentLoopData = getSlide('left-feature'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-4 position-relative">
                            <div class="image">
                                <img src="<?php echo e(Storage::url($slide->images), false); ?>" class="d-block w-100">
                            </div>
                            <div class="position-absolute bottom-0 container-fluid margin-auto">
                                <div class="px-3" style="margin-bottom: 30px;">
                                    <div class="title">
                                        <?php echo $slide->title; ?>

                                    </div>
                                    <div class="sub-title">
                                        <?php echo $slide->sub_title; ?>

                                    </div>
                                    <div class="readmore">
                                        <a href="<?php echo e($slide->slide_link, false); ?>" class="button-white">Chi tiết <span style="margin-left: 5px;"><i class="bi bi-arrow-right-circle" style="color:#ea3d01"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-sm-9">
                    <?php echo $__env->make('homepage.feature_products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="slide-after-product-feature mb80">
        <div class="container">
            <?php echo $__env->make('homepage.slide_after_feature_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="home-active-products mb80" style="background-color: #F6F6F6;">
        <div class="container">
            <?php echo $__env->make('homepage.category_active_case', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="home-bestsellers-products mb80">
        <div class="container position-relative">
            <div class="title-block position-absolute mt-2">
                <h2>Sản phẩm bán chạy</h2>
            </div>
            <div class="">
                <?php echo $__env->make('homepage.category-best-seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

    <div class="slide-after-bestseller mb80 container">
        <div class="row banner-after-bestseller">
            <?php if(getSlide('after-bestseller-product') != null): ?>
            <?php $__currentLoopData = getSlide('after-bestseller-product'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-sm-6">
                <div class="position-relative">
                    <div class="image">
                        <img src="<?php echo e(Storage::url($slide->images), false); ?>" class="d-block w-100">
                    </div>
                    <div class="position-absolute top-0 container-fluid margin-auto">
                        <div class="container banner-after-bestseller-infor" style="margin-top: 100px;">
                            <div class="row">
                                <div class="col-12 col-sm-8">
                                    <div class="sub-title text-uppercase text-center text-white">
                                        <?php echo $slide->sub_title; ?>

                                    </div>
                                    <div class="title text-uppercase text-center text-white">
                                        <?php echo $slide->title; ?>

                                    </div>
                                    <div class="readmore text-center">
                                        <a href="<?php echo e($slide->slide_link, false); ?>" class="button-white">Chi tiết <span style="margin-left: 5px;"><i class="bi bi-arrow-right-circle-fill" style="color:#ea3d01"></i></span> </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="top-brand ">
        <div class="container">
            <h2 class="text-center mb-5">Đối tác & Các khách hàng</h2>
            <div class="partnet-slide">
                <?php echo $__env->make('homepage.partner-slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/smartaudio/domains/smartaudio.vn/public_html/resources/views/homepage/desktop/index.blade.php ENDPATH**/ ?>