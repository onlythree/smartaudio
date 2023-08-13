<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\news;
use App\Models\newscategories;
use Illuminate\Http\Request;
use App\Models\pages;
use App\Models\products;

class PagesController extends Controller
{
    public function getPageDetails($slug)
    {
        $page = pages::where('active', 1)->where('slug', $slug)->first();
        generateSeo($page->slug, 'page', 'get-page');
        $data = ['page' => $page];
        return view('pages.detail', $data);
    }
    function chinhSachDaiLy()
    {
        $page = pages::where('active', 1)->where('slug', 'chinh-sach-dai-ly')->first();
        generateSeo($page->slug, 'page', 'get-page');
        $data = ['page' => $page];
        return view('pages.detail', $data);
    }
    function huongDanMuaHang()
    {
        $page = pages::where('active', 1)->where('slug', 'huong-dan-mua-hang')->first();
        generateSeo($page->slug, 'page', 'get-page');
        $data = ['page' => $page];
        return view('pages.detail', $data);
    }
    function huongDanThanhToan()
    {
        $page = pages::where('active', 1)->where('slug', 'huong-dan-thanh-toan')->first();
        generateSeo($page->slug, 'page', 'get-page');
        $data = ['page' => $page];
        return view('pages.detail', $data);
    }
    function phuongThucVanChuyen()
    {
        $page = pages::where('active', 1)->where('slug', 'phuong-thuc-van-chuyen')->first();
        generateSeo($page->slug, 'page', 'get-page');
        $data = ['page' => $page];
        return view('pages.detail', $data);
    }
    public function checkRoute($slug)
    {
        
        $page = pages::whereSlug($slug)->first();
        $cate = categories::whereSlug($slug)->first();
        $product = products::whereSlug($slug)->first();
        $ncate = newscategories::whereSlug($slug)->first();
        $news = news::whereSlug($slug)->first();
        if (!empty($page)) {
            return 'page';
        } elseif (!empty($cate)) {
            return 'cate';
        } elseif (!empty($product)) {
            return 'product';
        } elseif (!empty($ncate)) {
            return 'ncate';
        } elseif (!empty($news)) {
            return 'news';
        }
        return 'page';
    }
}
