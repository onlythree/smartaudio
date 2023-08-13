<div class="product-box-border item-view-list bg-white row ">
    <div class="product-images position-relative col-5">
        <div class="position-absolute" style="right: 20px;top: 10px;z-index: 99;">
            <div class="label">
                @if($prod->hot == 1)
                <label class="button-red">Hot</label>
                @elseif($prod->best_seller == 1)
                <label class="button-green">Bán chạy</label>
                @endif
            </div>
        </div>
        <div class="position-relative product_images">
            <div class="first-image">
                <img src="{{ Storage::url($prod->images) }}" alt="{{ $prod->title }}" class="w-100">
            </div>
            <div class="second-image position-absolute top-0">
                <?php
                $poi = null;
                if (!is_array($prod->other_image)) {
                    $poi = explode(',', $prod->other_image);
                } else {
                    $poi = $prod->other_image;
                }

                ?>
                <a href="{{ route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod->slug]) }}" class="text-decoration-none">
                    @if($poi[0] != null)
                    <img src="{{ Storage::url($poi[0]) }}" alt="{{ $prod['title'] }}" class="w-100">
                    @else
                    <img src="{{ Storage::url($prod->images) }}" alt="{{ $prod->title }}" class="w-100">
                    @endif
                </a>
                <div class="product-button">
                    <div class="d-flex">
                        <div class="product-button-icon quickview" data-product-title="{{ $prod->title }}" data-product-image="{{ Storage::url($prod->images) }}" data-product-other-image='<div id="quickview-img" class="carousel slide">
                        <div class="carousel-indicators">
                            @if(count($poi)>1)  
                            @foreach($poi as $oi)
                            <button type="button" data-bs-target="#quickview-img" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->index==0) active @endif" aria-current="true" aria-label="Slide {{ $loop->index }}"></button> 
                            @endforeach
                            @endif 
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="{{ Storage::url($prod->images) }}" class="d-block w-100" alt="slide popup quickview">
                            </div>
                            @if(count($poi)>1)
                            @foreach($poi as $oi)
                            <div class="carousel-item">
                            <img src="{{ Storage::url($oi) }}" class="d-block w-100" alt="slide popup quickview">
                            </div>
                            @endforeach
                            @endif 
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#quickview-img" data-bs-slide="prev" style="padding: 0px !important;margin: 0 !important;border-radius: 0;height: 10px !important;color: #000;border: none !important;">
                            <i class="bi bi-arrow-left-circle-fill" style="font-size: 30px;color: #7c7c7c !important;"></i> 
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#quickview-img" data-bs-slide="next" style="padding: 0px !important;margin: 0 !important;border-radius: 0;height: 10px !important;color: #000;border: none !important;">
                            <i class="bi bi-arrow-right-circle-fill" style="font-size: 30px;color: #7c7c7c !important;"></i> 
                        </button>
                        </div>' data-product-base-price="{{ number_format($prod->base_price,0,'.',',') }}"
                         data-product-sale-price="{{ number_format($prod->sale_price,0,'.',',') }}" 
                         data-product-short-description="{{ nl2br($prod->short_description) }}" 
                         data-product-detail="{{ route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod->slug]) }}" data-product-rate="{{ $productRate }}" data-product-category="{{ $cate->title }}">
                            <i class="bi bi-eye"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-infor col-7">
        <div class="product-rate d-flex justify-content-start align-items-center">
            @include('products.product-rate',['productRate'=>$productRate])
        </div>
        <div class="cat-products"><a href="{{ route('detail',$cate->slug) }}" class="text-decoration-none color-gray">{{$cate->title}}</a></div>
        <h3 class="product-title"><a href="{{ route('detail-lv2',['slug'=>$cate->slug,'sluglv2'=>$prod->slug]) }}" class="text-decoration-none fw-bold">{{ $prod->title }}</a></h3>
        <div class="product-price d-flex align-items-baseline">
            <?php
            if ($prod->base_price > 0 && $prod->sale_price > 0) {
            ?>
                <div class="product-base-price text-decoration-line-through" style="font-size: 13px;color: #636363;padding-right:10px;">{{ number_format($prod->base_price,0,',','.') }}
                    <smal style="font-size: 13px;">đ</smal>
                </div>
                <div class="product-sale-price" style="color: #ea3d01;font-weight: bold;">{{ number_format($prod->sale_price,0,',','.') }}
                    <smal style="font-size: 13px;">đ</smal>
                </div>
            <?php
            } else if ($prod->base_price > 0 && $prod->sale_price <= 0) {
            ?>
                <div class="product-base-price" style="color: #444;font-weight: bold;">{{ number_format($prod->base_price,0,',','.') }}
                    <smal style="font-size: 13px;">đ</smal>
                </div>
            <?php
            }
            ?>
        </div>
        @if($prod->short_description != null)
        <div class="short-description">
            {!! nl2br($prod->short_description) !!}
        </div>
        @endif
        <div class="d-flex justify-content-start align-items-center mt-2">
            <div class="me-2">
                <div class="text-decoration-none button-white text-white addtocart__button cursor-pointer" data-product-id="{{ $prod->id }}" style="background-color: #ea3d01; color:#FFF">Thêm vào giỏ</div>
            </div>
            <div class="mx-2">
                <div  class="text-decoration-none button-white border addtolove__button cursor-pointer"  data-product-id="{{ $prod->id }}" style="padding: 5px 8px;"><i class="bi bi-heart"></i></div>
            </div>
            <div class="mx-2">
                <div class="text-decoration-none button-white border addtocompare__button cursor-pointer"  data-product-id="{{ $prod->id }}" style="padding: 5px 8px;"><i class="bi bi-bezier2"></i></div>
            </div>
        </div>
    </div>
</div>