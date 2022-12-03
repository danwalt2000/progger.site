@extends('parts.base')
 
@section('title', "Портфолио разработчика")

@section('main')
<div class="headingIntro">
    <h1>
        <em>Обзор моих работ</em>
        <strong id="mainHeroTitle">Проекты</strong>
    </h1>
</header>
<main id="page">
    <main id="content">
        <div class="page-content portfolio">
            <div class="layout">

                <h2 class="introBlockHeading">Портфолио</h2>
                <div class="briefBackgroundBlock biggerMaxWidth" style="padding:0">
                    <div class="MyColSide">
                        <div class="My-block-image"></div>
                    </div>
                    <div class="owenCol2">
                        <div class="paddingMy">
                            <p class="portfolio__description">Здесь вы найдете проекты, над которыми я
                                работал. В каждом проекте я добавил краткое описание его содержания и
                                примененных технологий. </p>
                        </div>
                    </div>
                    <div class="MyColSide">
                        <div class="owen-block-image"></div>
                    </div>
                </div>

                <main id="page">
                    <div id="content">
                        <div class="page-content">
                            <div class="layout">
                                <h1 class="introBlockHeading">Мои работы</h1>
                                <div class="projectRow">
                                    <div class="ProjectContentOuter">
                                        <div class="ProjectContent">
                                            <div>
                                                <section class="portfolio-block">
                                                    <div class="portfolio-image-block">
                                                        <a class="portfolio-image-block__link" href="novozarievka">
                                                            <img src="content/novozar.png" alt="Сайт агрофирмы"
                                                                class="projectImage"
                                                                style="left:0;position: relative;top: 0;" />
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-content-block">
                                                        <div class="portfolio-content-block__holder">
                                                            <div class="portfolio-content-block__text">
                                                                <div class="portfolio-content-block__sub-title">
                                                                    Сайт агрофирмы</div>
                                                                <div class="portfolio-content-block__title">
                                                                    Новозариевка</div>
                                                                <a class="portfolio-content-block__link"
                                                                    title="Сайт агрофирмы"
                                                                    href="novozarievka">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ProjectContentOuter">
                                        <div class="ProjectContent">
                                            <div>
                                                <section class="portfolio-block">
                                                    <div class="portfolio-image-block">
                                                        <a class="portfolio-image-block__link" href="infotech">
                                                            <img src="content/infotech.jpg" alt="Infotech"
                                                                class="projectImage"
                                                                style="left:0;position: relative;top: 0;" />
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-content-block">
                                                        <div class="portfolio-content-block__holder">
                                                            <div class="portfolio-content-block__text">
                                                                <div class="portfolio-content-block__sub-title">
                                                                    Интернет-магазин</div>
                                                                <div class="portfolio-content-block__title">
                                                                    ЧП "ИНФОТЕХ"</div>
                                                                <a class="portfolio-content-block__link" title="Инфотех"
                                                                    href="infotech">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ProjectContentOuter">
                                        <div class="ProjectContent">
                                            <div>
                                                <section class="portfolio-block">
                                                    <div class="portfolio-image-block">
                                                        <a class="portfolio-image-block__link" href="mebel">
                                                            <img src=" content/mebel.jpg" alt="Мебель-Донецк"
                                                                class="projectImage"
                                                                style="left:0;position: relative;top: 0;" />
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-content-block">
                                                        <div class="portfolio-content-block__holder">
                                                            <div class="portfolio-content-block__text">
                                                                <div class="portfolio-content-block__sub-title">
                                                                    Интернет-магазин</div>
                                                                <div class="portfolio-content-block__title">
                                                                    Мебель Донецк</div>
                                                                <a class="portfolio-content-block__link"
                                                                    title="Мебель Донецк" href="mebel">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projectRow">
                                    <div class="ProjectContentOuter">
                                        <div class="ProjectContent">
                                            <div>
                                                <section class="portfolio-block">
                                                    <div class="portfolio-image-block">
                                                        <a class="portfolio-image-block__link" href="drive-don">
                                                            <img src="content/drive-don.jpg" alt="Drive-don"
                                                                class="projectImage"
                                                                style="left:0;position: relative;top: 0;" />
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-content-block">
                                                        <div class="portfolio-content-block__holder">
                                                            <div class="portfolio-content-block__text">
                                                                <div class="portfolio-content-block__sub-title">
                                                                    Сайт транспортной компании</div>
                                                                <div class="portfolio-content-block__title">
                                                                    Drive-don</div>
                                                                <a class="portfolio-content-block__link"
                                                                    title="Drive-don" href="drive-don">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ProjectContentOuter">
                                        <div class="ProjectContent">
                                            <div>
                                                <section class="portfolio-block">
                                                    <div class="portfolio-image-block">
                                                        <a class="portfolio-image-block__link" href="my-port">
                                                            <img src=" content/portfolio.jpg" alt="Портфолио"
                                                                class="projectImage"
                                                                style="left:0;position: relative;top: 0;" />
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-content-block">
                                                        <div class="portfolio-content-block__holder">
                                                            <div class="portfolio-content-block__text">
                                                                <div class="portfolio-content-block__sub-title">
                                                                    Вебсайт</div>
                                                                <div class="portfolio-content-block__title">
                                                                    Портфолио</div>
                                                                <a class="portfolio-content-block__link"
                                                                    title="Портфолио веб-разработчика"
                                                                    href="my-port">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ProjectContentOuter">
                                        <div class="ProjectContent">
                                            <div>
                                                <section class="portfolio-block">
                                                    <div class="portfolio-image-block">
                                                        <a class="portfolio-image-block__link" href="bustravel">
                                                            <img src=" content/bustravel.jpg" alt="Bustravel"
                                                                class="projectImage"
                                                                style="left:0;position: relative;top: 0;" />
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-content-block">
                                                        <div class="portfolio-content-block__holder">
                                                            <div class="portfolio-content-block__text">
                                                                <div class="portfolio-content-block__sub-title">
                                                                    Вебсайт</div>
                                                                <div class="portfolio-content-block__title">
                                                                    Транспортная компания</div>
                                                                <a class="portfolio-content-block__link"
                                                                    title="Транспортная компания"
                                                                    href="bustravel">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="projectRow">
                                    <div class="ProjectContentOuter">
                                        <div class="ProjectContent">
                                            <div>
                                                <section class="portfolio-block">
                                                    <div class="portfolio-image-block">
                                                        <a class="portfolio-image-block__link" href="15">
                                                            <img src="content/15-preview.jpg" alt="Пятнашки"
                                                                class="projectImage"
                                                                style="left:0;position: relative;top: 0;" />
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-content-block">
                                                        <div class="portfolio-content-block__holder">
                                                            <div class="portfolio-content-block__text">
                                                                <div class="portfolio-content-block__sub-title">
                                                                    Игра</div>
                                                                <div class="portfolio-content-block__title">
                                                                    Пятнашки</div>
                                                                <a class="portfolio-content-block__link" title="Игра 15"
                                                                    href="15">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ProjectContentOuter">
                                        <div class="ProjectContent">
                                            <div>
                                                <section class="portfolio-block">
                                                    <div class="portfolio-image-block">
                                                        <a class="portfolio-image-block__link" href="sheeps">
                                                            <img src="content/sheeps.jpg" alt="Игра 'Волк и овцы'"
                                                                class="projectImage"
                                                                style="left:0;position: relative;top: 0;" />
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-content-block">
                                                        <div class="portfolio-content-block__holder">
                                                            <div class="portfolio-content-block__text">
                                                                <div class="portfolio-content-block__sub-title">
                                                                    Игра</div>
                                                                <div class="portfolio-content-block__title">
                                                                    Волк и овцы</div>
                                                                <a class="portfolio-content-block__link"
                                                                    title="Игра Волк и овцы" href="sheeps">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ProjectContentOuter">
                                        <div class="ProjectContent">
                                            <div>
                                                <section class="portfolio-block">
                                                    <div class="portfolio-image-block">
                                                        <a class="portfolio-image-block__link" href="provence.php">
                                                            <img src="content/provence1.jpg" alt="Provence"
                                                                class="projectImage"
                                                                style="left:0;position: relative;top: 0;" />
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-content-block">
                                                        <div class="portfolio-content-block__holder">
                                                            <div class="portfolio-content-block__text">
                                                                <div class="portfolio-content-block__sub-title">
                                                                    Сайт салона штор</div>
                                                                <div class="portfolio-content-block__title">
                                                                    Прованс</div>
                                                                <a class="portfolio-content-block__link" title="Прованс"
                                                                    href="provence.php">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end project row-->
                        </div>
                    </div>
                </main>
    </main>
@stop