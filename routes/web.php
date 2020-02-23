<?php

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

Route::group(['namespace' => 'Home'], function() {
    //home
    Route::get('/','HomeController@getHome');
    Route::get('/toastr','HomeController@getToastr');
    Route::post('/','HomeController@postReviewCustomer');
    //menu
    Route::get('/menu','HomeController@getMenu');
    //menu/detail
    Route::get('/menu/{id}/{id2}','HomeController@getDetails'); 
    Route::post('/menu/{id}/{id2}','HomeController@postDetails');   
    //cart/show
    Route::get('/cart/show','CartController@getCart');
    Route::post('/cart/show','CartController@postCartComplete');   
    Route::get('/cart/complete','CartController@getCartComplete');
    Route::get('/cart/update','CartController@getCartUpdate');   
    Route::get('/cart/delete/{id}','CartController@getCartDelete');  
    //service
    Route::get('/service','ServiceController@getService');
    //tintuc
    Route::get('/tintuc','NewsController@getNews');
    Route::post('/tintuc/getPagination','NewsController@getPagination')->name('pagination.getPagination');
    Route::get('/tintuc/details/{id}','NewsController@getDetails');
    //about
    Route::get('/thongtin','AboutController@getAbout');
    //contact
    Route::get('/lienhe','ContactController@getContact');

});
Route::group(['namespace' => 'Admin'], function() {
    Route::group(['prefix' => 'login','middleware'=>'CheckLoginIn'], function() {
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');

    });
    Route::get('logout','HomeController@getLogout');
    Route::group(['prefix' => 'admin','middleware'=>'CheckLoginOut'], function() {
        Route::get('home','HomeController@getHome');
        //admin/category
        Route::group(['prefix' => 'category'], function() {
            Route::get('list','AdminCategoryController@getListCategory');
            //admin/category/add
            Route::get('add','AdminCategoryController@getAddCategory');
            Route::post('add','AdminCategoryController@postAddCategory');
            //admin/category/delete
            Route::get('delete/{id}','AdminCategoryController@getDeleteCategory');
            //admin/category/edit
            Route::get('edit/{id}','AdminCategoryController@getEditCategory');
            Route::post('edit/{id}','AdminCategoryController@postEditCategory');
        });
        //admin/category
        Route::group(['prefix' => 'product'], function() {
            Route::get('list','AdminProductController@getListProduct');
            //admin/product/add
            Route::get('add','AdminProductController@getAddProduct');
            Route::post('add','AdminProductController@postAddProduct');
            //admin/product/delete
            Route::get('delete/{id}','AdminProductController@getDeleteProduct');
            //admin/product/edit
            Route::get('edit/{id}','AdminProductController@getEditProduct');
            Route::post('edit/{id}','AdminProductController@postEditProduct');
        });
        //admin/user
        Route::group(['prefix' => 'user'], function() {
            Route::get('edit/{id}','AdminUserController@getEditUser');
            Route::get('testpassold','AdminUserController@postTestPassOld');
        });
        //admin/slider
         Route::group(['prefix' => 'slider'], function() {
            Route::get('list','AdminSliderController@getListSlider');
            //admin/cateslidergory/add
            Route::get('add','AdminSliderController@getAddSlider');
            Route::post('add','AdminSliderController@postAddSlider');
            //admin/slider/delete
            Route::get('delete/{id}','AdminSliderController@getDeleteSlider');
            //admin/slider/edit
            Route::get('edit/{id}','AdminSliderController@getEditSlider');
            Route::post('edit/{id}','AdminSliderController@postEditSlider');
        });
         //admin/comment
         Route::group(['prefix' => 'comment'], function() {
            Route::get('list','AdminCommentController@getListComment');
            //admin/category/add
            Route::get('add','AdminCommentController@getAddComment');
            Route::post('add','AdminCommentController@postAddComment');
            //admin/category/delete
            Route::get('delete/{id}','AdminCommentController@getDeleteComment');
            //admin/category/edit
            Route::get('edit/{id}','AdminCommentController@getEditComment');
            Route::post('edit/{id}','AdminCommentController@postEditComment');
        });
        //admin/new
         Route::group(['prefix' => 'new'], function() {
            Route::get('list','AdminNewController@getListNew');
            //admin/new/add
            Route::get('add','AdminNewController@getAddNew');
            Route::post('add','AdminNewController@postAddNew');
            //admin/new/delete
            Route::get('delete/{id}','AdminNewController@getDeleteNew');
            //admin/new/edit
            Route::get('edit/{id}','AdminNewController@getEditNew');
            Route::post('edit/{id}','AdminNewController@postEditNew');
        });
    });
});
