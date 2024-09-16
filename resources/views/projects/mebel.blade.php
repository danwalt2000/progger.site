@extends('parts.base')
 
@section('title', __('strings.proj_mebel_title'))
@section('description', __('strings.proj_mebel_meta'))

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.proj_store') }}</em>
        <strong id="mainHeroTitle">{{ __('strings.proj_mebel') }}</strong>
    </h1>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img src="/content/mebel-wall.jpg" alt="'{{ __('strings.proj_mebel') }}'"/>
            </div>
        
        <div class="project-details" style="box-sizing:border-box;">
            <div class="project-details-primary">
                <h2>{{ __('strings.proj_desc') }}</h2>
                <div class="project-details-intro">
                    <p>{{ __('strings.proj_mebel_1') }}</p>
                </div>
                <p>{{ __('strings.proj_mebel_2') }}</p>
                <p>{{ __('strings.proj_mebel_3') }}</p>
                <p>{{ __('strings.proj_mebel_4') }}</p>

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
                        <li>{{ __('strings.proj_addons') }}</li>
                        <li>{{ __('strings.proj_modules') }}</li>
                        <li>{{ __('strings.proj_spec_scripts') }}</li>
                        <li>{{ __('strings.proj_support_back') }}</li>
                    </ul>

                    <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                        <div style="outline: medium none;cursor:auto">
                            <h2>{{ __('strings.proj_tech') }}</h2>
                            <ul><li>HTML5, JQuery, Ajax, PHP, Twig, Opencart</li></ul>
                        </div>
                    </div>

                    {{-- <a id="gallery" class="buttonBlockElement" href="#">Посмотреть скриншоты</a> --}}
                </div>
            </div>
        </div>
    </div>
</main>
@stop