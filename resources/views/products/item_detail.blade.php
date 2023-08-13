<div class="product-item {{ $categories->slug }}">
    <div class="product-image-wraper">
        <a href="{{ route('product-details',$prod->slug) }}" class="thumbnail product-thumbnail">
            <span class="cover_image">
                <img src="{{ Storage::url($prod->images) }}" alt="{{ $prod->title }}" class="w100">
            </span>
        </a>
        @if($prod->sale_price>0)
        <div class="discount-percentage discount-product bg-white px-1">-{{ round((($prod->base_price - $prod->sale_price)/$prod->base_price)*100)  }}%</div>
        @endif
    </div>
    <div class="product-description text-center">
        <div class="products-decs">
            <h3 class="product-title fs-6 mt-2" itemprop="name">
                <a class="text-decoration-none" href="">{{ $prod->title }}</a>
            </h3>
        </div>
        <div class="product-price">
            @if($prod->base_price >0 && $prod->sale_price > 0)
            <div class="price-area">
                <div class="base-price text-decoration-line-through" style="font-size: 16px;color: #777;">{{ number_format($prod->base_price,0,',','.')}} vnđ</div>
                <div class="sale-price" style="font-size: 20px;color: red;">{{ number_format($prod->sale_price,0,',','.')}} vnđ</div>
            </div>
            @elseif($prod->base_price >0 && $prod->sale_price <= 0) <div class="price-area">
                <!-- <div class="base-price text-decoration-line-through" style="font-size: 16px;color: #777;">&nbsp</div> -->
                <div class="base-price" style="font-size: 20px;color: red;">{{ number_format($prod->base_price,0,',','.')}} vnđ</div>
        </div>
        @endif
    </div>
</div>
</div>