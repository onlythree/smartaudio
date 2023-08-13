<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\orders;
use App\Models\products;
use App\Models\ordersdetails;
use Carbon\Carbon;
use App\Models\baokimapi; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function shoppingCartOrder()
    {
       
        generateSeo('cart','cart', 'cart');
        return view('shopping_cart.order');
    }
    public function loveList()
    {
       
        generateSeo('cart','cart', 'cart');
        return view('shopping_cart.love-list');
    }
    public function comnpareListPage()
    {
       
        generateSeo('cart','cart', 'cart');
        return view('shopping_cart.compare-list');
    }
    public function payment()
    {
     
        generateSeo('payment','payment', 'payment');
        return view('shopping_cart.payment');
    }
     
    function orderStore(Request $request){
        
        $customer_phone = $request->customer_phone;
        $customer_email = $request->customer_email;
        $customer_name = $request->customer_name;
        $deliveries_address = $request->customer_address;
        $cart = session()->get('shopping_cart');
        $customer = customers::where('customer_phone',$customer_phone)->first();
        if($customer == null){
            $customer = new customers();
            $customer->customer_name = $customer_name;
            $customer->customer_email = $customer_email?$customer_email:''; 
            $customer->customer_phone = $customer_phone;
            $customer->active = 1;
            $customer->save();
        }
        $orderSumary = 0;
        $total_pay = 0;
        foreach ($cart as $pro) {
            $lineTotal = 0;
            if($pro['prod_info']->sale_price >0 ){
                $lineTotal = $pro['quantity'] * $pro['prod_info']->sale_price;
            }else{
                $lineTotal = $pro['quantity'] * $pro['prod_info']->base_price;
            }
            $orderSumary+= $lineTotal;
        }
        $order = new orders();
        $order->customer_id = $customer->id;
        $order->customer_name = $customer_name; 
        $order->customer_phone = $customer_phone;
        $order->deliveries_address = $deliveries_address;
        $order->order_sumary = $orderSumary;
        
        if($orderSumary> 500000){
            $order->ship_fee = 0;
            $total_pay = $orderSumary;
        }else{
            $order->ship_fee = config('ship_vn');
            $total_pay = $orderSumary+config('ship_vn');
        }
        $order->total_pay = $orderSumary;
        $order->discount = 0;
        $order->payment_method = $request->payment_method;
        $order->payment_status = 'cho-thanh-toan';
        $order->order_status = 'cho-xac-nhan';
        $order->deliveries_status = 'cho-xac-nhan';
        
        if($order->save()==1){
            
            foreach ($cart as $prod) {
                $orderDetail = new ordersdetails();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $prod['prod_info']->id; 
                $orderDetail->quantity = $prod['quantity'];
                $orderDetail->save();
            }
            // after save cart detail
            //check payment method
            if($request->payment_method != null && $request->payment_method != -1){
                $payment_method = $request->payment_method;
               
                $hookNotification = route('confirmPayment');
                switch ($payment_method) {
                    case 1:
                        // code 1: ATM
                        $res = $this->purchaseOrderBaoKim($customer,$order,$hookNotification,15);
                        if($res['code'] == 0){
                            return redirect()->to($res['payment_url']);
                        }else{
                            return redirect()->back()->withErrors(['msg' => $res['message']]);
                        }
                                         
                    case 128:
                        // code 2: Visa/Master
                        $res = $this->purchaseOrderBaoKim($customer,$order,$hookNotification, 128);                   
                        if($res['code'] == 0){
                            return redirect()->to($res['payment_url']);
                        }else{
                            return redirect()->back()->withErrors(['msg' => $res['message']]);
                        }
                    
                    case 297:
                        // code 297 thanh toan qrcode
                       $res = $this->purchaseOrderBaoKim($customer,$order,$hookNotification, 297);                   
                       if($res['code'] == 0){
                           return redirect()->to($res['payment_url']);
                       }else{
                           return redirect()->back()->withErrors(['msg' => $res['message']]);
                       }            
                     
                    case 311:
                        // code 311 thanh toan momo 
                        $res = $this->purchaseOrderBaoKim($customer,$order,$hookNotification, 311);                   
                        if($res['code'] == 0){
                            return redirect()->to($res['payment_url']);
                        }else{
                            return redirect()->back()->withErrors(['msg' => $res['message']]);
                        }   
                    case 312:
                        // code 312 thanh toan zalopay
                        $res = $this->purchaseOrderBaoKim($customer,$order,$hookNotification, 312);                   
                        if($res['code'] == 0){
                            return redirect()->to($res['payment_url']);
                        }else{
                            return redirect()->back()->withErrors(['msg' => $res['message']]);
                        }  
                    case 316:
                            // code 316 thanh toan viettelpay
                            $res = $this->purchaseOrderBaoKim($customer,$order,$hookNotification, 316);                   
                            if($res['code'] == 0){
                                return redirect()->to($res['payment_url']);
                            }else{
                                return redirect()->back()->withErrors(['msg' => $res['message']]);
                            }  
                    default:
                        // code 4: Bao kim
                        $res = $this->purchaseOrderBaoKim($customer,$order,$hookNotification,0);                   
                        if($res['code'] == 0){
                            return redirect()->to($res['payment_url']);
                        }else{
                            return redirect()->back()->withErrors(['msg' => $res['message']]);
                        }
                }
            } 
 
            session()->forget('shopping_cart');
            
            return redirect(route('thankyou',$order->id));
        }  
    }
    function purchaseOrderBaoKim($customer,$order,$webhooks,$bpm_id){
        
        $data = ['code'=>'','message'=>'','payment_url'=>''];

        $api_endpoint = orders::BAOKIM_api_endpoint."api/v5/order/send/"; //sandbox
        $merchant_id = orders::Merchant_id; //mã id của merchant
       
        $mrc_order_id = $order->id; //mã đơn hàng của merchant
        $total_amount = $order->order_sumary; //tổng số tiền đơn hàng
        $description = "Thanh toan don hang ".$order->id;
        $url_success = route('setPaymentStatus',$order->id); //Url redirect lại sau khi thanh toán thành công
        $url_detail = route('thankyou',$order->id); //Url chi tiết đơn hàng (redirect lại khi khách hủy đơn)
        $lang = "vi"; //Ngôn ngữ (en/vi)
        $bpm_id = $bpm_id; //ID phương thức thanh toán từ ngân hàng Từ API Bank Payment Method List
        $webhooks = $webhooks; //url dùng để gửi thông báo cho website bán hàng, chat, ... khi đơn hàng thanh toán thành công, cho phép notify đến nhiều url, cách nhau bởi dấu ,
        $customer_email = $customer->email; //Email khách hàng
        $customer_phone = $customer->phone; //Số điện thoại khách hàng
        $customer_name = $customer->name; //Họ và tên khách hàng
        $customer_address = "hanoi"; //Địa chỉ khách hàng

        $client = new \GuzzleHttp\Client();
        $options['query']['jwt'] = BaoKimAPI::getToken();
        $payload['mrc_order_id'] = $mrc_order_id;
        $payload['total_amount'] = $total_amount;
        $payload['description'] = $description;
        $payload['url_success'] = $url_success;
        $payload['merchant_id'] = $merchant_id;
        $payload['url_detail'] = $url_detail;
        $payload['lang'] = $lang;
        $payload['bpm_id'] = $bpm_id;
        $payload['webhooks'] = $webhooks;
        $payload['customer_email'] = $customer_email;
        $payload['customer_phone'] = $customer_phone;
        $payload['customer_name'] = $customer_name;
        $payload['customer_address'] = $customer_address;
        $options['form_params'] = $payload;        
        $response = $client->request("POST", $api_endpoint, $options); 
      
        if($response->getStatusCode() == 200){
            $res = json_decode($response->getBody()->getContents());
            // var_dump($options);
            // var_dump($res);
         
            if($res->code == 0){
               // dd($res->data->payment_url);
               $payment_url = $res->data->payment_url;
               $data = ['code'=>$res->code,'message'=>$res->message,'payment_url'=>$payment_url];
               Log::build(['driver' => 'single','path' => storage_path('logs/paymentbk/'.Carbon::now()->isoFormat('YYYY-MM-DD').'_success.log'),])->info('Request: '.json_encode($options));
            }else{
                $data = ['code'=>$res->code,'message'=>$res->message,'payment_url'=>''];
                Log::build(['driver' => 'single','path' => storage_path('logs/paymentbk/'.Carbon::now()->isoFormat('YYYY-MM-DD').'_error.log'),])->info('Request: '.json_encode($res));
            }
        } 
        Log::build(['driver' => 'single','path' => storage_path('logs/paymentbk/'.Carbon::now()->isoFormat('YYYY-MM-DD').'.log'),])->info('Request: '.json_encode($options));

        return $data;
    }

    function confirmBaoKimPayment(Request $request){
      
        Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/paymentbk/'.Carbon::now()->isoFormat('YYYY-MM-DD').'_confirm.log'),])
        ->info('Response: '.$request->getContent());
        //  dd();
        
        $webhookData = json_decode($request->getContent());   
        //Get và remove trường sign ra khỏi dữ liệu       
        $baokimSign = $webhookData->sign;   
        unset($webhookData->sign);    
        //Chuyển dữ liệu đã remove sign về lại dạng json và sử dụng thuật toán hash sha256 để tạo signature với secret key
        $signData = json_encode($webhookData);
        $secret = orders::API_SECRET;        
        $mySign = hash_hmac('SHA256', $signData,$secret);

        Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/paymentbk/'.Carbon::now()->isoFormat('YYYY-MM-DD').'_confirm.log'),])
        ->info('mysign: '.$mySign.' bksign: '.$baokimSign);
        //So sánh chữ ký bạn tạo ra với chữ ký bảo kim gửi sang, nếu khớp thì verify thành công
        if($baokimSign == $mySign){
            //echo "Signature is valid";
            $orderData = $webhookData->order;
            
            if($orderData->stat == 'c' || $orderData->stat == 'r'){
                $order= orders::find($orderData->mrc_order_id);
                $order->payment_status = 'da-thanh-toan';
                $order->order_status = 'cho-giao-hang';
                if($order->save() == 1){            
                    return response()->json([
                        'err_code' => 0,
                        'message' => 'completed',
                    ]);
                }                
            } 
            else{
                return response()->json([
                    'err_code' => 1,
                    'message' => 'khong xac nhan',
                ]);
            }
        }
        else{
            echo "Signature is invalid";
        }
        return false;
    }
    function setPaymentStatus($order_id){
        session()->forget('shopping_cart');
        return redirect(route('thankyou',$order_id));
    }
    function thankyou($order_id){
        $order= orders::find($order_id);
        $orderDetail = ordersdetails::where('order_id',$order_id)->lazy();      
        $customer = customers::find($order->customer_id);
        $data = ['customer'=>$customer,'order'=>$order,'orderDetail'=>$orderDetail];
        generateSeo('thankyou','order', 'thankyou');
        return view('shopping_cart.thankyou',$data);       
    }
    function getBankList(){
        $api_endpoint = Orders::BAOKIM_api_endpoint."/api/v5/bpm/list/";
        $client = new \GuzzleHttp\Client();
        $options['query']['jwt'] = BaoKimAPI::getToken(); 
          
        $response = $client->request("GET", $api_endpoint, $options);
        dd(json_decode($response->getBody()->getContents()));
    }
}
