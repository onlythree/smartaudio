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
            <div class="d-flex justify-content-start align-items-center"><a href="£" class="text-black text-decoration-none">Trang cá nhân</a></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            @include('user.sidebar')
        </div>
        <div class="col-12 col-sm-9">
            <div class="row my-3">
                <div class="col-12 col-sm-6">
                    <div class="border bg-white py-2 px-4" style="border-bottom:2px solid #007bff !important;background-color: #FFF;padding: 10px;">
                    <b class="">Số đơn hàng phát sinh</b><br>
                        <i>(Toàn bộ)</i>
                        <div style="display: flex;justify-content: flex-start;align-items: center;">
                            <div class="icon"><i class="fa fa-trophy" style="font-size: 30px;color:orange"></i></div>
                            <div class="money" style="font-size: 30px;padding-left: 15px;">{{ number_format($totalOrder,0,',','.') }}</div>
                        </div>
                    </div>
                </div> 
                <div class="col-12 col-sm-6">
                    <div class="border bg-white py-2 px-4" style="border-bottom:2px solid #007bff !important;background-color: #FFF;padding: 10px;">
                        <b class="">Tổng tiền hàng</b><br>
                        <i>(bao gồm toàn bộ các đơn hàng)</i>
                        <div style="display: flex;justify-content: flex-start;align-items: center;">
                            <div class="icon"><i class="fa fa-star" style="font-size: 30px;color:orange"></i></div>
                            <div class="money" style="font-size: 30px;padding-left: 15px;">{{ number_format($totalOrderSumary->total,0,',','.') }}</div>
                        </div>
                    </div>
                </div>
                 
            </div>
            <div class="row my-3">
                <div class="container-fluid ">
                    <div class="bg-white" style="border-bottom:2px solid #007bff !important;background-color: #FFF; padding: 10px;margin-top:20px;">
                        <h2 class="fs-4 mt-2">5 đơn hàng mới nhất</h2>
                        <div class="table_reponsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>STT</th> 
                                    <th>Khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Tổng giá trị</th>
                                    <th>Ngày đặt</th>
                                </tr>
                                @if(!empty($orderList))
                                @foreach($orderList as $ord)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td> 
                                    <td>{{ $ord->customer_name }}</td>
                                    <td>{{ $ord->customer_phone }}</td>
                                    <td>{{ $ord->customer_email }}</td>
                                    <td>{{ number_format($ord->total_pay,0,',','.') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($ord->created_at)->format('d/m/Y') }}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="7">Chưa có đơn hàng nào</td>
                                </tr>
                                @endif
                            </table>
                        </div>
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