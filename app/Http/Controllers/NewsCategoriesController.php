<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\categories;
use App\Models\newscategories;
use App\Models\news;
use App\Models\products;

class NewsCategoriesController extends Controller
{
    public function getNewsCategoriesById($id)
    {
        return newscategories::find($id);
    }
    public function allNewsCategories()
    {       
        $newscategories = newscategories::where('active', 1)->get();
        return $newscategories;
    }
    public function getLastestNews()
    {       
        $news = news::where('active', 1)->orderby('id','desc')->limit(5)->get();
        return $news;
    }
    public function getAllNewCate()
    {
        $categories = categories::where('active', 1)->get();
        $newscategories = newscategories::where('active', 1)->get();
        $best_seller_prod = products::where('active', 1)->where('best_seller', 1)->orderby('id', 'desc')->limit(8)->get();
        generateSeo('news', 'news', 'news');
        $data = [
            'categories' => $categories,
            'newscategories' => $newscategories,
            'best_seller_prod' => $best_seller_prod,
        ];
        return view('news-categories.index', $data);
    }
    
    public function getNewCategories($slug)
    { 
        $newscategories = newscategories::where('active', 1)->where('slug', $slug)->first();
        $news = news::where('active', 1)->where('news_cateid', $newscategories->id)->paginate(20);
        generateSeo($newscategories->slug, 'newsCateDetails', 'newscate-details');
        $data = [
            'newscategories' => $newscategories,
            'news' => $news
        ];
        return view('news-categories.category_show', $data);
    }
}
