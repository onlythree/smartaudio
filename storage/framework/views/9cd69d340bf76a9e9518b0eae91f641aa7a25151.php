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
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('detail',$categories->slug), false); ?>" class="text-black text-decoration-none"><?php echo e($categories->title, false); ?></a></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="categories-description">
        <?php echo $categories->content; ?>

    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-12 col-sm-3 order-2 order-sm-1">
            <div class="widget categories">
                <h2 class="widget-title mb-0">Danh mục sản phẩm</h2>
                <ul class="list-style-none p-0 mb-0">
                    <li class="back-shop" style="border-bottom:1px solid #CCC;"><a href="<?php echo e(route('shop'), false); ?>" class="text-decoration-none text-black"><i class="bi bi-chevron-left"></i> Toàn bộ danh mục</a></li>
                    <li style="border-bottom:1px solid #CCC;">
                        <a href="<?php echo e($categories->slug, false); ?>" class="text-decoration-none text-red"><?php echo e($categories->title, false); ?> (<?php echo e(countProductIncate($categories->id), false); ?>)</a>
                    </li>
                    <li>
                        <?php if(count($childCate)> 0): ?>
                        <ul class="list-style-none ps-0">
                            <?php $__currentLoopData = $childCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                            <a href="<?php echo e(route('detail-lv2',['slug'=>$categories->slug,'sluglv2'=>$cate->slug]), false); ?>" class="text-decoration-none"><i class="bi bi-caret-right-fill"></i> <?php echo e($cate->title, false); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                    </li>
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
                    <?php if($brands != null): ?>
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
        <div class="col-12 col-sm-9 order-1 order-sm-2">
            <div class="categories-top-header d-flex justify-content-between mx-1">
                <h1 class="text-title-heading"><?php echo e($categories->title, false); ?></h1>
                <div class="">
                    Hiện thị toàn bộ <?php echo e(countProductIncate($categories->id), false); ?> sản phẩm
                </div>
            </div>
            <div class="content-topbar-bottom d-flex justify-content-between mx-1" style="background: #f3f3f3;padding: 10px 20px;border-radius: 100px;">
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
                            <li class="dropdown-item" class="active"><a href="<?php echo e($fullUrl, false); ?>&product_count=16&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">16 sản phẩm</a></li>
                            <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=32&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">32 sản phẩm</a></li>
                            <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=48&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">48 sản phẩm</a></li>
                        </ul>
                    </div>
                </div>

                <div class="sortable d-flex justify-content-around align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mặc định
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item" class="active"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=noi-bat&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Nổi bật</a></li>
                            <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=danh-gia-cao&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Đánh giá cao</a></li>
                            <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=moi-nhat&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Mới nhất</a></li>
                            <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=gia-thap-den-cao&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Giá thấp đến cao</a></li>
                            <li class="dropdown-item"><a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=gia-cao-xuong-thap&view=<?php echo e(request()->view, false); ?>" class="text-decoration-none text-black">Giá cao xuống thấp</a></li>
                        </ul>
                    </div>
                    <div class="view-layout d-flex justify-content-around align-items-center">
                    <div class="px-2">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=grid" class="text-decoration-none text-black">
                                <i class="bi bi-grid-3x3-gap"></i>
                            </a>
                        </div>
                        <div class="px-2">
                            <a href="<?php echo e($fullUrl, false); ?>&product_count=<?php echo e(request()->product_count, false); ?>&filter_price=<?php echo e(request()->filter_price, false); ?>&brand=<?php echo e($brand->slug, false); ?>&rate=<?php echo e(request()->rate, false); ?>&sort=<?php echo e(request()->sort, false); ?>&view=list" class="text-decoration-none text-black">
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
                        } ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

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
            loop: false,
            navText: ["<div class='nav-btn prev-slide'><i class=\"bi bi-chevron-compact-left\" style=\"font-size: 30px;\"></i></div>", "<div class='nav-btn next-slide'><i class=\"bi bi-chevron-compact-right\" style=\"font-size: 30px;\"></i></div>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        }); 
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/categories/category_show.blade.php ENDPATH**/ ?>