<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home-featured-catagories-data', [App\Http\Controllers\HomeController::class, 'viewHomeFeaturedData']);

Route::get('/featured-post-home', [App\Http\Controllers\HomeController::class, 'featuredPostHome']);

Route::get('/view-all-catagories-parent', [App\Http\Controllers\HomeController::class, 'viewAllCatagoriesParents']);

Route::get('/post/{id}', [App\Http\Controllers\Blog::class, 'viewPostById']);

Route::get('/affiliate-post/{id}', [App\Http\Controllers\Blog::class, 'viewAffiliatePost']);

Route::get('/catagory-detail-page/{url}', [App\Http\Controllers\HomeController::class, 'catagoryPageDeatails']);
//catagory page data
//Route::get('main-and-side-featured-posts', 'HomeController@mainAndSideFeaturedPosts');

// });

Route::get('/get-menu', [App\Http\Controllers\HomeController::class, 'get_menu']);
Route::get('/post-type/{type}', [App\Http\Controllers\HomeController::class, 'home_page_side_posts']);
Route::get('/author-posts/{id}', [App\Http\Controllers\HomeController::class, 'get_author_posts']);