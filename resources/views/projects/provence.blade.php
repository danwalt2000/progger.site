@extends('parts.base')
 
@section('title', "Сайт салона штор 'Прованс'")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Сайт салона штор</em>
        <strong id="mainHeroTitle">'Прованс'</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => "sheeps", 'next' => "novozarievka"])

            <div class="MyMultiDeviceImages">
                <img src="/content/provence.jpg" alt="Сайт салона штор 'Прованс' на разных устройствах"/>
            </div>

            
    <!-- Описание проекта -->


    <div class="project-details" style="box-sizing:border-box;">
        <div class="project-details-primary">
            <h2>Описание проекта</h2>
            <div class="project-details-intro">
                <p>Изначально сайт планировался как одностраничный лендинг. Дизайн был написан и интегрирован помощью софта компании Figma. Позже проект эволюционировал в полноценный интернет-магазин. </p>
            </div>
            <p>Для удобства поддержки сайта я подключил его к популярной CMS Wordpress. </p>
            <p> На сайте реализованы десятки мощных скриптов, как на JS, так и на PHP. Они позволяют быстро и эффективно управлять сайтом, публиковать новые записи, обрабатывать заказы и работать с формой обратной связи, а также почтовой рассылкой. </p>
        </div>
        <div class="project-details-secondary">
            <div class="project-details-block project-details-sector">
                <h2>Тип проекта</h2>
                Интернет-магазин
            </div>
            <div class="project-details-block">
                <h2>Что я написал</h2>
                <ul>
                    <li>Верстка сайта</li>
                    <li>Подключение CMS Wordpress</li>
                    <li>Система авторизации</li>
                    <li>Переработка с лендинга на интернет-магшазин</li>
                    <li>Администрирование backend</li>
                </ul>

                <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                    <div style="outline: medium none;cursor:auto">
                        <h2>Использованные технологии</h2>
                        <ul><li>HTML5, CSS3/SASS, JQuery, Ajax, PHP, Figma</li></ul>
                    </div>
                </div>

                <a id="gallery" class="buttonBlockElement" href="#">Посмотреть скриншот</a>
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