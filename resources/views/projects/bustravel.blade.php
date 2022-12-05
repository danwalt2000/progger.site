@extends('parts.base')
 
@section('title', "Портфолио разработчика")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Сайт</em>
        <strong id="mainHeroTitle">Транспортной компании</strong>
    </h1>
</header>
</header>

<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => "my-port", 'next' => "15"])

            <div class="MyMultiDeviceImages">
    <img src="/content/bustravel-wall.jpg" alt="Bustravel"/>
</div>

<!-- Описание проекта -->


<div class="project-details" style="box-sizing:border-box;">
    <div class="project-details-primary">
        <h2>Описание проекта</h2>
        <div class="project-details-intro">
            <p>Проект был написан под CMS Modx, но заказчику понадобилось перенести его на другой домен без административной части.  </p>
        </div>
        <p>В данном проекте пришлось не просто выполнить работу по копированию и переносу сайта, но и по восстановлению бизнес-логики, присутствовавшей в оригинальном проекте: возможность редактирования информации, отправка писем администратору, подключение чата JivoSite.</p>
        <p>Но несколько простых скриптов решили проблему отправки писем, подключение TextoLite позволило заказчику править сайт прямо в браузере, а работа с чатом JivoSite - не приносит проблем даже начинающим программистам.</p>

    </div>
    <div class="project-details-secondary">
        <div class="project-details-block project-details-sector">
            <h2>Тип проекта</h2>
            Лэндинг
        </div>
        <div class="project-details-block">
            <h2>Что я написал</h2>
            <ul>
                <li>Копирование и перенос сайта</li>
                <li>Восстановление бизнес-логики</li>
                <li>Подключение CMS и JivoSite</li>
            </ul>

            <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                <div style="outline: medium none;cursor:auto">
                    <h2>Использованные технологии</h2>
                    <ul><li>HTML5, CSS, JavaScript, PHP</li></ul>
                </div>
            </div>

            <a class="buttonBlockElement" rel="nofollow" 
            {{-- href="http://bustravel.dn.ua" --}}
            >Посмотреть скриншот</a>
        </div>
    </div>
</div>
        </main>



<!-- конец описания проекта -->

@stop