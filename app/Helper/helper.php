<?php

use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\pages;
use App\Models\products;
use App\Models\categories;
use App\Models\newscategories;
use App\Models\news;

function getSlide($loc)
{
    $slideCon = new App\Http\Controllers\SlideshowsController();
    return $slideCon->getSlide($loc);
}
function getProductById($id)
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->getProductById($id);
}
function getProductByCateSlug($cateSlug)
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->getProductByCateSlug($cateSlug);
}
function getAllProductByCateId($cateId, $limit)
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->getAllProductByCateId($cateId, $limit);
}
function getBrandById($brandId)
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->getBrandById($brandId);
}
function getAllCate()
{
    $controller = new App\Http\Controllers\CategoriesController();
    return $controller->getAllCate();
}
function getRootCate()
{
    $controller = new App\Http\Controllers\CategoriesController();
    return $controller->getRootCate();
}
function getChildeCate($parentId)
{
    $controller = new App\Http\Controllers\CategoriesController();
    return $controller->getChildeCate($parentId);
}
function getCateById($id)
{
    $controller = new App\Http\Controllers\CategoriesController();
    return $controller->getCateById($id);
}
function getNewsCategoriesById($id)
{
    $controller = new App\Http\Controllers\NewsCategoriesController();
    return $controller->getNewsCategoriesById($id);
}
function allNewsCategories()
{
    $controller = new App\Http\Controllers\NewsCategoriesController();
    return $controller->allNewsCategories();
}
function getLastestNews()
{
    $controller = new App\Http\Controllers\NewsCategoriesController();
    return $controller->getLastestNews();
}
function getNews($cateSlug)
{
    $controller = new App\Http\Controllers\NewsController();
    return $controller->getNews($cateSlug);
}
function getProductHot()
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->getProductHot();
}
function bestSeller()
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->bestSeller();
}
function bestSellerByCate($cateId)
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->bestSellerByCate($cateId);
}
function getDealToday()
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->getDealToday();
}
function getTopReviewsProduct()
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->getTopReviewsProduct();
}
function getProductRate($productId)
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->getProductRate($productId);
}
function lastestProducts()
{
    return App\Http\Controllers\ProductsController::lastestProducts();
}
function specialProduct()
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->specialProduct();
}

function countProductIncate($cateId)
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->countProductIncate($cateId);
}
function countBrandProductInCategory($brandId)
{
    $controller = new App\Http\Controllers\ProductsController();
    return $controller->countBrandProductInCategory($brandId);
}

function getCategoryShowHome()
{
    $controller = new App\Http\Controllers\CategoriesController();
    return $controller->getCategoryShowHome();
}
function getCategoryActiveCase()
{
    $controller = new App\Http\Controllers\CategoriesController();
    return $controller->getCategoryActiveCase();
}
function getCategoryBestSellerCase()
{
    $controller = new App\Http\Controllers\CategoriesController();
    return $controller->getCategoryBestSellerCase();
}
function getRootMenu($position)
{

    $controller = new App\Http\Controllers\MenusController();
    return $controller->getRootMenu($position);
}
function getChildMenu($parentId)
{

    $controller = new App\Http\Controllers\MenusController();
    return $controller->getChildMenu($parentId);
}
function checkRoute($slug)
{
    $controller = new App\Http\Controllers\PagesController();
    return $controller->checkRoute($slug);
}
/* xóa dấu tiếng việt */
function vn_to_str($str)
{
    $unicode = array(
        'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
        'd' => 'đ',
        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'i' => 'í|ì|ỉ|ĩ|ị',
        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
        'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'D' => 'Đ',
        'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
        'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        '' => '!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\"|\&|\#|\[|\]|`|{|}|;',
    );
    foreach ($unicode as $nonUnicode => $uni) {
        $str = preg_replace("/($uni)/i", $nonUnicode, $str);
    }
    $str = str_replace(' ', '-', $str);
    $str = str_replace('\\', '', $str);
    $str = str_replace('|', '', $str);
    $str = str_replace('\'', '', $str);
    return $str;
}

function generateSeo($slug = null, $type = null, $cateSlug = null)
{
    switch ($type) {

        case 'page':
            $page = pages::whereSlug($slug)->first();

            if ($page) {
                SEOMeta::setTitle($page->seo_meta_title ? $page->seo_meta_title : $page->title);
                SEOMeta::setDescription($page->seo_meta_description ? $page->seo_meta_description : '');
                SEOMeta::setCanonical(route('detail', $page->slug));
                OpenGraph::setTitle($page->seo_meta_title ? $page->seo_meta_title : $page->title);
                OpenGraph::setDescription($page->seo_meta_description ? $page->seo_meta_description : '');
                OpenGraph::setUrl(route('detail', $page->slug));
                OpenGraph::addProperty('type', 'page');
                OpenGraph::addImage($page->images);
                Twitter::setTitle($page->seo_meta_title ? $page->seo_meta_title : $page->title);

                SEOTools::setTitle($page->seo_meta_title ? $page->seo_meta_title : $page->title);
                SEOTools::getTitle($page->seo_meta_title ? $page->seo_meta_title : $page->title);
                SEOTools::setDescription($page->seo_meta_description ? $page->seo_meta_description : '');
                SEOTools::setCanonical(route('detail', $page->slug));
            }
            break;
        case 'productsCate':
            $cate = categories::whereSlug($slug)->first();
            if ($cate) {
                SEOMeta::setTitle($cate->seo_meta_title ? $cate->seo_meta_title : $cate->title);
                SEOMeta::setDescription($cate->seo_meta_description ? $cate->seo_meta_description : '');
                SEOMeta::setCanonical(route('detail', $cate->slug));
                OpenGraph::setTitle($cate->seo_meta_title ? $cate->seo_meta_title : $cate->title);
                OpenGraph::setDescription($cate->seo_meta_description ? $cate->seo_meta_description : '');
                OpenGraph::setUrl(route('detail', $cate->slug));
                OpenGraph::addProperty('type', 'page');
                OpenGraph::addImage($cate->images);
                Twitter::setTitle($cate->seo_meta_title ? $cate->seo_meta_title : $cate->title);

                SEOTools::setTitle($cate->seo_meta_title ? $cate->seo_meta_title : $cate->title);
                SEOTools::getTitle($cate->seo_meta_title ? $cate->seo_meta_title : $cate->title);
                SEOTools::setDescription($cate->seo_meta_description ? $cate->seo_meta_description : '');
                SEOTools::setCanonical(route('detail', $cate->slug));
            }
            break;
        case 'productsDetails':
            $product = products::whereSlug($slug)->first();
            $cate = categories::whereSlug($cateSlug)->first();
            if ($product) {
                SEOMeta::setTitle($product->seo_meta_title ? $product->seo_meta_title : $product->title);
                SEOMeta::setDescription($product->seo_meta_description ? $product->seo_meta_description : '');
                SEOMeta::setCanonical(route('detail-lv2', [$cate->slug, $product->slug]));
                OpenGraph::setTitle($product->seo_meta_title ? $product->seo_meta_title : $product->title);
                OpenGraph::setDescription($product->seo_meta_description ? $product->seo_meta_description : '');
                OpenGraph::setUrl(route('detail-lv2', [$cate->slug, $product->slug]));
                OpenGraph::addProperty('type', 'product');
                OpenGraph::addImage($product->images);
                Twitter::setTitle($product->seo_meta_title ? $product->seo_meta_title : $product->title);
                SEOTools::setTitle($product->seo_meta_title ? $product->seo_meta_title : $product->title);
                SEOTools::getTitle($product->seo_meta_title ? $product->seo_meta_title : $product->title);
                SEOTools::setDescription($product->seo_meta_description ? $product->seo_meta_description : '');
                SEOTools::setCanonical(route('detail-lv2', [$cate->slug, $product->slug]));
            }
            break;

        case 'newsCateDetails':
            $newscategories = newscategories::whereSlug($slug)->first();

            if ($newscategories) {
                SEOMeta::setTitle($newscategories->seo_meta_title ? $newscategories->seo_meta_title : $newscategories->title);
                SEOMeta::setDescription($newscategories->seo_meta_description ? $newscategories->seo_meta_description : '');
                SEOMeta::setCanonical(route('detail', $newscategories->slug));
                OpenGraph::setTitle($newscategories->seo_meta_title ? $newscategories->seo_meta_title : $newscategories->title);
                OpenGraph::setDescription($newscategories->seo_meta_description ? $newscategories->seo_meta_description : '');
                OpenGraph::setUrl(route('detail', $newscategories->slug));
                OpenGraph::addProperty('type', 'page');
                OpenGraph::addImage($newscategories->images);
                Twitter::setTitle($newscategories->seo_meta_title ? $newscategories->seo_meta_title : $newscategories->title);

                SEOTools::setTitle($newscategories->seo_meta_title ? $newscategories->seo_meta_title : $newscategories->title);
                SEOTools::getTitle($newscategories->seo_meta_title ? $newscategories->seo_meta_title : $newscategories->title);
                SEOTools::setDescription($newscategories->seo_meta_description ? $newscategories->seo_meta_description : '');
                SEOTools::setCanonical(route('detail', $newscategories->slug));
            }
            break;
        case 'newsDetail':
            $news = news::whereSlug($slug)->first();
            if ($news) {
                SEOMeta::setTitle($news->seo_meta_title ? $news->seo_meta_title : $news->title);
                SEOMeta::setDescription($news->seo_meta_description ? $news->seo_meta_description : '');
                SEOMeta::setCanonical(route('detail', $news->slug));
                OpenGraph::setTitle($news->seo_meta_title ? $news->seo_meta_title : $news->title);
                OpenGraph::setDescription($news->seo_meta_description ? $news->seo_meta_description : '');
                OpenGraph::setUrl(route('detail', $news->slug));
                OpenGraph::addProperty('type', 'page');
                OpenGraph::addImage($news->images);
                Twitter::setTitle($news->seo_meta_title ? $news->seo_meta_title : $news->title);

                SEOTools::setTitle($news->seo_meta_title ? $news->seo_meta_title : $news->title);
                SEOTools::getTitle($news->seo_meta_title ? $news->seo_meta_title : $news->title);
                SEOTools::setDescription($news->seo_meta_description ? $news->seo_meta_description : '');
                SEOTools::setCanonical(route('detail', $news->slug));
            }
            break;
            // end news 
        case 'shop':
            $default_title = config('shop_seo_title');
            $default_description = config('shop_seo_description');
            $default_logo = config('logo');
            SEOMeta::setTitle($default_title);
            SEOMeta::setDescription($default_description);
            SEOTools::setTitle($default_title);
            SEOTools::getTitle($session = false);
            SEOTools::setDescription($default_description);
            OpenGraph::setTitle($default_title);
            OpenGraph::setDescription($default_description);
            OpenGraph::addImage(asset($default_logo));
            Twitter::setTitle($default_title);
            break;
        default:
            $default_title = config('homepage_seo_title');
            $default_description = config('homepage_seo_description');
            $default_logo = config('logo');
            SEOMeta::setTitle($default_title);
            SEOMeta::setDescription($default_description);
            SEOTools::setTitle($default_title);
            SEOTools::getTitle($session = false);
            SEOTools::setDescription($default_description);
            OpenGraph::setTitle($default_title);
            OpenGraph::setDescription($default_description);
            OpenGraph::addImage(asset($default_logo));
            Twitter::setTitle($default_title);
            return false;
    }
    return true;
}
