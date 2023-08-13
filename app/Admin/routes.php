<?php

use Illuminate\Routing\Router;

Admin::routes();


Route::group([ 
    'middleware'    => config('admin.route.middleware'), 
], function ($router) {
    // $router->get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show')->name('show');
    // $router->post('/laravel-filemanager/upload','\UniSharp\LaravelFilemanager\Controllers\UploadController@upload')->name('unisharp.lfm.upload');
    $router->get('/admin/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show')->name('show');
    $router->any('/admin/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload')->name('unisharp.lfm.upload');
    $router->get('/admin/laravel-filemanager/errors', '\UniSharp\LaravelFilemanager\Controllers\LfmController@getErrors')->name('getErrors');
    $router->get('/admin/laravel-filemanager/jsonitems', '\UniSharp\LaravelFilemanager\Controllers\ItemsController@getItems')->name('getItems');
    $router->get('/admin/laravel-filemanager/move', '\UniSharp\LaravelFilemanager\Controllers\ItemsController@move')->name('move');
    $router->get('/admin/laravel-filemanager/domove', '\UniSharp\LaravelFilemanager\Controllers\ItemsController@move')->name('domove');
    $router->get('/admin/laravel-filemanager/newfolder', '\UniSharp\LaravelFilemanager\Controllers\FolderController@getAddfolder')->name('getAddfolder');
    $router->get('/admin/laravel-filemanager/folders', '\UniSharp\LaravelFilemanager\Controllers\FolderController@getFolders')->name('getFolders');
    $router->get('/admin/laravel-filemanager/crop', '\UniSharp\LaravelFilemanager\Controllers\CropController@getCrop')->name('getCrop');
    $router->get('/admin/laravel-filemanager/cropimage', '\UniSharp\LaravelFilemanager\Controllers\CropController@getCropimage')->name('getCropimage');
    $router->get('/admin/laravel-filemanager/cropnewimage', '\UniSharp\LaravelFilemanager\Controllers\CropController@getNewCropimage')->name('getCropimage');
    $router->get('/admin/laravel-filemanager/rename', '\UniSharp\LaravelFilemanager\Controllers\RenameController@getRename')->name('getRename');
    $router->get('/admin/laravel-filemanager/resize', '\UniSharp\LaravelFilemanager\Controllers\ResizeController@getResize')->name('getResize');
    $router->get('/admin/laravel-filemanager/doresize', '\UniSharp\LaravelFilemanager\Controllers\ResizeController@performResize')->name('performResize');
    $router->get('/admin/laravel-filemanager/download', '\UniSharp\LaravelFilemanager\Controllers\DownloadController@getDownload')->name('getDownload');
    $router->get('/admin/laravel-filemanager/delete', '\UniSharp\LaravelFilemanager\Controllers\DeleteController@getDelete')->name('getDelete');
    $router->get('/admin/laravel-filemanager/demo', '\UniSharp\LaravelFilemanager\Controllers\DemoController@index')->name('getDelete');

});

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    Route::post('/upload', 'UploadController@upload');
    
    $router->resource('languages', 'LanguagesController');
    $router->resource('categories', 'CategoriesController');
    $router->resource('news-categories', 'NewsCategoriesController');
    $router->resource('news', 'NewsController');
    $router->resource('products', 'ProductsController');
    $router->resource('slideshows', 'SlideshowsController');
    $router->resource('pages', 'PagesController'); 
    $router->resource('customers', 'CustomersController');
    $router->resource('orders', 'OrdersController');
    $router->resource('deliveries', 'DeliveriesController');
    $router->resource('paymentmethod', 'PaymentMethodController'); 
    $router->resource('customerreviews', 'CustomerReviewsController'); 
    $router->resource('menus', 'MenusController'); 
    $router->resource('products-tag', 'ProductTagsController'); 
    $router->resource('news-tag', 'NewsTagsController'); 
    $router->resource('contacts', 'LienHeController');
    $router->resource('product-reviews', 'ProductReviewController');
    $router->resource('product-brands', 'ProductBrandsController');

    $router->get('product-reviews/status/{id}','ProductReviewController@updateStatus')->name('updateStatus');
    $router->get('copy-product/{productid}','ProductsController@copyProduct')->name('copy-product');
    $router->get('copy-news/{newsid}','NewsController@copyNews')->name('copy-news');

    $router->get('/api/product-tag/gettag', 'ProductTagsController@getTag');
});

