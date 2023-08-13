<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;

class CategoriesController extends Controller
{
    public function getCateById($id)
    {
        return categories::where('active', 1)->where('id', $id)->first();
    }
    public function getAllCate()
    {
        return categories::where('active', 1)->orderby('order','asc')->get();
    }
    public function getRootCate()
    {
        return categories::where('active', 1)->where('parent_id',0)->where('show_menu',1)->orderby('order','asc')->get();
    }
    public function getChildeCate($parentId)
    {
        return categories::where('active', 1)->where('parent_id',$parentId)->where('show_menu',1)->orderby('order','asc')->get();
    }
    public function getCategoryActiveCase()
    {
        return categories::where('active', 1)->where('parent_id',0)->where('show_feature_product',1)->orderby('order','asc')->get();
    }
    public function getCategoryBestSellerCase()
    {
        return categories::where('active', 1)->where('parent_id',0)->where('show_bestseller',1)->orderby('order','asc')->get();
    }
    public function getAllCateParent()
    {
        $categories = categories::where('active', 1)->get();
        $data = ['categories' => $categories];
        generateSeo('products', 'page', 'page-details');
        return view('categories.index', $data);
    }
    public function getCategoryShowHome()
    {
        $categories = categories::where('active',1)->where('show_home',1)->get();
        return $categories;
    }

    public function getCategories($slug)
    {
        $paginate = 16;
        if(isset(request()->product_count)){
            $paginate = request()->product_count;
        }
        $categories = categories::where('active', 1)->where('slug', $slug)->first();
        $childCate = categories::where('active', 1)->where('parent_id', $categories->id)->get();
        $listChildCate = [];
        
        $product = products::where('products.cate_id',$categories->id);
        $cateChild = categories::where('parent_id',$categories->id)->get();
        if($cateChild != null){            
            foreach ($cateChild as $cchild) {
                $product = $product->orwhere('products.cate_id',$cchild->id);
                $catelv2 = categories::where('parent_id',$cchild->id)->get();
                if($catelv2 != null)
                {
                    foreach ($catelv2 as $clv2) {
                        $product = $product->orwhere('products.cate_id',$clv2->id);
                    }
                }
            } 
        }
        $products = $product->paginate($paginate);

      $brands = $product->join('product_brands','products.brand_id','product_brands.id')->groupby('product_brands.id')->selectRaw('product_brands.id as brand_id')->get();
        $newBrands = \App\Models\ProductBrands::where('active',1);
        foreach ($brands as $br) { 
            $newBrands = $newBrands->orwhere('id',$br->brand_id);
        }
        $brands = $newBrands->get();      
        $best_seller_prod = products::where('active', 1)->where('best_seller', 1)->orderby('id', 'desc')->limit(8)->get();
        $data = [
            'categories' => $categories,
            'products' => $products,
            'childCate' => $childCate,
            'best_seller_prod' => $best_seller_prod,
            'brands' => $brands,
        ];
        generateSeo($categories->slug, 'productsCate', 'category');
        return view('categories.category_show', $data);
    }
    public function getCategoriesChild($slug,$sluglv2)
    {
        $paginate = 16;
        if(isset(request()->product_count)){
            $paginate = request()->product_count;
        }
        $cate =  categories::where('active', 1)->where('slug', $slug)->first(); 
     
        $relatedCate = categories::where('active', 1)->where('parent_id',$cate->id)->get();
        $categories = categories::where('active', 1)->where('slug', $sluglv2)->first(); 
        $childCate3 = categories::where('active', 1)->where('parent_id',$categories->id)->get();
        // $products = products::where('cate_id','like','%'.$categories->id.'%');
        // $products = $products->paginate(60);
        // lấy sản phẩm của lv2 + lv3
        $product = products::where('products.cate_id',$categories->id);
        $cateChild = categories::where('parent_id',$categories->id)->get();
        if($cateChild != null){            
            foreach ($cateChild as $cchild) {
                $product = $product->orwhere('products.cate_id',$cchild->id);
                $catelv2 = categories::where('parent_id',$cchild->id)->get();
                if($catelv2 != null)
                {
                    foreach ($catelv2 as $clv2) {
                        $product = $product->orwhere('products.cate_id',$clv2->id);
                    }
                }
            } 
        }
        $products = $product->paginate($paginate);

		$brands = $product->join('product_brands','products.brand_id','product_brands.id')->groupby('product_brands.id')->selectRaw('product_brands.id as brand_id')->get();
        $newBrands = \App\Models\ProductBrands::where('active',1);
        foreach ($brands as $br) { 
            $newBrands = $newBrands->orwhere('id',$br->brand_id);
        }
        $brands = $newBrands->get();

        $best_seller_prod = products::where('active', 1)->where('best_seller', 1)->orderby('id', 'desc')->limit(8)->get();
        $data = [
            'pcate' => $cate,
            'categories' => $categories,
            'relatedCate' => $relatedCate,
            'products' => $products,
            'best_seller_prod' => $best_seller_prod,
            'brands' => $brands,
            'childCate3' => $childCate3,
        ];
        generateSeo($categories->slug, 'productsCate', 'category');
        return view('categories.category_show_lv2', $data);
    }
    public function getCategoriesChild3($slug,$sluglv2,$sluglv3)
    {
        $paginate = 16;
        if(isset(request()->product_count)){
            $paginate = request()->product_count;
        }
        $cate =  categories::where('active', 1)->where('slug', $slug)->first();      
        $relatedCate = categories::where('active', 1)->where('parent_id',$cate->id)->get();
        $categories = categories::where('active', 1)->where('slug', $sluglv2)->first(); 
        $childCate3 = categories::where('active', 1)->where('parent_id',$categories->id)->get();
        // $products = products::where('cate_id','like','%'.$categories->id.'%');
        // $products = $products->paginate(60);
        
        $cate3 = categories::where('active', 1)->whereSlug($sluglv3)->first();
       
        $product = products::where('products.cate_id',$cate3->id);
        $cateChild = categories::where('parent_id',$cate3->id)->get();
        if($cateChild != null){            
            foreach ($cateChild as $cchild) {
                $product = $product->orwhere('products.cate_id',$cchild->id);
                $catelv2 = categories::where('parent_id',$cchild->id)->get();
                if($catelv2 != null)
                {
                    foreach ($catelv2 as $clv2) {
                        $product = $product->orwhere('products.cate_id',$clv2->id);
                    }
                }
            } 
        }
        $products = $product->paginate($paginate);
        $brands = $product->join('product_brands','products.brand_id','product_brands.id')->groupby('product_brands.id')->selectRaw('product_brands.id as brand_id')->get();
        $newBrands = \App\Models\ProductBrands::where('active',1);
        foreach ($brands as $br) { 
            $newBrands = $newBrands->orwhere('id',$br->brand_id);
        }
        $brands = $newBrands->get();
        $best_seller_prod = products::where('active', 1)->where('best_seller', 1)->orderby('id', 'desc')->limit(8)->get();
        $data = [
            'pcate' => $cate,
            'categories' => $categories,
            'relatedCate' => $relatedCate,
            'products' => $products,
            'best_seller_prod' => $best_seller_prod,
            'brands' => $brands,
            'childCate3' => $childCate3,
            'cate3' => $cate3,
        ];
        generateSeo($categories->slug, 'productsCate', 'category');
        return view('categories.category_show_lv3', $data);
    }
}
