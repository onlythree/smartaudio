<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\languages;
use App\Models\ProductBrands;

class SearchController extends Controller
{
    public function searchSubmit(Request $request)
    {
        $keyword = $request->key;
        $categories = getRootCate();
        $allBrands = ProductBrands::orderby('id', 'desc')->get();
        generateSeo('', '', '');
        $products = products::where('active', 1);
        if (isset($request->key)) {
            $products = $products->where('title', 'like', '%' . $keyword . '%');
        }
        if (isset($request->category) && request()->category != "-1") {
            $categories = categories::whereSlug($request->category)->first();
            $products = $products->where('cate_id', $categories);
        }
        $products = $products->orderby('id', 'desc')->paginate(18);
        $data = [
            'categories' => $categories,
            'allBrands' => $allBrands,
            'products' => $products,
            'keyword' =>  $keyword,
        ];
        return view('search.index', $data);
    }
}
