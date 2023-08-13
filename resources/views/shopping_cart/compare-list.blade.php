@extends('master.master')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="#" class="text-black text-decoration-none">So sánh các sản phẩm</a></div>
        </div>
    </div>
</div>
@if (session('compare-list') != null)
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="bg-white px-3 row">
                @foreach (session('compare-list') as $cart)
                <?php
                $cate = getCateById($cart['prod_info']->cate_id);
                $productRate = getProductRate($cart['prod_info']->id);
                ?>

                <div class="products-items col-4 col-sm-3 border">
                    <div class="product_images">
                        <img class="img-fluid" src="{{ Storage::url($cart['prod_info']->images) }}" alt="{{ $cart['prod_info']->title }}">
                    </div>
                    <div class="product-rate d-flex justify-content-start align-items-center">
                        @include('products.product-rate',['productRate'=>$productRate])
                    </div>
                    <div class="cat-products"><a href="{{ route('detail',$cate->slug) }}" class="text-decoration-none color-gray">{{$cate->title}}</a></div>
                    <h3 class="product-title"><a href="{{ route('detail',$cart['prod_info']->slug) }}" class="text-decoration-none fw-bold">{{ $cart['prod_info']->title }}</a></h3>

                    <div class="price_area" style="min-height: 50px;">
                        @if ($cart['prod_info']->sale_price != 0)
                        <div class="product_baseprice " style="color: #ccc">
                            <span class="text-decoration-line-through fst-italic">{{ number_format($cart['prod_info']->base_price, 0) }}</span> <span class="card-discount">-{{ round((($cart['prod_info']->base_price - $cart['prod_info']->sale_price)/$cart['prod_info']->base_price)*100)  }}%</span>
                        </div>
                        <div class="product_saleprice fw-bold  color-green">
                            {{ number_format($cart['prod_info']->sale_price, 0) }}
                        </div>
                        @php
                        $lineTotal = $cart['prod_info']->sale_price * $cart['quantity'];
                        @endphp
                        @else
                        <div class="product_baseprice fw-bold color-green">
                            {{ number_format($cart['prod_info']->base_price, 0) }}
                        </div>
                        @php
                        $lineTotal = $cart['prod_info']->base_price * $cart['quantity'];
                        @endphp
                        @endif
                    </div>
                    @if($cart['prod_info']->short_description != null)
                    <div class="short-description border rounded p-2 my-1" style="min-height: 120px;">
                        {!! nl2br($cart['prod_info']->short_description ) !!}
                    </div>
                    @else
                    <div class="short-description border rounded p-2 my-1" style="min-height: 120px;"></div>
                    @endif
                    <div class="d-flex justify-content-start align-items-left flex-column">
                        <div class="add-to-cart-button my-2">
                            <button class="button-red addtocart__button cursor-pointer w-100" data-product-id="{{ $cart['prod_info']->id }}" style="min-width:150px;"><i class="bi bi-plus-circle"></i> Thêm vào giỏ</button>
                        </div>

                        <div class="product_removeItem my-2">
                            <button class="remove_cart_item cursor-pointer button-green cursor-pointer w-100" data-product-id="{{ $cart['prod_info']->id }}" style="padding:5px 10px;border:#6bc235;color:#FFF;background: #6bc235;min-width:150px;">
                                <i class="bi bi-x-octagon"></i> Xóa
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="continues">
                @if (request()->get('ref') != null)
                <div class="py-3 text-start">
                    <a href="{{ request()->get('ref') }}" class="text-decoration-none text-black"><i class="bi bi-arrow-left"></i> {{ __('order.continues') }}</a>
                </div>
                @else
                <div class="py-3 text-start">
                    <a href="/" class="text-decoration-none text-black"><i class="bi bi-arrow-left"></i> {{ __('order.continues') }}</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@else
@if (request()->get('ref') != null)
<div class="container text-center">
    <p>Hiện tại chưa có sản phẩm nào trong danh sách yêu thích.</p>
    <button class="btn btn-success btn-lg"><a href="{{ request()->get('ref') }}" class="text-decoration-none color-white">Quay lại</a></button>
</div>
@else
<div class="container text-center">
    <p>Hiện tại chưa có sản phẩm nào trong danh sách yêu thích.</p>
    <button class="btn btn-success btn-lg"><a href="/" class="text-decoration-none color-white">Trang
            chủ</a></button>
</div>
@endif
@endif

@endsection


@section('style')
<link rel="stylesheet" href="{{ asset('asset/owl.carousel.css') }}">
@endsection
@section('javascript')
<script src="{{ asset('asset/owl.carousel.min.js') }}"></script>

<script>
    $(document).ready(function() {

        $('.remove_cart_item ').on('click', function() {
            var productId = $(this).attr('data-product-id');
            var $data = {
                "_token": "{{ csrf_token() }}",
                "productId": productId,
                "quantity": 0,
            };
            $.ajax({
                url: "{{ route('addToCompare') }}",
                method: "post",
                data: $data,
                success: function(res) {
                    window.location.reload();
                },
                error: function(request, status, error) {
                    console.log("ajax call went wrong:" + request.responseText);
                }
            });
        });
    });
</script>
@endsection