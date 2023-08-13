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
            <div class="d-flex justify-content-start align-items-center"><a href="£" class="text-black text-decoration-none">Đổi mật khẩu</a></div>
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
            <form action="{{ route('change-password-process') }}" method="post" id="changePassword">
                @csrf
                <input type="hidden" id="user_id" name="user_id" @if(!empty($user)) value="{{ $user->user_id }}" @endif>
                <div class="form-group my-2">
                    <label for="currentPassword">Mật khẩu hiện tại</label>
                    <input type="text" class="form-control" id="currentPassword" name="currentPassword">
                    <div class="currentPassword_alert text-danger"></div>
                </div>
                <div class="form-group my-2">
                    <label for="newPassword">Mật khẩu mới</label>
                    <input type="text" class="form-control" id="newPassword" name="newPassword">
                    <div class="newPassword_alert text-danger"></div>
                </div>
                <div class="form-group my-2">
                    <label for="renewPassword">Xác nhận Mật khẩu mới</label>
                    <input type="text" class="form-control" id="renewPassword" name="renewPassword">
                    <div class="renewPassword_alert text-danger"></div>
                </div>
                @if(session()->has('error'))
                <div class="alert alert-warning">
                    {{ session()->get('error') }}
                </div>
                @endif
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <div class="form-group mt-3">
                    <a id="btnChangePass" class="btn btn-primary text-white">Cập nhật</a>
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
        $('#btnChangePass').on("click", function() {
            var currentPassword = $("#currentPassword").val();
            var newPassword = $("#newPassword").val();
            var renewPassword = $("#renewPassword").val();
            var check = false;
            if (currentPassword == "") {
                $('.currentPassword_alert').html('* Mật khẩu không được để trống');
            } else if (newPassword == "" || newPassword.trim().length < 6 ) {
                $('.newPassword_alert').html('* Mật khẩu mới không được để trống hoặc phải > 6 kí tự');
            } 
            else if (renewPassword == "" || renewPassword.trim().length < 6) {
                $('.renewPassword_alert').html('* Xác nhận mật khẩu không được để trống hoặc phải > 6 kí tự');
            } 
            else if (renewPassword != newPassword) {
                $('.newPassword_alert').html('* Mật khẩu không giống nhau');
                $('.renewPassword_alert').html('* Xác nhận Mật khẩu không giống nhau');
            }else {
                check = true;
            }
            if (check) {
                $('#changePassword').submit();
            }
        });
    });
</script>
@endsection