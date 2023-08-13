<div class="box my-3 py-3 border">
    <div class="avatar d-flex justify-content-center">
        <div class="rounded-circle d-flex justify-content-center align-items-center" style="width: 150px;text-align: center;border: 1px solid #dfdcdc36;height: 150px;font-size: 55px;background: beige;">
            {{ substr($user->fullname,0,2) }}
        </div>
    </div>
    <div class="fullname text-center py-3">
        {{ $user->fullname }}
    </div> 
    <ul class="ps-0 m-0 list-style-none border-top"> 
        <li style="border-bottom:1px solid #ccc;padding: 5px 20px;"><i class="bi bi-caret-right-fill text-gray"></i><a class="text-decoration-none text-gray" href="{{ route('profile') }}">Trang cá nhân</a></li>
        <li style="border-bottom:1px solid #ccc;padding: 5px 20px;"><i class="bi bi-caret-right-fill text-gray"></i><a class="text-decoration-none text-gray" href="{{ route('getOrder') }}">Đơn hàng đã mua</a></li>
        <li style="border-bottom:1px solid #ccc;padding: 5px 20px;"><i class="bi bi-caret-right-fill text-gray"></i><a class="text-decoration-none text-gray" href="{{ route('info') }}">Thông tin cá nhân</a></li>
        <li style="border-bottom:1px solid #ccc;padding: 5px 20px;"><i class="bi bi-caret-right-fill text-gray"></i><a class="text-decoration-none text-gray" href="{{ route('change-password') }}">Đổi mật khẩu</a></li>
        <li style="padding: 5px 20px;"><i class="bi bi-caret-right-fill text-gray"></i><a class="text-decoration-none text-gray" href="{{ route('logout') }}">Đăng xuất</a></li>
    </ul>
</div>