@extends('parts.base')
 
@section('title', "Портфолио разработчика")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Многостраничный сайт</em>
        <strong id="mainHeroTitle">Drive-don</strong>
    </h1>
</header>


            </div>
        </div>
    </header>
    <main id="page">
        <div id="content">
            <div class="page-content projectOverViewWide" >

                <div class="projectNavWrapper">
                    <div class="projectNavContainer">
                        <div>
                            <nav class="projectNavigationControl">
                                <div class="prev">
                                    <a href="mebel"></a>
                                </div>


                                <a href="/projects" style="
                            position: absolute;left: 50%; margin-left: -24px;">
                                <span style="height: 20px;overflow: hidden;position: relative;width: 20px;left:10px;margin-top:11px;">
                                <i class="b1 c1"></i>
                                <i class="b1 c2"></i>
                                <i class="b1 c3"></i>
                                <i class="b2 c1"></i>
                                <i class="b2 c2"></i>
                                <i class="b2 c3"></i>
                                <i class="b3 c1"></i>
                                <i class="b3 c2"></i>
                                <i class="b3 c3"></i>
                                </span>
                                </a>

                                <div class="next">
                                    <a href="my-port"></a>
                                </div>

                            </nav>
                        </div>

                    </div>

                </div>
                <div class="hrContainer" style="margin-top:0;
                    margin-bottom:30px;">
                </div>



                <div class="MyMultiDeviceImages">
        <img src="content/drive-don-wall.jpg" alt="Drive-don на разных устройствах"/>
    </div>

    <!-- Описание проекта -->


    <div class="project-details" style="box-sizing:border-box;">
        <div class="project-details-primary">
            <h2>Описание проекта</h2>
            <div class="project-details-intro">
                <p>Don-drive - это многостраничный сайт транспортной компании, разработанный без использования CMS. </p>
            </div>
            <p>Для улучшения пользовательского опыта дизайн сайта составлен в красно-сиреневых тонах, на ресурсе активно используются широкие подложки и эффект размытия, а на странице контактов добавлен скрипт Яндекс-карты.</p>
            <p>  </p>

        </div>
        <div class="project-details-secondary">
            <div class="project-details-block project-details-sector">
                <h2>Тип проекта</h2>
                Многостраничный сайт
            </div>
            <div class="project-details-block">
                <h2>Что я написал</h2>
                <ul>
                    <li>Верстка сайта</li>
                    <li>Скрипты и сложные анимации</li>
                    <li>Адаптивный дизайн</li>
                </ul>

                <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                    <div style="outline: medium none;cursor:auto">
                        <h2>Использованные технологии</h2>
                        <ul><li>HTML5, CSS3/SASS, JQuery, Ajax, Photoshop</li></ul>
                    </div>
                </div>

                <a class="buttonBlockElement" rel="nofollow" href="https://perevozkirostov.ru" target="_blank">Перейти на сайт</a>
            </div>
        </div>
    </div>
    </main>




    <!-- конец описания проекта -->

<?php include "./footer.php"; ?>