@extends('parts.base')
 
@section('title', "Интернет-магазин на Opencart")
@section('description', "Интернет-магазин мебели на Opencart")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Интернет-магазин</em>
        <strong id="mainHeroTitle">Мебель Донецк</strong>
    </h1>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])

            <div class="MyMultiDeviceImages">
                <img src="/content/mebel-wall.jpg" alt="'Мебель Донецк'"/>
            </div>
        
        <div class="project-details" style="box-sizing:border-box;">
            <div class="project-details-primary">
                <h2> {{ __('strings.proj_desc') }}</h2>
                <div class="project-details-intro">
                    <p>Мебель Донецк - это мощный и быстрый интернет-магазин на Opencart с приятным и простым дизайном.  </p>
                </div>
                <p>На сайте реализованы десятки надстроек и расширений, некоторые из них самописные.
                    В частности, в разделе категории добавлен плагин, фильтрующий товары по диапазону цен, а на странице продукта подключено AJAX-изменение цены при выборе опций и обратный отчет акционных предложений,
                    к каждому товару добавлена возможность быстрого просмотра со всеми функциями страницы продукта, а при выборе товаров категории отображаются в виде приятного и быстрого "аккордеона". </p>
                <p> Но плагины на Opencart стоят недешево, а бесплатные решения зачастую работают плохо, поэтому практически каждую надстройку приходится дорабатывать.
                    Функцию количества checkbox-опций и AJAX-изменения цены при изменения их количества, пришлось писать целиком самому.</p>
                <p> Учитывая, что написание расширений под Opencart по всем канонам MVCL - задача нетривиальная, возникла необходимость создать или внести изменения в десятки файлов для реализации, на первый взгляд, несложной функции.  </p>

            </div>
            <div class="project-details-secondary">
                <div class="project-details-block project-details-sector">
                    <h2>{{ __('strings.proj_type') }}</h2>
                    Интернет-магазин
                </div>
                <div class="project-details-block">
                    <h2> {{ __('strings.proj_i_wrote') }}</h2>
                    <ul>
                        <li>Верстка дизайна сайта</li>
                        <li>Поиск, доработка расширений</li>
                        <li>Написание некоторых расширений</li>
                        <li>Индивидуальные скрипты</li>
                        <li>Администрирование backend</li>
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