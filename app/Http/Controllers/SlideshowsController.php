<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slideshows;

class SlideshowsController extends Controller
{
    public function getSlide($loc)
    {
        $slide = slideshows::where('active',1)->where('location',$loc)->get();
        return $slide;
    }
}
