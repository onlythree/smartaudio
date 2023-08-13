<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\customer_reviews;
use App\Models\languages;
use App\Models\news;
use App\Models\products;
use App\Models\slideshows; 
use Illuminate\Support\Facades\Storage;

class HomesController extends Controller
{
    public function index()
    {
       
        generateSeo('', '', '');
        $feature_prod = products::where('active', 1)->where('hot', 1)->orderby('id', 'desc')->limit(8)->get();
        $categories = categories::where('active',1)->where('show_home',1)->orderby('order', 'asc')->limit(6)->get();
        $customer_reviews = customer_reviews::where('active',1)->orderby('id', 'desc')->limit(8)->get();
        $brand_slide  = slideshows::where('active',1)->where('location','brand')->orderby('order','asc')->get();
        $news = news::where('active',1)->orderby('id', 'desc')->limit(8)->get();
        $data = [
            'feature_prod' => $feature_prod,
            'categories' => $categories,
            'customer_reviews' => $customer_reviews,
            'brand_slide' => $brand_slide,
            'news' => $news,
        ];
        return view('homepage.index',$data);
    }
    
}
