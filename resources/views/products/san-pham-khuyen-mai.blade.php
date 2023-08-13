@php
$lang = config('app.locale');
@endphp
@extends('master.master')
@section('content')
<?php
$fullUrl = url()->current() . '?filter=true';
?>
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('shop') }}" class="text-black text-decoration-none">Cửa hàng</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('sanPhamKhuyenMai') }}" class="text-black text-decoration-none">Sảm phẩm khuyến mãi</a></div>
        </div>
    </div>
</div>

<div class="container mb-5">
    @if(getSlide('shop-discount'))
    <div class="text-center p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators ">
                <div class="">
                    @if (getSlide('shop-discount') != null)
                    @foreach (getSlide('shop-discount') as $slide)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->index ==0) active @endif" aria-current="true" aria-label="Slide {{ $loop->index }}"></button>
                    @endforeach
                    @endif
                </div>
            </div>

            <div class="carousel-inner">
                @if (getSlide('shop-discount') != null)
                @foreach (getSlide('shop-discount') as $slide)
                <div class="carousel-item @if ($loop->index == 0) active @endif">

                    <div class="col-12 position-relative">
                        <div class="image">
                            <img src="{{ Storage::url($slide->images) }}" class="d-block w-100">
                        </div>
                    </div>

                </div>
                @endforeach
                @endif
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
    @endif
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3 d-none d-sm-block">
            <div class="widget categories">
                <h2 class="widget-title mb-0">Danh mục sản phẩm</h2>
                <ul class="list-style-none p-0 mb-0">

                    @if(count($categories)>0)
                    @foreach($categories as $cate)
                    <?php
                    $childCate = getChildeCate($cate->id);
                    ?>
                    <li style="border-bottom:1px solid #CCC;">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#{{ $cate->slug }}" aria-expanded="false" aria-controls="{{ $cate->slug }}">
                            <a href="{{ route('detail',$cate->slug) }}" class="text-decoration-none text-black">{{ $cate->title }}</a>
                            @if(count($childCate))
                            <i class="bi bi-chevron-down"></i>
                            @endif
                        </div>
                        @if(count($childCate)>0)
                        <div class="collapse multi-collapse" id="{{ $cate->slug }}">
                            <ul class="list-style-none ps-0">
                                @foreach($childCate as $ccate)
                                <li>
                                    <a href="{{ route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$ccate->slug]) }}" class="text-decoration-none"><i class="bi bi-caret-right-fill"></i> {{ $ccate->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </li>

                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="widget filter-price">
                <h2 class="widget-title mb-0">Khoảng giá</h2>
                <ul class="list-style-none p-0 mb-0">

                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="0-500000" id="fp0500" @if(request()->filter_price == '0-500000') checked="checked" @endif>
                        <label for="fp0500">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price=0-500000&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
                                Từ 0 - 500.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="500000-1000000" id="fp5001000" @if(request()->filter_price == '500000-1000000') checked="checked" @endif>
                        <label for="fp5001000">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price=500000-1000000&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
                                Từ 500.000 - 1.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="1000000-3000000" id="fp10003000" @if(request()->filter_price == '1000000-3000000') checked="checked" @endif>
                        <label for="fp10003000">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price=1000000-3000000&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
                                Từ 1.000.000 - 3.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="3000000-5000000" id="fp30005000" @if(request()->filter_price == '3000000-5000000') checked="checked" @endif>
                        <label for="fp30005000">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price=3000000-5000000&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
                                Từ 3.000.000 - 5.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="5000000-10000000" id="fp500010000" @if(request()->filter_price == '5000000-10000000') checked="checked" @endif>
                        <label for="fp500010000">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price=5000000-10000000&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
                                Từ 5.000.000 - 10.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="10000000-15000000" id="fp1000015000" @if(request()->filter_price == '10000000-15000000') checked="checked" @endif>
                        <label for="fp1000015000">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price=10000000-15000000&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
                                Từ 10.000.000 - 15.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="15000000-25000000" id="fp1500025000" @if(request()->filter_price == '15000000-25000000') checked="checked" @endif>
                        <label for="fp1500025000">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price=15000000-25000000&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
                                Từ 15.000.000 - 25.000.000 vnđ
                            </a>
                        </label>
                    </li>
                    <li style="border-bottom:1px solid #CCC;" class="px-3 py-1">
                        <input type="radio" name="filter_price" value="25000000" id="fp25000" @if(request()->filter_price == '25000000') checked="checked" @endif>
                        <label for="fp25000">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}}&filter_price=25000000&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
                                Trên 25.000.000 vnđ
                            </a>
                        </label>
                    </li>
                </ul>
            </div>

            <div class="widget filter-price">
                <h2 class="widget-title mb-0">Hãng sản xuất</h2>
                <ul class="list-style-none p-0 mb-0">
                    @if($allBrands != null)
                    @foreach($allBrands as $brand)
                    <li style="border-bottom:1px solid #CCC;" class="px-2 py-1">
                        <input type="radio" name="filter-price" value="{{ $brand->slug }}" id="{{ $brand->slug }}" @if(request()->brand == $brand->slug) checked="checked" @endif>
                        <label for="{{ $brand->slug }}">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ $brand->slug }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
                                {{ $brand->title }}
                            </a>
                        </label>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>

            <div class="widget reviews">
                <h2 class="widget-title mb-0">Đánh giá</h2>
                <ul class="list-style-none p-0 mb-0">
                    <li class="px-3 py-1 d-flex">
                        <input type="radio" name="reviews" value="5" id="reviews-5" @if(request()->rate == 5) checked="checked" @endif>
                        <label for="reviews-5" class="d-flex mx-2">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ $brand->slug }}&rate=5&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
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
                        <input type="radio" name="reviews" value="4" id="reviews-4" @if(request()->rate == 4) checked="checked" @endif>
                        <label for="reviews-4" class="d-flex mx-2">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ $brand->slug }}&rate=4&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
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
                        <input type="radio" name="reviews" value="3" id="reviews-3" @if(request()->rate == 3) checked="checked" @endif>
                        <label for="reviews-3" class="d-flex mx-2">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ $brand->slug }}&rate=3&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
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
                        <input type="radio" name="reviews" value="2" id="reviews-2" @if(request()->rate == 2) checked="checked" @endif>
                        <label for="reviews-2" class="d-flex mx-2">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ $brand->slug }}&rate=2&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
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
                        <input type="radio" name="reviews" value="1" id="reviews-1" @if(request()->rate == 1) checked="checked" @endif>
                        <label for="reviews-1" class="d-flex mx-2">
                            <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ $brand->slug }}&rate=1&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-gray">
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
            <div class="shop-product">
                <div class="categories-top-header d-flex justify-content-between ">
                    <h1 class="text-title-heading">Sản phẩm khuyến mãi</h1>
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
                                <li class="dropdown-item" class="active"><a href="{{ $fullUrl }}&product_count=16&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-black">16 sản phẩm</a></li>
                                <li class="dropdown-item"><a href="{{ $fullUrl }}&product_count=32&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-black">32 sản phẩm</a></li>
                                <li class="dropdown-item"><a href="{{ $fullUrl }}&product_count=48&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view={{ request()->view }}" class="text-decoration-none text-black">48 sản phẩm</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sortable d-flex justify-content-around align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mặc định
                            </button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item" class="active"><a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort=noi-bat&view={{ request()->view }}" class="text-decoration-none text-black">Nổi bật</a></li>
                                <li class="dropdown-item"><a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort=danh-gia-cao&view={{ request()->view }}" class="text-decoration-none text-black">Đánh giá cao</a></li>
                                <li class="dropdown-item"><a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort=moi-nhat&view={{ request()->view }}" class="text-decoration-none text-black">Mới nhất</a></li>
                                <li class="dropdown-item"><a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort=gia-thap-den-cao&view={{ request()->view }}" class="text-decoration-none text-black">Giá thấp đến cao</a></li>
                                <li class="dropdown-item"><a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort=gia-cao-xuong-thap&view={{ request()->view }}" class="text-decoration-none text-black">Giá cao xuống thấp</a></li>
                            </ul>
                        </div>
                        <div class="view-layout d-flex justify-content-around align-items-center">
                            <div class="px-2">
                                <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view=grid" class="text-decoration-none text-black">
                                    <i class="bi bi-grid-3x3-gap"></i>
                                </a>
                            </div>
                            <div class="px-2">
                                <a href="{{ $fullUrl }}&product_count={{ request()->product_count }}&filter_price={{ request()->filter_price }}&brand={{ request()->brand }}&rate={{ request()->rate }}&sort={{ request()->sort }}&view=list" class="text-decoration-none text-black">
                                    <i class="bi bi-list-task"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="display-items-products">
                    @if($products != null)
                    <div class="row">
                        @foreach($products as $prod)
                        <?php
                        $cate = getCateById($prod->cate_id);
                        $productRate = getProductRate($prod->id);
                        if (!isset(request()->view) || request()->view == 'grid') {
                        ?>
                            <div class="col-12 mt-4 col-sm-3 @if(($loop->index)%4==0) @else border-start @endif">
                                @include('products/items',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate])
                            </div>
                        <?php
                        } elseif (request()->view == 'list') {
                        ?>
                            <div class="col-12 mt-4 col-sm-6 @if(($loop->index)%2==0) @else border-start @endif">
                                @include('products/items-view-list',['prod'=>$prod,'cate'=>$cate,'productRate'=>$productRate])
                            </div>
                        <?php
                        } ?>
                        @endforeach
                    </div>
                    @endif
                    <div class="pagi mt-4">
                        {{ $products->links('master.paginator') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('style')
@endsection
@section('javascript')
@endsection