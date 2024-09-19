
@extends('parts.base')
 
@section('title',  __('strings.proj_kursi_title'))
@section('description', __('strings.proj_kursi_meta'))

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.proj_app') }}</em>
        <strong id="mainHeroTitle">KursiValut</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img class="mockup-new" src="/content/mockup-val.jpg" alt="{{ __('strings.proj_kursi_title') }}" loading="lazy" />
            </div>

            <div class="project-details" style="box-sizing:border-box;">
                <div class="project-details-primary">
                    <h2> {{ __('strings.proj_desc') }}</h2>
                    <div class="project-details-intro">
                        <p>{{ __('strings.proj_kursi_1') }}</p>
                    </div>
                    <p>{{ __('strings.proj_kursi_2') }}</p>
                    <p>{{ __('strings.proj_kursi_3') }}</p>
                </div>
                <div class="project-details-secondary">
                    <div class="project-details-block project-details-sector">
                        <h2>{{ __('strings.proj_type') }}</h2>
                        {{ __('strings.proj_app') }}
                    </div>
                    <div class="project-details-block">
                        <h2> {{ __('strings.proj_i_wrote') }}</h2>
                        <ul>
                            <li>{{ __('strings.proj_idea') }}</li>
                            <li>{{ __('strings.proj_parsing') }}</li>
                            <li>{{ __('strings.proj_mech') }}</li>
                            <li>{{ __('strings.proj_design_n_mock') }}</li>
                            <li>{{ __('strings.proj_support_back') }}</li>
                        </ul>

                        <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                            <div style="outline: medium none;cursor:auto">
                                <h2>{{ __('strings.proj_tech') }}</h2>
                                <ul><li>Laravel, HTML5, CSS3, JS, PHP</li></ul>
                            </div>
                        </div>
                        <a class="buttonBlockElement" target="_blank" href="https://github.com/danwalt2000/kursivalut">{{ __('strings.proj_source_code') }}</a>
                        <a class="buttonBlockElement" target="_blank" href="https://moscow.kursivalut.ru">{{ __('strings.proj_work_ver') }}</a>
                        {{-- <a id="gallery" class="buttonBlockElement" href="#">{{ __('strings.proj_screens') }}</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="/scripts/jquery2.14.js"></script>
@stop