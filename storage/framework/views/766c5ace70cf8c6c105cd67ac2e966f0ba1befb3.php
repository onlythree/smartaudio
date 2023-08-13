<?php
$agent = new Jenssegers\Agent\Agent();

?>


<!-- session content -->
<?php $__env->startSection('content'); ?>

<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('home'), false); ?>" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('detail',$categories->slug), false); ?>" class="text-black text-decoration-none"><?php echo e($categories->title, false); ?></a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="<?php echo e(route('detail',$products->slug), false); ?>" class="text-black text-decoration-none"><?php echo e($products->title, false); ?></a></div>
        </div>
    </div>
</div>

<div class="container product-detail-wrap ">
    <div class="row">
        <div class="col-12 col-sm-5">
            <div class="product-image">
                <div id="productDetailIndicators" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="popupZoom" data-product-image="<?php echo e(Storage::url($products->images), false); ?>">
                                <img src="<?php echo e(Storage::url($products->images), false); ?>" class="d-block w-100">
                            </div>
                        </div>
                        <?php if(!empty($products->other_image)): ?>
                        <?php $__currentLoopData = $products->other_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item">
                            <div class="popupZoom" data-product-image="<?php echo e(Storage::url($products->images), false); ?>">
                                <img src="<?php echo e(Storage::url($poima), false); ?>" class="d-block w-100">
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productDetailIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon-bi" aria-hidden="true"><i class="bi bi-chevron-left" style="color: #000;font-size: 22px;"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productDetailIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon-bi" aria-hidden="true"><i class="bi bi-chevron-right" style="color: #000;font-size: 22px;"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                    <div class="carousel-indicators">
                        <div data-bs-target="#productDetailIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0">
                            <img src="<?php echo e(Storage::url($products->images), false); ?>" class="d-block w-100">
                        </div>
                        <?php if(!empty($products->other_image)): ?>
                        <?php $__currentLoopData = $products->other_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div data-bs-target="#productDetailIndicators" data-bs-slide-to="<?php echo e($loop->index+1, false); ?>" class="" aria-current="true" aria-label="Slide <?php echo e($loop->index+1, false); ?>">
                            <img src="<?php echo e(Storage::url($poima), false); ?>" class="d-block w-100">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-sm-7">
            <div class="ms-5">
                <h1 class="product_title"><?php echo e($products->title, false); ?></h1>

                <div class="product-rate d-flex justify-content-start align-items-center">
                    <div class="">
                        <?php
                        $productRate = getProductRate($products->id);
                        $brand = getBrandById($products->brand_id);
                        $cate = getCateById($products->cate_id);
                        ?>
                        <?php echo $__env->make('products.product-rate',['productRate'=>$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="ms-2"><b>Hãng:</b> <?php if($brand != null): ?> <a href="" class="text-decoration-none text-black"><?php echo e($brand->title, false); ?></a> <?php endif; ?></div>
                </div>
                <div class="product-price d-flex align-items-baseline border-bottom mb-4 py-2">
                    <?php
                    if ($products->base_price > 0 && $products->sale_price > 0) {
                    ?>
                        <div class="product-base-price text-decoration-line-through" style="font-size: 13px;color: #636363;padding-right:10px;"><?php echo e(number_format($products->base_price,0,',','.'), false); ?>

                            <smal style="font-size: 13px;">đ</smal>
                        </div>
                        <div class="product-sale-price" style="color: #ea3d01;font-weight: bold;"><?php echo e(number_format($products->sale_price,0,',','.'), false); ?>

                            <smal style="font-size: 13px;">đ</smal>
                        </div>
                    <?php
                    } else if ($products->base_price > 0 && $products->sale_price <= 0) {
                    ?>
                        <div class="product-base-price" style="color: #444;font-weight: bold;"><?php echo e(number_format($products->base_price,0,',','.'), false); ?>

                            <smal style="font-size: 13px;">đ</smal>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="short-description mb-3">
                    <?php echo nl2br($products->short_description); ?>

                </div>
                <div class="border-bottom mb-4 pb-4 ">

                    <div class="d-flex">
                        <div class="me-3 product-button-icon addtocart__button  button-red" data-product-id="<?php echo e($products->id, false); ?>">
                            <label class="cursor-pointer"><i class="bi bi-bag"></i> Thêm vào giỏ </label>
                        </div>
                        <div class="me-3 product-button-icon addtolove__button  button-white border" data-product-id="<?php echo e($products->id, false); ?>">
                            <label class="cursor-pointer"> <i class="bi bi-heart"></i> Yêu thích </label>
                        </div>
                        <div class="me-3 product-button-icon addtocompare__button  button-white border" data-product-id="<?php echo e($products->id, false); ?>">
                            <label class="cursor-pointer"><i class="bi bi-bezier2"></i> So sánh </label>
                        </div>
                    </div>
                </div>
                <div class="mb-4 pb-4 ">
                    <div class="">
                        <b>Danh mục:</b> <a href="" class="text-decoration-none color-gray"><?php echo e($cate->title, false); ?></a>
                    </div>
                    <div class="social-icon my-3">
                        <div class="social-share d-flex justify-content-start">
                            <div class="me-3"><label>Share : </label></div>
                            <div class="border button-white me-1" style="width: 30px;height: 30px;border-radius: 100px;display: flex;justify-content: center;align-items: center;">
                                <a class="text-decoration-none " href="https://www.facebook.com/sharer.php?u=<?php echo e(url()->full(), false); ?>&amp;i=<?php echo e(url('/'), false); ?><?php echo e(Storage::url($products->images), false); ?>" title="Facebook" class="share-facebook" target="_blank">
                                    <i class="bi bi-facebook text-gray"></i>
                                </a>
                            </div>
                            <div class="border button-white me-1" style="width: 30px;height: 30px;border-radius: 100px;display: flex;justify-content: center;align-items: center;">
                                <a class="text-decoration-none " href="https://twitter.com/intent/tweet?url=<?php echo e(url()->full(), false); ?>" title="Twitter" class="share-twitter">
                                    <i class="bi bi-twitter text-gray"></i>
                                </a>
                            </div>
                            <div class="border button-white me-1" style="width: 30px;height: 30px;border-radius: 100px;display: flex;justify-content: center;align-items: center;">
                                <a class="text-decoration-none " href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(url()->full(), false); ?>" title="LinkedIn" class="share-linkedin">
                                    <i class="bi bi-linkedin text-gray"></i>
                                </a>
                            </div>
                            <div class="border button-white me-1" style="width: 30px;height: 30px;border-radius: 100px;display: flex;justify-content: center;align-items: center;">
                                <a class="text-decoration-none " href="https://pinterest.com/pin/create/button/?url=<?php echo e(url()->full(), false); ?>&amp;media=<?php echo e(url('/'), false); ?><?php echo e(Storage::url($products->images), false); ?>" title="Pinterest" class="share-pinterest">
                                    <i class="bi bi-pinterest text-gray"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="position-relative">
    <div class="border-bottom" style="top: 47px;position: relative;"></div>
    <div class="container" id="product-detail-tab">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button style="min-width:130px" class="nav-link active" id="nav-content-tab" data-bs-toggle="tab" data-bs-target="#nav-content" type="button" role="tab" aria-controls="nav-content" aria-selected="true">Mô tả</button>
                <button style="min-width:130px" class="nav-link" id="nav-short-description-tab" data-bs-toggle="tab" data-bs-target="#nav-short-description" type="button" role="tab" aria-controls="nav-short-description" aria-selected="false">Thông số</button>
                <button style="min-width:130px" class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">Đánh giá (<?php echo e($reviewsTotalCount, false); ?>)</button>
                <button style="min-width:130px" class="nav-link" id="nav-newprod-tab" data-bs-toggle="tab" data-bs-target="#nav-newprod" type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">Ưu đãi hôm nay</button>
            </div>
        </nav>
        <div class="tab-content container" id="nav-tabContent">
            <div class="tab-pane fade show active py-4 pt-5" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab" tabindex="0">
                <?php echo $products->content; ?>

            </div>
            <div class="tab-pane fade  py-4 pt-5" id="nav-short-description" role="tabpanel" aria-labelledby="nav-short-description-tab" tabindex="0">
                <?php echo $products->technical; ?>

            </div>
            <div class="tab-pane fade py-4 pt-5" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab" tabindex="0">
                <h2 style="font-size: 24px;"><?php echo e($reviewsTotalCount, false); ?> Đánh giá cho sản phẩm <b><?php echo e($products->title, false); ?></b></h2>
                <div class="row my-2 mt-4">
                    <?php if(count($reviews)>0): ?>
                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $randomcolor = '#' . dechex(rand(0, 10000000));
                    ?>
                    <div class="border mb-3 p-3 rounded">
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-item-center">
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="avatar d-flex justify-content-center me-2">
                                        <div class="rounded-circle d-flex justify-content-center align-items-center" style="width: 60px;text-align: center;border: 1px solid #dfdcdc36;height: 60px;font-size: 24px;color:#FFF;background: <?php echo e($randomcolor, false); ?>;">
                                            <?php echo e(substr($rv->product_reviewer_name, 0, 2), false); ?>

                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold"><?php echo e($rv->product_reviewer_name, false); ?></div>
                                        <div class=""><?php echo e($rv->created_at, false); ?></div>
                                    </div>
                                </div>
                                <div>
                                    <?php if($rv->product_rate == 5): ?>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                    </div>
                                    <?php elseif($rv->product_rate == 4): ?>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                    </div>
                                    <?php elseif($rv->product_rate == 3): ?>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                    </div>
                                    <?php elseif($rv->product_rate == 2): ?>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                    </div>
                                    <?php elseif($rv->product_rate == 1): ?>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <i class="bi bi-star-fill color-yellow"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                        <i class="bi bi-star-fill color-gray"></i>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-2"><?php echo e($rv->product_review_content, false); ?></div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                </div>
                <div class="row mt-4">
                    <div class="col-12 col-sm-3">
                        <div style="font-size: 18px;">Đánh giá trung bình</div>
                        <div style="font-size: 55px;margin: 0;font-weight: 800;color: #f03333;">
                            <?php if($productRate != null): ?>
                            <?php echo e(floatval($productRate->rate), false); ?>

                            <?php endif; ?>
                        </div>
                        <div class="rate-start">
                            <?php echo $__env->make('products.product-rate',['product_rate',$productRate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="bar-rating mt-2">
                                <div class="star-item 5-stars d-flex justify-content-start  align-items-center mb-3">
                                    <div class="star-label me-2">5 Sao</div>
                                    <div class="progress me-2" style="min-width: 200px;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: <?php if($reviewsTotalCount>0): ?><?php echo e(($count5s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%"></div>
                                    </div>
                                    <div class="star-value"><?php if($reviewsTotalCount>0): ?><?php echo e(($count5s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%</div>
                                </div>
                                <div class="star-item 4-stars d-flex justify-content-start  align-items-center mb-3">
                                    <div class="star-label me-2">4 Sao</div>
                                    <div class="progress me-2" style="min-width: 200px;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: <?php if($reviewsTotalCount>0): ?><?php echo e(($count4s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%"></div>
                                    </div>
                                    <div class="star-value"><?php if($reviewsTotalCount>0): ?><?php echo e(($count4s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%</div>
                                </div>
                                <div class="star-item 3-stars d-flex justify-content-start  align-items-center mb-3">
                                    <div class="star-label me-2">3 Sao</div>
                                    <div class="progress me-2" style="min-width: 200px;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: <?php if($reviewsTotalCount>0): ?><?php echo e(($count3s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%"></div>
                                    </div>
                                    <div class="star-value"><?php if($reviewsTotalCount>0): ?><?php echo e(($count3s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%</div>
                                </div>
                                <div class="star-item 2-stars d-flex justify-content-start  align-items-center mb-3">
                                    <div class="star-label me-2">2 Sao</div>
                                    <div class="progress me-2" style="min-width: 200px;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: <?php if($reviewsTotalCount>0): ?><?php echo e(($count2s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%"></div>
                                    </div>
                                    <div class="star-value"><?php if($reviewsTotalCount>0): ?><?php echo e(($count2s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%</div>
                                </div>
                                <div class="star-item 1-stars d-flex justify-content-start align-items-center">
                                    <div class="star-label me-2">1 Sao</div>
                                    <div class="progress me-2" style="min-width: 200px;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: <?php if($reviewsTotalCount>0): ?><?php echo e(($count1s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%"></div>
                                    </div>
                                    <div class="star-value"><?php if($reviewsTotalCount>0): ?><?php echo e(($count1s/$reviewsTotalCount)*100, false); ?><?php else: ?> 0 <?php endif; ?>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-9">
                        <h3 style="font-size: 20px;color: #444444;"><i class="bi bi-pencil-square"></i> Gửi đánh giá</h3>
                        <div class="border p-4 mt-4">
                            <i>Nhập thông tin của bạn để gửi đánh giá sản phẩm cho chúng tôi</i>
                            <form id="submitReviewsForm">
                                <?php echo csrf_field(); ?>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <div class="rateting form-group mb-2">
                                            <select name="ratingStart" id="ratingStart" class="form-control">
                                                <option value="5">5 Sao</option>
                                                <option value="4">4 Sao</option>
                                                <option value="3">3 Sao</option>
                                                <option value="2">2 Sao</option>
                                                <option value="1">1 Sao</option>
                                            </select>
                                        </div>
                                        <div class="review-infor form-group mb-2">
                                            <input type="text" name="ratingName" id="ratingName" class="form-control" placeholder="Nhập tên của bạn">
                                            <div class="ratingNameError text-danger"></div>
                                        </div>
                                        <div class="review-infor form-group mb-2">
                                            <input type="text" name="ratingEmail" id="ratingEmail" class="form-control" placeholder="Nhập email">
                                            <div class="ratingEmailError text-danger"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="review-infor form-group">
                                            <textarea name="ratingContent" id="ratingContent" class="form-control" cols="30" rows="5" placeholder="Nhập nội dung"></textarea>
                                            <div class="ratingContentError text-danger"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo e($products->id, false); ?>" />
                                        <div class="button-red text-center cursor-pointer" id="submit-rating">
                                            Gửi đánh giá
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade py-4 pt-5" id="nav-newprod" role="tabpanel" aria-labelledby="nav-newprod-tab" tabindex="0">
                <?php if(!empty(getDealToday())): ?>
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

                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="product_title text-center" style="font-size: 24px;">Sản phẩm liên quan</h2>
    <?php if(!empty($related_products)): ?>
    <div class="owl-carousel oc_relatedp my-3">
        <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $re): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $cate = getCateById($re->cate_id);
        $productRateRelated = getProductRate($re->id); 
        if (!is_array($re['other_image'])) {
            $poi = explode(',', $re['other_image']);
        } else {
            $poi = $re['other_image'];
        }
        ?>
        <div class="products-items mb-4 border-end ">
            <div class="product-box-border bg-white ">
                <div class="row">
                    <div class="col-12">
                        <div class="product-images w-100 position-relative">
                            <div class="position-absolute" style="right: 20px;top: 10px;">
                                <div class="label">
                                    <?php if($re['hot'] == 1): ?>
                                    <label class="button-red">Hot</label>
                                    <?php elseif($re['best_seller'] == 1): ?>
                                    <label class="button-green">Bán chạy</label>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="position-relative product_images">
                                <div class="first-image">
                                    <a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$re['slug']]), false); ?>">
                                        <img src="<?php echo e(Storage::url($re['images']), false); ?>" alt="<?php echo e($re['title'], false); ?>" class="w-100">
                                    </a>
                                </div>
                                <div class="second-image position-absolute top-0" style="width: 100%;height: 100%;">
                                    <a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$re['slug']]), false); ?>">
                                        <?php if($poi[0] != null): ?>
                                        <img src="<?php echo e(Storage::url($poi[0]), false); ?>" alt="<?php echo e($re['title'], false); ?>" class="w-100">
                                        <?php else: ?>
                                        <img src="<?php echo e(Storage::url($re['images']), false); ?>" alt="<?php echo e($re['title'], false); ?>" class="w-100">
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product-infor mt-3 px-1">
                            <div class="product-rate d-flex justify-content-start align-items-center">
                                <div class="product-rate-icon">
                                    <?php
                                    if ($productRateRelated == null) {
                                    ?>
                                        <div class="d-flex">
                                            <i class="bi bi-star color-gray"></i>
                                            <i class="bi bi-star color-gray"></i>
                                            <i class="bi bi-star color-gray"></i>
                                            <i class="bi bi-star color-gray"></i>
                                            <i class="bi bi-star color-gray"></i>
                                        </div>
                                        <?php
                                    } else {
                                        if (floatval($productRateRelated->rate) == 1) {
                                        ?>
                                            <div class="d-flex">
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                            </div>
                                        <?php
                                        }
                                        if (floatval($productRateRelated->rate) > 1 && floatval($productRateRelated->rate) < 2) {
                                        ?>
                                            <div class="d-flex">
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-half color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                            </div>
                                        <?php
                                        }
                                        if (floatval($productRateRelated->rate) == 2) {
                                        ?>
                                            <div class="d-flex">
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                            </div>
                                        <?php
                                        }
                                        if (floatval($productRateRelated->rate) > 2 && floatval($productRateRelated->rate) < 3) {
                                        ?>
                                            <div class="d-flex">
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-half color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                            </div>
                                        <?php
                                        }
                                        if (floatval($productRateRelated->rate) == 3) {
                                        ?>
                                            <div class="d-flex">
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                            </div>
                                        <?php
                                        }
                                        if (floatval($productRateRelated->rate) > 3 && floatval($productRateRelated->rate) < 4) {
                                        ?>
                                            <div class="d-flex">
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-half color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                            </div>
                                        <?php
                                        }
                                        if (floatval($productRateRelated->rate) == 4) {
                                        ?>
                                            <div class="d-flex">
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star color-yellow"></i>
                                            </div>
                                        <?php
                                        }

                                        if (floatval($productRateRelated->rate) > 4 && floatval($productRateRelated->rate) < 5) {
                                        ?>
                                            <div class="d-flex">
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-half color-yellow"></i>
                                            </div>
                                        <?php
                                        }
                                        if (floatval($productRateRelated->rate) == 5) {
                                        ?>
                                            <div class="d-flex">
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                                <i class="bi bi-star-fill color-yellow"></i>
                                            </div>
                                    <?php
                                        }
                                    } ?>
                                </div>
                                <?php if($productRateRelated == null): ?>
                                <div class="product-rate-count ms-1">(0) Đánh giá</div>
                                <?php else: ?>
                                <div class="product-rate-count ms-1">(<?php echo e($productRateRelated->total, false); ?>) Đánh giá</div>
                                <?php endif; ?>
                            </div>
                            <div class="cat-products"><a href="" class="text-decoration-none color-gray"><?php echo e($cate->title, false); ?></a></div>
                            <h3 class="product-title"><a href="<?php echo e(route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$re['slug']]), false); ?>" class="text-decoration-none fw-bold"><?php echo e($re['title'], false); ?></a></h3>
                            <div class="product-price d-flex align-items-baseline flex-column">
                                <?php
                                if ($re['base_price'] > 0 && $re['sale_price'] > 0) {
                                ?>
                                    <div class="product-base-price text-decoration-line-through" style="font-size: 13px;color: #636363;padding-right:10px;"><?php echo e(number_format($re['base_price'],0,',','.'), false); ?>

                                        <smal style="font-size: 13px;">đ</smal>
                                    </div>
                                    <div class="product-sale-price" style="color: #ea3d01;font-weight: bold;"><?php echo e(number_format($re['sale_price'],0,',','.'), false); ?>

                                        <smal style="font-size: 13px;">đ</smal>
                                    </div>
                                <?php
                                } else if ($re['base_price'] > 0 && $re['sale_price'] <= 0) {
                                ?>
                                    <div class="product-base-price" style="color: #444;font-weight: bold;"><?php echo e(number_format($re['base_price'],0,',','.'), false); ?>

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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</div>
<!-- Modal -->
<div class="modal fade" id="productZoomModal" tabindex="-1" aria-labelledby="productZoomModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;">
        <div class="modal-content">
            <div class="modal-body position-relative">
                <div class="position-absolute" style="right: 5px;top: 5px;z-index: 999;"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="product-image">
                    <div id="productDetailIndicatorsPop" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="popupZoom" data-product-image="<?php echo e(Storage::url($products->images), false); ?>">
                                    <img src="<?php echo e(Storage::url($products->images), false); ?>" class="d-block w-100">
                                </div>
                            </div>
                            <?php if(!empty($products->other_image)): ?>
                            <?php $__currentLoopData = $products->other_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item">
                                <div class="popupZoom" data-product-image="<?php echo e(Storage::url($products->images), false); ?>">
                                    <img src="<?php echo e(Storage::url($poima), false); ?>" class="d-block w-100">
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#productDetailIndicatorsPop" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon-bi" aria-hidden="true"><i class="bi bi-chevron-left" style="color: #000;font-size: 22px;"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productDetailIndicatorsPop" data-bs-slide="next">
                            <span class="carousel-control-next-icon-bi" aria-hidden="true"><i class="bi bi-chevron-right" style="color: #000;font-size: 22px;"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<!-- session content -->
<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    $(document).ready(function() {

        $('#quantity_sub').on('click', function() {
            var quantity = $('#quantity').val();
            if (parseInt(quantity) > 1) {
                $('#quantity').val(parseInt(quantity) - 1);
            }
        });
        $('#quantity_plus').on('click', function() {
            var quantity = $('#quantity').val();
            $('#quantity').val(parseInt(quantity) + 1);
        });

        $('#addtocart__button').on('click', function() {
            var $quantity = $("#quantity").val();
            var $productId = $(this).attr('data-product-id');
            var $data = {
                "_token": "<?php echo e(csrf_token(), false); ?>",
                "quantity": $quantity,
                "productId": $productId
            };
            $.ajax({
                url: "<?php echo e(route('addToCart'), false); ?>",
                method: "post",
                data: $data,
                success: function(res) {
                    window.location.replace(
                        "<?php echo e(route('shoppingCartOrder'), false); ?>?ref=<?php echo e(url()->full(), false); ?>"
                    );
                },
                error: function(request, status, error) {
                    console.log("ajax call went wrong:" + request.responseText);
                }
            });

        });

        $('#buynow__button').on('click', function() {
            var $quantity = $("#quantity").val();
            var $packing = $("input[name='packing']:checked").val();
            var $productId = $(this).attr('data-product-id');

            var $data = {
                "_token": "<?php echo e(csrf_token(), false); ?>",
                "packing": $packing,
                "quantity": $quantity,
                "productId": $productId
            };
            $.ajax({
                url: "<?php echo e(route('addToCart'), false); ?>",
                method: "post",
                data: $data,
                success: function(res) {
                    window.location.replace("<?php echo e(route('payment'), false); ?>");
                },
                error: function(request, status, error) {
                    console.log("ajax call went wrong:" + request.responseText);
                }
            });
        });

        $('.popupZoom').on('click', function() {
            // $productImage = $(this).attr('data-product-image');
            // $productOtherImage = $(this).attr('data-product-other-image'); 
            // $('.modal-product-image').html('<img src="'+$productImage+'" alt="anh" class="w-100"/>');

            $('#productZoomModal').modal('show');
        });
        $(".oc_relatedp").owlCarousel({
            margin: 10,
            nav: true,
            dots: false,
            loop: true,
            navText: ["<div class='nav-btn prev-slide' style='border: 1px solid #d4d4d4;border-radius: 100px;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-left\" style=\"font-size: 20px;\"></i></div>", "<div class='nav-btn next-slide' style='border: 1px solid #d4d4d4;border-radius: 100px;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-right\" style=\"font-size: 20px;\"></i></div>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
        $(".oc_dealtoday").owlCarousel({
            margin: 10,
            nav: true,
            dots: false,
            loop: true,
            // navText: ["<div class='nav-btn prev-slide' style='border: 1px solid #d4d4d4;border-radius: 100px;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-left\" style=\"font-size: 20px;\"></i></div>", "<div class='nav-btn next-slide' style='border: 1px solid #d4d4d4;border-radius: 100px;width: 30px;height: 40px;align-items: center;display: flex;justify-content: center;'><i class=\"bi bi-chevron-right\" style=\"font-size: 20px;\"></i></div>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });

        $('#clock').countdown('<?php echo e(\Carbon\Carbon::now()->addDays(1)->format("Y/m/d"), false); ?>', function(event) {
            var $this = $(this).html(event.strftime('' +
                // '<span>%w</span> weeks ' +
                // '<span>%d</span> days ' +
                '<div class="bclock"><span>%H</span>H</div>' +
                '<div class="bclock"><span>%M</span>M</div>' +
                '<div class="bclock"><span>%S</span>S</div>'));
        });
        $('#submit-rating').on('click', function() {

            var productId = $(this).attr('product-id');
            var ratingStart = $('#ratingStart').val();
            var ratingName = $('#ratingName').val();
            var ratingEmail = $('#ratingEmail').val();
            var ratingContent = $('#ratingContent').val();

            var checkratingName = false;
            var checkratingEmail = false;
            var checkratingContent = false;

            if (ratingName != "") {
                $('.ratingNameError').html('');
                checkratingName = true;
            } else {
                $('.ratingNameError').html('Nhập tên của bạn');
            }
            if (ratingEmail != "") {
                $('.ratingEmailError').html('');
                checkratingEmail = true;
            } else {
                $('.ratingEmailError').html('Nhập email của bạn');
            }
            if (ratingContent != "") {
                $('.ratingContentError').html('');
                checkratingContent = true;
            } else {
                $('.ratingContentError').html('Nhập nội dung dánh giá');
            }
            if (checkratingName && checkratingEmail && checkratingContent) {
                var form = $('#submitReviewsForm');
                $.ajax({
                    type: "POST",
                    url: '<?php echo e(route("submitReviews"), false); ?>',
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        // show response from the php script.
                        $('#alertContent').html('<p style="text-align:center">Đánh giá của bạn đã được gửi đến chúng tôi.<br/> Quản trị viên sẽ xem xét và cho phép hiện thị đánh giá của bạn</p>');
                        $('#alertModal').modal('show');
                        window.location.reload();
                    }
                });
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\smartaudio\resources\views/products/detail.blade.php ENDPATH**/ ?>