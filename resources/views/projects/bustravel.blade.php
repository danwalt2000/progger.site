@extends('parts.base')
 
@section('title', __('strings.proj_drive_desc'))
@section('description', "Я создал сайт транспортной компании, который вышел в топ по региону даже без продвижения")

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.dev_site') }}</em>
        <strong id="mainHeroTitle">{{ __('strings.proj_drive_transp') }}</strong>
    </h1>
</header>
</header>

<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
    <img src="/content/bustravel-wall.jpg" alt="Bustravel"/>
</div>


<div class="project-details" style="box-sizing:border-box;">
    <div class="project-details-primary">
        <h2> {{ __('strings.proj_desc') }}</h2>
        <div class="project-details-intro">
            <p>{{ __('strings.proj_bus_1') }}</p>
        </div>
        <p>{{ __('strings.proj_bus_2') }}</p>
        <p>{{ __('strings.proj_bus_3') }}</p>

    </div>
    <div class="project-details-secondary">
        <div class="project-details-block project-details-sector">
            <h2>{{ __('strings.proj_type') }}</h2>
            {{ __('strings.proj_landing') }}
        </div>
        <div class="project-details-block">
            <h2> {{ __('strings.proj_i_wrote') }}</h2>
            <ul>
                <li>{{ __('strings.proj_copy_site') }}</li>
                <li>{{ __('strings.proj_logic') }}</li>
                <li>{{ __('strings.proj_jivo') }}</li>
            </ul>

            <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                <div style="outline: medium none;cursor:auto">
                    <h2>{{ __('strings.proj_tech') }}</h2>
                    <ul><li>HTML5, CSS, JavaScript, PHP</li></ul>
                </div>
            </div>

        </div>
    </div>
</div>
        </main>



<!-- конец описания проекта -->

@stop