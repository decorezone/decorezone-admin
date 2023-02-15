<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



//main login page
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::post('/MobileinPakistanAdminLogin', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);


Route::group(['middleware' => ['auth','role:listing']], function () {
    Route::get('/AdminDashboard', [App\Http\Controllers\AdminListing::class, 'AdminListing_Welcome']);
});

Route::group(['middleware' => ['auth','role:admin']], function () {


    //Route::get('view-all-catagories', 'Admin\BlogByAdmin@viewAllCatagories');
    Route::get('/view-all-catagories', [App\Http\Controllers\Admin\BlogByAdmin::class, 'viewAllCatagories']);
    //Route::get('addcat', 'Admin\BlogByAdmin@addcat');
    Route::get('/addcat', [App\Http\Controllers\Admin\BlogByAdmin::class, 'addcat']);
    Route::get('/catagories_list_in_select_2', [App\Http\Controllers\Admin\BlogByAdmin::class, 'catagories_list_drop_down']);
    Route::post('/AddCatToDb', [App\Http\Controllers\Admin\BlogByAdmin::class, 'AddCatToDb']);
    Route::get('/EditCatagory/{cat_id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'EditCatagory']);
    Route::post('/UpdateCatagoryMain', [App\Http\Controllers\Admin\BlogByAdmin::class, 'UpdateCatagoryMain']);
    Route::get('/EditPost/{post_id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'EditPost']);
    Route::post('/UpdatePostToDb', [App\Http\Controllers\Admin\BlogByAdmin::class, 'UpdatePostToDb']);
    Route::get('/ChangePostStatus/{post_id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'ChangePostStatus']);
    Route::get('/PostSeoLinks/{post_id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'PostSeoLinks']);
    Route::get('/EditPostPicture/{post_id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'EditPostPicture']);
    Route::get('/editProduct/{product_id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'editProduct']);
    Route::get('/add-links-to-product/{product_id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'AddLinks']);
    Route::get('/editProductLink/{link}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'editProductLink']);
    Route::post('/updateLinks', [App\Http\Controllers\Admin\BlogByAdmin::class, 'updateLinks']);
    Route::post('/updateseopost', [App\Http\Controllers\Admin\BlogByAdmin::class, 'updateseopost']);
    Route::post('/changepoststatusdb', [App\Http\Controllers\Admin\BlogByAdmin::class, 'changepoststatusdb']);
    Route::post('/updatepostpictures', [App\Http\Controllers\Admin\BlogByAdmin::class, 'updatepostpictures']);
    Route::post('/update-affiliate-to-post', [App\Http\Controllers\Admin\BlogByAdmin::class, 'updateAffiliate']);
    Route::post('/storeLinks', [App\Http\Controllers\Admin\BlogByAdmin::class, 'storeLinks']);
    Route::get('editAffiliatePost/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'editAffiliatePost']);
    Route::post('add-affiliate-to-post', [App\Http\Controllers\Admin\BlogByAdmin::class, 'addAffiliate']);
    Route::post('addNewLinkToProduct', [App\Http\Controllers\Admin\BlogByAdmin::class, 'addNewLinkToProduct']);
    Route::post('delete-link-forever', [App\Http\Controllers\Admin\BlogByAdmin::class, 'deleteLinkForever']);
    Route::post('DeleteProductForEver', [App\Http\Controllers\Admin\BlogByAdmin::class, 'DeleteProductForEver']);
    Route::get('editPictureProduct/{id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'editPictureProduct']);
    Route::get('editPicturelinks/{id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'editPicturelinks']);
    Route::get('searchpost', [App\Http\Controllers\Admin\BlogByAdmin::class, 'searchpost']);
    Route::get('PostDeleteCompletely/{id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'PostDeleteCompletely']);
    Route::get('addpost', [App\Http\Controllers\Admin\BlogByAdmin::class, 'addpost']);
    Route::post('/edit_product_of_post', [App\Http\Controllers\Admin\BlogByAdmin::class, 'edit_product_of_post']);
    Route::get('/editCatagory/{cat_id}', [App\Http\Controllers\Admin\BlogByAdmin::class, 'editCatagory']);
    Route::post('/editPictureProductUpdate', [App\Http\Controllers\Admin\BlogByAdmin::class, 'editPictureProductUpdate']);
    Route::post('/editPicturelinksUpdate', [App\Http\Controllers\Admin\BlogByAdmin::class, 'editPicturelinksUpdate']);
    Route::post('/search_Cat', [App\Http\Controllers\Admin\BlogByAdmin::class, 'searchpostcat']);
    Route::post('/AddPostToDb', [App\Http\Controllers\Admin\BlogByAdmin::class, 'AddPostToDb']);


});

