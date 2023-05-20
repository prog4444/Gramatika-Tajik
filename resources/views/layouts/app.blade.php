<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Zaboni Tojiki</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/htmlcss/css/main.css">

    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="imgd">
  <nav class="navbar navbar-light bg-light" style=" position: fixed; z-index: 1000; top: 0;left: 0;width: 100%; background-color: #fff;">
    <div class="container-fluid">
      <a class="navbar-brand" style="margin-left: 7.8%; font-size:20px; weight:bold; padding:1px;">КАТАЛОГИ ЭЛЕКТРОНИИ АЪЗОҲОИ НУТҚИ ЗАБОНИ ТОҶИКӢ</a>
      <form class="d-flex" action="{{ route('search') }}" method="GET">
        <input class="form-control me-2" type="search" name="query" id="find" placeholder="Ҷустуҷу..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Ҷустуҷу</button>
      </form>
    </div>
  </nav>
  
    <div id="app" >
        <nav class="navbar navbar-expand-md  shadow-sm "  style=" position: fixed; z-index: 1000; top: 0;left: 0;width: 100%; background: #fff; margin-top:4%" >
            <div class="container" >
                <a class="navbar-brand font-weight-bold" style="color: orangered; font-size:20px;" href="{{ url('/') }}">
                    {{ config('', 'Zaboni Tojiki') }}
                </a>
               
 
                

                <button style="background: content-box;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    <div style="margin-right: 320px;">
                      <a href="{{route('morfologiya')}}" class="text-decoration-none font-weight-bold text-dark qwer" style="font-size: 16px; ">Морфология</a>
                      <a href=" {{ route('hissahoi') }}" class="text-decoration-none font-weight-bold text-dark qwer" style="font-size: 16px; " >Ҳиссаҳои нутқ</a>
                      <a href="{{ route('jumlai.murakkab')}}" class="text-decoration-none font-weight-bold text-dark qwer" style="font-size: 16px;">Ҷумлаи мураккаб</a>
                      <a href="{{ route('ibora')}}" class="text-decoration-none font-weight-bold text-dark qwer" style="font-size: 16px;">Ибора</a>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Даромадан') }}</a>
                                    
                                </li>
                              
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Бакайдгирӣ') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        {{-- menu --}}
<div class="container" style="" >
    <div style="width: 15%; position: fixed; top: 100px; left: 120px;  height: 100%; overflow-y: scroll; margin-top: 2%;">
   
    <li class="mb-1">
      <button  class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false"  style="background: content-box;" >
        Исм
      </button>
    
      <div class="collapse" id="customize-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small" id="list">
            <li><a href="{{ route('ism') }}" class="d-inline-flex align-items-center rounded me">Маълумоти умумии исм</a></li>
            <li><a href="{{route('kategotiya.ism')}}" class="d-inline-flex align-items-center rounded me">Категорияҳои Исм</a></li>
            <li><a href="{{route('ism.shahs')}}" class="d-inline-flex align-items-center rounded me">Исмҳои шахс ва ғайришахс</a></li>
            <li><a href="{{route('ism.jins')}}" class="d-inline-flex align-items-center rounded me">Исмхои чинс ва хос</a></li>
            <li><a href="{{route('ism.concret')}}" class="d-inline-flex align-items-center rounded me">Исмхои конкрет ва абстракт</a></li>
            <li><a href="{{route('ifodai.jinsiyat')}}" class="d-inline-flex align-items-center rounded me">Ифодаи чинсият дар исм</a></li>
            <li><a href="{{route('ismhoi.murakkab')}}" class="d-inline-flex align-items-center rounded me">Исми мураккаб</a></li>
            <li><a href="{{route('ismhoi.murakkab.payvast')}}" class="d-inline-flex align-items-center rounded me">Исмхои мураккабаи пайваст</a></li>
            <li><a href="{{route('ismhoi.murakkab.tobe')}}" class="d-inline-flex align-items-center rounded me">Исмхои мураккаби тобеъ</a></li>
            <li><a href="{{route('kalimahoi.kutohkarda')}}" class="d-inline-flex align-items-center rounded me">Калимахои кутохкардашуда</a></li>

        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false"  style="background: content-box;" >
        Сифат
      </button>
    
      <div class="collapse" id="layout-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
          <li><a href="{{ route('sifat') }}" class="d-inline-flex align-items-center rounded me">Сифат</a></li>
            <li><a href="{{ route('sifat.gramatika') }}" class="d-inline-flex align-items-center rounded me">Сифат ва хусусиятхои граматикии он</a></li>
            <li><a href="{{ route('helhoi.sifat') }}" class="d-inline-flex align-items-center rounded me">Хелхои сифат</a></li>
            <li><a href="{{ route('sifat.asli') }}" class="d-inline-flex align-items-center rounded me">Сифати асли</a></li>
            <li><a href="{{ route('sifat.nisbi') }}" class="d-inline-flex align-items-center rounded me">Сифатхои нисби</a></li>
            <li><a href="{{ route('ba.sifat.asli.gusashta') }}" class="d-inline-flex align-items-center rounded me">Ба сифати асли гузаштани сифатхои нисби</a></li>
            <li><a href="{{ route('darajahoi.sifat') }}" class="d-inline-flex align-items-center rounded me">Дараҷахои сифат</a></li>
            <li><a href="{{ route('shakli.takidi') }}" class="d-inline-flex align-items-center rounded me">Шакли тахкидӣ дар сифат</a></li>
            <li><a href="{{ route('novozish.sifat') }}" class="d-inline-flex align-items-center rounded me">Ифодаи ками ва хурдиву навозиш дар сифат</a></li>
            <li><a href="{{ route('kalimasozi.sifat') }}" class="d-inline-flex align-items-center rounded me">Калимасози дар сифат</a></li>
           
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false"  style="background: content-box;" >
        Шумора
      </button>
    
      <div class="collapse" id="content-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('malumoti.umumi') }}" class="d-inline-flex align-items-center rounded me">Матълумоти умумй</a></li>
            <li><a href="{{ route('khelhoi.shumora') }}" class="d-inline-flex align-items-center rounded me">Хелхои шумора</a></li>
            <li><a href="{{ route('shumorai.tahmini') }}" class="d-inline-flex align-items-center rounded me">Шумораи тахмини</a></li>
            <li><a href="{{ route('shumorai.tartibi') }}" class="d-inline-flex align-items-center rounded me">Шумораи тартиби</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="false"  style="background: content-box;" >
        Ҷонишин
      </button>
    
      <div class="collapse" id="forms-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('mafhumi.jonishin') }}" class="d-inline-flex align-items-center rounded me">Мафхуми ҷонишин</a></li>
            <li><a href="{{ route('jonishin.shaksi') }}" class="d-inline-flex align-items-center rounded me">Ҷонишинхои шахси</a></li>
            <li><a href="{{ route('jonishin.savoli') }}" class="d-inline-flex align-items-center rounded me">Ҷонишинхои саволи</a></li>
            <li><a href="{{ route('jonishin.ishorati') }}" class="d-inline-flex align-items-center rounded me">Ҷонишинихои ишорати</a></li>
            <li><a href="{{ route('jonishin.taini') }}" class="d-inline-flex align-items-center rounded me">Ҷонишинхои таъминӣ</a></li>
            <li><a href="{{ route('jonishin.manfi') }}" class="d-inline-flex align-items-center rounded me">Ҷонишинхои манфӣ</a></li>
            <li><a href="{{ route('jonishin.nomuayan') }}" class="d-inline-flex align-items-center rounded me">Ҷонишинхои номуайянӣ</a></li>
            <li><a href="{{ route('jonishin.mushtarak') }}" class="d-inline-flex align-items-center rounded me">Ҷонишинхои муштарак</a></li>


        </ul>
      </div>
    </li>
    
    <li class="mb-1">
      <button class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false" aria-current="true"  style="background: content-box;" >
        Феъл
      </button>
    
      <div class="collapse" id="components-collapse" bis_skin_checked="1" style="">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('gayritasrifi.fell') }}" class="d-inline-flex align-items-center rounded me">Шакли тасрифӣ ва ғайритасфирии феъл</a></li>
            <li><a href="{{ route('asoshoi.fell') }}" class="d-inline-flex align-items-center rounded me">Асосҳои феъл</a></li>
            <li><a href="{{ route('fell.mistakil.yoridihanda') }}" class="d-inline-flex align-items-center rounded me">Феълхои мустакил ва ёридиханда</a></li>
            <li><a href="{{ route('fell.modali') }}" class="d-inline-flex align-items-center rounded me">Феълхои модали</a></li>
            <li><a href="{{ route('prefikshoi.shaklsoz') }}" class="d-inline-flex align-items-center rounded me">Префиксхои шаклсози феъл</a></li>
            <li><a href="{{ route('suffiks.shaklsoz') }}" class="d-inline-flex align-items-center rounded me">Суффиксхои шаклсозии феъл</a></li>
            <li><a href="{{ route('felhoi.monda') }}" class="d-inline-flex align-items-center rounded me">Феълхои монда ва гузаранда</a></li>
            <li><a href="{{ route('namudhoi.fell') }}" class="d-inline-flex align-items-center rounded me">Намудхои феъл</a></li>
            <li><a href="{{ route('zamonhoi.fell') }}" class="d-inline-flex align-items-center rounded me">Замонахои феъл</a></li>
            


     
        </ul>
      </div>
    </li>
  
   
   
    <li class="mb-1">
      <button class="text-dark btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#extend-collapse" aria-expanded="false"  style="background: content-box;" >
        Зарф
      </button>
    
      <div class="collapse" id="extend-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">

            <li><a href="{{ route('zarfhoi.tarzi.amal') }}" class="d-inline-flex align-items-center rounded me">Зарфҳои тархи амал</a></li>
            <li><a href="{{ route('sohti.zarfhoi.murakkab') }}" class="d-inline-flex align-items-center rounded me">Сохти зарфхои мураккаб</a></li>
            <li><a href="{{ route('zarfhoi.tarkibi') }}" class="d-inline-flex align-items-center rounded me">Зарфҳои таркиби</a></li>
            <li><a href="{{ route('sohti.zarfhoi.miqdoru.daraja') }}" class="d-inline-flex align-items-center rounded me">Сохти зарфхои микдору дараҷа</a></li>
            <li><a href="{{ route('zarfhoi.makon') }}" class="d-inline-flex align-items-center rounded me">Зарфи макон</a></li>
            <li><a href="{{ route('zarfhoi.zamon') }}" class="d-inline-flex align-items-center rounded me">Зарфи замон</a></li>
            <li><a href="{{ route('sohti.zarfhoi.zamon') }}" class="d-inline-flex align-items-center rounded me">Сохти зарфхои замон</a></li>
            <li><a href="{{ route('zarfhoi.sabab') }}" class="d-inline-flex align-items-center rounded me">Зарфи сабаб</a></li>
            <li><a href="{{ route('darajai.qiyosi.zarfho') }}" class="d-inline-flex align-items-center rounded me">Дараҷаи қиёсии зарҳо</a></li>


        </ul>
      </div>
    </li>
    {{-- mastar --}}
    <li class="mb-1">
      <button class="text-dark btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#about-collapse" aria-expanded="false" style="background: content-box;">
        Пешоянду пасоянд
      </button>

      <div class="collapse" id="about-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('tanosubi.pasoyand') }}" class="d-inline-flex align-items-center rounded me">Таносуби пешояндхо дар забони  точики</a></li>
            <li><a href="{{ route('tarkibi.morfologi.peshoyand') }}" class="d-inline-flex align-items-center rounded me">Таркиби морфологии пешояндхо</a></li>
            <li><a href="{{ route('vazifa.va.manohoi') }}" class="d-inline-flex align-items-center rounded me">Вазифа ва маноҳои асосии пешояндхо</a></li>
            <li><a href="{{ route('munosibati.sinonimi') }}" class="d-inline-flex align-items-center rounded me">Муносибати синонимии пешояндхои асли</a></li>
            <li><a href="{{ route('pashoyandhoi.nomii.izofi') }}" class="d-inline-flex align-items-center rounded me">Пешояндахои номии изофи </a></li>
            <li><a href="{{ route('pashoyandhoi.izofii.takror') }}" class="d-inline-flex align-items-center rounded me">Пасояндхо</a></li>
        </ul>
      </div>
    </li>
    

     

      <li class="mb-1">
        <button class=" text-dark btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="false" style="background: content-box;">
          Пайвандакхо
        </button>
  
        <div class="collapse" id="helpers-collapse" bis_skin_checked="1">
          <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="{{ route('heli.payvandak') }}" class="d-inline-flex align-items-center rounded me">Хели пайвандакҳо</a></li>

          </ul>
        </div>
      </li>
     
      <li class="mb-1">
        <button class=" text-dark btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#utilities-collapse" aria-expanded="false"  style="background: content-box;">
          Хиссачахо
        </button>
  
        <div class="collapse" id="utilities-collapse" bis_skin_checked="1">
          <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="{{ route('sohti.hissacha') }}" class="d-inline-flex align-items-center rounded me">Сохти хиссачаҳо</a></li>
              <li><a href="{{ route('guruhhoi.hissacha') }}" class="d-inline-flex align-items-center rounded me">Гурухои хиссачахо</a></li>
              <li><a href="{{ route('tobishoi.modali.hissacha') }}" class="d-inline-flex align-items-center rounded me">Хиссачахо ва калимахои модали</a></li>
              <li><a href="{{ route('hissacha.jihati.hissai.notq') }}" class="d-inline-flex align-items-center rounded me">Ҳиссачахои чиҳати хиссии такид кутохкардашуда</a></li>


          </ul>
        </div>
      </li>


      <li class="mb-1">
        <button class=" text-dark btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="true"  style="background: content-box;">
          Нидо
        </button>

        <div class="collapse show" id="getting-started-collapse" bis_skin_checked="1" style="">
          <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="{{ route('nidohoi.imosionali') }}" class="d-inline-flex align-items-center rounded me">Нидоҳои эмотсионали</a></li>
              <li><a href="{{ route('nidohoi.amri') }}" class="d-inline-flex align-items-center rounded me">Нидохои амри</a></li>
              <li><a href="{{ route('sohti.nidoho') }}" class="d-inline-flex align-items-center rounded me">Сохти нидохо</a></li>
             

          </ul>
        </div>
      </li>
    

    
   
    </div>
    </div>
  </div>

  


  

    
    {{-- menu --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8" style="flex: 0 0 auto;
                width:90%;
                margin-left: 19rem;">
                    <div class="" style="margin-top:50px; margin-left:1rem;">
                        {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
        
                        <div class="">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            

        <main class="py-4">
            @yield('content')
        </main>

        



        

    </div>
</div>
</div>
</div>
</div>
</div>
    </div>


  <script>
    function search() {
    let input = document.getElementById("find");
    let filter = input.value.toUpperCase();
   
 
    // Перебирайте все элементы списка и скрывайте те, которые не соответствуют поисковому запросу
    for (let i = 0; i < input.length; i++) {
        let a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
  </script>
    
</body>
</html>
