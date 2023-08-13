<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    // public function index(Content $content)
    // {
    //     return $content
    //         ->title('Trang quản trị nội dung website')
    //         ->description('Quản lý thông tin hệ thống...')
    //         ->row(Dashboard::title())
    //         ->row(function (Row $row) {

    //             $row->column(4, function (Column $column) {
    //                 $column->append(Dashboard::environment());
    //             });

    //             $row->column(4, function (Column $column) {
    //                 $column->append(Dashboard::extensions());
    //             });

    //             $row->column(4, function (Column $column) {
    //                 $column->append(Dashboard::dependencies());
    //             });
    //         });
    // }
    
    public function index(Content $content)
    {
        $totalOrder = orders::all()->count();
        $totalSumOrder = orders::all()->sum('total_pay');
        $totalOrderCompleted = orders::where('order_status','completed')->where('payment_status','completed')->count();
        $totalSumOrderCompleted = orders::where('order_status','completed')->where('payment_status','completed')->sum('total_pay');
        $orderList = orders::orderby('created_at','desc')->limit(5)->get();;
        $data = [
          'totalOrder' => $totalOrder,          
          'totalSumOrder' => $totalSumOrder,          
          'totalOrderCompleted' => $totalOrderCompleted,          
          'totalSumOrderCompleted' => $totalSumOrderCompleted,          
        ];
        return $content
            ->title('Trang quản trị nội dung website')
            ->description('Quản lý thông tin hệ thống...')
        ->row(view('admin.dashboard.index',$data));
    }
}
