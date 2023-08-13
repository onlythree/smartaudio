<?php
$lang = config('app.locale');
?>

<?php $__env->startSection('content'); ?>
<?php
$fullUrl = url()->current() . '?filter=true';
?>
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="#" class="text-black text-decoration-none">Cửa hàng</a></div>
        </div>
    </div>
</div>
<div class="container">
    <?php if(getSlide('shop-page')): ?>
    <div class="text-center p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators ">
                <div class="">
                    <?php if(getSlide('shop-page') != null): ?>
                    <?php $__currentLoopData = getSlide('shop-page'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo e($loop->index, false); ?>" class="<?php if($loop->index ==0): ?> active <?php endif; ?>" aria-current="true" aria-label="Slide <?php echo e($loop->index, false); ?>"></button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="carousel-inner">
                <?php if(getSlide('shop-page') != null): ?>
                <?php $__currentLoopData = getSlide('shop-page'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($loop->index == 0): ?> active <?php endif; ?>">

                    <div class="col-12 position-relative">
                        <div class="image">
                            <img src="<?php echo e(Storage::url($slide->images), false); ?>" class="d-block w-100">
                        </div>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon-bi" aria-hidden="true"><i class="bi bi-chevron-left" style="color: #000;font-size: 22px;"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon-bi" aria-hidden="true"><i class="bi bi-chevron-right" style="color: #000;font-size: 22px;"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <?php endif; ?>
</div>
<div class="container content-categories-top">
    <?php if($categories != null): ?>
    <div class="row">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $childCate = getChildeCate($cate->id); ?>
        <div class="col-12 col-sm-4 my-3 ">
            <div class="item-product-cat-content rounded-3">
                <div class="row">
                    <div class="col-5">
                        <img src="<?php echo e(Storage::url($cate->images), false); ?>" alt="<?php echo e($cate->title, false); ?>" class="w-100">
                    </div>
                    <div class="col-7">
                        <h2 class="item-title"><?php echo e($cate->title, false); ?></h2>
                        <?php if($childCate != null): ?>
                        <ul class="ps-3">
                            <?php $__currentLoopData = $childCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chCate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>

                                <a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$chCate->slug]), false); ?>" class="text-decoration-none text-gray"><?php echo e($chCate->title, false); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                        <div class="view-more">
                            <a href="<?php echo e(route('detail',$cate->slug), false); ?>" class="text-decoration-none button-white border">Chi tiết <i class="bi bi-arrow-right-circle-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="widget categories">
                <h2 class="widget-title mb-0">Danh mục sản phẩm</h2>
                <ul class="list-style-none p-0 mb-0">

                    <?php if(count($categories)>0): ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $childCate = getChildeCate($cate->id);
                    ?>
                    <li style="border-bottom:1px solid #CCC;">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#<?php echo e($cate->slug, false); ?>" aria-expanded="false" aria-controls="<?php echo e($cate->slug, false); ?>">
                            <a href="<?php echo e(route('detail',$cate->slug), false); ?>" class="text-decoration-none text-black"><?php echo e($cate->title, false); ?></a>
                            <?php if(count($childCate)): ?>
                            <i class="bi bi-chevron-down"></i>
                            <?php endif; ?>
                        </div>
                        <?php if(count($childCate)>0): ?>
                        <div class="collapse multi-collapse" id="<?php echo e($cate->slug, false); ?>">
                            <ul class="list-style-none ps-0">
                                <?php $__currentLoopData = $childCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ccate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$ccate->slug]), false); ?>" class="text-decoration-none"><i class="bi bi-caret-right-fill"></i> <?php echo e($ccate->title, false); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="widget filter-price">
                <h2 class="widget-title mb-0">Khoảng giá</h2>
                <ul class="list-style-none p-0 mb-0">

                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="0-500000" id="fp0500" <?php if(request()->filter_price == '0-500000'): ?> checked="checked" <?php endif; ?>>
                        <label for="fp0500">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=0-500000&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                Từ 0 - 500.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="500000-1000000" id="fp5001000" <?php if(request()->filter_price == '500000-1000000'): ?> checked="checked" <?php endif; ?>>
                        <label for="fp5001000">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=500000-1000000&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                Từ 500.000 - 1.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="1000000-3000000" id="fp10003000" <?php if(request()->filter_price == '1000000-3000000'): ?> checked="checked" <?php endif; ?>>
                        <label for="fp10003000">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=1000000-3000000&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                Từ 1.000.000 - 3.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="3000000-5000000" id="fp30005000" <?php if(request()->filter_price == '3000000-5000000'): ?> checked="checked" <?php endif; ?>>
                        <label for="fp30005000">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=3000000-5000000&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                Từ 3.000.000 - 5.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="5000000-10000000" id="fp500010000" <?php if(request()->filter_price == '5000000-10000000'): ?> checked="checked" <?php endif; ?>>
                        <label for="fp500010000">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=5000000-10000000&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                Từ 5.000.000 - 10.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="10000000-15000000" id="fp1000015000" <?php if(request()->filter_price == '10000000-15000000'): ?> checked="checked" <?php endif; ?>>
                        <label for="fp1000015000">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=10000000-15000000&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                Từ 10.000.000 - 15.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="15000000-25000000" id="fp1500025000" <?php if(request()->filter_price == '15000000-25000000'): ?> checked="checked" <?php endif; ?>>
                        <label for="fp1500025000">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=15000000-25000000&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                Từ 15.000.000 - 25.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="25000000" id="fp25000" <?php if(request()->filter_price == '25000000'): ?> checked="checked" <?php endif; ?>>
                        <label for="fp25000">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>}&filter_price=25000000&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                Trên 25.000.000 vnđ
                            </a>
                        </label>
                    </li>
                </ul>
            </div>

            <div class="widget filter-price">
                <h2 class="widget-title mb-0">Hãng sản xuất</h2>
                <ul class="list-style-none p-0 mb-0">
                    <?php if($allBrands != null): ?>
                    <?php $__currentLoopData = $allBrands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="border-bottom:1px solid #CCC;" class="px-2 py-1">
                        <input type="radio" name="filter-price" value="<?php echo e($brand->slug, false); ?>" id="<?php echo e($brand->slug, false); ?>" <?php if(request()->brand == $brand->slug): ?> checked="checked" <?php endif; ?>>
                        <label for="<?php echo e($brand->slug, false); ?>">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                <?php echo e($brand->title, false); ?>

                            </a>
                        </label>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="widget reviews">
                <h2 class="widget-title mb-0">Đánh giá</h2>
                <ul class="list-style-none p-0 mb-0">
                    <li class="px-3 py-1 d-flex">
                        <input type="radio" name="reviews" value="5" id="reviews-5" <?php if(request()->rate == 5): ?> checked="checked" <?php endif; ?>>
                        <label for="reviews-5" class="d-flex mx-2">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=5&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                </div>
                            </a>
                        </label>
                    </li>
                    <li class="px-3 py-1 d-flex">
                        <input type="radio" name="reviews" value="4" id="reviews-4" <?php if(request()->rate == 4): ?> checked="checked" <?php endif; ?>>
                        <label for="reviews-4" class="d-flex mx-2">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=4&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                </div>
                            </a>
                        </label>
                    </li>
                    <li class="px-3 py-1 d-flex">
                        <input type="radio" name="reviews" value="3" id="reviews-3" <?php if(request()->rate == 3): ?> checked="checked" <?php endif; ?>>
                        <label for="reviews-3" class="d-flex mx-2">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=3&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                </div>
                            </a>
                        </label>
                    </li>

                    <li class="px-3 py-1 d-flex">
                        <input type="radio" name="reviews" value="2" id="reviews-2" <?php if(request()->rate == 2): ?> checked="checked" <?php endif; ?>>
                        <label for="reviews-2" class="d-flex mx-2">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=2&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                </div>
                            </a>
                        </label>
                    </li>
                    <li class="px-3 py-1 d-flex">
                        <input type="radio" name="reviews" value="1" id="reviews-1" <?php if(request()->rate == 1): ?> checked="checked" <?php endif; ?>>
                        <label for="reviews-1" class="d-flex mx-2">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=1&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-gray">
                                <div class="d-flex">
                                    <i class="bi bi-star-fill color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                    <i class="bi bi-star color-yellow mx-1"></i>
                                </div>
                            </a>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-sm-9">
            <div class="bestseller-product">
                <div class="title-bestseller">
                    <h2>Bán chạy nhất</h2>
                </div>
                <?php
                $bestSellerProducts = bestSeller();
                ?>
                <div class="list-product">
                    <?php if(!empty($products)): ?>
                    <div class="owl-carousel oc_bestseller my-3">
                        <?php
                        $node = 0;
                        foreach ($bestSellerProducts as $prod) {
                            $cate = getCateById($prod->cate_id);
                            $productRate = getProductRate($prod->id);
                            if (!is_array($prod['other_image'])) {
                                $poi = explode(',', $prod['other_image']);
                            } else {
                                $poi = $prod['other_image'];
                            }
                        ?>
                            <div class="products-items mb-4 border-end ">
                                <div class="product-box-border bg-white ">
                                    <div class="row">
                                        <div class="col-12">
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
                                                        <img src="<?php echo e(Storage::url($prod['images']), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                                                    </div>
                                                    <div class="second-image position-absolute top-0" style="width: 100%;height: 100%;">
                                                        <?php if($poi[0] != null): ?>
                                                        <img src="<?php echo e(Storage::url($poi[0]), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                                                        <?php else: ?>
                                                        <img src="<?php echo e(Storage::url($prod['images']), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-infor mt-3 px-1">
                                                <?php echo $__env->make('products.product-rate',['product_rate',$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                <div class="cat-products"><a href="" class="text-decoration-none color-gray"><?php echo e($cate->title, false); ?></a></div>
                                                <h3 class="product-title"><a href="" class="text-decoration-none fw-bold"><?php echo e($prod['title'], false); ?></a></h3>
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
                        } ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="feature-product">
                <div class="title-bestseller">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
                <?php
                $featureProducts = getProductHot();
                ?>
                <div class="list-product">
                    <?php if(!empty($products)): ?>
                    <div class="owl-carousel oc_featureproduct my-3">
                        <?php
                        $node = 0;
                        foreach ($featureProducts as $prod) {
                            $cate = getCateById($prod->cate_id);
                            $productRate = getProductRate($prod->id);
                            if (!is_array($prod['other_image'])) {
                                $poi = explode(',', $prod['other_image']);
                            } else {
                                $poi = $prod['other_image'];
                            }
                        ?>
                            <div class="products-items mb-4 border-end ">
                                <div class="product-box-border bg-white ">
                                    <div class="row">
                                        <div class="col-12">
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
                                                        <img src="<?php echo e(Storage::url($prod['images']), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                                                    </div>
                                                    <div class="second-image position-absolute top-0" style="width: 100%;height: 100%;">
                                                        <?php if($poi[0] != null): ?>
                                                        <img src="<?php echo e(Storage::url($poi[0]), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                                                        <?php else: ?>
                                                        <img src="<?php echo e(Storage::url($prod['images']), false); ?>" alt="<?php echo e($prod['title'], false); ?>" class="w-100">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-infor mt-3 px-1">
                                                <?php echo $__env->make('products.product-rate',['product_rate',$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                <div class="cat-products"><a href="" class="text-decoration-none color-gray"><?php echo e($cate->title, false); ?></a></div>
                                                <h3 class="product-title"><a href="" class="text-decoration-none fw-bold"><?php echo e($prod['title'], false); ?></a></h3>
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
                        } ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="shop-product">
                <div class="categories-top-header d-flex justify-content-between ">
                    <h1 class="text-title-heading">Cửa hàng</h1>
                    <div class="">
                        Hiện thị toàn bộ sản phẩm
                    </div>
                </div>
                <div class="content-topbar-bottom d-flex justify-content-between" style="background: #f3f3f3;padding: 10px 20px;border-radius: 100px;">
                    <div class="paginate">
                        <div class="dropdown">
                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hiện thị <?php
                                            if (!isset(request()->product_count)) {
                                                echo '16';
                                            } else {
                                                echo request()->product_count;
                                            }
                                            ?> sản phẩm
                            </button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item" class="active"><a href="<?php echo e($fullUrl, false); ?>&product_count=16&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">16 sản phẩm</a></li>
                                <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=32&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">32 sản phẩm</a></li>
                                <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=48&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">48 sản phẩm</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sortable d-flex justify-content-around align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mặc định
                            </button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item" class="active"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=noi-bat&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Nổi bật</a></li>
                                <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=danh-gia-cao&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Đánh giá cao</a></li>
                                <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=moi-nhat&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Mới nhất</a></li>
                                <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=gia-thap-den-cao&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Giá thấp đến cao</a></li>
                                <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=gia-cao-xuong-thap&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Giá cao xuống thấp</a></li>
                            </ul>
                        </div>
                        <div class="view-layout d-none d-sm-flex justify-content-around align-items-center">
                            <div class="px-2">
                                <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=grid" class="text-decoration-none text-black">
                                    <i class="bi bi-grid-3x3-gap"></i>
                                </a>
                            </div>
                            <div class="px-2">
                                <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e(request()->brand, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=list" class="text-decoration-none text-black">
                                    <i class="bi bi-list-task"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="display-items-products">
                    <?php if($products != null): ?>
                    <div class="row">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $cate = getCateById($prod->cate_id);
                        $productRate = getProductRate($prod->id);
                        if (!isset(request()->view) || request()->view == 'grid') {
                        ?>
                            <div class="col-6 mt-4 col-sm-3 <?php if(($loop->index)%4==0): ?> <?php else: ?> border-start <?php endif; ?>">
                                <?php echo $__env->make('products/items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php
                        } elseif (request()->view == 'list') {
                        ?>
                            <div class="col-12 mt-4 col-sm-6 <?php if(($loop->index)%2==0): ?> <?php else: ?> border-start <?php endif; ?>">
                            <?php echo $__env->make('products/items-view-list',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php
                        }
                        ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    <div class="pagi mt-4">
                        <?php echo e($products->links('master.paginator'), false); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    $(".oc_featureproduct").owlCarousel({
        margin: 10,
        nav: true,
        dots: false,
        loop: true,
        navText: ["<div class='nav-btn prev-slide' style='border: 1px solid #d4d4d4;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-left\" style=\"font-size: 20px;\"></i></div>", "<div class='nav-btn next-slide' style='border: 1px solid #d4d4d4;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-right\" style=\"font-size: 20px;\"></i></div>"],
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    $(".oc_bestseller").owlCarousel({
        margin: 10,
        nav: true,
        dots: false,
        loop: true,
        navText: ["<div class='nav-btn prev-slide' style='border: 1px solid #d4d4d4;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-left\" style=\"font-size: 20px;\"></i></div>", "<div class='nav-btn next-slide' style='border: 1px solid #d4d4d4;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-right\" style=\"font-size: 20px;\"></i></div>"],
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/products/shop.blade.php ENDPATH**/ ?>