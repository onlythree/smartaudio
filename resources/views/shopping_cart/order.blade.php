@extends('master.master')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="#" class="text-black text-decoration-none">Giỏ hàng</a></div>
        </div>
    </div>
</div>
@if (session('shopping_cart') != null)
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8">
            <div class="border">
                <div style="font-weight: 500;font-size: 20px;margin-bottom: 0;line-height: normal;text-transform: capitalize;padding:10px;">{{ __('order.cart') }}</div>
            </div>
            <div class="border bg-white px-3">
                @php
                $total = 0;
                $sumary = 0;
                @endphp
                @foreach (session('shopping_cart') as $cart)
                @php
                $lineTotal = 0;
                @endphp
                <div class="row @if ($loop->index % 2 == 1) bg-gray @endif py-2">
                    <div class="product_removeItem col-1 d-flex justify-content-center align-items-center flex-column">
                        <span class="quantity_plus cursor-pointer" data-product-id="{{ $cart['prod_info']->id }}"><i class="bi bi-caret-up"></i></span>
                        <span class="remove_cart_item cursor-pointer" data-product-id="{{ $cart['prod_info']->id }}"><i class="bi bi-trash" style="font-size: 22px;"></i></span>
                        <span class="quantity_sub cursor-pointer" data-product-id="{{ $cart['prod_info']->id }}"><i class="bi bi-caret-down"></i></span>
                    </div>
                    <div class="product_images col-3 col-sm-2 d-flex justify-content-center align-items-center"><img class="img-fluid" src="{{ Storage::url($cart['prod_info']->images) }}" alt="{{ $cart['prod_info']->title }}">
                    </div>
                    <div class="product_info col-8 col-sm-5 py-2">
                        <div class="title d-flex">
                            <div class="product_title">{{ $cart['prod_info']->title }}</div>
                        </div>
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
                    <div class="product_quantity col-2 d-none d-sm-block py-2">
                        <input type="number" id="cart_quantity_{{ $cart['prod_info']->id }}" value="{{ $cart['quantity'] }}" class="form-control" disabled>
                    </div>
                    <div class="product_totalPrice col-2 d-none d-sm-block py-2">{{ number_format($lineTotal, 0) }}</div>
                </div>
                @php
                $total += $lineTotal;
                @endphp
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
        <div class="col-12 col-sm-4">

            <div class="border bg-white py-2">
                <div class=" d-flex justify-content-between align-items-center card-block">
                    <div class="total_text ">{{ __('order.total') }}:</div>
                    <div class="total_price ">{{ number_format($total, 0) }} <span class="symbol">vnđ</span></div>
                </div>
                <div class="d-flex justify-content-between align-items-center card-block">
                    <div class="total_text">{{ __('order.ship') }}:</div>
                    <div class="total_price  ">
                        {{ number_format(((config('tax_vi')*$total)/100), 0) }} ({{ config('tax_vi') }}%)
                        @php
                        $sumary = $total + ((config('tax_vi')/$total)*100);
                        @endphp
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center card-block">
                    <div class="total_text" style="">{{ __('order.totalpay') }}:</div>
                    <div class="total_price" style="">
                        <b>{{ number_format($sumary, 0) }} <span class="symbol">vnđ</span></b>
                    </div>
                </div>
                <div class="checkout text-center pt-2">
                    <a href="{{ route('payment') }}" class="text-decoration-none color-white">
                        <button class="button-red fs-6">{{ __('order.paynow')}}</button>
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>
@else
@if (request()->get('ref') != null)
<div class="container text-center">
    <p>Hiện tại chưa có sản phẩm nào trong giỏ hàng.</p>
    <button class="btn btn-success btn-lg"><a href="{{ request()->get('ref') }}" class="text-decoration-none color-white">Quay lại</a></button>
</div>
@else
<div class="container text-center">
    <p>Hiện tại chưa có sản phẩm nào trong giỏ hàng.</p>
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

        $(".oc_bestseller").owlCarousel({
            margin: 10,
            nav: true,
            dots: false,
            loop: true,
            navText: ["<div class='nav-btn prev-slide'><i class=\"bi bi-chevron-compact-left\" style=\"font-size: 30px;\"></i></div>", "<div class='nav-btn next-slide'><i class=\"bi bi-chevron-compact-right\" style=\"font-size: 30px;\"></i></div>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        });
        $('.quantity_plus').on('click', function() {
            var productId = $(this).attr('data-product-id');
            var quantity = $('#cart_quantity_' + productId).val();
            var $data = {
                "_token": "{{ csrf_token() }}",
                "productId": productId,
                "quantity": parseInt(quantity) + 1,
            };
            $.ajax({
                url: "{{ route('addToCart') }}",
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
        $('.quantity_sub').on('click', function() {
            var productId = $(this).attr('data-product-id');
            var quantity = $('#cart_quantity_' + productId).val();
            var $data = {
                "_token": "{{ csrf_token() }}",
                "productId": productId,
                "quantity": parseInt(quantity) - 1,
            };
            $.ajax({
                url: "{{ route('addToCart') }}",
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
        $('.remove_cart_item ').on('click', function() {
            var productId = $(this).attr('data-product-id');
            var $data = {
                "_token": "{{ csrf_token() }}",
                "productId": productId,
                "quantity": 0,
            };
            $.ajax({
                url: "{{ route('addToCart') }}",
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