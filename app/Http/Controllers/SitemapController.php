<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\news;
use App\Models\categories;
use App\Models\pages;
use App\Models\newscategories;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function sitemap()
    {
        $pages = pages::orderBy("id", "desc")->take(50000)->get();
        $products = products::orderBy("id", "desc")->take(50000)->get();
        $news = news::orderBy("id", "desc")->take(50000)->get();
        $categories =  categories::orderBy("id", "desc")->take(50000)->get();
        $newscategories =  newscategories::orderBy("id", "desc")->take(50000)->get();
        $content = View::make('sitemap.index', ['pages' => $pages,'products' => $products,'categories'=>$categories, 'news' => $news,'newscategories'=>$newscategories]);
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }
}
