<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\languages;

class LanguagesController extends Controller
{
    public function getLanguages()
    {
        $lang = languages::where('active',1)->get();
        return $lang;
    }
    public function getLanguagesBySlug($slug)
    {
        $lang = languages::where('slug',$slug)->first();
        return $lang;
    }
    public function change_languages($slug)
    { 
        $lang = languages::where('slug',$slug)->first();
        \Session::put('website_language', $lang->slug);
        return redirect()->back();
    }
}
