@extends('parts.base')
 
@section('title', __('strings.projects_title'))
@section('description', __('strings.projects_meta_desc'))

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.projects_review') }}</em>
        <strong id="mainHeroTitle">{{ __('strings.projects_title') }}</strong>
    </h1>
</header>
</header>
<main id="page">
    <main id="content">
        <div class="page-content portfolio">
            <div class="layout">

                <h2 class="introBlockHeading">{{ __('strings.dev_port') }}</h2>
                <div class="briefBackgroundBlock biggerMaxWidth" style="padding:0">
                    <div class="owenCol2">
                        <div class="paddingMy">
                            <p class="portfolio__description">{{ __('strings.projects_desc') }} </p>
                        </div>
                    </div>
                </div>

                <main id="page">
                    <div id="content">
                        <div class="page-content">
                            <div class="layout">
                                <h2 class="introBlockHeading">{{ __('strings.nav_my_works') }}</h2>

                                <div class="portfolio-grid">
                                    @foreach ($projects as $project)
                                        <section class="portfolio-block">
                                            <div class="portfolio-image-block">
                                                <a class="portfolio-image-block__link" href="{{ $project["link"] }}">
                                                    <img src="{{ $project["img"] }}" alt="{{ $project["title"] }}"
                                                        class="projectImage"
                                                        style="left:0;position: relative;top: 0;" />
                                                </a>
                                            </div>
                                            <div class="portfolio-content-block">
                                                <div class="portfolio-content-block__holder">
                                                    <div class="portfolio-content-block__text">
                                                        <div class="portfolio-content-block__sub-title">
                                                            {{ $project["title"] }}</div>
                                                        <div class="portfolio-content-block__title">
                                                            {{ $project["second_title"] }}</div>
                                                        <a class="portfolio-content-block__link"
                                                            title="{{ $project["title"] }}"
                                                            href="{{ $project["link"] }}">{{ __('strings.dev_more') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
    </main>
@stop