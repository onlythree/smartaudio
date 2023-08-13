<div class="homepage">
    <div class="container my-3">
        <div class="row homepage-banner">
            @if (getSlide('after-top-slideshow') != null)
            @foreach (getSlide('after-top-slideshow') as $slide)
            <div class="col-12 col-sm-4">
                <div class="col-12 position-relative">
                    <div class="image">
                        <img src="{{ Storage::url($slide->images) }}" class="d-block w-100">
                    </div>
                    <div class="position-absolute top-0 container-fluid margin-auto">
                        <div class="container homepage-banner-image" style="margin-top: 100px;">
                            <div class="row">
                                <div class="sub-title">
                                    {!! $slide->sub_title !!}
                                </div>
                                <div class="title">
                                    {!! $slide->title !!}
                                </div>
                                <div class="readmore">
                                    <a href="{{ $slide->slide_link }}" class="button-white">Chi tiết <span style="margin-left: 5px;"><i class="bi bi-arrow-right-circle" style="color:#ea3d01"></i></span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
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
                @if(!empty(getDealToday()))
                <div class="owl-carousel oc_dealtoday my-3">
                    @foreach (getDealToday() as $prod)
                    <?php
                    // $cate = getCategoryRootByProductSlug($prod->slug);
                    $cate = getCateById($prod->cate_id);
                    $productRate = getProductRate($prod->id);
                    ?>
                    @include('products/items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate])
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="product-categories mb80">
        <div class="container py70">
            <div class="top-category mb-3">
                <h2>Danh mục sản phẩm</h2>
            </div>
            <div class="product-categories-list d-flex flex-row my-4">
                @if(getCategoryShowHome() != null)
                <div class="owl-carousel oc_categories">
                    @foreach(getCategoryShowHome() as $cate)
                    <div class="items-cate mx-2">
                        <a href="{{ route('detail',$cate->slug) }}" class="text-decoration-none text-black">
                            <div class="cate-image position-relative">
                                <div class="bg-cate-image"><img src="{{ asset('../asset/image/plus-cate.webp') }}" alt="nen danh muc" /></div>
                                <div class="cate-image-icon">
                                    <img src="{{ Storage::url($cate->images) }}" alt="{{ $cate->title }}" class="rounded-circle item-thumbnail" />
                                </div>
                            </div>
                            <div class="cate-title text-center">{{$cate->title}}</div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="product-feature mb80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <div class="left-feature">
                        @if (getSlide('left-feature') != null)
                        @foreach (getSlide('left-feature') as $slide)
                        <div class="mb-4 position-relative">
                            <div class="image">
                                <img src="{{ Storage::url($slide->images) }}" class="d-block w-100">
                            </div>
                            <div class="position-absolute bottom-0 container-fluid margin-auto">
                                <div class="px-3" style="margin-bottom: 30px;">
                                    <div class="title">
                                        {!! $slide->title !!}
                                    </div>
                                    <div class="sub-title">
                                        {!! $slide->sub_title !!}
                                    </div>
                                    <div class="readmore">
                                        <a href="{{ $slide->slide_link }}" class="button-white">Chi tiết <span style="margin-left: 5px;"><i class="bi bi-arrow-right-circle" style="color:#ea3d01"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-12 col-sm-9">
                    @include('homepage.feature_products')
                </div>
            </div>
        </div>
    </div>

    <div class="slide-after-product-feature mb80">
        <div class="container">
            @include('homepage.slide_after_feature_product')
        </div>
    </div>
    <div class="home-active-products mb80" style="background-color: #F6F6F6;">
        <div class="container">
            @include('homepage.category_active_case')
        </div>
    </div>
    <div class="home-bestsellers-products mb80">
        <div class="container position-relative">
            <div class="title-block position-absolute mt-2">
                <h2>Sản phẩm bán chạy</h2>
            </div>
            <div class="">
                @include('homepage.category-best-seller')
            </div>
        </div>
    </div>

    <div class="slide-after-bestseller mb80 container">
        <div class="row banner-after-bestseller">
            @if (getSlide('after-bestseller-product') != null)
            @foreach (getSlide('after-bestseller-product') as $slide)
            <div class="col-12 col-sm-6">
                <div class="position-relative">
                    <div class="image">
                        <img src="{{ Storage::url($slide->images) }}" class="d-block w-100">
                    </div>
                    <div class="position-absolute top-0 container-fluid margin-auto">
                        <div class="container banner-after-bestseller-infor" style="margin-top: 100px;">
                            <div class="row">
                                <div class="col-12 col-sm-8">
                                    <div class="sub-title text-uppercase text-center text-white">
                                        {!! $slide->sub_title !!}
                                    </div>
                                    <div class="title text-uppercase text-center text-white">
                                        {!! $slide->title !!}
                                    </div>
                                    <div class="readmore text-center">
                                        <a href="{{ $slide->slide_link }}" class="button-white">Chi tiết <span style="margin-left: 5px;"><i class="bi bi-arrow-right-circle-fill" style="color:#ea3d01"></i></span> </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <div class="top-brand ">
        <div class="container">
            <h2 class="text-center mb-5">Đối tác & Các khách hàng</h2>
            <div class="partnet-slide">
                @include('homepage.partner-slide')
            </div>
        </div>
    </div>
</div>