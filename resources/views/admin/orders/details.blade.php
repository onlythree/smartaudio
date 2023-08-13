<h2>Thông tin đơn hàng</h2>
<table class="table table-repositive table-bordered">
    <tr>
        <td><b>Tên khách hàng: </b> {{ $order->customer_name }}</td>
        <td><b>Điện thoại: </b> {{ $order->customer_phone }}</td>
        <td><b>Địa chỉ: </b> {{ $order->deliveries_address }}</td>
        <td><b>Ngày đặt hàng: </b> {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y h:i:s') }}</td>
        <td><b>Tổng tiền: </b> {{ number_format($order->total_pay,0,',','.') }}</td>
    </tr>
    <tr>
        <td><b>Phương thức thanh toán: </b> {{ $paymentMethod }}</td>
        <td><b>Trạng thái đơn hàng: </b> {{ $order_status }}</td>
        <td><b>Trạng thái thanh toán: </b> {{ $payment_status }}</td>
        <td><b>Trạng thái giao hàng: </b> {{ $deliveries_status }}</td>
    </tr>
</table>
<h2>Chi tiết đơn hàng</h2>
<table class="table table-repositive table-bordered">
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
    </tr>
    <?php $i = 1; ?>
    @foreach($orderDetail as $od)
    <?php $prod = getProductById($od->product_id); ?>
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $prod->title }}</td>
        <td>{{ $od->quantity }}</td>

    </tr>
    <?php $i++; ?>
    @endforeach
  
</table>