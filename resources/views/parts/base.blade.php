<!DOCTYPE html>
<!--
Очень мило, что вы заглянули "под капот" моего сайта. Приятного просмотра! ;) 
- Виталий.
-->

<html lang="ru">

<head>

    <meta property="og:url" content="//sharpdesign.ru" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="/content/logo.gif" />
    
    <link rel="icon" href="/content/logo-sharp.svg" />
    <link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('style/swipebox.css') }}" rel="stylesheet" type="text/css" />
    <title>@yield('title')</title>
    
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="Профессиональная разработака приложений, создание сайтов, заказать сайт, разработка сайтов, создать приложение, изготавливать сайт, веб профессионал, программист, разработчик, портфолио, PHP, Javascript, jQuery, сайты где можно заказать, верстка, Украина, Донецк, Ukraine, software development, web-design, web-development, frontend, backend, coding, sharp design" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="document-state" content="Static" />

    <script src="{{ asset('scripts/jQuery.js') }}" defer></script>
    <script src="{{ asset('scripts/swipebox.js') }}" defer></script>
    <script src="{{ asset('scripts/home.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('scripts/main.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('scripts/notificationsignup.js') }}" type="text/javascript" defer></script>
    @hasSection('addition')
        @section('addition')
        @show
    @endif
</head>

<body class="
@if( Request::segment(1) == "projects" )
    @empty( Request::segment(2) )
        page-{{ Request::segment(1) }}
    @else
        page-{{ Request::segment(2) }}
    @endempty    
@elseif(Request::segment(1)) 
    page-{{Request::segment(1)}} 
@else 
    page-index 
@endif">
    <section id="siteWrapper" class="siteWrap">

       
        @include('parts.nav')
        
        @section('main')
        @show
        @include('parts.footer')
    </section> <!-- end of site wrapper -->

    @production
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41622656-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'UA-41622656-4');
            </script>
    @endproduction
</body>

</html>