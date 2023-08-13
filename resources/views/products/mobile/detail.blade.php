<div class="container product-detail-wrap">

    <div class="product-detail row">
        <div class="col-12 col-sm-6">
            <div class="product-image w-100 position-relative">
                <img src="{{ Storage::url($products->images) }}" alt="{{ $products->title }}" class="w-100">
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <h1 class="fs-3">{{ $products->title }}</h1>
            <div class="product-detail-price">
                <div class="product-price my-2">
                    <?php
                    if ($products->base_price > 0 && $products->sale_price > 0) { ?>
                        <div class="product-base-price text-decoration-line-through fs-5" style="color:dimgrey">{{ number_format($products->base_price,0,',','.') }}</div>
                        <div class="product-sale-price fs-4" style="color:red">{{ number_format($products->sale_price,0,',','.') }}</div>
                    <?php
                    } elseif ($products->base_price > 0 && $products->sale_price <= 0) {
                    ?>
                        <div class="product-base-price fs-5" style="color:red">{{ number_format($products->base_price,0,',','.') }}</div>
                    <?php
                    } elseif ($products->base_price <= 0) {
                    ?>
                        <div class="product-base-price fs-4" style="color:red">LIÊN HỆ</div>
                    <?php
                    } ?>
                </div>
            </div>
            <div class="product-detail_short-description">
                {!! nl2br($products->short_description) !!}
            </div>
            <div class="order mt-2">
                @if ($products->base_price > 0)
                <div class="cart_quantity d-flex align-items-center">
                    <div class="quantity me-3">Số lượng</div>
                    <div class="input-group" style="max-width:160px;">
                        <button class="btn btn-default btn-sm rounded-0" style="background-color: #000;" type="button" id="quantity_sub"><i class="bi bi-caret-down text-white"></i></button>
                        <input type="text" class="form-control text-center" name="quantity" id="quantity" value="1">
                        <button class="btn btn-default btn-sm rounded-0" style="background-color: #000;" type="button" id="quantity_plus"><i class="bi bi-caret-up text-white"></i></button>
                    </div>
                </div>
                <div class="cart_area d-flex my-2 row">
                    <div class="col-12 col-sm-6 add_to_cart_button">
                        <button class="btn btn-outline-danger w-100" id="addtocart__button" data-product-id="{{ $products->id }}">
                            <i class="bi bi-cart-plus-fill"></i> Thêm vào giỏ
                        </button>
                    </div>
                    <div class="col-12 col-sm-6 buynow">
                        <button class="btn btn-danger w-100" id="buynow__button" data-product-id="{{ $products->id }}">Mua ngay</button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="description position-relative border-top mt-4">
        <div class="product-detail_description-title mb-4">
            <div style="position: relative;border-top: 2px solid #1f78b8;padding-top: 10px;margin-left: 50px;width: 100px;text-align: center;">MÔ TẢ</div>
        </div>
        <div class="product-detail-content">
            {!! $products->content !!}
        </div>
    </div>
    <div class="related-products">
        <div class="description position-relative border-top mt-4">
            <div class="product-detail_description-title mb-4">
                <div style="position: relative;border-top: 2px solid #1f78b8;padding-top: 10px;margin-left: 50px;width: 200px;text-align: center;">Sản phẩm cùng loại</div>
            </div>
            <div class="product-detail-content">
                @if(!empty($related_products))
                <div class="">
                    @foreach($related_products as $prod)
                    <?php
                    $cate = getCategoryRootByProductSlug($prod->slug);
                    ?>
                    <div class="product-box-border bg-white ">
                        <a href="{{ route('detail-lv2',[$cate->slug,$prod->slug]) }}" class="text-decoration-none">
                            <div class="row m-0 mb-2 p-1 border">
                                <div class="product-images-mobile col-6 mt-3">
                                    <img src="{{ Storage::url($prod->images) }}" alt="{{ $prod->title }}" class="w-100">
                                    <b style="font-size: 14px;">{{ $prod->title }}</b>
                                    <?php
                                    if ($prod->sale_price > 0) {
                                    ?>
                                        <div class="del-price"><del>{{ number_format($prod->base_price,0,',','.') }} đ</del></div>
                                        <div class="text-danger fs-5">{{ number_format($prod->sale_price,0,',','.') }} đ</div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="text-danger fs-5 ">{{ number_format($prod->base_price,0,',','.') }} đ</div>
                                    <?php
                                    } ?>
                                </div>
                                <div class="product-images-mobile col-6">
                                    <div class="text-black" style="font-size: 14px;">{!! nl2br($prod->short_description) !!}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>

    </div>
    <div class="border-left mt-4 news-cong-trinh ">
        <h3 class="text-center">CÔNG TRÌNH TIÊU BIỂU</h3>
        <hr style="width:70%;margin:20px auto;">
        @if(!empty(getNews('cong-trinh-tieu-bieu')))
        <div class="my-3 row d-flex flex-wrap">
            @foreach(getNews('cong-trinh-tieu-bieu') as $news)

            <div class="product-box-border bg-white ">
                <a href="{{ route('detail',$news->slug) }}" class="text-decoration-none">
                    <div class="row m-0 mb-2 p-1 border">
                        <div class="product-images-mobile col-6 mt-3">
                            <img src="{{ Storage::url($news->images) }}" alt="{{ $news->title }}" class="w-100"> 

                        </div>
                        <div class="product-images-mobile col-6">
                            <div class="text-black" style="font-size: 14px;"> <div style="font-size: 14px;">{{ $news->title }}</div></div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>