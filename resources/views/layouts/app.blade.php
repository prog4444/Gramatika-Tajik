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
    <div id="app" >
        <nav class="navbar navbar-expand-md  shadow-sm "  style=" position: fixed; z-index: 1000; top: 0;left: 0;width: 100%; background: #fff;" >
            <div class="container" >
                <a class="navbar-brand font-weight-bold" style="color: orangered; font-size:20px;" href="{{ url('/') }}">
                    {{ config('', 'Zaboni Tojiki') }}
                </a>
                <a href="{{route('morfologiya')}}" class="text-decoration-none font-weight-bold text-dark" style="font-size: 16px; ">Морфология</a>&nbsp;&nbsp;
                <a href=" {{ route('hissahoi') }}" class="text-decoration-none font-weight-bold text-dark " style="font-size: 16px; " >Ҳиссаҳои нутқ</a>&nbsp;&nbsp;
                <a href="{{ route('jumlai.murakkab')}}" class="text-decoration-none font-weight-bold text-dark" style="font-size: 16px;">Ҷумлаи мураккаб</a>&nbsp;&nbsp;
                <a href="{{ route('jumlai.murakkab')}}" class="text-decoration-none font-weight-bold text-dark" style="font-size: 16px;">Ибора</a>

                

                <button style="background: content-box;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
<div class="container" >
    <div style="width: 15%; position: fixed; top: 100px; left: 120px;  height: 100%; overflow-y: scroll;">
   
    <li class="mb-1">
      <button  class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false"  style="background: content-box;" >
        Исм
      </button>
    
      <div class="collapse" id="customize-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('ism') }}" class="d-inline-flex align-items-center rounded me">Маълумоти умумии исм</a></li>
            <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded me">Категорияҳои Исм</a></li>
            <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded me">Исмҳои шахс ва ғайришахс</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded me">Исмхои чинс ва хос</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded me">Исмхои конкрет ва абстракт</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded me">Ифодаи чинсият дар исм</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded me">Исми мураккаб</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded me">Исмхои мураккабаи пайваст</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded me">Исмхои мураккаби тобеъ</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded me">Калимахои кутохкардашуда</a></li>

        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false"  style="background: content-box;" >
        Сифат
      </button>
    
      <div class="collapse" id="layout-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('sifat') }}" class="d-inline-flex align-items-center rounded me">Сифат ва хусусиятхои граматикии он</a></li>
            <li><a href="/docs/5.0/layout/containers/" class="d-inline-flex align-items-center rounded me">Хелхои сифат</a></li>
            <li><a href="/docs/5.0/layout/grid/" class="d-inline-flex align-items-center rounded me">Сифати асли</a></li>
            <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded me">Сифатхои нисби</a></li>
            <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded me">Ба сифати асли гузаштани сифатхои нисби</a></li>
            <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded me">Дараҷахои сифат</a></li>
            <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded me">Шакли тахкидӣ дар сифат</a></li>
            <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded me">Ифодаи ками ва хурдиву навозиш дар сифат</a></li>
            <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded me">Калимасози дар сифат</a></li>
            <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded me">Сифатхои нисби</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false"  style="background: content-box;" >
        Шумора
      </button>
    
      <div class="collapse" id="content-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/content/reboot/" class="d-inline-flex align-items-center rounded me">Сохти шуморахо</a></li>
            <li><a href="/docs/5.0/content/typography/" class="d-inline-flex align-items-center rounded me">Хелхои шумора</a></li>
            <li><a href="/docs/5.0/content/images/" class="d-inline-flex align-items-center rounded me">Шуморахои микдори</a></li>
            <li><a href="/docs/5.0/content/tables/" class="d-inline-flex align-items-center rounded me">Шумораи тартиби</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="false"  style="background: content-box;" >
        Ҷонишин
      </button>
    
      <div class="collapse" id="forms-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/forms/overview/" class="d-inline-flex align-items-center rounded me">Мафхуми ҷонишин</a></li>
            <li><a href="/docs/5.0/forms/form-control/" class="d-inline-flex align-items-center rounded me ">Хелхои ҷонишин аз руи маъно</a></li>
            <li><a href="/docs/5.0/forms/select/" class="d-inline-flex align-items-center rounded me">Ҷонишинхои шахси</a></li>
            <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded me">Ҷонишини нафси такиди</a></li>
            <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded me">Ҷонишинхои саволи</a></li>
            <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded me">Ҷонишинихои ишорати</a></li>
            <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded me">Ҷонишинхои таъминӣ</a></li>
            <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded me">Ҷонишинхои манфӣ</a></li>
            <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded me">Ҷонишинхои номуайянӣ</a></li>
            <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded me">Ҷонишинхои муштарак</a></li>


        </ul>
      </div>
    </li>
    
    <li class="mb-1">
      <button class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false" aria-current="true"  style="background: content-box;" >
        Феъл
      </button>
    
      <div class="collapse" id="components-collapse" bis_skin_checked="1" style="">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/components/accordion/" class="d-inline-flex align-items-center rounded me">Шакли тасрифӣ ва ғайритасфирии феъл</a></li>
            <li><a href="/docs/5.0/components/alerts/" class="d-inline-flex align-items-center rounded me">Асосҳои феъл</a></li>
            <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded me">Тасрифи феълхо</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Феълхои мустакил ва ёридиханда</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Феълхои модали</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Префиксхои шаклсози феъл</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Суффиксхои шаклсозии феъл</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Тарзхои феъл</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Феълхои монда ва гузаранда</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Намудхои феъл</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Сигахои феъл</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Замонахои феъл</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Префиксхои феъсоз</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Суффиксхои феълсоз</a></li>


     
        </ul>
      </div>
    </li>
  
   
   
    <li class="mb-1">
      <button class="text-dark btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#extend-collapse" aria-expanded="false"  style="background: content-box;" >
        Зарф
      </button>
    
      <div class="collapse" id="extend-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Категорияи морфологии зарф</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Гуруҳҳои зарф</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Зарфҳои тархи амал</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Сохти зарфхои хосаву ҳолат</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Сохти зарфхои мураккаб</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Зарфҳои таркиби</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Сохти зарфхои микдору дараҷа</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Зарфхои идоракунандаи</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Зарфи макон</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Зарфи замон</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Сохти зарфхои замон</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Зарфи максад</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Зарфи сабаб</a></li>
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Дараҷаи қиёсии зарҳо</a></li>


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
            <li><a href="/docs/5.0/about/overview/" class="d-inline-flex align-items-center rounded me">Таносуби пешояндхо дар забони  точики</a></li>
            <li><a href="/docs/5.0/about/team/" class="d-inline-flex align-items-center rounded me">Таркиби морфологии пешояндхо</a></li>
            <li><a href="/docs/5.0/about/brand/" class="d-inline-flex align-items-center rounded me">Вазифа ва маноҳои асосии пешояндхо</a></li>
            <li><a href="/docs/5.0/about/license/" class="d-inline-flex align-items-center rounded me">Муносибати синонимии пешояндхои асли</a></li>
            <li><a href="/docs/5.0/about/translations/" class="d-inline-flex align-items-center rounded me">Пешояндахои номии изофи </a></li>
            <li><a href="/docs/5.0/about/translations/" class="d-inline-flex align-items-center rounded me">Пасояндхо</a></li>
        </ul>
      </div>
    </li>
    {{-- mastar --}}

     

      <li class="mb-1">
        <button class=" text-dark btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="false" style="background: content-box;">
          Пайвандакхо
        </button>
  
        <div class="collapse" id="helpers-collapse" bis_skin_checked="1">
          <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="/docs/5.0/helpers/clearfix/" class="d-inline-flex align-items-center rounded me">Хели пайвандакҳо</a></li>

          </ul>
        </div>
      </li>
     
      <li class="mb-1">
        <button class=" text-dark btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#utilities-collapse" aria-expanded="false"  style="background: content-box;">
          Хиссачахо
        </button>
  
        <div class="collapse" id="utilities-collapse" bis_skin_checked="1">
          <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="/docs/5.0/utilities/api/" class="d-inline-flex align-items-center rounded me">Сохти хиссачаҳо</a></li>
              <li><a href="/docs/5.0/utilities/background/" class="d-inline-flex align-items-center rounded me">Гурухои хиссачахо</a></li>
              <li><a href="/docs/5.0/utilities/borders/" class="d-inline-flex align-items-center rounded me">Хиссачахо ва калимахои модали</a></li>
              <li><a href="/docs/5.0/utilities/colors/" class="d-inline-flex align-items-center rounded me">Ҳиссачахои чиҳати хиссии такид кутохкардашуда</a></li>


          </ul>
        </div>
      </li>


      <li class="mb-1">
        <button class=" text-dark btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="true"  style="background: content-box;">
          Нидо
        </button>

        <div class="collapse show" id="getting-started-collapse" bis_skin_checked="1" style="">
          <ul class="list-unstyled fw-normal pb-1 small">
              <li><a href="/docs/5.0/getting-started/introduction/" class="d-inline-flex align-items-center rounded me">Нидоҳои эмотсионали</a></li>
              <li><a href="/docs/5.0/getting-started/download/" class="d-inline-flex align-items-center rounded me">Нидохои амри</a></li>
              <li><a href="/docs/5.0/getting-started/contents/" class="d-inline-flex align-items-center rounded me">Сохти нидохо</a></li>
              <li><a href="/docs/5.0/getting-started/browsers-devices/" class="d-inline-flex align-items-center rounded me">Вазифаи синтаксисии нидоҳо</a></li>

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
                width: 90%;
                margin-left: 20rem;">
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
    
</body>
</html>
