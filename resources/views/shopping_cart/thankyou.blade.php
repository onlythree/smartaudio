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
            <div class="d-flex justify-content-start align-items-center"><a href="#" class="text-black text-decoration-none">Đặt hàng thành công</a></div>
        </div>
    </div>
</div>
<div class="container py-3">
    <h1 class="fs-5 color-green text-center">Đặt hàng thành công</h1>
</div>

<div class="container">
    <div class="icon text-center"><i class="bi bi-check2-circle" style="font-size:200px;color:green"></i></div>
    <div class="status text-center mb-4">
        <h2 class="entry_title">{{ __('order.payment_success') }}</h2>
        <p>{!! __('order.checkemail') !!}</p>
        <a href="{{ route('home') }}"><button class="btn btn-success">{{ __('order.backtohomepage') }}</button></a>
    </div>
</div>
@endsection

@section('style')
@endsection
@section('javascript')
<script src="{{ asset('asset/check.js') }}"></script>
<script>
    $(document).ready(function() {

    });
</script>
@endsection