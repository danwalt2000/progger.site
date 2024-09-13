@extends('parts.base')
 
@section('title', __('strings.proj_provance_meta'))
@section('description', __('strings.proj_prov_meta_desc'))

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.proj_provance_intro') }}</em>
        <strong id="mainHeroTitle">{{ __('strings.proj_provance') }}</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img src="/content/provence.jpg" alt="Сайт салона штор 'Прованс' на разных устройствах"/>
            </div>

            
    <div class="project-details" style="box-sizing:border-box;">
        <div class="project-details-primary">
            <h2> {{ __('strings.proj_desc') }}</h2>
            <div class="project-details-intro">
                <p>{{ __('strings.proj_provance_1') }}</p>
            </div>
            <p>{{ __('strings.proj_provance_2') }}</p>
            <p>{{ __('strings.proj_provance_3') }}</p>
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
                    <li>{{ __('strings.proj_auth') }}</li>
                    <li>{{ __('strings.proj_land_to_store') }}</li>
                    <li>{{ __('strings.proj_support_back') }}</li>
                </ul>

                <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                    <div style="outline: medium none;cursor:auto">
                        <h2>{{ __('strings.proj_tech') }}</h2>
                        <ul><li>HTML5, CSS3/SASS, JQuery, Ajax, PHP, Figma</li></ul>
                    </div>
                </div>

                <a id="gallery" class="buttonBlockElement" href="#">{{ __('strings.proj_screen') }}</a>
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
            { href:'/content/screenshots/provence.png', title:'Салон штор - главная страница' }
        ] );
    } );
</script>

    <!-- конец описания проекта -->

@stop