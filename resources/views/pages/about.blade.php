
@extends('parts.base')
 
@section('title', "Краткая информация обо мне")
@section('description', "Почему вам стоит заказать сайт у меня?")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Немного информации</em>
        <strong id="mainHeroTitle">Обо мне</strong>
    </h1>
</header>
</header>
    <div class="page-content">
        @include("parts.about")
    </div>
@stop