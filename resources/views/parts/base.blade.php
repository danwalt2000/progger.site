<!DOCTYPE html>
<!--
{{ __('strings.dev_thanks') }} ;) 
- {{ __('strings.dev_me') }}
-->

<html lang="ru">

<head>
    <meta property="og:url" content="//{{ Request::getHost() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="/content/logo.gif" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" href="/content/logo-sharp.svg" />
    <link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('style/certs-carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('style/swipebox.css') }}" rel="stylesheet" type="text/css" />
    
    <title>
        @hasSection('title')
            @yield('title')
        @else
            {{ __('strings.dev_port') }}
        @endif
    </title>
    <meta charset="UTF-8">
    <meta name="description" 
        @hasSection('description')
            content="@yield('description')"
        @else
            content="{{ __('strings.dev_desc') }}"
        @endif    
    >
    <meta name="keywords" content="{{ __('strings.dev_keywords') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="document-state" content="Static" />

    <script src="{{ asset('scripts/jQuery.js') }}" defer></script>
    <script src="{{ asset('scripts/swipebox.js') }}" defer></script>
    <script src="{{ asset('scripts/home.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('scripts/main.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('scripts/certs.js') }}" type="text/javascript" defer></script>
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
    </section> 
    
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
            <noscript><div><img src="https://mc.yandex.ru/watch/91894049" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
    @endproduction
</body>

</html>