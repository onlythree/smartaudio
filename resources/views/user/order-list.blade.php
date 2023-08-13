@php
$lang = config('app.locale');
@endphp
@extends('master.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            @include('user.sidebar')
        </div>
        <div class="col-12 col-sm-9 mt-4">

            <div class="box">
                <h3 style="font-size:20px;">Đơn hàng Sản phẩm</h3>
                <div class="is-divider small bg-black"></div>
                @if(!empty($orderList))
                <table class="table table-bordered">
                    <tr>
                        <td>STT</td>
                        <td>Tên sản phẩm</td>
                        <td>Tổng tiền</td>
                        <td>Trạng thái</td>
                        <td>Ngày mua</td>
                    </tr>

                    @foreach($orderList as $ol)
                    <?php 
                    $product = getProductByid($ol->product_id); 
                    ?>
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ number_format($ol->order_sumary,0,',','.') }}</td>

                        <td>@if($ol->payment_status == 'da-thanh-toan') <label class="btn btn-sm btn-success">Đã thanh toán</label>
                            @elseif($ol->payment_status == 'cho-thanh-toan') <label class="btn btn-sm btn-warning">Chờ thanh toán</label>@endif</td>
                        <td>{{ \Carbon\Carbon::parse($ol->created_at)->format('d/m/Y h:i:s') }}</td>
                    </tr>
                    @endforeach
                </table>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
@endsection
@section('javascript')
@endsection