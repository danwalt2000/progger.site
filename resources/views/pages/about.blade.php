
@extends('parts.base')
 
@section('title', __('strings.nav_about_desc'))
@section('description', __('strings.nav_about_desc'))

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