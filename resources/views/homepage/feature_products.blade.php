<div class="product-feature-tabs">
    <nav>
        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="true">Top đánh giá cao</button>
            <button class="nav-link" id="nav-bestseller-tab" data-bs-toggle="tab" data-bs-target="#nav-bestseller" type="button" role="tab" aria-controls="nav-bestseller" aria-selected="false">Sản phẩm bán chạy</button>
            <button class="nav-link" id="nav-feature-tab" data-bs-toggle="tab" data-bs-target="#nav-feature" type="button" role="tab" aria-controls="nav-feature" aria-selected="false">Sản phẩm nổi bật</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab" tabindex="0">
            <div class="list-product">
                @if(!empty(getTopReviewsProduct()))
                <div class="my-3 row">
                    @foreach (getTopReviewsProduct() as $prod)
                    <?php

                    $cate = getCateById($prod['cate_id']);

                    $productRate = getProductRate($prod['product_id']);
                    if (!is_array($prod['other_image'])) {
                        $poi = explode(',', $prod['other_image']);
                    } else {
                        $poi = $prod['other_image'];
                    }
                    ?>
                    <div class="product-box-border bg-white col-6 col-sm-3 mb-4 @if((($loop->index)+1)%4!=0) border-end @endif">
                        @include('homepage.desktop.product-items-tab',['cate'=>$cate,'productRate'=>$productRate,'poi'=>$poi])
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <div class="tab-pane fade" id="nav-bestseller" role="tabpanel" aria-labelledby="nav-bestseller-tab" tabindex="0">
            <div class="list-product">
                @if(!empty(bestSeller()))
                <div class="my-3 row">
                    @foreach (bestSeller() as $prod)
                    <?php
                    $cate = getCateById($prod['cate_id']);
                    $productRate = getProductRate($prod['product_id']);
                    if (!is_array($prod['other_image'])) {
                        $poi = explode(',', $prod['other_image']);
                    } else {
                        $poi = $prod['other_image'];
                    }
                    ?>
                    <div class="product-box-border bg-white col-6 col-sm-3 mb-4 @if((($loop->index)+1)%4!=0) border-end @endif">
                        @include('homepage.desktop.product-items-tab',['cate'=>$cate,'productRate'=>$productRate,'poi'=>$poi])
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <div class="tab-pane fade" id="nav-feature" role="tabpanel" aria-labelledby="nav-feature-tab" tabindex="0">
            <div class="list-product">
                @if(!empty(getProductHot()))
                <div class="my-3 row">
                    @foreach (getProductHot() as $prod)
                    <?php
                    $cate = getCateById($prod['cate_id']);
                    $productRate = getProductRate($prod['product_id']);
                    if (!is_array($prod['other_image'])) {
                        $poi = explode(',', $prod['other_image']);
                    } else {
                        $poi = $prod['other_image'];
                    }
                    ?>
                    <div class="product-box-border bg-white col-6 col-sm-3 mb-4 @if((($loop->index)+1)%4!=0) border-end @endif">
                        @include('homepage.desktop.product-items-tab',['cate'=>$cate,'productRate'=>$productRate,'poi'=>$poi])
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</div>