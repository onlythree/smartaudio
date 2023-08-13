@php
$agent = new Jenssegers\Agent\Agent();
$shoppingCart = session('shopping_cart');
$lovelist = session('lovecart');
@endphp
<header>
    <div id="header" class="">
        <div class="header-text-menu d-none d-sm-flex justity-center align-items-center topbar">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="left-area ">
                        <ul class="d-flex justify-content-end m-0 p-0">
                            <li>
                                <div class="address">
                                    <a href="/lien-he"><i class="bi bi-geo-alt"></i></i>Bản đồ</a>
                                </div>
                            </li>
                            <li>
                                <div class="email">
                                    <a href="mailto:{{config('topbar_support_email')}}"><i class="bi bi-envelope"></i> {{config('topbar_support_email')}}</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="right-area">
                        <ul class="d-flex justify-content-end m-0 p-0 top-bar">
                            @if(getRootMenu('top-bar') != null)
                            @foreach(getRootMenu('top-bar') as $mn)
                            <li><a href="{{ $mn->link }}" class="px-2 text-decoration-none border-right border-left">{{ $mn->title }}</a></li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid header-menu">
            <div class="container header d-flex justify-content-between align-items-center p-0">
                <div class="header-left d-flex col-3 col-sm-3 justify-content-start align-items-left">
                    <div class="nav-bar d-block d-sm-none text-center">
                        <div class="mobile-menu" style="left:0">
                            <a id="mmenu" class="btnmenu text-decoration-none fw-bold">
                                <i class="bi bi-list" style="font-size: 40px;color: #333;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="logo_area d-none d-sm-flex align-items-center">
                        <a href="{{ route('home') }}" class="text-decoration-none text-body">
                            <img src="{{ asset('asset/image/logo.png') }}" class="logo img-responsive img-fluid w-100" style="max-width: 280px;">
                        </a>
                    </div>
                </div>
                <div class="header-center col-6 col-sm-7 px-4">
                    <div class="logo_area d-flex d-sm-none align-items-center">
                        <a href="{{ route('home') }}" class="text-decoration-none text-body">
                            <img src="{{ asset('asset/image/logo.png') }}" class="logo img-responsive img-fluid w-100">
                        </a>
                    </div>
                    <div class="d-none d-md-block">
                        <div class="search-box">
                            <form action="{{ route('search') }}">
                                <div class="input-group">
                                    <input type="text" name="key" class="form-control" placeholder="Tìm sản phẩm..." aria-label="Tìm sản phẩm..." aria-describedby="basic-addon2" style="outline: none !important;box-shadow: none;">
                                    <div class="space-height" style="display: flex;justify-content: center;align-items: center;color: #999;">|</div>
                                    <div class="category">
                                        <select name="category" id="search-category">
                                            <option value="-1">Danh mục sản phẩm</option>
                                            @if(getAllCate() != null)
                                            @foreach(getAllCate() as $cate)
                                            <option value="{{ $cate->slug }}">{{ $cate->title }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <span class="" id="basic-addon2">
                                        <button type="submit" class="searchsubmit2" style="border-radius: 100px;border:none !important"><i class="bi bi-search"></i></button>
                                    </span>

                                </div>
                            </form>
                        </div>
                        <div class="content-mostsearch d-flex flex-row">
                            <label>Tìm kiếm phổ biến:</label>
                            @php
                            $searchKey = explode(',',config('search'));
                            if(count($searchKey)>0){
                            foreach($searchKey as $sk)
                            {
                            echo ("<span class='mx-2'><a href='/tim-kiem/?key=".$sk."' class='text-decoration-none text-black'>".$sk."</a></span>");
                            }
                            }
                            @endphp
                        </div>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center col-3 col-sm-2 px-3">
                    <div class="header-right-icon d-flex justify-content-end">
                        <div class="user-action d-none d-sm-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#accountModal">
                            <i class="bi bi-person-workspace"></i>
                        </div>
                        <div class="wishlist-box d-none d-sm-block" style="margin-left: 25px;">
                            <a href="@if(!empty($lovelist )) {{ route('love-list') }} @endif" class="text-decoration-none">
                                <i class="bi bi-heart"></i>
                            </a>
                            <span class="count-wishlist"> @if(!empty($lovelist)) {{ count($lovelist) }} @else 0 @endif </span>
                        </div>

                        <div class="nav-bar d-block d-sm-none text-center">
                            <div class="mobile-menu" style="left:0">
                                <a id="mmenu" class="btnmenuRight text-decoration-none fw-bold">
                                    <i class="bi bi-text-right" style="font-size: 30px;color: #333;"></i>
                                </a>
                            </div>
                        </div>

                        <div class="shopping-cart d-flex align-items-center" style="margin-left: 25px;">
                            <a href="@if(!empty($shoppingCart )) {{ route('shoppingCartOrder') }} @endif" class="text-decoration-none">
                                <i class="bi bi-bag"></i>
                            </a>
                            <span class="cart-count">
                                @if(!empty($shoppingCart )) {{ count($shoppingCart) }} @else 0 @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-none d-sm-block" style="min-height:50px;">
            <div class="container">
                <div class="row">
                    <div class="col-9 col-sm-9 ps-4">
                        <div class="row">
                            <div class="header-vertical-menu position-relative col-sm-4 col-xxl-3 p-0">
                                <div class="categories-vertical-menu ">
                                    <h3 class="widget-title"><i class="bi bi-text-left"></i> Danh mục</h3>
                                    <div class="verticalmenu position-absolute" style="z-index: 99;">
                                        <div class="menu-vertical-menu-container p-3 @if(request()->route()->getName() == 'home') active @endif">
                                            <ul id="menu-vertical-menu" class="menu list-style-none m-0 p-0">
                                                <li><a href="{{ route('sanPhamBanChay') }}" class="d-flex align-items-center text-black text-decoration-none"><span class="w-100">Sản phẩm bán chạy</span></a></li>
                                                <li><a href="{{ route('hangMoiVe') }}" class="d-flex align-items-center text-black text-decoration-none"><span class="w-100">Sản phẩm mới nhất</span></a></li>
                                                <li><a href="{{ route('sanPhamKhuyenMai') }}" class="d-flex align-items-center text-black text-decoration-none"><span class="w-100">Sản phẩm khuyến mãi</span></a></li>
                                                @if(count(getRootCate())>0)
                                                @foreach(getRootCate() as $rCate)
                                                <?php $child = getChildeCate($rCate->id);
                                                ?>
                                                <li class="@if(count($child)>0) has-child-cate @endif">
                                                    <a href="{{ route('detail',$rCate->slug) }}" class="d-flex align-items-center text-black text-decoration-none">
                                                        <span class="w-100">{{ $rCate->title }}</span>
                                                        @if(count($child)>0)
                                                        <span><i class="bi bi-chevron-right"></i></span>
                                                        @endif
                                                    </a>
                                                    @if(count($child) > 0)
                                                    <div class="sub-cate-menu" style="">
                                                        @if($rCate->mega_type == 3)
                                                        <!-- hiện thị 3 cột, bên trên là ảnh danh muc -->
                                                        <div class="row p-4" style="<?php if ($rCate->home_banner != '') {
                                                                                        echo ("background-image: url('" . Storage::url($rCate->home_banner) . "')");
                                                                                    } else {
                                                                                        echo ("background-color: #FFF;)");
                                                                                    } ?>">
                                                            <div class="col-12 category-menu-short-desc-left">
                                                                @if($rCate->short_description != '')
                                                                {!! $rCate->short_description !!}
                                                                <div class="py-2 text-left">
                                                                    <a href="{{ route('detail',$rCate->slug) }}" class="button-white">Chi tiết <i class="bi bi-chevron-right"></i></a>
                                                                </div>
                                                                @endif
                                                            </div>
                                                            <div class="col-12 row">
                                                                <?php
                                                                $index = 0;
                                                                foreach ($child as $ccate) {
                                                                    if ($ccate->parent_id == $rCate->id) {
                                                                ?>
                                                                        <?php $childLv2 = getChildeCate($ccate->id); ?>
                                                                        <?php
                                                                        if ($index == 0 || $index == 1 || $index == 2) {
                                                                            echo ('<div class="col-4">');
                                                                        }
                                                                        ?>
                                                                        <h3 style="font-size: 17px;font-weight: 800;"><a href="{{ route('detail-lv2',['slug'=>$rCate->slug,'sluglv2'=>$ccate->slug]) }}" class="text-decoration-none text-black">{{ $ccate->title }}</a></h3>
                                                                        @if(count($childLv2)>0)
                                                                        <ul class="ps-0 list-style-none" style="margin-bottom:15px;">
                                                                            @foreach($childLv2 as $cateLv2)
                                                                            <li>
                                                                                <a href="{{ route('detail-lv3',['slug'=>$rCate->slug,'sluglv2'=>$ccate->slug,'sluglv3'=>$cateLv2->slug]) }}" class="text-decoration-none text-black">{{ $cateLv2->title }}</a>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                        @endif
                                                                        <?php if ($index == 0 || $index == 1 || $index == 2) {
                                                                            echo ('</div>');
                                                                        }

                                                                        ?>

                                                                    <?php
                                                                        $index++;
                                                                    } else {
                                                                    ?>
                                                                        <div class="div">
                                                                            <a href="">{{ $ccate->title }}</a>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } ?>

                                                            </div>

                                                        </div>
                                                        @endif
                                                        @if($rCate->mega_type == 2)
                                                        <!-- hiện thị 2 cột, bên ngoài là ảnh danh muc -->
                                                        <div class="row p-4" style="<?php if ($rCate->home_banner != '') {
                                                                                        echo ("background-image: url('" . Storage::url($rCate->home_banner) . "')");
                                                                                    } else {
                                                                                        echo ("background-color: #FFF;)");
                                                                                    } ?>">
                                                            <div class="col-8 row">
                                                                <?php
                                                                $index = 0;
                                                                foreach ($child as $ccate) {
                                                                    if ($ccate->parent_id == $rCate->id) {
                                                                ?>
                                                                        <?php $childLv2 = getChildeCate($ccate->id); ?>
                                                                        <?php
                                                                        if ($index == 0) {
                                                                            echo ('<div class="col-6">');
                                                                        }
                                                                        if ($index == 1) {
                                                                            echo ('<div class="col-6">');
                                                                        } ?>
                                                                        <h3 style="font-size: 17px;font-weight: 800;"><a href="{{ route('detail-lv2',['slug'=>$rCate->slug,'sluglv2'=>$ccate->slug]) }}" class="text-decoration-none text-black">{{ $ccate->title }}</a></h3>
                                                                        @if(count($childLv2)>0)
                                                                        <ul class="ps-0 list-style-none" style="margin-bottom:15px;">
                                                                            @foreach($childLv2 as $cateLv2)
                                                                            <li>
                                                                                <a href="{{ route('detail-lv3',['slug'=>$rCate->slug,'sluglv2'=>$ccate->slug,'sluglv3'=>$cateLv2->slug]) }}" class="text-decoration-none text-black">{{ $cateLv2->title }}</a>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                        @endif
                                                                        <?php if ($index == 0) {
                                                                            echo ('</div>');
                                                                        }
                                                                        ?>

                                                                        <?php
                                                                        $index++;
                                                                        if ($index == count($child)) {
                                                                            echo ('</div>');
                                                                        }
                                                                    } else {
                                                                        ?>
                                                                        <div class="div">
                                                                            <a href="">{{ $ccate->title }}</a>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } ?>

                                                            </div>
                                                            <div class="col-4 category-menu-short-desc">
                                                                @if($rCate->short_description != '')
                                                                {!! $rCate->short_description !!}
                                                                <div class="py-2 text-center">
                                                                    <a href="{{ route('detail',$rCate->slug) }}" class="button-white">Chi tiết <i class="bi bi-chevron-right"></i></a>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if($rCate->mega_type == 1)
                                                        <!-- hiện thị 1 cột,  -->
                                                        <div class="p-4 position-relative" style="<?php if ($rCate->home_banner != '') {
                                                                                                        echo ("background-image: url('" . Storage::url($rCate->home_banner) . "');max-width:290px;");
                                                                                                    } else {
                                                                                                        echo ("background-color: #FFF;)");
                                                                                                    } ?>">
                                                            <?php
                                                            $index = 0;
                                                            foreach ($child as $ccate) {
                                                                if ($ccate->parent_id == $rCate->id) {
                                                            ?>
                                                                    <?php $childLv2 = getChildeCate($ccate->id); ?>
                                                                    <?php
                                                                    ?>
                                                                    <h3 style="font-size: 17px;font-weight: 800;"><a href="{{ route('detail-lv2',['slug'=>$rCate->slug,'sluglv2'=>$ccate->slug])}}" class="text-decoration-none text-black">{{ $ccate->title }}</a></h3>
                                                                    @if(count($childLv2)>0)
                                                                    <ul class="ps-0 list-style-none" style="margin-bottom:15px;">
                                                                        @foreach($childLv2 as $cateLv2)
                                                                        <li>
                                                                            <a href="{{ route('detail-lv3',['slug'=>$rCate->slug,'sluglv2'=>$ccate->slug,'sluglv3'=>$cateLv2->slug]) }}" class="text-decoration-none text-black">{{ $cateLv2->title }}</a>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                    @endif
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="div">
                                                                        <a href="">{{ $ccate->title }}</a>
                                                                    </div>
                                                            <?php
                                                                }
                                                            } ?>
                                                            <div class="category-menu-short-desc-bottom">
                                                                @if($rCate->short_description != '')
                                                                {!! $rCate->short_description !!}
                                                                <div class="py-2 text-left">
                                                                    <a href="{{ route('detail',$rCate->slug) }}" class="button-white">Chi tiết <i class="bi bi-chevron-right"></i></a>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if($rCate->mega_type == 4)
                                                        <!-- hiện thị 1 cột, bán chạy -->
                                                        <div class="p-4 position-relative" style="<?php if ($rCate->home_banner != '') {
                                                                                                        echo ("background-image: url('" . Storage::url($rCate->home_banner) . "')");
                                                                                                    } else {
                                                                                                        echo ("background-color: #FFF;)");
                                                                                                    } ?>">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <?php
                                                                    $index = 0;
                                                                    foreach ($child as $ccate) {
                                                                        if ($ccate->parent_id == $rCate->id) {
                                                                    ?>
                                                                            <?php $childLv2 = getChildeCate($ccate->id); ?>
                                                                            <?php
                                                                            ?>
                                                                            <h3 style="font-size: 17px;font-weight: 800;"><a href="{{ route('detail-lv2',['slug'=>$rCate->slug,'sluglv2'=>$ccate->slug]) }}" class="text-decoration-none text-black">{{ $ccate->title }}</a></h3>
                                                                            @if(count($childLv2)>0)
                                                                            <ul class="ps-0 list-style-none" style="margin-bottom:15px;">
                                                                                @foreach($childLv2 as $cateLv2)
                                                                                <li>
                                                                                    <a href="{{ route('detail-lv3',['slug'=>$rCate->slug,'sluglv2'=>$ccate->slug,'sluglv3'=>$cateLv2->slug]) }}" class="text-decoration-none text-black">{{ $cateLv2->title }}</a>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                            @endif
                                                                        <?php
                                                                        } else {
                                                                        ?>
                                                                            <div class="div">
                                                                                <a href="">{{ $ccate->title }}</a>
                                                                            </div>
                                                                    <?php
                                                                        }
                                                                    } ?>

                                                                </div>
                                                                <div class="col-7 title-block">
                                                                    <h2>Sản phẩm bán chạy</h2>
                                                                    <div class="content-bestseller-product">

                                                                        @if(bestSellerByCate($rCate->id))
                                                                        @foreach(bestSellerByCate($rCate->id) as $prod)
                                                                        <?php
                                                                        $cate = getCateById($prod->cate_id);
                                                                        $productRate = getProductRate($prod->id);
                                                                        if (!is_array($prod['other_image'])) {
                                                                            $poi = explode(',', $prod['other_image']);
                                                                        } else {
                                                                            $poi = $prod['other_image'];
                                                                        }
                                                                        ?>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <div class="product-images w-100 position-relative">
                                                                                    <div class="position-absolute" style="right: 20px;top: 10px;">
                                                                                        <div class="label">
                                                                                            @if($prod['hot'] == 1)
                                                                                            <label class="button-red">Hot</label>
                                                                                            @elseif($prod['best_seller'] == 1)
                                                                                            <label class="button-green">Bán chạy</label>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="position-relative product_images">
                                                                                        <div class="first-image">
                                                                                            <img src="{{ Storage::url($prod['images']) }}" alt="{{ $prod['title'] }}" class="w-100">
                                                                                        </div>
                                                                                        <div class="second-image position-absolute top-0" style="width: 100%;height: 100%;">
                                                                                            @if($poi[0] != null)
                                                                                            <img src="{{ Storage::url($poi[0]) }}" alt="{{ $prod['title'] }}" class="w-100">
                                                                                            @else
                                                                                            <img src="{{ Storage::url($prod['images']) }}" alt="{{ $prod['title'] }}" class="w-100">
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <div class="product-infor  px-1">
                                                                                    @include('products.product-rate',['product_rate',$productRate])
                                                                                    <h3 class="product-title"><a href="" class="text-decoration-none fw-bold">{{$prod['title']}}</a></h3>
                                                                                    <div class="product-price d-flex align-items-baseline flex-column">
                                                                                        <?php
                                                                                        if ($prod['base_price'] > 0 && $prod['sale_price'] > 0) {
                                                                                        ?>
                                                                                            <div class="product-base-price text-decoration-line-through" style="font-size: 13px;color: #636363;padding-right:10px;">{{ number_format($prod['base_price'],0,',','.') }}
                                                                                                <smal style="font-size: 13px;">đ</smal>
                                                                                            </div>
                                                                                            <div class="product-sale-price" style="color: #ea3d01;font-weight: bold;">{{ number_format($prod['sale_price'],0,',','.') }}
                                                                                                <smal style="font-size: 13px;">đ</smal>
                                                                                            </div>
                                                                                        <?php
                                                                                        } else if ($prod['base_price'] > 0 && $prod['sale_price'] <= 0) {
                                                                                        ?>
                                                                                            <div class="product-base-price" style="color: #444;font-weight: bold;">{{ number_format($prod['base_price'],0,',','.') }}
                                                                                                <smal style="font-size: 13px;">đ</smal>
                                                                                            </div>
                                                                                        <?php
                                                                                        }
                                                                                        ?>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @endif
                                                    </div>
                                                    @endif
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-header-main px-3 position-relative col-sm-8 col-xxl-9 d-flex align-items-center">
                                <ul class="m-0 p-0 list-style-none main-menu w-100 d-inline-block">
                                    @if(getRootMenu('main-menu') != null)
                                    @foreach(getRootMenu('main-menu') as $mn)
                                    <?php $child = getChildMenu($mn->id); ?>
                                    <li class="@if(count($child) > 0) has-child-menu @endif float-start ">
                                        <a href="{{ $mn->link }}" class="px-2 text-decoration-none border-right border-left text-black px-2 px-xxl-4"><span class="menu-item-text">{{ $mn->title }}</span></a>
                                        @if(count($child) > 0)
                                        @if($mn->type == 1)
                                        <div class="sub-menu type-1 position-absolute">
                                            <ul class=" main-menu-child list-style-none ">
                                                @foreach($child as $cmn)
                                                <li>
                                                    <a href=" {{ $cmn->link }}" class="px-2 text-decoration-none border-right border-left text-black"><span>{{ $cmn->title }}</span></a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @else
                                        <div class="sub-menu type-2 position-absolute">
                                            <ul class="main-menu-child list-style-none d-flex flex-wrap">
                                                @foreach($child as $cmn)
                                                <li class="col-6">
                                                    <a href="{{ $cmn->link }}" class="px-2 text-decoration-none border-right border-left text-black"><span>{{ $cmn->title }}</span></a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @endif
                                    </li>
                                    @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-3 p-0 d-flex align-items-center justify-content-end">
                        <div class="ship d-flex align-items-center justify-content-end">
                            <div class="me-2"><i class="bi bi-phone-vibrate text-red" style="font-size: 22px;"></i></div>
                            <div class="hotline-menu">{!!config('hotline')!!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>