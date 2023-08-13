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
        <div class="col-12 col-sm-9 mt-4">
            <h3>Cập nhật thông tin</h3>
            <form action="{{ route('update-account-info') }}" method="post" id="update-account">
                @csrf
                <div class="form-group my-2">
                    <label for="fullname">Họ Tên</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" @if(!empty($user)) value="{{ $user->fullname }}" @endif>
                    <div class="fullname_alert text-danger"></div>
                </div>
                <div class="form-group my-2">
                    <label for="username">Tên truy cập</label>
                    <input type="text" class="form-control" id="username" name="username" readonly @if(!empty($user)) value="{{ $user->username }}" @endif>
                </div>
                <div class="form-group my-2">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" @if(!empty($user)) value="{{ $user->phone }}" @endif>
                    <div class="phone_alert text-danger"></div>
                </div>
                <div class="form-group my-2">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" @if(!empty($user)) value="{{ $user->email }}" @endif>
                    <div class="email_alert text-danger"></div>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-error">
                    {{ session()->get('error') }}
                </div>
                @endif
                <div class="form-group mt-3">
                    <button class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('style')
@endsection
@section('javascript')
<script>
    $(document).ready(function() {
        $('#update-account').on("submit", function() {
            var phone = $("#phone").val();
            var email = $("#email").val();
            var fullname = $("#fullname").val();
            var check = false;
            if (phone == "") {
                $('.phone_alert').html('* Số điện thoại không được để trống');
            } else if (fullname == "") {
                $('.fullname_alert').html('* Họ tên không được để trống');
            } else if (email == "") {
                $('.email_alert').html('* Email không được để trống');
            } else {
                check = true;
            }
            if (check) {
                $(this).submit();
            }
        });
    });
</script>
@endsection