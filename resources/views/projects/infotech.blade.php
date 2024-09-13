@extends('parts.base')
 
@section('title', "Интернет-магазин на Вордпрессе")
@section('description', "Небольшой интернет-магазин торгового и кассового оборудования на Wordpress")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Интернет-магазин</em>
        <strong id="mainHeroTitle">ЧП "Инфотех"</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img src="/content/infotech-wall.jpg" alt="ЧП 'Инфотех'"/>
            </div>

        <div class="project-details" style="box-sizing:border-box;">
            <div class="project-details-primary">
                <h2> {{ __('strings.proj_desc') }}</h2>
                <div class="project-details-intro">
                    <p>{{ __('strings.proj_infoteh_1') }}</p>
                </div>
                <p>{{ __('strings.proj_infoteh_2') }}</p>
                <p>{{ __('strings.proj_infoteh_3') }}</p>
                <p>{{ __('strings.proj_infoteh_4') }}</p>

            </div>
            <div class="project-details-secondary">
                <div class="project-details-block project-details-sector">
                    <h2>{{ __('strings.proj_type') }}</h2>
                    {{ __('strings.proj_store') }}
                </div>
                <div class="project-details-block">
                    <h2> {{ __('strings.proj_i_wrote') }}</h2>
                    <ul>
                        <li>{{ __('strings.proj_markup') }}</li>
                        <li>{{ __('strings.proj_connect_cms') }}</li>
                        <li>{{ __('strings.proj_woo') }}</li>
                        <li>{{ __('strings.proj_plugins') }}</li>
                        <li>{{ __('strings.proj_support_back') }}</li>
                    </ul>

                    <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                        <div style="outline: medium none;cursor:auto">
                            <h2>{{ __('strings.proj_tech') }}</h2>
                            <ul><li>HTML5, JQuery, Ajax, PHP, Wordpress</li></ul>
                        </div>
                    </div>
                    <a id="gallery" class="buttonBlockElement" href="#">{{ __('strings.proj_screen') }}</a>
                </div>
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
            // { href:'/content/screenshots/infotech.jpg', title:'My Caption' }, 
            { href:'/content/screenshots/infotech.png', title:'Интернет-магазин Инфотех' }
        ] );
    } );
</script>
@stop