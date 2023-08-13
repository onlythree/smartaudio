<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsCategoriesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LienHeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/clear', function () {
//     Storage::deleteDirectory('public');
//     Storage::makeDirectory('public');

//     Artisan::call('route:clear');
//     Artisan::call('storage:link');
//     echo "symbolic link created successfully";
// });
Route::get('/storage-link', function () {
    $target = storage_path('app');
    $link = public_path('/storage');
    symlink($target, $link);
      echo "symbolic link created successfully";
      return redirect()->route('/');
});
Route::get("sitemap.xml", [SitemapController::class, 'sitemap'])->name('sitemap');

Route::get('/', [HomesController::class, 'index'])->name('home');
Route::get('shop', [ProductsController::class, 'shop'])->name('shop');
Route::get('san-pham-ban-chay', [ProductsController::class, 'sanPhamBanChay'])->name('sanPhamBanChay');
Route::get('san-pham-khuyen-mai', [ProductsController::class, 'sanPhamKhuyenMai'])->name('sanPhamKhuyenMai');
Route::get('san-pham-moi', [ProductsController::class, 'hangMoiVe'])->name('hangMoiVe');

Route::post('dang-ky-nhan-tin', [LienHeController::class, 'submitDangkyNhantin'])->name('submitDangkyNhantin');
Route::post('f-dang-ky-nhan-tin', [LienHeController::class, 'fsubmitDangkyNhantin'])->name('fsubmitDangkyNhantin');
Route::post('contact', [LienHeController::class, 'submitContact'])->name('submitContact');
Route::post('gui-danh-gia', [ProductsController::class, 'submitReviews'])->name('submitReviews');

Route::get('san-pham-yeu-thich', [OrderController::class, 'loveList'])->name('love-list');
Route::get('so-sanh-san-pham', [OrderController::class, 'comnpareListPage'])->name('compare-list-page');
Route::post('addToLove', [ProductsController::class, 'addToLove'])->name('addToLove');
Route::post('addToCompare', [ProductsController::class, 'addToCompare'])->name('addToCompare');

Route::get('gio-hang', [OrderController::class, 'shoppingCartOrder'])->name('shoppingCartOrder');
Route::post('addToCart', [ProductsController::class, 'addToCart'])->name('addToCart');
Route::post('order-submit', [OrderController::class, 'orderStore'])->name('submit-order');
Route::get('payment', [OrderController::class, 'payment'])->name('payment');
Route::get('order/setPaymentStatus/{order_id}', [OrderController::class, 'setPaymentStatus'])->name('setPaymentStatus');
Route::get('order/thankyou/{order_id}', [OrderController::class, 'thankyou'])->name('thankyou');

Route::get('tim-kiem', [SearchController::class, 'searchSubmit'])->name('search');

Route::get('product-tag/{slug}', [ProductsController::class, 'getProductByTag'])->name('product-tag');
Route::get('news-tag/{slug}', [NewsController::class, 'getNewsByTag'])->name('news-tag');

Route::get('account/login', [UsersController::class, 'login'])->name('login-page');
Route::post('account/login', [UsersController::class, 'loginFunction'])->name('login');
Route::post('account/register', [UsersController::class, 'registerFunction'])->name('register');
Route::group(['middleware' => ['auth']], function () {
    Route::get('account/logout', [UsersController::class, 'logoutFunction'])->name('logout');
    Route::get('account/profile', [UsersController::class, 'profile'])->name('profile');
    Route::get('account/info', [UsersController::class, 'info'])->name('info');
    Route::post('account/updateInfo', [UsersController::class, 'updateAccountInfo'])->name('update-account-info');
    Route::get('account/changePassword', [UsersController::class, 'changePassword'])->name('change-password');
    Route::post('account/changePasswordProcess', [UsersController::class, 'changePasswordProcess'])->name('change-password-process');
    Route::get('account/orders', [UsersController::class, 'getOrder'])->name('getOrder'); 
});

Route::get('{slug}', function ($slug) {
    if (checkRoute($slug) == 'page') {
        $pageController = new PagesController();
        return $pageController->getPageDetails($slug);
    } elseif (checkRoute($slug) == 'cate') {
        $cateController = new CategoriesController();
        return $cateController->getCategories($slug);
    } elseif (checkRoute($slug) == 'news') {
        $newsController = new NewsController();
        return $newsController->getNewsBySlug($slug);
    } elseif (checkRoute($slug) == 'ncate') {
        $newCategoryController = new NewsCategoriesController();
        return $newCategoryController->getNewCategories($slug);
    }
    
})->name('detail');
Route::get('{slug}/{sluglv2}', function ($slug, $sluglv2) {
    if (checkRoute($sluglv2) == 'product') {
        $productController = new ProductsController();
        return $productController->getProductDetails($slug, $sluglv2);
    } elseif (checkRoute($sluglv2) == 'cate') {
        $cateController = new CategoriesController();
        return $cateController->getCategoriesChild($slug, $sluglv2);
    }
})->name('detail-lv2');
Route::get('{slug}/{sluglv2}/{sluglv3}', function ($slug, $sluglv2, $sluglv3) {
    if (checkRoute($sluglv3) == 'cate') {
        $cateController = new CategoriesController();
        return $cateController->getCategoriesChild3($slug, $sluglv2, $sluglv3);
    }
})->name('detail-lv3');
