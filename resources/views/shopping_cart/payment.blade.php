@php
$lang = config('app.locale');
@endphp
@extends('master.master')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <div class="d-flex justify-content-start align-items-center"><a href="{{ route('home') }}" class="text-black-50 text-decoration-none">Trang chủ</a></div>
            <div class="d-flex justify-content-start align-items-center"><span style="font-size:14px;"><i class="bi bi-chevron-right"></i></span></div>
            <div class="d-flex justify-content-start align-items-center"><a href="#" class="text-black text-decoration-none">Thông tin khách hàng</a></div>
        </div>
    </div>
</div>

<div class="container py-3">
    <h1 class="fs-5 color-green text-center">Đặt hàng & Thanh toán</h1>
</div>
<div class="container bg-white py-3 mb-3">
    <form id="order-form" action="{{ route('submit-order') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-4">
                <h3 class="fs-5 color-green mb-3">Thông tin khách hàng</h3>
                <div class="customer_name">
                    <p class="my-2">Tên khách hàng</p>
                    <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Nguyễn Văn A">
                </div>
                <div class="customer_phone">
                    <p class="my-2">Số điện thoại</p>
                    <input type="text" name="customer_phone" id="customer_phone" class="form-control" placeholder="09xxxxxxxx">
                </div>
                <div class="customer_email">
                    <p class="my-2">Email</p>
                    <input type="text" name="customer_email" id="customer_email" class="form-control" placeholder="email@gmail.com">
                </div>
                <div class="customer_email">
                    <p class="my-2">Địa chỉ nhận hàng <br /><i>Vui lòng nhập đúng địa chỉ để chúng tôi có thể gửi hàng
                            đến bạn</i></p>
                    <textarea name="customer_address" id="customer_address" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="col-12 col-sm-4 mb-3">
                <h3 class="fs-5 color-green mb-3">Phương thức thanh toán</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="form-check form-check-inline radio-payment">
                            <input class="form-check-input" type="radio" name="payment_method" id="cod" value="-1" checked>
                            <label class="form-check-label" for="cod">
                                <img src="{{ asset('asset/image/cod.png') }}" alt="" />
                                Thanh toán khi nhận hàng </label>
                        </div>
                    </li>
                    <!-- <li class="list-group-item">
                        <div class="form-check form-check-inline radio-payment">
                            <input class="form-check-input" type="radio" name="payment_method" id="atmnoidia" value="1">
                            <label class="form-check-label" for="atmnoidia">
                                <img src="{{ asset('asset/image/credit-card.png') }}" alt="" />
                                Sử dụng thẻ ATM nội địa</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check form-check-inline radio-payment">
                            <input class="form-check-input" type="radio" name="payment_method" id="visamaster" value="128">
                            <label class="form-check-label" for="visamaster">
                                <img src="{{ asset('asset/image/mastercard.png') }}" alt="" />
                                Sử dụng thẻ Visa/Master card</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check form-check-inline radio-payment">
                            <input class="form-check-input" type="radio" name="payment_method" id="qrcode" value="297">
                            <label class="form-check-label" for="qrcode">
                                <img src="{{ asset('asset/image/qrcode.png') }}" alt="" />
                                Sử dụng mã quét QR code</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check form-check-inline radio-payment">
                            <input class="form-check-input" type="radio" name="payment_method" id="momo" value="311">
                            <label class="form-check-label" for="momo">
                                <img src="{{ asset('asset/image/momo.png') }}" alt="" />
                                Sử dụng ví điện tử Momo</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check form-check-inline radio-payment">
                            <input class="form-check-input" type="radio" name="payment_method" id="viettelpay" value="316">
                            <label class="form-check-label" for="viettelpay">
                                <img src="{{ asset('asset/image/viettelmoney.png') }}" alt="" />
                                Sử dụng ví điện tử ViettelPay</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check form-check-inline radio-payment">
                            <input class="form-check-input" type="radio" name="payment_method" id="zalopay" value="312">
                            <label class="form-check-label" for="zalopay">
                                <img src="{{ asset('asset/image/zalopay.png') }}" alt="" />
                                Sử dụng ví điện tử ZaloPay</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check form-check-inline radio-payment disabled">
                            <input class="form-check-input" type="radio" name="payment_method" id="shopeepay" value="312">
                            <label class="form-check-label" for="shopeepay">
                                <img src="{{ asset('asset/image/shopeepay.png') }}" alt="" />
                                Sử dụng ví điện tử ShopeePay</label>
                        </div>
                    </li> -->
                </ul>
            </div>
            <div class="col-12 col-sm-4">
                <h3 class="fs-5 color-green mb-3">Thông tin đơn hàng</h3>
                @if (session('shopping_cart') != null)
                @php
                $total = 0;
                $sumary = 0;
                @endphp
                @foreach (session('shopping_cart') as $cart)
                @php
                $lineTotal = 0;
                @endphp
                <div class="row mb-1">
                    <div class="col-3 img">
                        <img src="{{ Storage::url($cart['prod_info']->images) }}" alt="{{ $cart['prod_info']->title }}" class="img-fluid">
                    </div>
                    <div class="col-9 title">
                        <p class="mb-0">{{ $cart['prod_info']->title }}</p>
                        @if ($cart['prod_info']->sale_price > 0)
                        @php
                        $lineTotal = $cart['prod_info']->sale_price * $cart['quantity'];
                        @endphp
                        <div class="price d-flex">
                            <p class="mb-0">{{ number_format($cart['prod_info']->sale_price, 0) }}</p>
                            <p class="mb-0 px-1">x{{ $cart['quantity'] }}</p>
                            <p class="mb-0">=<b>{{ number_format($lineTotal, 0) }}</b></p>
                        </div>
                        @else
                        @php
                        $lineTotal = $cart['prod_info']->base_price * $cart['quantity'];
                        @endphp
                        <div class="price d-flex">
                            <p class="mb-0">{{ number_format($cart['prod_info']->base_price, 0) }}</p>
                            <p class="mb-0 px-1">x{{ $cart['quantity'] }}</p>
                            <p class="mb-0">=<b>{{ number_format($lineTotal, 0) }}</b></p>
                        </div>
                        @endif
                    </div>
                </div>
                @php
                $total += $lineTotal;
                @endphp
                @endforeach

                <div class="row">
                    <div class="total_pay">
                        <div class="col-12 d-flex bg-gray p-2 justify-content-between">
                            <span>Tổng tiền hàng: </span>
                            <span>{{ number_format($total, 0) }} <span class="symbol">vnđ</span></span>
                        </div>
                        <div class="col-12 d-flex bg-gray p-2 justify-content-between">
                            <span>Phí vận chuyển: </span>
                            <span>@if ($total > 500000)
                                0 <span class="symbol">vnđ</span>
                                @php
                                $sumary = $total;
                                @endphp
                                @else
                                {{ number_format(config('ship_vi'), 0) }} <span class="symbol">vnđ</span>
                                @php
                                $sumary = $total + config('ship_vi');
                                @endphp
                                @endif</span>
                        </div>
                        <div class="col-12 d-flex bg-gray p-2 justify-content-between">
                            <span>Tổng thanh toán: </span>
                            <span><b>{{ number_format($sumary, 0) }} <span class="symbol">vnđ</span></b></span>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12">
                        <button type="button" id="paynow" class="button-red w100">Xác nhận</button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection

@section('style')
@endsection
@section('javascript')
<script src="{{ asset('asset/check.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#paynow').on('click', function() {
            var customer_phone = $('#customer_phone').val();
            var customer_name = $('#customer_name').val();
            var customer_email = $('#customer_email').val();
            var customer_address = $('#customer_address').val();

            if (checkPhoneNumber(customer_phone)) {
                if (customer_name != '') {
                    if (customer_address != '') {
                        if ($("input:radio[name='payment_method']").length > 0) {
                            if ($("input:radio[name='payment_method']").is(":checked")) {
                                //its checked
                                $("#order-form").submit();
                            } else {
                                alert('Cần chọn phương thức thanh toán');
                                return false;
                            }
                        }
                    } else {
                        alert('Vui lòng nhập đầy đủ địa chỉ nhận hàng');
                    }
                } else {
                    alert('Vui lòng nhập tên của bạn');
                }
            } else {
                alert('Vui lòng nhập đúng định dạng số điện thoại');
            }
        });
    });
</script>
@endsection