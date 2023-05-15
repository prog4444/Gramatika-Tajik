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

// teacher all interface
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


// Route ISM

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

// route sifat
Route::get('/sifat', [MainController::class, 'sifat'])->name('sifat');
Route::get('/sifat/gramatika', [MainController::class, 'sifat_gramatika'])->name('sifat.gramatika');
Route::get('helhoi/sifat', [MainController::class, 'helhoi_sifat'])->name('helhoi.sifat');
Route::get('sifat/asli', [MainController::class, 'sifat_asli'])->name('sifat.asli');
Route::get('sifat/nisbi', [MainController::class, 'sifat_nisbi'])->name('sifat.nisbi');
Route::get('ba/sifat/asli/gusashta', [MainController::class, 'ba_sifat_asli_gusashta'])->name('ba.sifat.asli.gusashta');
Route::get('darajahoi/sifat', [MainController::class, 'darajahoi_sifat'])->name('darajahoi.sifat');
Route::get('shakli/takidi', [MainController::class, 'shakli_takidi'])->name('shakli.takidi');
Route::get('novozish/sifat', [MainController::class, 'novozish_sifat'])->name('novozish.sifat');
Route::get('kalimasozi/sifat', [MainController::class, 'kalimasozi_sifat'])->name('kalimasozi.sifat');

// route shumora
Route::get('malumoti/umumi', [MainController::class, 'malumoti_umumi'])->name('malumoti.umumi');
Route::get('khelhoi/shumora', [MainController::class, 'khelhoi_shumora'])->name('khelhoi.shumora');
Route::get('shumorai/tahmini', [MainController::class, 'shumorai_tahmini'])->name('shumorai.tahmini');
Route::get('shumorai/tartibi', [MainController::class, 'shumorai_tartibi'])->name('shumorai.tartibi');

// route jonishin

Route::get('mafhumi/jonishin', [MainController::class, 'mafhumi_jonishin'])->name('mafhumi.jonishin');
Route::get('jonishin/shaksi', [MainController::class, 'jonishin_shaksi'])->name('jonishin.shaksi');
Route::get('jonishin/savoli', [MainController::class, 'jonishin_savoli'])->name('jonishin.savoli');
Route::get('jonishin/ishorati', [MainController::class, 'jonishin_ishorati'])->name('jonishin.ishorati');
Route::get('jonishin/taini', [MainController::class, 'jonishin_taini'])->name('jonishin.taini');
Route::get('jonishin/manfi', [MainController::class, 'jonishin_manfi'])->name('jonishin.manfi');
Route::get('jonishin/nomuayan', [MainController::class, 'jonishin_nomuayan'])->name('jonishin.nomuayan');
Route::get('jonishin/mushtarak', [MainController::class, 'jonishin_mushtarak'])->name('jonishin.mushtarak');

// route fell
Route::get('gayritasrifi/fell', [MainController::class, 'gayritasrifi_fell'])->name('gayritasrifi.fell');
Route::get('asoshoi/fell', [MainController::class, 'asoshoi_fell'])->name('asoshoi.fell');
Route::get('fell/mistakil/yoridihanda', [MainController::class, 'fell_mistakil_yoridihanda'])->name('fell.mistakil.yoridihanda');
Route::get('fell/modali', [MainController::class, 'fell_modali'])->name('fell.modali');
Route::get('prefikshoi/shaklsoz', [MainController::class, 'prefikshoi_shaklsoz'])->name('prefikshoi.shaklsoz');
Route::get('suffiks/shaklsoz', [MainController::class, 'suffiks_shaklsoz'])->name('suffiks.shaklsoz');
Route::get('felhoi/monda', [MainController::class, 'felhoi_monda'])->name('felhoi.monda');
Route::get('namudhoi/fell', [MainController::class, 'namudhoi_fell'])->name('namudhoi.fell');
Route::get('zamonhoi/fell', [MainController::class, 'zamonhoi_fell'])->name('zamonhoi.fell');

// route zarf
Route::get('zarfhoi/tarzi/amal', [MainController::class, 'zarfhoi_tarzi_amal'])->name('zarfhoi.tarzi.amal');
Route::get('sohti/zarfhoi/murakkab', [MainController::class, 'sohti_zarfhoi_murakkab'])->name('sohti.zarfhoi.murakkab');
Route::get('zarfhoi/tarkibi', [MainController::class, 'zarfhoi_tarkibi'])->name('zarfhoi.tarkibi');
Route::get('sohti/zarfhoi/miqdoru/daraja', [MainController::class, 'sohti_zarfhoi_miqdoru_daraja'])->name('sohti.zarfhoi.miqdoru.daraja');
Route::get('zarfhoi/makon', [MainController::class, 'zarfhoi_makon'])->name('zarfhoi.makon');
Route::get('zarfhoi/zamon', [MainController::class, 'zarfhoi_zamon'])->name('zarfhoi.zamon');
Route::get('sohti/zarfhoi/zamon', [MainController::class, 'sohti_zarfhoi_zamon'])->name('sohti.zarfhoi.zamon');
Route::get('zarfhoi/sabab', [MainController::class, 'zarfhoi_sabab'])->name('zarfhoi.sabab');
Route::get('darajai/qiyosi/zarfho', [MainController::class, 'darajai_qiyosi_zarfho'])->name('darajai.qiyosi.zarfho');

// route peshoyand
Route::get('tanosubi/pasoyand', [MainController::class, 'tanosubi_pasoyand'])->name('tanosubi.pasoyand');
Route::get('tarkibi/morfologi/peshoyand', [MainController::class, 'tarkibi_morfologi_peshoyand'])->name('tarkibi.morfologi.peshoyand');
Route::get('vazifa/va/manohoi', [MainController::class, 'vazifa_va_manohoi'])->name('vazifa.va.manohoi');
Route::get('munosibati/sinonimi', [MainController::class, 'munosibati_sinonimi'])->name('munosibati.sinonimi');
Route::get('pashoyandhoi/nomii/izofi', [MainController::class, 'pashoyandhoi_nomii_izofi'])->name('pashoyandhoi.nomii.izofi');
Route::get('pashoyandhoi/izofii/takror', [MainController::class, 'pashoyandhoi_izofii_takror'])->name('pashoyandhoi.izofii.takror');

// route ПАЙВАНДАКХО
Route::get('heli/payvandak', [MainController::class, 'heli_payvandak'])->name('heli.payvandak');

// hissacha
Route::get('sohti/hissacha', [MainController::class, 'sohti_hissacha'])->name('sohti.hissacha');
Route::get('guruhhoi/hissacha', [MainController::class, 'guruhhoi_hissacha'])->name('guruhhoi.hissacha');
Route::get('tobishoi/modali/hissacha', [MainController::class, 'tobishoi_modali_hissacha'])->name('tobishoi.modali.hissacha');
Route::get('hissacha/jihati/hissai/notq', [MainController::class, 'hissacha_jihati_hissai_notq'])->name('hissacha.jihati.hissai.notq');

// NIDO

Route::get('nidohoi/imosionali', [MainController::class, 'nidohoi_imosionali'])->name('nidohoi.imosionali');
Route::get('nidohoi/amri', [MainController::class, 'nidohoi_amri'])->name('nidohoi.amri');
Route::get('sohti/nidoho', [MainController::class, 'sohti_nidoho'])->name('sohti.nidoho');



// route header show
Route::get('/morfologiya', [MainController::class, 'morfologiya'])->name('morfologiya');
Route::get('/hissahoi', [MainController::class, 'hissahoi'])->name('hissahoi');
Route::get('/jumlai/murakkab', [MainController::class, 'jumlai_murakkab'])->name('jumlai.murakkab');
Route::get('ibora', [MainController::class, 'ibora'])->name('ibora');


// comment users all 
Route::get('/comments/create', [CommentController::class, 'index']);
Route::post('/comment/store', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');
Route::get('/comments/{id}', [CommentController::class, 'comment'])->name('comments');
Route::post('/comments/answer', [CommentController::class, 'store_answer'])->name('store.answer');






























Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
