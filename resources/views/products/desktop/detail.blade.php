
<div class="product-banner">
    @if($products->banner != null)
    <img src="{{ Storage::url($products->banner) }}" alt="{{ $products->title }}" class="w-100">
    @else
    <img src="{{ asset('asset/image/default-banner.jpg') }}" alt="{{ $products->title }}" class="w-100">
    @endif
</div>
<div class="breadcrumb py-1">
    <div class="container">
        <ul class="d-flex ps-0 mb-0" style="list-style:none">
            <li class="me-2"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none text-uppercase">TRANG CHỦ</a></li>
            <li class="me-2"><span class="divider" class="text-black-50 text-decoration-none">/</span></li>
            <li class="me-2"><a href="{{ route('detail',$categories->slug) }}" class="text-black-50 text-decoration-none text-uppercase">{{ $categories->title }}</a></li>
            <li class="me-2"><span class="divider" class="text-black-50 text-decoration-none">/</span></li>
            <li class="me-2"><a href="{{ route('detail-lv2',[$categories->slug,$products->slug]) }}" class="text-decoration-none text-uppercase">{{ $products->title }}</a></li>
        </ul>
    </div>
</div>
<div class="container product-detail-wrap">
    <div class="row">
        <div class="col-12 col-sm-8">
            <div class="product-detail row">
                <div class="col-12 col-sm-6">
                    <div class="product-images w-100 position-relative">
                        <div class="bg-white text-center" style="background: url({{ Storage::url($products->images) }});">

                        </div>
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
                                <button class="btn btn-success btn-sm" type="button" id="quantity_sub"><i class="bi bi-caret-down"></i></button>
                                <input type="text" class="form-control text-center" name="quantity" id="quantity" value="1">
                                <button class="btn btn-success btn-sm" type="button" id="quantity_plus"><i class="bi bi-caret-up"></i></button>
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
                <div class="product-detail_description-title">
                    <div style="position: relative;border-top: 2px solid #1f78b8;padding-top: 10px;margin-left: 50px;width: 100px;text-align: center;">MÔ TẢ</div>
                </div>
                <div class="product-detail-content">
                    {!! $products->content !!}
                </div>
            </div>
            <div class="related-products">
                <div class="description position-relative border-top mt-4">
                    <div class="product-detail_description-title">
                        <div style="position: relative;border-top: 2px solid #1f78b8;padding-top: 10px;margin-left: 50px;width: 200px;text-align: center;">Sản phẩm cùng loại</div>
                    </div>
                    <div class="product-detail-content">
                        @if(!empty($related_products))
                        <div class="owl-carousel oc_relatedp my-3">
                            @foreach($related_products as $prod)
                            @include('products.items',['cate'=>$categories,'prod'=>$prod])
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="border-start">
                <h3 class="text-center">DANH MỤC SẢN PHẨM</h3>
                <hr style="width:70%;margin:20px auto;">
                @if(!empty($relatedCate))
                <div class="d-flex justify-content-between flex-wrap my-3">
                    @foreach($relatedCate as $cate)
                    <div class="cate-items-list text-center {{ $cate->slug }}" style="max-width:50%;width:50%">
                        <a href="{{ route('detail-lv2',[$categories->slug,$cate->slug]) }}" class="text-decoration-none text-black">
                            <div class="homepage-category-images">
                                <img src="{{ Storage::url($cate->images) }}" alt="{{ $cate->title }}" class="img-responsive w-100" style="max-height: 100px;min-width: 100px;max-width: 100px !important;" />
                            </div>
                            <div class="homepage-category-title text-center my-2 px-2">
                                {{ $cate->title }}
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="border-left product-detail_ban-chay mt-4">
                <h3 class="text-center">SẢN PHẨM BÁN CHẠY</h3>
                <hr style="width:70%;margin:20px auto;">
                @if(!empty(bestSeller()))
                <div class="my-3 row">
                    @foreach (bestSeller() as $prod)
                    <?php
                    $cate = getCategoryRootByProductSlug($prod->slug);
                    ?>
                    <div class="col-6 mb-3">
                    @include('products.items',['cate'=>$cate,'prod'=>$prod])
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="border-left mt-4 news-cong-trinh ">
                    <h3 class="text-center">CÔNG TRÌNH TIÊU BIỂU</h3>
                    <hr style="width:70%;margin:20px auto;">
                    @if(!empty(getNews('cong-trinh-tieu-bieu')))
                    <div class="my-3 row d-flex flex-wrap">
                        @foreach(getNews('cong-trinh-tieu-bieu') as $news)
                        <div class="product-box-border bg-white col-6 mb-3">
                            <a href="{{ route('detail',$news->slug) }}" class="text-decoration-none">
                                <div class="news-images w-100">
                                    <div class="bg-white">
                                        <img src="{{ Storage::url($news->images) }}" alt="{{ $news->title }}">
                                    </div>

                                </div>
                                <div class="product-title my-2 px-1 text-center" style="min-height: 72px;">
                                    {{ $news->title }}
                                </div>
                            </a>

                            <div class="view-product">Xem chi tiết</div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="quickviewModal" tabindex="-1" aria-labelledby="quickviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5 qv-product-title">Modal title</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-5">
                        <div class="qv-product-image">

                        </div>
                    </div>
                    <div class="col-12 col-sm-7">
                        <div class="qv-product-price"></div>
                        <div class="qv-product-saleprice"></div>
                        <div class="qv-product-short-description"></div>
                        <div class="qv-product-detail mt-3 mb-2"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>