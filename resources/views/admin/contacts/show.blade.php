<fieldset>
    <legend>Thông tin liên hệ</legend>

    <table class="table table-bordered">
        <tr>
            <td><b>Tên khách hàng: </b>{{ $contacts->name }}</td>
            <td><b>Số điện thoại: </b>{{ $contacts->phone }}</td>
            <td><b>Email: </b>{{ $contacts->email }}</td> 
            <td><b>Gửi vào lúc: </b>{{ \Carbon\Carbon::parse($contacts->created_at)->format('d/m/Y h:s') }}</td> 
        </tr>
        <tr>
            <td colspan="3"><b>Mục đích liên hệ: </b>{{ $contacts->reason }}</td>
        </tr>
        <tr>
            <td colspan="3"><b>Tiêu đề: </b>{{ $contacts->subject }}</td>
        </tr>
        <tr>
            <td colspan="3"><b>Nội dung: </b>{{ $contacts->content }}</td>
        </tr>
    </table>
</fieldset>