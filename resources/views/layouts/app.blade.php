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
                <a href="{{ route('jumlai.murakkab')}}" class="text-decoration-none font-weight-bold text-dark" style="font-size: 16px;">Ҷумлаи мураккаб</a>

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
    <div class="collapse" id="getting-started-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/getting-started/introduction/" class="d-inline-flex align-items-center rounded me ">Introduction</a></li>
            <li><a href="/docs/5.0/getting-started/download/" class="d-inline-flex align-items-center rounded">Download</a></li>
            <li><a href="/docs/5.0/getting-started/contents/" class="d-inline-flex align-items-center rounded">Contents</a></li>
            <li><a href="/docs/5.0/getting-started/browsers-devices/" class="d-inline-flex align-items-center rounded">Browsers &amp; devices</a></li>

        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button  class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false"  style="background: content-box;" >
        Исм
      </button>
    
      <div class="collapse" id="customize-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('ism') }}" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded me">Исм</a></li>

        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false"  style="background: content-box;" >
        Сифат ва Шумора
      </button>
    
      <div class="collapse" id="layout-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('sifat') }}" class="d-inline-flex align-items-center rounded me">Сифат</a></li>
            <li><a href="/docs/5.0/layout/containers/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/layout/grid/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded me">Исм</a></li>

        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false"  style="background: content-box;" >
        Исм
      </button>
    
      <div class="collapse" id="content-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/content/reboot/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/content/typography/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/content/images/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/content/tables/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/content/figures/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="false"  style="background: content-box;" >
        Исм
      </button>
    
      <div class="collapse" id="forms-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/forms/overview/" class="d-inline-flex align-items-center rounded me">Исм</a></li>
            <li><a href="/docs/5.0/forms/form-control/" class="d-inline-flex align-items-center rounded me ">Исм</a></li>
            <li><a href="/docs/5.0/forms/select/" class="d-inline-flex align-items-center rounded me">Select</a></li>
            <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded me">Checks &amp; radios</a></li>

        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class=" text-dark  btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false" aria-current="true"  style="background: content-box;" >
        Исм
      </button>
    
      <div class="collapse" id="components-collapse" bis_skin_checked="1" style="">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/components/accordion/" class="d-inline-flex align-items-center rounded me">Accordion</a></li>
            <li><a href="/docs/5.0/components/alerts/" class="d-inline-flex align-items-center rounded me">Alerts</a></li>
            <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded me">Badge</a></li>
            <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded me">Breadcrumb</a></li>

     
        </ul>
      </div>
    </li>
  
   
    <li class="mb-1">
      <button class="text-dark btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#extend-collapse" aria-expanded="false"  style="background: content-box;" >
        Extend
      </button>
    
      <div class="collapse" id="extend-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded me">Approach</a></li>
            <li><a href="/docs/5.0/extend/icons/" class="d-inline-flex align-items-center rounded me">Icons</a></li>
        </ul>
      </div>
    </li>
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
