<?php
$title = "Мое портфолио";
$description = "Этот сайт создан для того, чтобы продемонстрировать мои способности веб-программирования";
$underline = 3;
?>
<?php include "./head.php"; ?>
         <div class="headingIntro">
                <p>
                    <em>Этот сайт</em>
                </p>
                <p>
                    <strong id="mainHeroTitle">Портфолио</strong>
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
                                    <a href="drive-don"></a>
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
                                    <a href="bustravel"></a>
                                </div>

                            </nav>
                        </div>

                    </div>

                </div>
                <div class="hrContainer" style="margin-top:0;
                    margin-bottom:30px;">
                </div>

    <div class="MyMultiDeviceImages">
        <img src="content/portfolio-site.jpg" alt=""/>
    </div>

    <!-- Описание проекта -->


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
    </main>



    <!-- конец описания проекта -->

<?php include "./footer.php"; ?>