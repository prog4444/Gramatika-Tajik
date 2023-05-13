<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Users\CommentController;

use App\Http\Controllers\Users\MainController;

use Illuminate\Support\Facades\Auth;
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


// Auth::routes();
Route::get('/', function () {
    return view('home');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// route register admin
Route::get('/admin/register', [AdminController::class, 'index'])->name('posts.index');
Route::post('admin/register/one', [AdminController::class, 'store'])->name('post.admin');
Route::get('admin/login', [AdminController::class, 'login'])->name('posts.login');
Route::post('admin/login/one', [AdminController::class, 'login_store'])->name('post.login.store');
Route::get('/store/editor', [PostController::class, 'editor'])->name('editor');

Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher')->middleware('teacher');
Route::delete('/teacher/{post}', [TeacherController::class, 'delete'])->name('comment.delete');

// CRUD admin route
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
    Route::get('/show', [PostController::class, 'index'])->name('show.index')->middleware('admin');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');
    Route::post('/store/edit', [PostController::class, 'store_edit'])->name('store.edit');
   
});


// Route users show data

Route::get('/ism', [MainController::class, 'ism'])->name('ism');
Route::get('kategotiya/ism', [MainController::class, 'kategotiya_ism'])->name('kategotiya.ism');
Route::get('ism/shahs', [MainController::class, 'ism_shahs'])->name('ism.shahs');
Route::get('ism/jins', [MainController::class, 'ism_jins'])->name('ism.jins');
Route::get('ism/concret', [MainController::class, 'ism_concret'])->name('ism.concret');
Route::get('ifodai/jinsiyat', [MainController::class, 'ifodai_jinsiyat'])->name('ifodai.jinsiyat');
Route::get('ismhoi/murakkab', [MainController::class, 'ismhoi_murakkab'])->name('ismhoi.murakkab');
Route::get('ismhoi/murakkab/payvast', [MainController::class, 'ismhoi_murakkab_payvast'])->name('ismhoi.murakkab.payvast');
Route::get('ismhoi/murakkab/tobe', [MainController::class, 'ismhoi_murakkab_tobe'])->name('ismhoi.murakkab.tobe');
Route::get('kalimahoi/kutohkarda', [MainController::class, 'kalimahoi_kutohkarda'])->name('kalimahoi.kutohkarda');









Route::get('/sifat', [MainController::class, 'sifat'])->name('sifat');
Route::get('/morfologiya', [MainController::class, 'morfologiya'])->name('morfologiya');
Route::get('/hissahoi', [MainController::class, 'hissahoi'])->name('hissahoi');
Route::get('/jumlai/murakkab', [MainController::class, 'jumlai_murakkab'])->name('jumlai.murakkab');

Route::get('/comments/create', [CommentController::class, 'index']);
Route::post('/comment/store', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');
Route::get('/comments/{id}', [CommentController::class, 'comment'])->name('comments');
Route::post('/comments/answer', [CommentController::class, 'store_answer'])->name('store.answer');






























Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
