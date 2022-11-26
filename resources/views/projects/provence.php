
<?php
    $title = "Сайт салона штор 'Прованс'";
    $description = "Небольшой сайт сверстанный по макету и 'натянутый' на Wordpress";
    $underline = 3;
?>
<?php include "./head.php"; ?>

            <div class="headingIntro">
                <p>
                    <em>Салон штор</em>
                </p>
                <p>
                    <strong id="mainHeroTitle">Прованс</strong>
                </p>



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
                                    <a href="sheeps"></a>
                                </div>


                                <a href="portfolio.php" style="
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
                                    <a href="novozarievka"></a>
                                </div>

                            </nav>
                        </div>

                    </div>

                </div>
                <div class="hrContainer" style="margin-top:0;
                    margin-bottom:30px;">
                </div>



                <div class="MyMultiDeviceImages">
        <img src="content/provence.jpg" alt=""/>
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

                <a class="buttonBlockElement" href="provence/prov-preview.php">Посмотреть превью</a>
            </div>
        </div>
    </div>
            </main>



    <!-- конец описания проекта -->

<?php include "./footer.php"; ?>