<?php

namespace App\Admin\Controllers;

use App\Models\orders;
use App\Models\customers;
use App\Models\deliveries;
use App\Models\paymentmethod;
use App\Http\Controllers\Controller;
use App\Models\ordersdetails;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class OrdersController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header(trans('admin.index'))
            ->description(trans('admin.description'))
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header(trans('admin.detail'))
            ->description(trans('admin.description'))
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header(trans('admin.edit'))
            ->description(trans('admin.description'))
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header(trans('admin.create'))
            ->description(trans('admin.description'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new orders);

        $grid->id('ID');
        $grid->model()->orderby('id', 'desc');

        $grid->column('customer_name', 'Tên khách hàng')->filter('like');
        $grid->column('customer_phone', 'Số ĐT')->filter('like');
        $grid->column('created_at', 'Ngày đặt hàng')->display(function ($created_at) {
            return \Carbon\Carbon::parse($created_at)->format('d/m/Y');
        })->filter('date');
        $grid->column('order_sumary', 'Tổng đơn hàng')->display(function ($order_sumary) {

            return number_format($order_sumary, 0);
        });
        $grid->column('payment_method', 'Phương thức thanh toán')->display(function ($payment_method) {
            $paymentMethod = paymentmethod::where('payment_code', $payment_method)->first();
            if ($paymentMethod != null) {
                return $paymentMethod->title;
            } else {
                return 'COD Thanh toán & Lắp đặt tại nhà';
            }
        })->filter('like');
        $grid->column('payment_status', 'Trạng thái thanh toán')->editable('select', [
            'cho-thanh-toan' => 'Chờ thanh toán',
            'da-thanh-toan' => 'Đã thanh toán'
        ])->filter([
            'cho-thanh-toan' => 'Chờ thanh toán',
            'da-thanh-toan' => 'Đã thanh toán'
        ]);
        $grid->column('order_status', 'Trạng thái đơn hàng')->editable('select', [
            'cho-xac-nhan' => 'Chờ xác nhận',
            'cho-giao-dvvc' => 'Chờ giao ĐVVC',
            'da-giao-dvvc' => 'Đã giao ĐVVC'
        ])
            ->filter([
                'cho-xac-nhan' => 'Chờ xác nhận',
                'cho-giao-dvvc' => 'Chờ giao ĐVVC',
                'da-giao-dvvc' => 'Đã giao ĐVVC',
            ]);
        $grid->column('deliveries_status', 'Trạng thái giao hàng')->editable('select', [
            'cho-xac-nhan' => 'Chờ xác nhận',
            'dang-giao-hang' => 'Đang giao hàng',
            'da-giao-hang' => 'Đã giao hàng',
            'hoan-thanh' => 'Hoàn thành',
        ])
            ->filter([
                'cho-xac-nhan' => 'Chờ xác nhận',
                'dang-giao-hang' => 'Đang giao hàng',
                'da-giao-hang' => 'Đã giao hàng',
                'hoan-thanh' => 'Hoàn thành',
            ]);
        $grid->column('deliveries_address', 'Địa chỉ nhận hàng');
        $grid->column('deliveries_id', 'Đơn vị vận chuyển')
            ->editable('select', deliveries::all()->pluck('title', 'id'));
        $grid->column('deliveries_code', 'Mã vận đơn')->editable();
        $grid->column('view', 'Xem chi tiết')->display(function () {
            return '<a href="' . route('admin.orders.show', $this->id) . '">Xem chi tiết</a>';
        });

        $grid->disableActions();
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $orders = orders::findOrFail($id);
        $paymentMethod = 'Thanh toán & Lắp đặt tại nhà';
        $payment_status= 'Chờ xác nhận';
        $order_status = 'Chờ xác nhận';
        $deliveries_status = 'Chờ xác nhận';
        if ($orders->payment_method != -1) {
            $paymentMethodObj = paymentmethod::where('payment_code', $orders->payment_method)->first();
            $paymentMethod = $paymentMethodObj->title;
        }
        if($orders->payment_status == 'cho-thanh-toan'){ $payment_status='Chờ thanh toán'; }
        elseif($orders->payment_status == 'da-thanh-toan'){$payment_status='Đã thanh toán';}
        
        if($orders->order_status == 'cho-xac-nhan'){ $order_status='Chờ xác nhận'; }
        elseif($orders->order_status == 'cho-giao-dvvc'){$order_status='Chờ giao hàng';}
        elseif($orders->order_status == 'da-giao-dvvc'){$order_status='Đã giao hàng';}
     
        if($orders->deliveries_status == 'cho-xac-nhan'){ $deliveries_status='Chờ xác nhận'; }
        elseif($orders->deliveries_status ==  'dang-giao-hang'){$deliveries_status='Đang giao hàng';}
        elseif($orders->deliveries_status ==  'da-giao-hang'){$deliveries_status='Đã giao hàng';}
        elseif($orders->deliveries_status ==  'hoan-thanh'){$deliveries_status='Hoàn thành';}

        $orderDetail = ordersdetails::where('order_id',$orders->id)->get();

        $data = [
            'order' => $orders,
            'paymentMethod' => $paymentMethod,
            'payment_status' => $payment_status,
            'order_status' => $order_status,
            'deliveries_status' => $deliveries_status,
            'orderDetail' => $orderDetail,
        ];
        return view('admin.orders.details', $data);
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new orders);

        $form->hidden('id');

        $form->select('payment_status', 'Trạng thái thanh toán')->options([
            'cho-thanh-toan' => 'Chờ thanh toán',
            'da-thanh-toan' => 'Đã thanh toán'
        ]);

        $form->select('deliveries_id', 'Đơn vị vận chuyển')->options(deliveries::all()->pluck('title', 'id'));
        $form->text('deliveries_code', 'Mã vận đơn');
        $form->select('order_status', 'Trạng thái đơn hàng')->options([
            'cho-xac-nhan' => 'Chờ xác nhận',
            'cho-giao-dvvc' => 'Chờ giao ĐVVC',
            'da-giao-dvvc' => 'Đã giao ĐVVC',
        ]);
        $form->select('deliveries_status', 'Trạng thái giao hàng')->options([
            'dang-giao-hang' => 'Đang giao hàng',
            'da-giao-hang' => 'Đã giao hàng',
            'hoan-thanh' => 'Đã về tiền',
        ]);


        return $form;
    }
}
