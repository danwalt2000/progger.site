@extends('parts.base')
 
@section('title', __('strings.proj_drive_desc'))
@section('description', __('strings.proj_drive_meta'))

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.proj_multipage') }}</em>
        <strong id="mainHeroTitle">Drive-don</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img src="/content/drive-don-wall.jpg" alt="Drive-don на разных устройствах"/>
            </div>

    <div class="project-details" style="box-sizing:border-box;">
        <div class="project-details-primary">
            <h2> {{ __('strings.proj_desc') }}</h2>
            <div class="project-details-intro">
                <p>{{ __('strings.proj_drive_1') }}</p>
            </div>
            <p>{{ __('strings.proj_drive_2') }}</p>

        </div>
        <div class="project-details-secondary">
            <div class="project-details-block project-details-sector">
                <h2>{{ __('strings.proj_type') }}</h2>
                {{ __('strings.proj_multipage') }} 
            </div>
            <div class="project-details-block">
                <h2> {{ __('strings.proj_i_wrote') }}</h2>
                <ul>
                    <li>{{ __('strings.proj_markup') }}</li>
                    <li>{{ __('strings.proj_scripts') }}</li>
                    <li>{{ __('strings.proj_adaptive') }}</li>
                </ul>

                <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                    <div style="outline: medium none;cursor:auto">
                        <h2>{{ __('strings.proj_tech') }}</h2>
                        <ul><li>HTML, CSS, JS, JQuery, Ajax, Photoshop</li></ul>
                    </div>
                </div>

                <a id="gallery" class="buttonBlockElement" href="#">{{ __('strings.proj_screens') }}</a>
                {{-- <a href="https://danwalt2000.000webhostapp.com" rel="nofollow noopener noreferrer" class="buttonBlockElement">Перейти на сайт</a> --}}
            </div>
        </div>
    </div>
</main>
<script src="/scripts/jquery2.14.js"></script>
<script src="/scripts/swiperbox.js"></script>
<script>
    $( '#gallery' ).click( function( e ) {
        e.preventDefault();
        $.swipebox( [
            { href:'/content/screenshots/drive-don-home.png', title:'Сайт перевозчика - главная страница' }, 
            { href:'/content/screenshots/drive-don-directions.png', title:'Сайт перевозчика - направления поездок' }, 
            { href:'/content/screenshots/drive-don-services.png', title:'Сайт перевозчика - услуги' }, 
            { href:'/content/screenshots/drive-don-contacts.png', title:'Сайт перевозчика - контакты' }, 
        ] );
    } );
</script>
@stop