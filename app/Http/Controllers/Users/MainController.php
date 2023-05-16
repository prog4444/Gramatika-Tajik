<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Posts;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // ISM
    public function ism()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 3)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 3)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function kategotiya_ism()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 9)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 9)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ism_shahs()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 10)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 10)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ism_jins()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 11)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 11)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ism_concret()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 12)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 12)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ifodai_jinsiyat()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 13)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 13)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ismhoi_murakkab()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 14)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 14)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ismhoi_murakkab_payvast()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 15)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 15)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ismhoi_murakkab_tobe()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 16)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 16)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function kalimahoi_kutohkarda()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 17)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 17)->get();
        return view('users.ism', compact('main', 'comments'));
    }
    // ISM

    // sifat

    public function sifat()
    {
        $comments = Comment::where('post_id', 1)->orderByDesc('id', 'desc' )->get();
        $main = Posts::where('id', 1)->get();
        return view('users.ism', compact('main', 'comments'));
        
    }

    public function sifat_gramatika()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 18)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 18)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function helhoi_sifat()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 19)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 19)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function sifat_asli()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 20)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 20)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function sifat_nisbi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 21)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 21)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ba_sifat_asli_gusashta()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 22)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 22)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function darajahoi_sifat()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 23)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 23)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function shakli_takidi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 24)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 24)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function novozish_sifat()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 25)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 25)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function kalimasozi_sifat()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 26)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 26)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    // sifat

    // Шумора

    public function malumoti_umumi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 27)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 27)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function khelhoi_shumora()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 28)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 28)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function shumorai_tahmini()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 29)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 29)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function shumorai_tartibi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 30)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 30)->get();
        return view('users.ism', compact('main', 'comments'));
    }
    // Шумора
 
    // Ҷонишин

    public function mafhumi_jonishin()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 31)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 31)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function jonishin_shaksi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 32)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 32)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function jonishin_savoli()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 33)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 33)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function jonishin_ishorati()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 34)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 34)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function jonishin_taini()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 35)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 35)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function jonishin_manfi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 36)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 36)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function jonishin_nomuayan()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 37)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 37)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function jonishin_mushtarak()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 38)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 38)->get();
        return view('users.ism', compact('main', 'comments'));
    }
    // Ҷонишин

    // ФЕЪЛ
    public function gayritasrifi_fell()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 39)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 39)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function asoshoi_fell()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 40)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 40)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function fell_mistakil_yoridihanda()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 41)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 41)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function fell_modali()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 42)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 42)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function prefikshoi_shaklsoz()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 43)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 43)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function suffiks_shaklsoz()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 44)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 44)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function felhoi_monda()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 45)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 45)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function namudhoi_fell()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 46)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 46)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function zamonhoi_fell()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 47)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 47)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    // ФЕЪЛ

    // zarf
    public function zarfhoi_tarzi_amal()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 48)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 48)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function sohti_zarfhoi_murakkab()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 49)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 49)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function zarfhoi_tarkibi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 50)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 50)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function sohti_zarfhoi_miqdoru_daraja()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 51)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 51)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function zarfhoi_makon()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 52)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 52)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function zarfhoi_zamon()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 53)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 53)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function sohti_zarfhoi_zamon()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 54)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 54)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function zarfhoi_sabab()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 55)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 55)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function darajai_qiyosi_zarfho()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 56)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 56)->get();
        return view('users.ism', compact('main', 'comments'));
    }
    // zarf

    // Пашоянд

    public function tanosubi_pasoyand()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 57)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 57)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function tarkibi_morfologi_peshoyand()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 58)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 58)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function vazifa_va_manohoi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 59)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 59)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function munosibati_sinonimi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 60)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 60)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function pashoyandhoi_nomii_izofi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 61)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 61)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function pashoyandhoi_izofii_takror()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 62)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 62)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    // Пашоянд


    // ПАЙВАНДАКХО

    public function heli_payvandak()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 63)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 63)->get();
        return view('users.ism', compact('main', 'comments'));
    }
    // ПАЙВАНДАКХО

    // ХИССАЧА
    public function sohti_hissacha()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 64)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 64)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function guruhhoi_hissacha()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 65)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 65)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function tobishoi_modali_hissacha()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 66)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 66)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function hissacha_jihati_hissai_notq()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 67)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 67)->get();
        return view('users.ism', compact('main', 'comments'));
    }
    
    // ХИССАЧА
    
    // НИДО

    public function nidohoi_imosionali()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 68)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 68)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function nidohoi_amri()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 69)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 69)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function sohti_nidoho()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 70)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 70)->get();
        return view('users.ism', compact('main', 'comments'));
    }


    // НИДО end //




    public function morfologiya()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 6)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 6)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function hissahoi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 7)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 7)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function jumlai_murakkab()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 8)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 8)->get();
        return view('users.ism', compact('main', 'comments'));
    }

     public function ibora()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 71)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 71)->get();
        return view('users.ism', compact('main', 'comments'));
    }


    public function search(Request $request)
    {
        $query = $request->get('query');
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 71)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('title', 'LIKE', '%' . $query . '%')->get();

        return view('users.sifat', compact('main', 'comments'));
    }
     

    
   

 
    
}
