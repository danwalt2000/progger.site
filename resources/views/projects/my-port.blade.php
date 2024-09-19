@extends('parts.base')
 
@section('title', "Мое портфолио")
@section('description', "Этот сайт создан для того, чтобы продемонстрировать мои способности веб-программирования")

@section('main')
<div class="headingIntro">
    <h1>
        {{-- <em>Этот сайт</em> --}}
        <strong id="mainHeroTitle">{{ __('strings.exp_this_site') }}</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img src="/content/portfolio-site.jpg" alt="" loading="lazy" />
            </div>


            <div class="project-details" style="box-sizing:border-box;">
                <div class="project-details-primary">
                    <h2>{{ __('strings.proj_desc') }}</h2>
                    <div class="project-details-intro">
                        <p>{{ __('strings.proj_port_1') }}</p>
                    </div>
                    <p>{{ __('strings.proj_port_2') }}</p>
                    <p>{{ __('strings.proj_port_3') }}</p>

                </div>
                <div class="project-details-secondary">
                    <div class="project-details-block project-details-sector">
                        <h2>{{ __('strings.proj_type') }}</h2>
                        {{ __('strings.proj_port_pers') }}
                    </div>
                    <div class="project-details-block">
                        <h2> {{ __('strings.proj_i_wrote') }}</h2>
                        <ul>
                            <li>{{ __('strings.proj_design') }} </li>
                            <li>{{ __('strings.proj_blog_engine') }}</li>
                            <li>{{ __('strings.proj_adapt_markup') }}</li>
                            <li>{{ __('strings.proj_support_back') }}</li>
                        </ul>

                        <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                            <div style="outline: medium none;cursor:auto">
                                <h2>{{ __('strings.proj_tech') }}</h2>
                                <ul><li>Laravel, Blade, PHP, HTML5, CSS3, JS</li></ul>
                            </div>
                        </div>

                        <a class="buttonBlockElement" href="/">{{ __('strings.dev_go_home') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@stop