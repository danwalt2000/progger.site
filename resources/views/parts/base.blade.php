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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" href="/content/logo-sharp.svg" />
    <link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('style/swipebox.css') }}" rel="stylesheet" type="text/css" />
    
    <title>
        @hasSection('title')
            @yield('title')
        @else
            Портфолио разработчика
        @endif
    </title>
    <meta charset="UTF-8">
    <meta name="description" 
        @hasSection('title')
            content="@yield('description')"
        @else
            content="Я - разработчик: создаю быстрые, функциональные и красивые сайты, ссуществляю поддержку приложения после разработки, помогаю с настройкой модулей, расширений, приложений. Сделаю для вас продающий сайт, который гарантированно принесет прибыль!"
        @endif    
    >
    <meta name="keywords" content="Профессиональная разработка приложений, создание сайтов, заказать сайт, разработка сайтов, создать приложение, изготавливать сайт, веб профессионал, программист, разработчик, портфолио, PHP, Javascript, jQuery, сайты где можно заказать, верстка, web-development, responsive web-development, frontend, backend, coding, sharp design" />
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
            <!-- Yandex.Metrika counter -->
            <script type="text/javascript" >
                (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();
                for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
            
                ym(91894049, "init", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/91894049" style="position:absolute; left:-9999px;" alt="Включите JavaScript, пожалуйста" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
    @endproduction
</body>

</html>