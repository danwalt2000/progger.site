@extends('parts.base')
 
@section('title', "Мое портфолио")
@section('description', "Этот сайт создан для того, чтобы продемонстрировать мои способности веб-программирования")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Этот сайт</em>
        <strong id="mainHeroTitle">Этот сайт</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => "drive-don", 'next' => "bustravel"])

            <div class="MyMultiDeviceImages">
                <img src="/content/portfolio-site.jpg" alt=""/>
            </div>


            <div class="project-details" style="box-sizing:border-box;">
                <div class="project-details-primary">
                    <h2>Описание проекта</h2>
                    <div class="project-details-intro">
                        <p>Я написал этот сайт, чтобы продемонстрировать свои способности и получить работу в качестве веб-дизайнера и разработчика. Я решил выбрать простой и эффектный дизайн для реализации этого проекта. </p>
                    </div>
                    <p>Отличительной особенностью сайта являются большие картинки-подложки и SVG-графика.
                        Я выбираю иконки и картинки, созданные по технологии SVG, потому что они не требуют загрузки со сторонних ресурсов или подключения каких-либо библиотек.
                    Плюс: они удобны в обслуживании и эффективны в быстродействии. </p>
                    <p>
                        Я считаю, что написал классный сайт, и надеюсь, что вам он тоже понравился.
                    </p>

                </div>
                <div class="project-details-secondary">
                    <div class="project-details-block project-details-sector">
                        <h2>Тип проекта</h2>
                        Персональное веб-портфолио
                    </div>
                    <div class="project-details-block">
                        <h2>Что я написал</h2>
                        <ul>
                            <li>Дизайн сайта</li>
                            <li>Движок блога</li>
                            <li>Адаптивная верстка</li>
                            <li>Администрирование backend-части</li>
                        </ul>

                        <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                            <div style="outline: medium none;cursor:auto">
                                <h2>Использованные технологии</h2>
                                <ul><li>HTML5, CSS3/SASS, JS, JQuery, PHP, Photoshop</li></ul>
                            </div>
                        </div>

                        <a class="buttonBlockElement" href="index">Перейти на главную</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@stop