<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\ProductBrands;
use App\Models\ProductReviews;
use App\Models\products;
use App\Models\ProductTags;

class ProductsController extends Controller
{
    function submitReviews()
    { 
        $danhgia = new ProductReviews();
        $danhgia->product_id = request()->product_id;
        $danhgia->product_rate = request()->ratingStart;
        $danhgia->product_reviewer_name = request()->ratingName;
        $danhgia->product_reviewer_email = request()->ratingEmail;
        $danhgia->product_review_content = strip_tags(request()->ratingContent);
        $danhgia->active = 0;
        $danhgia->save();
        return response()->json('[success=>true]',200);
    }
    function getBrandById($brandId)
    {
        $brand = ProductBrands::find($brandId);
        return $brand;
    }
    function filter($products)
    {
        // filter=true&product_count=&filter_price=0-500000&brand=&rate=&sort=&view=
        $paginate = 16;
        if (isset(request()->filter)) {
            if (request()->filter == true) {
                if (isset(request()->filter_price)) {
                    $price = explode('-', request()->filter_price);
                    $products = $products->whereBetween('products.base_price', [$price[0], $price[1]]);
                    //$products = $products->orWhereBetween('products.sale_price', [$price[0], $price[1]]);
                }
                if (isset(request()->brand)) {
                    $brands = ProductBrands::whereSlug(request()->brand)->first();
                    $products = $products->where('products.brand_id', $brands->id);
                }
                if (isset(request()->rate)) {
                    $products = $products->join('product_reviews', 'product_reviews.product_id', 'products.id')->where('product_rate', request()->rate);
                }
                if (isset(request()->sort)) {
                    switch (request()->sort) {
                        case 'noi-bat':
                            $products = $products->orderby('products.hot', 'desc');
                            break;
                        case 'danh-gia-cao':

                            break;
                        case 'moi-nhat':
                            $products = $products->orderby('products.id', 'desc');
                            break;
                        case 'gia-thap-den-cao':
                            $products = $products->orderby('products.base_price', 'asc');
                            break;
                        case 'gia-cao-xuong-thap':
                            $products = $products->orderby('products.base_price', 'desc');
                            break;
                        default:

                            break;
                    }
                } else {
                    $products = $products->orderby('products.id', 'desc');
                }
                if (isset(request()->view)) {
                }
                if (isset(request()->product_count)) {
                    $paginate = request()->product_count;
                }
                $products = $products->paginate($paginate);
            }
        } else {
            $products = $products->orderby('products.id', 'desc')->paginate($paginate);
        }
    }
    function shop()
    {
        $paginate = 16;
        if (isset(request()->product_count)) {
            $paginate = request()->product_count;
        }
        $categories = getRootCate();
        $allBrands = ProductBrands::orderby('id', 'desc')->get();
        $products = products::query();
        if (isset(request()->filter)) {
            if (request()->filter == true) {
                if (isset(request()->filter_price)) {
                    $price = explode('-', request()->filter_price);
                    $products = $products->whereBetween('products.base_price', [$price[0], $price[1]]);
                    //$products = $products->orWhereBetween('products.sale_price', [$price[0], $price[1]]);
                }
                if (isset(request()->brand)) {
                    $brands = ProductBrands::whereSlug(request()->brand)->first();
                    $products = $products->where('products.brand_id', $brands->id);
                }
                if (isset(request()->rate)) {
                    $products = $products->join('product_reviews', 'product_reviews.product_id', 'products.id')->where('product_rate', request()->rate);
                }
                if (isset(request()->sort)) {
                    switch (request()->sort) {
                        case 'noi-bat':
                            $products = $products->orderby('products.hot', 'desc');
                            break;
                        case 'danh-gia-cao':

                            break;
                        case 'moi-nhat':
                            $products = $products->orderby('products.id', 'desc');
                            break;
                        case 'gia-thap-den-cao':
                            $products = $products->orderby('products.base_price', 'asc');
                            break;
                        case 'gia-cao-xuong-thap':
                            $products = $products->orderby('products.base_price', 'desc');
                            break;
                        default:

                            break;
                    }
                } else {
                    $products = $products->orderby('products.id', 'desc');
                }
                if (isset(request()->view)) {
                }
                if (isset(request()->product_count)) {
                    $paginate = request()->product_count;
                }
                $products = $products->paginate($paginate);
            }
        } else {
            $products = $products->orderby('products.id', 'desc')->paginate($paginate);
        }
        $data = [
            'categories' => $categories,
            'allBrands' => $allBrands,
            'products' => $products,
        ];
        generateSeo('shop', '', '');
        return view('products.shop', $data);
    }
    function hangMoiVe()
    {
        $paginate = 16;
        if (isset(request()->product_counter)) {
            $paginate = request()->product_counter;
        }
        $categories = getRootCate();
        $allBrands = ProductBrands::orderby('id', 'desc')->get();
        $products = products::where('active', 1)->orderby('id', 'desc');
        if (isset(request()->filter)) {
            if (request()->filter == true) {
                if (isset(request()->filter_price)) {
                    $price = explode('-', request()->filter_price);
                    $products = $products->whereBetween('products.base_price', [$price[0], $price[1]]);
                    //$products = $products->orWhereBetween('products.sale_price', [$price[0], $price[1]]);
                }
                if (isset(request()->brand)) {
                    $brands = ProductBrands::whereSlug(request()->brand)->first();
                    $products = $products->where('products.brand_id', $brands->id);
                }
                if (isset(request()->rate)) {
                    $products = $products->join('product_reviews', 'product_reviews.product_id', 'products.id')->where('product_rate', request()->rate);
                }
                if (isset(request()->sort)) {
                    switch (request()->sort) {
                        case 'noi-bat':
                            $products = $products->orderby('products.hot', 'desc');
                            break;
                        case 'danh-gia-cao':

                            break;
                        case 'moi-nhat':
                            $products = $products->orderby('products.id', 'desc');
                            break;
                        case 'gia-thap-den-cao':
                            $products = $products->orderby('products.base_price', 'asc');
                            break;
                        case 'gia-cao-xuong-thap':
                            $products = $products->orderby('products.base_price', 'desc');
                            break;
                        default:

                            break;
                    }
                } else {
                    $products = $products->orderby('products.id', 'desc');
                }
                if (isset(request()->view)) {
                }
                if (isset(request()->product_count)) {
                    $paginate = request()->product_count;
                }
                $products = $products->paginate($paginate);
            }
        } else {
            $products = $products->orderby('products.id', 'desc')->paginate($paginate);
        }
        $data = [
            'products' => $products,
            'categories' => $categories,
            'allBrands' => $allBrands,
        ];
        generateSeo('Hàng mới về', 'hang-moi-ve', 'hang-moi-ve',);
        return view('products.hang-moi-ve', $data);
    }
    function sanPhamBanChay()
    {
        $paginate = 16;
        if (isset(request()->product_counter)) {
            $paginate = request()->product_counter;
        }
        $categories = getRootCate();
        $allBrands = ProductBrands::orderby('id', 'desc')->get();
        $products = products::where('active', 1)->where('best_seller', 1);
        if (isset(request()->filter)) {
            if (request()->filter == true) {
                if (isset(request()->filter_price)) {
                    $price = explode('-', request()->filter_price);
                    $products = $products->whereBetween('products.base_price', [$price[0], $price[1]]);
                    //$products = $products->orWhereBetween('products.sale_price', [$price[0], $price[1]]);
                }
                if (isset(request()->brand)) {
                    $brands = ProductBrands::whereSlug(request()->brand)->first();
                    $products = $products->where('products.brand_id', $brands->id);
                }
                if (isset(request()->rate)) {
                    $products = $products->join('product_reviews', 'product_reviews.product_id', 'products.id')->where('product_rate', request()->rate);
                }
                if (isset(request()->sort)) {
                    switch (request()->sort) {
                        case 'noi-bat':
                            $products = $products->orderby('products.hot', 'desc');
                            break;
                        case 'danh-gia-cao':

                            break;
                        case 'moi-nhat':
                            $products = $products->orderby('products.id', 'desc');
                            break;
                        case 'gia-thap-den-cao':
                            $products = $products->orderby('products.base_price', 'asc');
                            break;
                        case 'gia-cao-xuong-thap':
                            $products = $products->orderby('products.base_price', 'desc');
                            break;
                        default:

                            break;
                    }
                } else {
                    $products = $products->orderby('products.id', 'desc');
                }
                if (isset(request()->view)) {
                }
                if (isset(request()->product_count)) {
                    $paginate = request()->product_count;
                }
                $products = $products->paginate($paginate);
            }
        } else {
            $products = $products->orderby('products.id', 'desc')->paginate($paginate);
        }

        $data = [
            'products' => $products,
            'categories' => $categories,
            'allBrands' => $allBrands,
        ];
        generateSeo('Sản phẩm bán chạy', 'san-pham-ban-chay', 'san-pham-ban-chay',);
        return view('products.san-pham-ban-chay', $data);
    }
    function sanPhamKhuyenMai()
    {
        $paginate = 16;
        if (isset(request()->product_counter)) {
            $paginate = request()->product_counter;
        }
        $categories = getRootCate();
        $allBrands = ProductBrands::orderby('id', 'desc')->get();
        $products = products::where('active', 1)->where('sale_price', '>', 0);
        if (isset(request()->filter)) {
            if (request()->filter == true) {
                if (isset(request()->filter_price)) {
                    $price = explode('-', request()->filter_price);
                    $products = $products->whereBetween('products.base_price', [$price[0], $price[1]]);
                    //$products = $products->orWhereBetween('products.sale_price', [$price[0], $price[1]]);
                }
                if (isset(request()->brand)) {
                    $brands = ProductBrands::whereSlug(request()->brand)->first();
                    $products = $products->where('products.brand_id', $brands->id);
                }
                if (isset(request()->rate)) {
                    $products = $products->join('product_reviews', 'product_reviews.product_id', 'products.id')->where('product_rate', request()->rate);
                }
                if (isset(request()->sort)) {
                    switch (request()->sort) {
                        case 'noi-bat':
                            $products = $products->orderby('products.hot', 'desc');
                            break;
                        case 'danh-gia-cao':

                            break;
                        case 'moi-nhat':
                            $products = $products->orderby('products.id', 'desc');
                            break;
                        case 'gia-thap-den-cao':
                            $products = $products->orderby('products.base_price', 'asc');
                            break;
                        case 'gia-cao-xuong-thap':
                            $products = $products->orderby('products.base_price', 'desc');
                            break;
                        default:

                            break;
                    }
                } else {
                    $products = $products->orderby('products.id', 'desc');
                }
                if (isset(request()->view)) {
                }
                if (isset(request()->product_count)) {
                    $paginate = request()->product_count;
                }
                $products = $products->paginate($paginate);
            }
        } else {
            $products = $products->orderby('products.id', 'desc')->paginate($paginate);
        }
        $data = [
            'products' => $products,
            'categories' => $categories,
            'allBrands' => $allBrands,
        ];
        generateSeo('Sản phẩm khuyến mãi', 'san-pham-khuyen-mai', 'san-pham-khuyen-mai',);
        return view('products.san-pham-khuyen-mai', $data);
    }

    public function getProductById($id)
    {
        $products = products::find($id);
        return $products;
    }
    public function getProductByCateSlug($cateSlug)
    {
        $cate = categories::where('slug', $cateSlug)->first();
        $products = products::where('cate_id', 'like', '%' . $cate->id . '%')->where('active', 1)->orderby('order', 'desc')->limit(20)->get();
        return $products;
    }
    public function getAllProductByCateId($cateId, $limit)
    {
        $cate = categories::find($cateId);
        $child = categories::where('parent_id', $cateId)->where('active', 1)->get();

        $products = products::where('cate_id', 'like', '%' . $cateId . '%');
        if ($child->count() > 0) {
            foreach ($child as $cChi) {
                $products = $products->orwhere('cate_id', 'like', '%' . $cChi->id . '%');
            }
        }
        $products = $products->where('active', 1)->where('hot', 1)->orderby('order', 'desc')->limit($limit)->get();

        return $products;
    }
    public function getProductHot()
    {
        $products = products::where('active', 1)->where('hot', 1)->orderby('id', 'desc')->get();
        return $products;
    }
    public function getDealToday()
    {
        $products = products::where('active', 1)->where('deal_today', 1)->orderby('id', 'desc')->get();
        return $products;
    }

    public function getProductDetails($cate, $productSlug)
    {
        $products = products::where('active', 1)->where('slug', $productSlug)->first();
        $categories = categories::where('slug', $cate)->first();
        $relatedCate = categories::where('active', 1)->where('parent_id', $categories->id)->get();
        $related_products = products::where('active', 1)->where('cate_id', $categories->id)->orderby('id', 'desc')->limit(8)->get();
        $reviews = ProductReviews::where('active',1)->where('product_id',$products->id)->orderby('id','desc')->limit(10)->get();
        $reviewsTotalCount = ProductReviews::where('active',1)->where('product_id',$products->id)->orderby('id','desc')->get()->count();
        $count5s = ProductReviews::where('active',1)->where('product_id',$products->id)->where('product_rate',5)->orderby('id','desc')->get()->count();
        $count4s = ProductReviews::where('active',1)->where('product_id',$products->id)->where('product_rate',4)->orderby('id','desc')->get()->count();
        $count3s = ProductReviews::where('active',1)->where('product_id',$products->id)->where('product_rate',3)->orderby('id','desc')->get()->count();
        $count2s = ProductReviews::where('active',1)->where('product_id',$products->id)->where('product_rate',2)->orderby('id','desc')->get()->count();
        $count1s = ProductReviews::where('active',1)->where('product_id',$products->id)->where('product_rate',1)->orderby('id','desc')->get()->count();
        $data = [
            'categories' => $categories,
            'products' => $products,
            'relatedCate' => $relatedCate,
            'related_products' => $related_products,
            'reviews' => $reviews,
            'reviewsTotalCount' => $reviewsTotalCount,
            'count5s' => $count5s,
            'count4s' => $count4s,
            'count3s' => $count3s,
            'count2s' => $count2s,
            'count1s' => $count1s,
        ];
        generateSeo($products->slug, 'productsDetails', $categories->slug);
        return view('products.detail', $data);
    }
    function addToCart(Request $request)
    {
        $productId = $request->productId;
        $quantity = $request->quantity;
        $product = products::find($productId);
        if (!$product) {
            abort(404);
        }
        // session()->forget('shopping_cart');
        $cart = session()->get('shopping_cart');
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $productId => [
                    "title" => $product->title,
                    "quantity" => $quantity,
                    "prod_info" => $product,
                ]
            ];
            session()->put('shopping_cart', $cart);
            return true;
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            if ($cart[$productId]['quantity'] == 0) {
                unset($cart[$productId]);
            }
            session()->put('shopping_cart', $cart);
            return true;
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$productId] = [
            "title" => $product->title,
            "quantity" => $quantity,
            "prod_info" => $product,
        ];
        session()->put('shopping_cart', $cart);
        return true;
    }
    function addToLove(Request $request)
    {
        $productId = $request->productId;
        $quantity = $request->quantity;
        $product = products::find($productId);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('lovecart');
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $productId => [
                    "title" => $product->title,
                    "quantity" => $quantity,
                    "prod_info" => $product,
                ]
            ];
            session()->put('lovecart', $cart);
            return true;
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            if ($cart[$productId]['quantity'] == 0) {
                unset($cart[$productId]);
            }
            session()->put('lovecart', $cart);
            return true;
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$productId] = [
            "title" => $product->title,
            "quantity" => $quantity,
            "prod_info" => $product,
        ];
        session()->put('lovecart', $cart);
        return true;
    }
    function addToCompare(Request $request)
    {
        $productId = $request->productId;
        $quantity = $request->quantity;
        $product = products::find($productId);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('compare-list');
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $productId => [
                    "title" => $product->title,
                    "quantity" => $quantity,
                    "prod_info" => $product,
                ]
            ];
            session()->put('compare-list', $cart);
            return true;
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            if ($cart[$productId]['quantity'] == 0) {
                unset($cart[$productId]);
            }
            session()->put('compare-list', $cart);
            return true;
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$productId] = [
            "title" => $product->title,
            "quantity" => $quantity,
            "prod_info" => $product,
        ];
        session()->put('compare-list', $cart);
        return true;
    }
    function bestSeller()
    {
        $best_seller_prod = products::where('active', 1)->where('best_seller', 1)->orderby('id', 'desc')->limit(8)->get();
        return $best_seller_prod;
    }
    function bestSellerByCate($cateId)
    {

        $best_seller_prod = products::where('active', 1)->where('best_seller', 1)->where('cate_id', $cateId)->orderby('id', 'desc')->limit(3)->get();
        return $best_seller_prod;
    }
    public static function lastestProducts()
    {
        $lastestProducts = products::where('active', 1)->orderby('id', 'desc')->limit(8)->get();
        return $lastestProducts;
    }

    function getCategoryRootByProductSlug($productSlug)
    {
        $product = products::where('slug', $productSlug)->first();
        $cateArray = $product->cate_id;

        foreach ($cateArray as $key => $value) {
            $cate = categories::find($value);
            if ($cate->parent_id == 0) {
                return $cate;
            }
        }
    }
    public function getProductByTag($slug)
    {
        $tag = ProductTags::where('slug', $slug)->first();
        $product = products::where('tags', 'like', '%' . $tag->title . '%')->where('active', 1)->paginate(20);
        $data = [
            'product' => $product,
            'tag' => $tag,
        ];
        return view('products.tag', $data);
    }
    function getProductRate($productId)
    {
        $productRate = ProductReviews::where('active',1)->where('product_id', $productId)->groupBy('product_id')
            ->selectRaw('product_id, avg(product_rate) as rate,count(product_id) as total')->first();
        return $productRate;
    }
    public function getTopReviewsProduct()
    {
        $productsQuery = ProductReviews::join('products', 'products.id', 'product_reviews.product_id')->where('product_reviews.active',1)->groupBy('product_id')
            ->selectRaw('product_id, avg(product_rate) as rate,count(product_id) as total')->orderby('rate')->get();

        $products = [];
        if ($productsQuery->count() < 8) {
            $randomProduct = 8 - $productsQuery->count();
            $productIdCheck = [];
            foreach ($productsQuery as $prod) {
				$nprod = Products::find($prod->product_id);
                $arr = [
                    'product_id' => $prod->product_id,
                    'rate' => $prod->rate,
                    'total' => $prod->total,
                    "title" => $nprod->title,
                    "slug" => $nprod->slug,
                    "order" => $nprod->order,
                    "active" => $nprod->active,
                    "images" => $nprod->images,
                    "other_image" => $nprod->other_image,
                    "banner" => $nprod->banner,
                    "cate_id" => $nprod->cate_id,
                    "tags" => $nprod->tags,
                    "hot" => $nprod->hot,
                    "deal_today" => $nprod->deal_today,
                    "best_seller" => $nprod->best_seller,
                    "special_product" => $nprod->special_product,
                    "base_price" => $nprod->base_price,
                    "min_price" => $nprod->min_price,
                    "sale_price" => $nprod->sale_price,
                    "short_description" => $nprod->short_description,
                ];
                array_push($productIdCheck, $prod->product_id);
                array_push($products, $arr);
            }

            $rProdudts = Products::whereNotIn('id', $productIdCheck)->inRandomOrder()->limit($randomProduct)->get();
            foreach ($rProdudts as $prod) {
                $arr = [
                    'product_id' => $prod->id,
                    'rate' => $prod->rate,
                    'total' => $prod->total,
                    "title" => $prod->title,
                    "slug" => $prod->slug,
                    "order" => $prod->order,
                    "active" => $prod->active,
                    "images" => $prod->images,
                    "other_image" => $prod->other_image,
                    "banner" => $prod->banner,
                    "cate_id" => $prod->cate_id,
                    "tags" => $prod->tags,
                    "hot" => $prod->hot,
                    "deal_today" => $prod->deal_today,
                    "best_seller" => $prod->best_seller,
                    "special_product" => $prod->special_product,
                    "base_price" => $prod->base_price,
                    "min_price" => $prod->min_price,
                    "sale_price" => $prod->sale_price,
                    "short_description" => $prod->short_description,
                ];
                array_push($products, $arr);
            }
        } else {
            $products = $productsQuery->get();
        }
        return $products;
    }
    function countProductIncate($cateId)
    {

        $product = products::where('cate_id', $cateId);
        $cateChild = categories::where('parent_id', $cateId)->get();
        if ($cateChild != null) {
            foreach ($cateChild as $cchild) {
                $product = $product->orwhere('cate_id', $cchild->id);
                $catelv2 = categories::where('parent_id', $cchild->id)->get();
                if ($catelv2 != null) {
                    foreach ($catelv2 as $clv2) {
                        $product = $product->orwhere('cate_id', $clv2->id);
                    }
                }
            }
        }
        $product = $product->get()->count();
        return $product;
    }
    function countBrandProductInCategory($brandId)
    {
        $product = products::where('brand_id', $brandId);
        $product = $product->get()->count();
        return $product;
    }
}
