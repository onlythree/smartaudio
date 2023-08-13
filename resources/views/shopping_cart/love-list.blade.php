@extends('master.master')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="#" class="text-black text-decoration-none">Sản phẩm yêu thích</a></div>
        </div>
    </div>
</div>
@if (session('lovecart') != null)
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="border">
                <div style="font-weight: 500;font-size: 20px;margin-bottom: 0;line-height: normal;text-transform: capitalize;padding:10px;">Danh sách sản phẩm yêu thích</div>
            </div>
            <div class="border bg-white px-3">
                @foreach (session('lovecart') as $cart)
                <?php
                $cate = getCateById($cart['prod_info']->cate_id);
                $productRate = getProductRate($cart['prod_info']->id);
                ?>
                <div class="row @if ($loop->index % 2 == 1) bg-gray @endif py-2">

                    <div class="product_images col-12 col-sm-2 col-xxl-1 d-flex justify-content-center align-items-center"><img class="img-fluid" src="{{ Storage::url($cart['prod_info']->images) }}" alt="{{ $cart['prod_info']->title }}">
                    </div>
                    <div class="product_info col-12 col-sm-10 col-xxl-11 py-2">
                        <div class="row">
                            <div class="col-12 col-sm-4">

                                <div class="product-rate d-flex justify-content-start align-items-center">
                                    @include('products.product-rate',['productRate'=>$productRate])
                                </div>
                                <div class="cat-products"><a href="{{ route('detail',$cate->slug) }}" class="text-decoration-none color-gray">{{$cate->title}}</a></div>
                                <h3 class="product-title"><a href="{{ route('detail',$cart['prod_info']->slug) }}" class="text-decoration-none fw-bold">{{ $cart['prod_info']->title }}</a></h3>

                                <div class="price_area">
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
                                <div class="mobile_quantity d-block d-sm-none">x {{ $cart['quantity'] }} =
                                    {{ number_format($lineTotal, 0) }}
                                </div>

                            </div>
                            <div class="col-12 col-sm-4">
                                @if($cart['prod_info']->short_description != null)
                                <div class="short-description border rounded p-2 my-1">
                                    {!! Str::words(nl2br($cart['prod_info']->short_description),30,'...') !!}
                                </div>
                                @endif
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex justify-content-start align-items-left flex-column">
                                    <div class="add-to-cart-button m-2">
                                        <button class="button-red addtocart__button cursor-pointer" data-product-id="{{ $cart['prod_info']->id }}" style="min-width:150px;"><i class="bi bi-plus-circle"></i> Thêm vào giỏ</button>
                                    </div>

                                    <div class="product_removeItem m-2">
                                        <button class="button-red addtocart__button cursor-pointer" style="background: #6bc235;min-width:150px;">
                                            <span class="remove_cart_item cursor-pointer button-green" data-product-id="{{ $cart['prod_info']->id }}"><i class="bi bi-x-octagon"></i> Xóa</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
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
                url: "{{ route('addToLove') }}",
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