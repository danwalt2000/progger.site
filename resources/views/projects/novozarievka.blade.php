
@extends('parts.base')
 
@section('title', "Сайт агрофирмы")
@section('description', "Небольшой сайт сверстанный по макету и 'натянутый' на Wordpress")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Агросервис</em>
        <strong id="mainHeroTitle">"Новозариевка"</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img src="/content/novozar-wall.jpg" alt="Агросервис Новозариевка"/>
            </div>

            <div class="project-details" style="box-sizing:border-box;">
                <div class="project-details-primary">
                    <h2>Описание проекта</h2>
                    <div class="project-details-intro">
                        <p>Легкий и симпатичный сайт на Вордпрессе оснащен функцианалом интернет-витрины, и дает заказчику широкие возможности, как в публикации статей, так и в администрировании бизнеса. Благодаря плагину WP Bakery веб-мастер может легко изменять контент и дизайн лендингов сайта без необходимости открывать исходный код приложения.</p>
                    </div>
                    <p>Развитая модульная система сайта позволяет использовать ключевые блоки и "фичи" на многих страницах без ручного каждого переписывания лендинга. Удобная CMS и плагин для интерасктивной верстки - отличная комбинация для красивого и доступного сайта.</p>
                </div>
                <div class="project-details-secondary">
                    <div class="project-details-block project-details-sector">
                        <h2>Тип проекта</h2>
                        Интернет-витрина
                    </div>
                    <div class="project-details-block">
                        <h2>Что я написал</h2>
                        <ul>
                            <li>Верстка сайта</li>
                            <li>Подключение CMS Wordpress</li>
                            <li>Переработка с блога в интернет-витрину</li>
                            <li>Администрирование backend</li>
                        </ul>

                        <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                            <div style="outline: medium none;cursor:auto">
                                <h2>Использованные технологии</h2>
                                <ul><li>HTML5, CSS3, JS, PHP</li></ul>
                            </div>
                        </div>
                        <a id="gallery" class="buttonBlockElement" href="#">Посмотреть скриншоты</a>
                    </div>
                </div>
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
            { href:'/content/screenshots/novozarievka-main.png', title:'Магазин агрофирмы - главная страница' }, 
            { href:'/content/screenshots/novozarievka-catalog.png', title:'Магазин агрофирмы - каталог товаров' }, 
            { href:'/content/screenshots/novozarievka-product.png', title:'Магазин агрофирмы - карточка товара' }, 
        ] );
    } );
</script>
@stop