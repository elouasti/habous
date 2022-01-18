<?php

use TCG\Voyager\Models\Post;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class,'index']);
Route::get('/articles',[SiteController::class,'articles']);
Route::get('/article/{id}',function($id){
    return view('article',[
        'post'=>Post::findOrFail($id)
    ]);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
