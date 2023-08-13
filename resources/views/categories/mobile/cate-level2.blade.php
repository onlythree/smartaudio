<div class="container py-4">
    <h2 class="homepage-category w-100">{{ $categories->title }}</h2>
    @if(!empty($products))
    <div class="">
        @foreach($products as $prod)
        <div class="product-box-border bg-white ">
            <a href="{{ route('detail-lv2',[$categories->slug,$prod->slug]) }}" class="text-decoration-none">
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
    <div class="phan-trang">
        {{ $products->links('master.paginator') }}
    </div>
    @endif
</div>