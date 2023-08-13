<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\languages;
use App\Models\menus;

class MenusController extends Controller
{
    public function getRootMenu($position)
    {       
      
        $menu = menus::where('active',1)->where('position',$position)->where('parent_id',0)->orderby('order','asc')->get();
        return $menu;
    }
    public function getChildMenu($parentId)
    {       
      
        $menu = menus::where('active',1)->where('parent_id',$parentId)->orderby('order','asc')->get();
        return $menu;
    }
}
