<div class="row my-3">
    <div class="col-12 col-sm-3">
        <div class="border bg-white py-2 px-4" style="border-bottom:2px solid #007bff !important;background-color: #FFF;
    padding: 10px;">
            <b class="">Số liên hệ mới trong hệ thống</b><br>
            <i>(Toàn hệ thống)</i>
            <div style="display: flex;
    justify-content: flex-start;
    align-items: center;">
                <div class="icon"><i class="fa fa-trophy" style="font-size: 30px;color:orange"></i></div>
                <div class="money" style="font-size: 30px;">{{ number_format($total,0,',','.') }}</div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-3">
        <div class="border bg-white py-2 px-4" style="border-bottom:2px solid #007bff !important;background-color: #FFF;padding: 10px;">
            <b class="">Tư vấn mua xe</b><br>
            <i>(Khách hàng yêu cầu tư vấn)</i>
            <div style="display: flex;justify-content: flex-start;align-items: center;">
                <div class="icon"><i class="fa fa-paypal" style="font-size: 30px;color:orange"></i></div>
                <div class="money" style="font-size: 30px;">{{ number_format($tuvanmuaxe,0,',','.') }}</div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-3">
        <div class="border bg-white py-2 px-4" style="border-bottom:2px solid #007bff !important;background-color: #FFF;padding: 10px;">
            <b class="">Lái thử</b><br>
            <i>(Khách hàng đăng ký lái thử)</i>
            <div style="display: flex;justify-content: flex-start;align-items: center;">
                <div class="icon"><i class="fa fa-star" style="font-size: 30px;color:orange"></i></div>
                <div class="money" style="font-size: 30px;">{{ number_format($dangkylaithu,0,',','.') }}</div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-3">
        <div class="border bg-white py-2 px-4" style="border-bottom:2px solid #007bff !important;background-color: #FFF;padding: 10px;">
            <b class="">Báo giá</b><br>
            <i>(Khách hàng yêu cầu báo giá)</i>
            <div style="display: flex;justify-content: flex-start;align-items: center;">
                <div class="icon"><i class="fa fa-paypal" style="font-size: 30px;color:orange"></i></div>
                <div class="money" style="font-size: 30px;">{{ number_format($baogia,0,',','.') }}</div>
            </div>
        </div>
    </div>
</div>
<div class="row my-3">
    <div class="container-fluid ">
        <div class="bg-white" style="border-bottom:2px solid #007bff !important;background-color: #FFF; padding: 10px;margin-top:20px;">
        <h2 class="fs-4 mt-2">Liên hệ mới nhất</h2>
        <div class="table_reponsive">
            <table class="table table-bordered">
                <tr>
                    <th>STT</th>
                    <th>Khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Loại</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Ghi chú</th>
                    <th>Ngày liên hệ</th>
                    <th>Xem chi tiết</th>
                </tr>
                @if(!empty($lienhe))
                @foreach($lienhe as $lh)
                <tr>
                    <td>{{ $loop->index+1 }}</td> 
                    <td>{{ $lh->name }}</td>
                    <td>{{ $lh->phone }}</td>
                    <td>{{ $lh->email }}</td>
                    <td>{{ $lh->reason }}</td>
                    <td>{{ $lh->subject }}</td>                    
                    <td>{{ $lh->content }}</td>                    
                    <td>{{ $lh->note }}</td>                    
                    <td>{{ \Carbon\Carbon::parse($lh->created_at)->format('d/m/Y h:i:s') }}</td>
                    <td><a href="/admin/contacts/{{ $lh->id }}" class="btn btn-sm btn-default">Chi tiết</a></td>
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