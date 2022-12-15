<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminAuthController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','HomeController@show')->name('home1');
// Route::get('/', function () {
//     return view('guests/Home');
// })->name('home1');



Route::get('/blog_single', function () {
    return view('guests/blog_single');
})->name('single_blog');

Route::get('/our_team', function () {
    return view('guests/our_team');
})->name('our_team');

Route::get('/mint', function () {
    return view('guests/mint');
})->name('mint');

Route::get('/coming_soon', function () {
    return view('guests/coming_soon');
})->name('coming');

Route::get('/page404', function () {
    return view('guests/page404');
})->name('page404');

Route::get('/protected', function () {
    return view('guests/protected');
})->name('protected');

Route::get('/no_result', function () {
    return view('guests/no_result');
})->name('no_result');
Route::get('/faq', function () {
    return view('guests/faq');
})->name('faq');
Route::get('/privacy_policy', function () {
    return view('guests/policy');
})->name('policy');
Route::get('/term', function () {
    return view('guests/term');
})->name('term');
Route::get('/portfolio', function () {
    return view('guests/portfolio');
})->name('portfolio');

Route::get('/cookies', function () {
    return view('guests/cookies');
})->name('cookies');



// admin part
// Route::get('/admin',function(){
//     return view('admin/dashboard');
// })->name('dashboard');
Route::get('/admin/dashboard',function(){
    return view('admin/dashboard');
})->name('admin.dashboard');
Route::get('/admin',function(){
    return view('admin/login');
})->name('dashboard');
// Route::get('/post/postList',function(){
//     return view('admin/postList');
// })->name('post.list');
//Route::get('/blog', function () {
//    return view('guests/blog');
//})->name('blog');
// blogsia
Route::get('/blog','BlogController@index')->name('blog.show');





// authenticate
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin_login');
// Route::post('admin/login', 'Auth\LoginController@login')->name('admin_login.post');

// adminb group route
Route::prefix("/admin")->middleware('auth')->group(function(){
            Route::get('/', function () {
            return view('admin/dashboard');
            })->name('adminDashboard');
    Route::get('/post/create','PostController@create')->name('post.create');
    Route::post('/post/postsave','PostController@save')->name('post.save');
    Route::get('/post/postList','PostController@show')->name("post.show");
    Route::get('/post/postList/{id}', 'PostController@destroy')->name("post.destroy");
    Route::get('/post/edit/{id}','PostController@edit')->name('post.edit');
    Route::patch('/post/create/{id}', 'PostController@update')->name('post.update');
    Route::get('/admin/Category/create',"CategoryPostController@create")->name('category.create');
    Route::get('/admin/Category/save','CategoryPostController@save')->name('category.save');
    Route::get('/admin/category/show',"CategoryPostController@show")->name('category.show');
    Route::get('/admin/category/show/{id}', 'CategoryPostController@destroy')->name("categoryPost.destroy");
    Route::get('/member/create','MemberController@create')->name('member.create');
    Route::post('/member/save','MemberController@save')->name('member.save');
    Route::get('/member/show','MemberController@show')->name('member.show');
    Route::get('/member/show/{id}', 'MemberController@destroy')->name("member.destroy");

    Route::get('/member/edit/{id}','MemberController@edit')->name('member.edit');
    Route::patch('/member/create/{id}', 'MemberController@update')->name('member.update');

});
// logout
Route::get('/logout', 'Auth\LogoutController@perform')->name('logout');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// fallback

Route::fallback(function(){
    return view("guests/page404");
});

