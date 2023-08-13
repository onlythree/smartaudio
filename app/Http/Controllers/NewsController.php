<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\languages;
use App\Models\newscategories;
use App\Models\news;
use App\Models\NewsTags;

class NewsController extends Controller
{
    public function getNewsBySlug($slug)
    {

        $news = news::where('active', 1)->where('slug', $slug)->first();

        $newscategories = newscategories::where('id',$news->news_cateid)->first();
        $viewmore = news::where('active', 1)->where('news_cateid', $news->news_cateid)->where('id', '!=', $news->id)->orderby('id', 'desc')->limit(8)->get();
        generateSeo($news->slug, 'newsDetail', 'news_detail');
        
        $data = [
            'newscategories' => $newscategories,
            'news' => $news,
            'viewmore' => $viewmore
        ];
        return view('news.details', $data);
    }
    function getNews($cateSlug)
    {
        $newscategories = newscategories::where('active', 1)->where('slug', $cateSlug)->first();
        $news = news::where('active', 1)->where('news_cateid', $newscategories->id)->orderby('id', 'desc')->limit(10)->get();
        return $news;
    }
    public function getNewsByTag($slug)
    {
        $tag = NewsTags::where('slug',$slug)->first();
        $news = news::where('active', 1)->where('tags', 'like','%'.$tag->title.'%')->orderby('id', 'desc')->paginate(20);
       
        $data = [
            'tags' => $tag,
            'news' => $news
        ];
        return view('news.tags', $data);
    }
}
