
@extends('parts.base')
 
@section('title', "Краткая информация обо мне")
@section('description', "Почему вам стоит заказать сайт у меня?")

@section('main')
<div class="headingIntro">
    <h1>
        <em>{{ __('strings.nav_some_info') }}</em>
        <strong id="mainHeroTitle">{{ __('strings.nav_about_me') }}</strong>
    </h1>
</header>
</header>
    <div class="page-content">
        @include("parts.about")
    </div>
@stop