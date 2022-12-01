@extends('parts.base')
 
@section('title', "Портфолио разработчика")
 
@section('main')

   @include('parts.nav')

      <div class="menuFiller">
          <div class="paddingMy"></div>
      </div>

<!-- Конец header -->


<div class="headingIntro homeFV">
    <h1>
        <em>Веб-дизайнер и </em> 
        <br>
        <strong id="mainHeroTitle">Разработчик</strong>
    </h1>
    <p>
        <a href="#footer" class='HomeHeaderButtons'>Связаться со мной</a>
    </p>
</div>

<div class="scollerContainer">
    <div class="scrollIndicator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 34">
            <path class="st0"
                  d="M11,33L11,33C5.5,33,1,28.5,1,23V11C1,5.5,5.5,1,11,1h0c5.5,0,10,4.5,10,10v12C21,28.5,16.5,33,11,33z"></path>
        </svg>
        <div></div>
    </div>
</div>


</header>
<!-- конец первого раздела-->
<!-- Начало "промо" раздела -->
<main id="page">
    <div id="content">
        <div class="page-content">
            @include("parts.about")
        </div>
    </div>
</main>
<!-- конец "промо"-раздела -->

<main id="page">
    <div id="content">
        <div class="page-content">
            <div class="layout">
                <h2 class="introBlockHeading">Мои работы</h2>
                <div class="projectRow">

                    <div class="ProjectContentOuter">
                        <div class="ProjectContent">
                            <div>
                                <section class="portfolio-block">
                                    <div class="portfolio-image-block">
                                        <a class="portfolio-image-block__link" href="novozarievka">
                                            <img src="content/novozar.png" alt="Сайт агрофирмы" class="projectImage" style="left:0;position: relative;top: 0;" />
                                        </a>
                                    </div>
                                    <div class="portfolio-content-block">
                                        <div class="portfolio-content-block__holder">
                                            <div class="portfolio-content-block__text">
                                                <div class="portfolio-content-block__sub-title">Сайт агрофирмы</div>
                                                <div class="portfolio-content-block__title">Новозариевка</div>
                                                <a class="portfolio-content-block__link" title="Сайт агрофирмы" href="novozarievka">Подробнее</a>
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
                                            <img src="{{ asset('content/infotech.jpg') }}" alt="Infotech" class="projectImage"
                                                 style="left:0;position: relative;top: 0;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-content-block">
                                        <div class="portfolio-content-block__holder">
                                            <div class="portfolio-content-block__text">
                                                <div class="portfolio-content-block__sub-title">Интернет-магазин</div>
                                                <div class="portfolio-content-block__title">ЧП "ИНФОТЕХ"</div>
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
                                            <img src="{{ asset('content/mebel.jpg') }}" alt="" class="projectImage"
                                                 style="left:0;position: relative;top: 0;"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-content-block">
                                        <div class="portfolio-content-block__holder">
                                            <div class="portfolio-content-block__text">
                                                <div class="portfolio-content-block__sub-title">Интернет-магазин</div>
                                                <div class="portfolio-content-block__title">Мебель Донецк</div>
                                                <a class="portfolio-content-block__link" title="Мебель Донецк"
                                                   href="mebel">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="buttonBlock">
                    <div>
                        <div style="text-align:center">
                            <a href="portfolio.php" class="buttonBlockElement">Больше проектов</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hrContainer">
    <hr class="hrHomePage4">
</div>

@include('parts.skills')
            <!-- Раздел постов -->

            <div class="hrContainer">
                <hr class="hrHomePage5">
            </div>

            <h2 class="introBlockHeading" style="padding-bottom:0;">Последние статьи</h2>
            <div class="blog-posts clearfix">

                <article class="published post home">
                    <a href="15-article.php">
                        <img class="attachment-post-thumbnail" width="260" height="260"
                             alt="Пишем игру на чистом Javascript" src="{{ asset('content/15.jpg') }}">
                    </a>
                    <header class="entry-header">
                        <p class="entry-meta">
                            <small>Опубликовано</small>
                            <time itemprop="datePublished">19.04.2020 в 18:36</time>

                            <span class="entry-comments-link"> </span>
                        </p>
                        <h2 class="entry-title" itemprop="headline"><a rel="bookmark" href="15-article.php">Пишем игру
                                на чистом Javascript</a></h2>
                        <a class="more-link go-right" href="15.php">Продолжить чтение?</a>
                    </header>
                    <div class="entry-content" itemprop="text"></div>

                    <footer class="entry-footer"></footer>
                </article>

                <article class="published post home">
                    <a href="vue.php">
                        <img class="attachment-post-thumbnail" width="260" height="260" alt="Преимущества Vue JS"
                             src="content/vue.jpg">
                    </a>
                    <header class="entry-header">
                        <p class="entry-meta">
                            <small>Опубликовано</small>
                            <time itemprop="datePublished">20.04.2020 в 10:25</time>

                            <span class="entry-comments-link">

</span>
                        </p>
                        <h2 class="entry-title" itemprop="headline"><a rel="bookmark" href="vue.php">Пара слов о
                                преимуществах Vue JS</a></h2>
                        <a class="more-link go-right" href="vue.php">Продолжить чтение?</a>
                    </header>
                    <div class="entry-content" itemprop="text"></div>
                    <footer class="entry-footer"></footer>
                </article>

                <article class="published post home">
                    <a href="blog.php">
                        <img class="attachment-post-thumbnail" width="260" height="260" alt="Интерактивный дизайн"
                             src="content/inter-design.jpg">
                    </a>
                    <header class="entry-header">
                        <p class="entry-meta">
                            <small>Опубликовано</small>
                            <time itemprop="datePublished">21.04.2020 в 15:08</time>

                            <span class="entry-comments-link">

</span>
                        </p>
                        <h2 class="entry-title" itemprop="headline"><a rel="bookmark" href="interact.php">Интерактивный
                                дизайн</a></h2>
                        <a class="more-link go-right" href="interact.php">Продолжить чтение?</a>
                    </header>
                    <div class="entry-content" itemprop="text"></div>
                    <footer class="entry-footer"></footer>
                </article>
                
                <article class="published post home">
                    <a href="react-js">
                        <img class="attachment-post-thumbnail" width="260" height="260" alt="Почему React.js – это отличный выбор для
                                        производительного веб-приложения"
                             src="content/react-js-logo.jpg">
                    </a>
                    <header class="entry-header">
                        <p class="entry-meta">
                            <small>Опубликовано</small>
                            <time itemprop="datePublished">08.10.2020 в 10:25</time>

                            <span class="entry-comments-link">

</span>
                        </p>
                        <h2 class="entry-title" itemprop="headline"><a rel="bookmark" href="react-js">React.js – это отличный выбор</a></h2>
                        <a class="more-link go-right" href="react-js">Продолжить чтение?</a>
                    </header>

                </article>
            </div>
            <!-- конец раздела постов -->

            <div class="buttonBlock">
                <div>
                    <div style="text-align:center">
                        <a href="blog.php" class="buttonBlockElement">Больше статей</a>
                    </div>
                </div>
            </div>

            <!--  конец раздела блога -->
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</main>


<div id="preFooter">
    <div class="preFooterInner">
        <div class="preFooterBlocks">
            <div class="My-row">
                <div class="My-large-trio big columnPrefooterMy fade-in-selector fade-in-delay-400ms">
                    <p class="label small-lab">Аккаунт в GitHub</p>
                    <p class="small-par">Посмотреть исходный код моих проектов</p>
                    <a class="button svg" target="_blank" href="https://github.com/danwalt2000">
                        <svg id="Layer_1" xml:space="preserve" enable-background="new 0 0 28.3 23" viewBox="0 0 28.3 23" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <g>
                                <path d="M 23.300781 6.523438 C 22.183594 4.613281 20.667969 3.097656 18.753906 1.980469 C 16.839844 0.863281 14.753906 0.304688 12.488281 0.304688 C 10.222656 0.304688 8.132812 0.863281 6.21875 1.980469 C 4.304688 3.097656 2.792969 4.613281 1.675781 6.523438 C 0.558594 8.4375 0 10.527344 0 12.792969 C 0 15.511719 0.792969 17.960938 2.382812 20.132812 C 3.96875 22.304688 6.019531 23.808594 8.535156 24.644531 C 8.828125 24.699219 9.046875 24.660156 9.1875 24.53125 C 9.328125 24.402344 9.398438 24.238281 9.398438 24.042969 C 9.398438 24.011719 9.394531 23.71875 9.390625 23.164062 C 9.382812 22.613281 9.382812 22.128906 9.382812 21.71875 L 9.007812 21.785156 C 8.769531 21.828125 8.46875 21.84375 8.105469 21.839844 C 7.742188 21.835938 7.363281 21.796875 6.976562 21.726562 C 6.585938 21.65625 6.222656 21.492188 5.886719 21.238281 C 5.550781 20.984375 5.3125 20.652344 5.171875 20.238281 L 5.007812 19.867188 C 4.898438 19.617188 4.730469 19.339844 4.496094 19.035156 C 4.261719 18.734375 4.027344 18.527344 3.789062 18.417969 L 3.675781 18.335938 C 3.597656 18.28125 3.527344 18.21875 3.464844 18.140625 C 3.398438 18.066406 3.347656 17.988281 3.316406 17.914062 C 3.285156 17.839844 3.3125 17.777344 3.398438 17.726562 C 3.484375 17.679688 3.640625 17.652344 3.871094 17.652344 L 4.195312 17.703125 C 4.410156 17.746094 4.679688 17.875 5 18.09375 C 5.320312 18.308594 5.582031 18.589844 5.789062 18.9375 C 6.039062 19.382812 6.339844 19.722656 6.691406 19.953125 C 7.042969 20.1875 7.398438 20.304688 7.753906 20.304688 C 8.113281 20.304688 8.421875 20.277344 8.683594 20.222656 C 8.941406 20.167969 9.1875 20.085938 9.414062 19.980469 C 9.511719 19.253906 9.777344 18.695312 10.210938 18.304688 C 9.59375 18.238281 9.035156 18.140625 8.542969 18.011719 C 8.050781 17.882812 7.542969 17.667969 7.015625 17.375 C 6.488281 17.085938 6.054688 16.722656 5.707031 16.289062 C 5.359375 15.855469 5.074219 15.285156 4.851562 14.582031 C 4.632812 13.875 4.519531 13.0625 4.519531 12.140625 C 4.519531 10.828125 4.949219 9.714844 5.804688 8.792969 C 5.402344 7.804688 5.441406 6.699219 5.917969 5.476562 C 6.234375 5.378906 6.699219 5.449219 7.316406 5.695312 C 7.933594 5.9375 8.386719 6.148438 8.675781 6.320312 C 8.960938 6.492188 9.191406 6.640625 9.363281 6.761719 C 10.375 6.476562 11.414062 6.335938 12.488281 6.335938 C 13.558594 6.335938 14.601562 6.476562 15.609375 6.761719 L 16.226562 6.371094 C 16.648438 6.109375 17.148438 5.871094 17.722656 5.652344 C 18.296875 5.4375 18.734375 5.378906 19.039062 5.476562 C 19.527344 6.699219 19.570312 7.804688 19.167969 8.792969 C 20.027344 9.714844 20.453125 10.832031 20.453125 12.140625 C 20.453125 13.0625 20.34375 13.878906 20.121094 14.589844 C 19.898438 15.296875 19.613281 15.867188 19.257812 16.296875 C 18.90625 16.722656 18.46875 17.085938 17.941406 17.375 C 17.417969 17.667969 16.90625 17.882812 16.414062 18.011719 C 15.921875 18.140625 15.363281 18.238281 14.746094 18.304688 C 15.3125 18.792969 15.59375 19.5625 15.59375 20.613281 L 15.59375 24.042969 C 15.59375 24.238281 15.660156 24.402344 15.796875 24.53125 C 15.929688 24.660156 16.144531 24.699219 16.4375 24.644531 C 18.953125 23.808594 21.003906 22.304688 22.59375 20.132812 C 24.179688 17.960938 24.972656 15.511719 24.972656 12.792969 C 24.972656 10.527344 24.414062 8.4375 23.300781 6.523438 Z M 23.300781 6.523438" fill="#FFFFFF">
                            </g>
                        </svg>
                        Перейти
                    </a>
                </div>
                <div class="My-large-trio big columnPrefooterMy fade-in-selector fade-in-delay-400ms">
                    <p class="label small-lab">Аккаунт в Facebook</p>
                    <p class="small-par">Есть интересные публикации</p>
                    <a class="button svg" target="_blank" href="https://www.facebook.com/danwalt2000">
                        <svg id="Layer_1" xml:space="preserve" enable-background="new 0 0 28.3 23" viewBox="0 0 28.3 23" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <g>
                                <path d="M 23.515625 0 L 1.375 0 C 0.617188 0 0 0.613281 0 1.375 L 0 23.515625 C 0 24.277344 0.617188 24.890625 1.375 24.890625 L 13.292969 24.890625 L 13.292969 15.25 L 10.050781 15.25 L 10.050781 11.496094 L 13.292969 11.496094 L 13.292969 8.722656 C 13.292969 5.511719 15.257812 3.757812 18.125 3.757812 C 19.5 3.757812 20.679688 3.863281 21.023438 3.90625 L 21.023438 7.265625 L 19.035156 7.265625 C 17.472656 7.265625 17.171875 8.007812 17.171875 9.09375 L 17.171875 11.492188 L 20.894531 11.492188 L 20.40625 15.25 L 17.171875 15.25 L 17.171875 24.890625 L 23.515625 24.890625 C 24.273438 24.890625 24.890625 24.273438 24.890625 23.515625 L 24.890625 1.375 C 24.890625 0.613281 24.273438 0 23.515625 0 Z M 23.515625 0" fill="#FFFFFF">
                            </g>
                        </svg>
                        Перейти
                    </a>
                </div>
                <div class="My-large-trio big columnPrefooterMy fade-in-selector fade-in-delay-500ms">
                    <p class="label small-lab">Нанять меня</p>
                    <p class="small-par">Нужен крутой сайт? Свяжитесь со мной</p>
                    <a class="button" href="mailto:danwalt@mail.ru">Заказать сайт</a>
                </div>
            </div>
        </div>
@stop