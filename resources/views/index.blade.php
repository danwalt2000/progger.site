<?php
$underline = 1;
?>
<?php

if(!isset($title) || !isset($description)){
    $title = "Портфолио web-разработчика, дизайнера и seo-специалиста";
    $description = "Я - разработчик, веб-дизайнер и seo-специалист: создаю быстрые, функциональные и красивые сайты, недорого продвигаю сайты в топ, наполняю качественным контентом. Осуществляю бесплатную поддержку сайта после разработки, помогаю с настройкой модулей, расширений, приложений. Сделаю для вас продающий сайт, который гарантированно принесет прибыль!";
}
?>
<!DOCTYPE html>
<!--
Очень мило, что вы заглянули "под капот" моего сайта. Приятного просмотра! ;) 
- Виталий.
-->

<html lang="ru">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41622656-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-41622656-4');
    </script>
    <meta property="og:url" content="//www.sharpdesign.ru" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:image" content="content/logo.gif" />
    <link rel="icon" href="content/logo-sharp.svg" />
    <link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('style/swipebox.css') }}" rel="stylesheet" type="text/css" />
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="Создание сайтов, заказать сайт, разработка сайтов, создать приложение, заказать сайт дешево, дешевый заказ сайт, изготавливать сайт, веб профессионал, программист, разработчик, дизайнер, портфолио, PHP, Javascript, jQuery, сайты где можно заказать, верстка, Украина, Донецк, Ukraine, software development, web-design, web-development, frontend, backend, coding, sharp design" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="document-state" content="Static" />

    <script src="{{ asset('scripts/jQuery.js') }}" defer></script>
    <script src="{{ asset('scripts/swipebox.js') }}" defer></script>
    <script src="{{ asset('scripts/home.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('scripts/main.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('scripts/notificationsignup.js') }}" type="text/javascript" defer></script>
    <?php if(isset($add)){
        echo $add;
    }?>
</head>

<body>
    <?php //include "./skills.php" ?>
  <div id="siteWrapper" class="siteWrap">

    <?php
    $curPage = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], "/") + 1);
    ?>
    
    
    <?php if ($curPage == "index" || $curPage == "index.php" || $curPage == ""): ?>
        <header class="site-header" style="height:100vh !important;">
        <div class="overlay" style="width:100%;height:100vh !important">
    <?php elseif ($curPage == "15.php" || $curPage == "15"): ?>
        <header class="site-header" style="background: url(content/woodBack.jpg) repeat;">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "about" || $curPage == "about.php"): ?>
        <header class="site-header" style="background-image: url(content/about-Bg.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "drive-don" || $curPage == "drive-don.php"): ?>
        <header class="site-header" style="background-image: url(content/beaconBanner.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "experience.php" || $curPage == "experience"): ?>
        <header class="site-header" style="background-image: url(content/skill.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "my-port.php" || $curPage == "my-port"): ?>
        <header class="site-header" style="background-image: url(content/digital-field.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "portfolio.php" || $curPage == "portfolio"): ?>
        <header class="site-header" style="background-image: url(content/projectBanner.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "provence.php"): ?>
        <header class="site-header" style="background-image: url(content/provBanner.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "novozarievka.php" || $curPage == "novozarievka"): ?>
        <header class="site-header" style="background-image: url(content/novozar-Bg.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "sheeps.php" || $curPage == "sheeps"): ?>
        <link href="Game_Sheeps/style/style.css" rel="stylesheet" type="text/css" />
        <header class="site-header" style="background: url(content/woodBack.jpg) repeat;">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "bustravel.php" || $curPage == "bustravel"): ?>
        <header class="site-header" style="background-image: url(content/bustravel-head.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "mebel.php" || $curPage == "mebel"): ?>
        <header class="site-header" style="background-image: url(content/mebel-head.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "infotech.php" || $curPage == "infotech"): ?>
        <header class="site-header" style="background-image: url(content/infotech-head.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php elseif ($curPage == "react-js.php" || $curPage == "react-js"): ?>
        <header class="site-header" style="background-image: url(content/reactjs-wall.jpg);">
        <div class="overlay" style="padding: 0 !important;">
    <?php else: ?>
        <header class="site-header" style="background-image: url(content/articles.jpg);">
            <div class="overlay" style="padding: 0 !important;">
    <?php endif; ?>

<!-- Конец head -->


<!-- Начало header -->
      <div class="logoDiv">

          <a href='index'>
              <div id="logoImage">
                  <img src="content/sharp-logo.png" alt="Logo" />
              </div>
          </a>

      </div>

      <input id="mobileNavToggle" class="mobile-nav-toggle-box hidden" type="checkbox" name="mobile-nav-toggle">
      <div id="overlayNav">

          <div id="mobileNavWrapper" class="nav-wrapper">
              <nav id="mobileNavigation">
                  <div class="index home active">
                      <a href="index"> Главная </a>
                  </div>

                  <div class="index home">
                      <a href="about"> Обо мне </a>
                  </div>

                  <div class="index home">
                      <a href="portfolio"> Портфолио </a>
                  </div>
                  <div class="index home">
                      <a href="experience"> Опыт  </a>
                  </div>
                  <div class="index home">
                      <a href="blog.php"> Блог </a>
                  </div>
                  <div class="index home social">
                      <a class="iconMobileNav twitter" title="GitHub" href="//www.github.com/danwalt2000">
                          <svg viewBox="0 0 28.3 23" style="width:35px;">
                              <path d="M 23.300781 6.523438 C 22.183594 4.613281 20.667969 3.097656 18.753906 1.980469 C 16.839844 0.863281 14.753906 0.304688 12.488281 0.304688 C 10.222656 0.304688 8.132812 0.863281 6.21875 1.980469 C 4.304688 3.097656 2.792969 4.613281 1.675781 6.523438 C 0.558594 8.4375 0 10.527344 0 12.792969 C 0 15.511719 0.792969 17.960938 2.382812 20.132812 C 3.96875 22.304688 6.019531 23.808594 8.535156 24.644531 C 8.828125 24.699219 9.046875 24.660156 9.1875 24.53125 C 9.328125 24.402344 9.398438 24.238281 9.398438 24.042969 C 9.398438 24.011719 9.394531 23.71875 9.390625 23.164062 C 9.382812 22.613281 9.382812 22.128906 9.382812 21.71875 L 9.007812 21.785156 C 8.769531 21.828125 8.46875 21.84375 8.105469 21.839844 C 7.742188 21.835938 7.363281 21.796875 6.976562 21.726562 C 6.585938 21.65625 6.222656 21.492188 5.886719 21.238281 C 5.550781 20.984375 5.3125 20.652344 5.171875 20.238281 L 5.007812 19.867188 C 4.898438 19.617188 4.730469 19.339844 4.496094 19.035156 C 4.261719 18.734375 4.027344 18.527344 3.789062 18.417969 L 3.675781 18.335938 C 3.597656 18.28125 3.527344 18.21875 3.464844 18.140625 C 3.398438 18.066406 3.347656 17.988281 3.316406 17.914062 C 3.285156 17.839844 3.3125 17.777344 3.398438 17.726562 C 3.484375 17.679688 3.640625 17.652344 3.871094 17.652344 L 4.195312 17.703125 C 4.410156 17.746094 4.679688 17.875 5 18.09375 C 5.320312 18.308594 5.582031 18.589844 5.789062 18.9375 C 6.039062 19.382812 6.339844 19.722656 6.691406 19.953125 C 7.042969 20.1875 7.398438 20.304688 7.753906 20.304688 C 8.113281 20.304688 8.421875 20.277344 8.683594 20.222656 C 8.941406 20.167969 9.1875 20.085938 9.414062 19.980469 C 9.511719 19.253906 9.777344 18.695312 10.210938 18.304688 C 9.59375 18.238281 9.035156 18.140625 8.542969 18.011719 C 8.050781 17.882812 7.542969 17.667969 7.015625 17.375 C 6.488281 17.085938 6.054688 16.722656 5.707031 16.289062 C 5.359375 15.855469 5.074219 15.285156 4.851562 14.582031 C 4.632812 13.875 4.519531 13.0625 4.519531 12.140625 C 4.519531 10.828125 4.949219 9.714844 5.804688 8.792969 C 5.402344 7.804688 5.441406 6.699219 5.917969 5.476562 C 6.234375 5.378906 6.699219 5.449219 7.316406 5.695312 C 7.933594 5.9375 8.386719 6.148438 8.675781 6.320312 C 8.960938 6.492188 9.191406 6.640625 9.363281 6.761719 C 10.375 6.476562 11.414062 6.335938 12.488281 6.335938 C 13.558594 6.335938 14.601562 6.476562 15.609375 6.761719 L 16.226562 6.371094 C 16.648438 6.109375 17.148438 5.871094 17.722656 5.652344 C 18.296875 5.4375 18.734375 5.378906 19.039062 5.476562 C 19.527344 6.699219 19.570312 7.804688 19.167969 8.792969 C 20.027344 9.714844 20.453125 10.832031 20.453125 12.140625 C 20.453125 13.0625 20.34375 13.878906 20.121094 14.589844 C 19.898438 15.296875 19.613281 15.867188 19.257812 16.296875 C 18.90625 16.722656 18.46875 17.085938 17.941406 17.375 C 17.417969 17.667969 16.90625 17.882812 16.414062 18.011719 C 15.921875 18.140625 15.363281 18.238281 14.746094 18.304688 C 15.3125 18.792969 15.59375 19.5625 15.59375 20.613281 L 15.59375 24.042969 C 15.59375 24.238281 15.660156 24.402344 15.796875 24.53125 C 15.929688 24.660156 16.144531 24.699219 16.4375 24.644531 C 18.953125 23.808594 21.003906 22.304688 22.59375 20.132812 C 24.179688 17.960938 24.972656 15.511719 24.972656 12.792969 C 24.972656 10.527344 24.414062 8.4375 23.300781 6.523438 Z M 23.300781 6.523438">
                          </svg>
                      </a>

                      <a href="//www.facebook.com/danwalt2000" class="iconMobileNav facebook" title="Facebook">
                          <svg style="width:35px;" viewBox="0 0 28.3 23">
                              <path d="M 23.515625 0 L 1.375 0 C 0.617188 0 0 0.613281 0 1.375 L 0 23.515625 C 0 24.277344 0.617188 24.890625 1.375 24.890625 L 13.292969 24.890625 L 13.292969 15.25 L 10.050781 15.25 L 10.050781 11.496094 L 13.292969 11.496094 L 13.292969 8.722656 C 13.292969 5.511719 15.257812 3.757812 18.125 3.757812 C 19.5 3.757812 20.679688 3.863281 21.023438 3.90625 L 21.023438 7.265625 L 19.035156 7.265625 C 17.472656 7.265625 17.171875 8.007812 17.171875 9.09375 L 17.171875 11.492188 L 20.894531 11.492188 L 20.40625 15.25 L 17.171875 15.25 L 17.171875 24.890625 L 23.515625 24.890625 C 24.273438 24.890625 24.890625 24.273438 24.890625 23.515625 L 24.890625 1.375 C 24.890625 0.613281 24.273438 0 23.515625 0 Z M 23.515625 0" />
                          </svg>
                          <!--[if lt IE 9]><em>Facebook</em><![endif]--></a>
                  </div>

                  <div class="index base">
                  </div>
              </nav>
          </div>
      </div>
      <label id="mobileNavBars" class="mobile-nav-toggle-label show-on-scroll-mobile" for="mobileNavToggle" onclick="">
          <div class="top-bar"></div>
          <div class="middle-bar"></div>
          <div class="bottom-bar"></div>
      </label>

      <nav class="navGrid">
          <ul class="menuList">
              <li class="a-nav-item">
                  <a class="menuBlockLink" href="index">
                      <div id="menuBlockSelected" class="menuBlock menuBlockFirst">
                          <div class="linkSummary"><span class="counterSpan">01.</span>
                              <header class="MenuHeader">Главная</header>
                              <p>Краткая информация.</p>
                          </div>
                          <?php if($underline == 1):?>
                          <hr class="menuHr">
                          <?php endif ?>
                      </div>
                  </a>
              </li>

              <li class="a-nav-item">
                  <a class="menuBlockLink" href="about">
                      <div class="menuBlock">
                          <div class="linkSummary"><span class="counterSpan">02.</span>
                              <header class="MenuHeader">Обо мне</header>
                              <p>Немного информации обо мне.</p>
                          </div>
                          <?php if($underline == 2):?>
                              <hr class="menuHr">
                          <?php endif ?>
                      </div>
                  </a>
              </li>

              <li class="a-nav-item">
                  <a class="menuBlockLink" href="portfolio">
                      <div class="menuBlock">
                          <div class="linkSummary"><span class="counterSpan">03.</span>
                              <header class="MenuHeader">Портфолио</header>
                              <p>Некоторые проекты, над которыми я работал.</p>
                          </div>
                          <?php if($underline == 3):?>
                              <hr class="menuHr">
                          <?php endif ?>
                      </div>
                  </a>
              </li>

              <li class="a-nav-item">
                  <a class="menuBlockLink" href="experience">
                      <div class="menuBlock">
                          <div class="linkSummary"><span class="counterSpan">04.</span>
                              <header class="MenuHeader">Опыт</header>
                              <p>Мои навыки и способности.</p>
                          </div>
                          <?php if($underline == 4):?>
                              <hr class="menuHr">
                          <?php endif ?>
                      </div>
                  </a>
              </li>

              <li class="a-nav-item">
                  <a class="menuBlockLink" href="blog.php">
                      <div class="menuBlock">
                          <div class="linkSummary"><span class="counterSpan">05.</span>
                              <header class="MenuHeader">Блог</p></header>
                              <p>Мои статьи о разработке и дизайне.</p>
                          </div>
                          <?php if($underline == 5):?>
                              <hr class="menuHr">
                          <?php endif ?>
                      </div>
                  </a>
              </li>
          </ul>

      </nav>

      <div class="menuFiller">
          <div class="paddingMy"></div>
      </div>

<!-- Конец header -->


<div class="headingIntro homeFV">
    <p>
        <em>Веб-дизайнер и </em>
    </p>
    <p>
        <strong id="mainHeroTitle">Разработчик</strong>
    </p>
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
            <div class="layout">

                <h1 class="introBlockHeading">Привет, меня зовут Виталий</h1>
                <div class="briefBackgroundBlock">
                    <div class="MyColSide">
                        <div class="My-block-image"></div>
                    </div>
                    <div class="MyCol2">
                        <div class="paddingMy">
                            <p class="homepageDescription">Я - веб-дизайнер и программист широкого профиля. Разрабатываю
                                быстрые, функциональные и красивые сайты, специализируюсь как на верстке, так и на
                                настройке серверной части сайтов и веб-приложений. Я считаю, что высококлассный
                                веб-дизайн должен быть чистым, простым, и привлекающим внимание пользователя.</p>
                        </div>
                    </div>
                    <div class="MyColSide">
                        <div class="My-block-image"></div>
                    </div>
                </div>

                <div class="hrContainer">
                    <hr class="hrHomePage1">
                </div>

                <h1 class="introBlockHeading">Что я могу Вам предложить</h1>
                <div class="myServices">

                    <div class="wrap cf text-c">
                        <div class="splitColumnsMy">

                            <svg id="Layer_1" class="icon icon-design large-icon" xml:space="preserve"
                                 enable-background="new 0 0 100 100" viewBox="0 0 100 100" height="100px" width="100px"
                                 y="0px" x="0px" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xmlns="http://www.w3.org/2000/svg">
                                    <path id="development1"
                                          d="M35.845,61.275l-10.72-5.09c-1.209-0.572-1.94-1.463-1.94-2.703v-0.318c0-1.24,0.731-2.131,1.94-2.704l10.72-5.089 c0.381-0.191,0.731-0.318,1.177-0.318c1.018-0.031,1.94,0.859,1.94,2.004c0,0.922-0.509,1.559-1.336,1.94l-9.606,4.294l9.606,4.295 c0.827,0.381,1.336,1.113,1.336,2.004c0,1.177-0.922,2.004-2.1,1.972C36.513,61.562,36.163,61.435,35.845,61.275z"
                                          stroke="#333333" stroke-width="1"></path>
                                <path id="development2"
                                      d="M41.889,66.047l12.438-25.988c0.35-0.731,0.922-1.113,1.686-1.113c1.018,0,1.876,0.859,1.876,1.813 c0,0.35-0.127,0.7-0.222,0.923L45.229,67.669c-0.35,0.731-0.922,1.113-1.686,1.113c-1.018,0-1.876-0.858-1.876-1.813 C41.667,66.619,41.793,66.27,41.889,66.047z"
                                      stroke="#333333" stroke-width="1"/>
                                <path id="development3"
                                      d="M64.155,45.371l10.72,5.089c1.208,0.573,1.94,1.464,1.94,2.704v0.318c0,1.24-0.731,2.131-1.94,2.703l-10.72,5.09 c-0.381,0.191-0.731,0.318-1.177,0.318c-1.018,0.031-1.94-0.859-1.94-2.004c0-0.923,0.509-1.559,1.336-1.94l9.606-4.295 l-9.606-4.294c-0.827-0.381-1.336-1.113-1.336-2.004c0-1.177,0.923-2.004,2.1-1.973C63.487,45.084,63.837,45.212,64.155,45.371z"
                                      stroke="#333333" stroke-width="1"/>
                                <path id="development4"
                                      d="M92.5,21c0-1.657-1.343-3-3-3h-80c-1.657,0-3,1.343-3,3v59c0,1.657,1.343,3,3,3h80c1.657,0,3-1.343,3-3V21z M26,20.833 c1.196,0,2.167,0.97,2.167,2.167s-0.97,2.167-2.167,2.167s-2.167-0.97-2.167-2.167S24.804,20.833,26,20.833z M20,20.833 c1.196,0,2.167,0.97,2.167,2.167s-0.97,2.167-2.167,2.167s-2.167-0.97-2.167-2.167S18.804,20.833,20,20.833z M14,20.833 c1.196,0,2.167,0.97,2.167,2.167s-0.97,2.167-2.167,2.167s-2.167-0.97-2.167-2.167S12.804,20.833,14,20.833z M88.5,79h-78V29h78V79z "
                                      stroke="#333333" stroke-width="1"/>
                                </svg>

                            <h2>Разработка</h2>
                            <p class="servicesParagraph">Прежде всего - я программист, дизайн - это мое хобби. Я
                                специализируюсь и на front-end, и на back-end разработке, пишу чистый и понятный код,
                                используя популярные библиотеки и фреймвёрки. В работе руководствуюсь принципом Стивена
                                Кинга: "Вторая версия написанного - это первая версия, минус 15%".</p>
                        </div>
                        <div class="splitColumnsMy">

                            <svg id="Layer_1" class="icon icon-design large-icon" xml:space="preserve"
                                 enable-background="new 0 0 100 100" viewBox="0 0 100 100" height="100px" width="100px"
                                 y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xmlns="http://www.w3.org/2000/svg" version="1.1">
                                    <path id="design1"
                                          d="M68.736,69.021c0-1.055,0-2.127,0-3.203H80.33h1.066c1.77,0,3.203-1.435,3.203-3.202V18.841v-1.067 c0-1.77-1.435-3.203-3.203-3.203H18.765c-1.771,0-3.203,1.434-3.203,3.203v1.067v43.775c0,1.769,1.433,3.202,3.203,3.202h1.067 h43.682c0,1.078,0,2.152,0,3.203h-4.447v1.066c0,0.59-0.478,1.067-1.068,1.067h-12.81c-0.592,0-1.068-0.479-1.068-1.067v-1.066H2.75 v2.135c0,0,0,3.203,3.203,3.203h57.561c0,1.717,0,3.199,0,4.291c0,6.798,0.327,14.35,2.938,14.35c2.61,0,2.284-6.797,2.284-14.35 c0-1.153,0-2.627,0-4.291h25.473c3.203,0,3.203-3.203,3.203-3.203v-2.135H68.736z M19.833,61.549V18.841H80.33v42.708H68.736 c0-2.98,0-5.742,0-7.824H69.7l-0.999-8.438c1.754-0.736,2.805-2.354,3.054-4.024c0.752-5.052-2.301-5.747-2.456-7.941 c-0.078-1.115,0.396-2.392,1.325-3.499c0.955-1.146,2.173-2.329,2.173-2.329s-3.371-0.092-5.286,0.532 c-3.391,1.108-6.577,4.299-7.399,7.845c-1.008,4.351-0.082,7.825,3.438,9.223l-1.022,8.634h0.988c0,2.084,0,4.852,0,7.823 L19.833,61.549L19.833,61.549z"
                                          stroke="#333333" stroke-width="1">
                                </svg>

                            <h2>Дизайн</h2>
                            <p class="servicesParagraph">
                                Веб-дизайн - это моя страсть. Я регулярно слежу за трендами в этой области и повышаю
                                квалификацию, внедряя в свою практику современные подходы к сайтостроению.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<!-- конец "промо"-раздела -->

<section class="grey-area process">
    <h2 class="main_heading animatezoomin">Процесс создания сайта</h2>

    <div class="gap-50"></div>
    <div class="container animatezoomin">
        <img class="img-responsive" src="content/scheme.png" alt="process">
    </div>
</section>

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

<h1 class="introBlockHeading">Уровень моих навыков</h1>
<div id="circleContainer">

    <div class="circleRow">

        <div class="top">

            <svg class="circleSvg" height="180" width="180">

                <circle id="circle1" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
                </g>
                <text id="text1" x="63" y="100" fill="#fff" font-family="Verdana" font-size="28">100</text>
            </svg>
            <span class="skillSpan">HTML 5</span>

        </div>
        <div class=" top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle2" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
                </g>
                <text id="text2" x="63" y="100" fill="#fff" font-family="Verdana" font-size="28">100</text>
            </svg>
            <span class="skillSpan">CSS 3</span>
        </div>
        <div class=" top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle3" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
                </g>
                <text id="text3" x="70" y="100" fill="#fff" font-family="Verdana" font-size="28">80</text>
            </svg>
            <span class="skillSpan">PHP</span>
        </div>

        <div class=" top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle4" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
                </g>
                <text id="text4" x="70" y="100" fill="#fff" font-family="Verdana" font-size="28">75</text>
            </svg>

            <span class="skillSpan">Javascript</span>
        </div>

        <div class="top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle5" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
                </g>
                <text id="text5" x="70" y="100" fill="#fff" font-family="Verdana" font-size="28">80</text>
            </svg>

            <span class="skillSpan">SQL</span>

        </div>

        <div class="top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle6" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
                </g>
                <text id="text6" x="70" y="100" fill="#fff" font-family="Verdana" font-size="28">80</text>
            </svg>

            <span class="skillSpan">JQUERY</span>

        </div>

    </div>
    <!-- конец ряда кругов -->

</div>
<!-- конец контейнера кругов № 1 -->

<!-- Smaller circles hidden row -->
<div id="circleContainer2">
    <div class="circleRow" id="circleRow3">

        <div class="top">

            <svg class="circleSvg" height="180" width="180">

                <circle id="circle13" class="circleAnimate" cx="-40" cy="40" r="58" style="stroke-dashoffset:430px;" stroke-dasharray="850" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(35,50) rotate(-90)" />
                </g>
                <text id="text13" x="63" y="100" fill="#fff" font-family="Verdana" font-size="28">100</text>
            </svg>
            <span class="skillSpan">HTML 5</span>

        </div>
        <div class=" top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle14" class="circleAnimate" cx="-40" cy="40" r="58" style="stroke-dashoffset:430px;" stroke-dasharray="850" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(35,50) rotate(-90)" />
                </g>
                <text id="text14" x="63" y="100" fill="#fff" font-family="Verdana" font-size="28">100</text>
            </svg>
            <span class="skillSpan">CSS 3</span>
        </div>
        <div class=" top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle15" class="circleAnimate" cx="-40" cy="40" r="58" style="stroke-dashoffset:430px;" stroke-dasharray="780" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(35,50) rotate(-90)" />
                </g>
                <text id="text15" x="60" y="100" fill="#fff" font-family="Verdana" font-size="28">85</text>
            </svg>
            <span class="skillSpan">Javascript</span>
        </div>

        <div class=" top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle16" class="circleAnimate" cx="-40" cy="40" r="58" style="stroke-dashoffset:430px;" stroke-dasharray="760" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(35,50) rotate(-90)" />
                </g>
                <text id="text16" x="60" y="100" fill="#fff" font-family="Verdana" font-size="28">90</text>
            </svg>

            <span class="skillSpan">PHP</span>
        </div>

        <div class="top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle17" class="circleAnimate" cx="-40" cy="40" r="58" style="stroke-dashoffset:430px;" stroke-dasharray="735" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(35,50) rotate(-90)" />
                </g>
                <text id="text17" x="60" y="100" fill="#fff" font-family="Verdana" font-size="28">80</text>
            </svg>

            <span class="skillSpan">SQL</span>

        </div>

        <div class="top">

            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

                <circle id="circle18" class="circleAnimate" cx="-40" cy="40" r="58" style="stroke-dashoffset:430px;" stroke-dasharray="735" stroke-width="8px" stroke="#16ADA1" fill="#2FD6CA" stroke-dashoffset="60" transform="translate(35,50) rotate(-90)" />
                </g>
                <text id="text18" x="60" y="100" fill="#fff" font-family="Verdana" font-size="28">80</text>
            </svg>

            <span class="skillSpan">SQL</span>

        </div>

    </div>
    <!-- конец контейнера навыков -->
</div>
<!-- конец внешнего контейнера навыков -->

<!-- контейнер скрытого ряда -->
<div class="circleRow hidden" id="circleRow2">
    <div class="top">

        <svg class="circleSvg" height="180" width="180">

            <circle id="circle7" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#333333" fill="#595959" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
            </g>
            <text id="text7" x="70" y="100" fill="#fff" font-family="Verdana" font-size="28">60</text>
        </svg>
        <span class="skillSpan">GULP</span>

    </div>
    <div class=" top">

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

            <circle id="circle8" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#333333" fill="#595959" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
            </g>
            <text id="text8" x="70" y="100" fill="#fff" font-family="Verdana" font-size="28">80</text>
        </svg>
        <span class="skillSpan">VueJS</span>
    </div>
    <div class=" top">

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

            <circle id="circle9" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#333333" fill="#595959" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
            </g>
            <text id="text9" x="70" y="100" fill="#fff" font-family="Verdana" font-size="28">90</text>
        </svg>
        <span class="skillSpan">Git & Bash</span>
    </div>

    <div class=" top">

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

            <circle id="circle10" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#333333" fill="#595959" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
            </g>
            <text id="text10" x="70" y="100" fill="#fff" font-family="Verdana" font-size="28">90</text>
        </svg>

        <span class="skillSpan">Photoshop</span>
    </div>

    <div class="top">

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

            <circle id="circle11" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#333333" fill="#595959" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
            </g>
            <text id="text11" x="63" y="100" fill="#fff" font-family="Verdana" font-size="28">100</text>
        </svg>

        <span class="skillSpan">Bootstrap</span>

    </div>

    <div class="top">

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="circleSvg" height="180" width="180">

            <circle id="circle12" class="circleAnimate" cx="-40" cy="40" r="68" style="stroke-dashoffset:430px;" stroke-dasharray="430" stroke-width="8px" stroke="#333333" fill="#595959" stroke-dashoffset="60" transform="translate(50,50) rotate(-90)" />
            </g>
            <text id="text12" x="70" y="100" fill="#fff" font-family="Verdana" font-size="28">70</text>
        </svg>

        <span class="skillSpan">Sass</span>

    </div>

</div>
<!-- конец маленького скрытого контейнера -->

<div class="buttonBlock" id="moreSkillsButton">
    <div>
        <div style="text-align:center">
            <a class="buttonBlockElement">Посмотреть больше навыков</a>
        </div>
    </div>
</div>

            <!-- Раздел постов -->

            <div class="hrContainer">
                <hr class="hrHomePage5">
            </div>

            <h1 class="introBlockHeading" style="padding-bottom:0;">Последние статьи</h1>
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

                            <span class="entry-comments-link">

</span>
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

    </div>
</div>
           
           
           <footer id="footer">
               <div  class="footer-inner">
                 <div id="footerBlocks">
                    <div id="footerBlock1" class="fade-in-selector">
                      <h2 id="contacts">КОНТАКТЫ</h2>
                      <div>
                          <nav class="socialIconsNav">
                             <ul class="soc">
                               <li>
                                 <div class="inner_wrapper_social">
                                   <a  class="icon-26 twitter" title="Skype"><svg style="width:30px;" viewBox="0 0 26 26"><path d="M 25.089844 15.714844 C 25.277344 14.882813 25.371094 14.019531 25.371094 13.132813 C 25.371094 6.5 19.894531 1.121094 13.136719 1.121094 C 12.425781 1.121094 11.726563 1.183594 11.042969 1.296875 C 9.949219 0.621094 8.65625 0.230469 7.269531 0.230469 C 3.351563 0.230469 0.175781 3.347656 0.175781 7.195313 C 0.175781 8.480469 0.527344 9.683594 1.152344 10.71875 C 0.988281 11.5 0.902344 12.308594 0.902344 13.132813 C 0.902344 19.769531 6.378906 25.148438 13.136719 25.148438 C 13.902344 25.148438 14.652344 25.078125 15.378906 24.945313 C 16.375 25.472656 17.519531 25.773438 18.734375 25.773438 C 22.652344 25.773438 25.828125 22.65625 25.828125 18.808594 C 25.824219 17.695313 25.5625 16.644531 25.089844 15.714844 Z M 19.410156 18.875 C 18.847656 19.660156 18.011719 20.285156 16.925781 20.726563 C 15.855469 21.164063 14.566406 21.386719 13.105469 21.386719 C 11.347656 21.386719 9.871094 21.085938 8.722656 20.484375 C 7.902344 20.050781 7.222656 19.457031 6.710938 18.730469 C 6.1875 17.996094 5.925781 17.265625 5.925781 16.558594 C 5.925781 16.121094 6.097656 15.738281 6.433594 15.425781 C 6.769531 15.113281 7.199219 14.960938 7.710938 14.960938 C 8.132813 14.960938 8.492188 15.082031 8.789063 15.324219 C 9.070313 15.558594 9.3125 15.90625 9.507813 16.355469 C 9.722656 16.84375 9.960938 17.253906 10.210938 17.578125 C 10.449219 17.890625 10.796875 18.152344 11.234375 18.355469 C 11.679688 18.5625 12.277344 18.667969 13.011719 18.667969 C 14.023438 18.667969 14.851563 18.457031 15.476563 18.039063 C 16.085938 17.632813 16.382813 17.140625 16.382813 16.539063 C 16.382813 16.0625 16.226563 15.691406 15.910156 15.398438 C 15.578125 15.09375 15.136719 14.855469 14.605469 14.691406 C 14.046875 14.523438 13.289063 14.339844 12.359375 14.144531 C 11.089844 13.878906 10.011719 13.5625 9.152344 13.203125 C 8.273438 12.839844 7.566406 12.328125 7.050781 11.695313 C 6.523438 11.050781 6.261719 10.238281 6.261719 9.285156 C 6.261719 8.378906 6.539063 7.558594 7.09375 6.855469 C 7.636719 6.15625 8.4375 5.609375 9.46875 5.234375 C 10.480469 4.867188 11.691406 4.679688 13.054688 4.679688 C 14.148438 4.679688 15.109375 4.804688 15.910156 5.050781 C 16.71875 5.296875 17.398438 5.628906 17.933594 6.039063 C 18.472656 6.453125 18.871094 6.894531 19.121094 7.351563 C 19.375 7.816406 19.503906 8.277344 19.503906 8.722656 C 19.503906 9.152344 19.335938 9.539063 19.003906 9.882813 C 18.667969 10.222656 18.242188 10.394531 17.746094 10.394531 C 17.292969 10.394531 16.9375 10.289063 16.691406 10.074219 C 16.460938 9.875 16.222656 9.566406 15.960938 9.121094 C 15.65625 8.550781 15.285156 8.101563 14.863281 7.785156 C 14.453125 7.480469 13.761719 7.324219 12.820313 7.324219 C 11.941406 7.324219 11.230469 7.496094 10.699219 7.835938 C 10.1875 8.164063 9.941406 8.542969 9.941406 8.988281 C 9.941406 9.261719 10.019531 9.492188 10.183594 9.6875 C 10.359375 9.894531 10.605469 10.078125 10.914063 10.230469 C 11.238281 10.390625 11.566406 10.515625 11.898438 10.605469 C 12.238281 10.699219 12.808594 10.835938 13.59375 11.015625 C 14.582031 11.222656 15.492188 11.453125 16.296875 11.707031 C 17.109375 11.964844 17.816406 12.277344 18.390625 12.644531 C 18.976563 13.019531 19.441406 13.5 19.769531 14.074219 C 20.101563 14.652344 20.265625 15.363281 20.265625 16.191406 C 20.269531 17.183594 19.980469 18.085938 19.410156 18.875 Z"/></svg><!--[if lt IE 9]><em>Facebook</em><![endif]--></a>
                                 </div>
                                 <p >avanposter</p>
                               </li>
                               <li>
                                 <div class="inner_wrapper_social">
                                   <a class="icon-26 twitter" title="Mail"><svg style="width:30px;" viewBox="0 0 26 26"><path d="M12 .02c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.99 6.98l-6.99 5.666-6.991-5.666h13.981zm.01 10h-14v-8.505l7 5.673 7-5.672v8.504z"/></svg><!--[if lt IE 9]><em>Напишите</em><![endif]--></a>
                                 </div>
                                 <p>danwalt@mail.ru</p>
                               </li>
                               <li>
                                 <div class="inner_wrapper_social">
                                   <a  class="icon-26 twitter" title="Skype"><svg style="width:30px;" viewBox="0 0 26 26"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3.445 17.827c-3.684 1.684-9.401-9.43-5.8-11.308l1.053-.519 1.746 3.409-1.042.513c-1.095.587 1.185 5.04 2.305 4.497l1.032-.505 1.76 3.397-1.054.516z"/></svg><!--[if lt IE 9]><em>Позвоните</em><![endif]--></a>
                                 </div>
                                 <p>+380668809884</p>
                               </li>
                             </ul>                            
                          </nav>
                      </div>
                   </div>
                   <!--конец блока 1 футера -->
                   
                      <div style="height: 80px;" id="footerBlock2"  class="fade-in-selector">
                        <div style="cursor:auto;outline:medium none">
                          <h3 class="text-align-center">
                            <a href="index">ГЛАВНАЯ &nbsp;  </a>
                            <a href="about">ОБО МНЕ &nbsp;</a>
                            <a href="portfolio">МОИ РАБОТЫ &nbsp;</a>
                            <a href="experience">ОПЫТ &nbsp;</a>
                            <a href="blog.php">БЛОГ &nbsp;</a>
                        </h3>
                        <p class="text-align-center copyright">© 2019-<script>document.write(new Date().getFullYear());</script> Портфолио веб-разработчика.</p>
                      </div>
                     </div>
                   <!--конец блока 2 футера -->
                        
                      <div style="height: 50px;" id="footerBlock3"  class="fade-in-selector">
                          <nav class="socialIconsNav">
                             <ul class="soc">
                               <li><a href="//github.com/danwalt2000" class="icon-15 instagram" title="Мой профиль в GitHub"><svg style="width:30px;" viewBox="0 0 24.8 23"><path d="M 23.300781 6.523438 C 22.183594 4.613281 20.667969 3.097656 18.753906 1.980469 C 16.839844 0.863281 14.753906 0.304688 12.488281 0.304688 C 10.222656 0.304688 8.132812 0.863281 6.21875 1.980469 C 4.304688 3.097656 2.792969 4.613281 1.675781 6.523438 C 0.558594 8.4375 0 10.527344 0 12.792969 C 0 15.511719 0.792969 17.960938 2.382812 20.132812 C 3.96875 22.304688 6.019531 23.808594 8.535156 24.644531 C 8.828125 24.699219 9.046875 24.660156 9.1875 24.53125 C 9.328125 24.402344 9.398438 24.238281 9.398438 24.042969 C 9.398438 24.011719 9.394531 23.71875 9.390625 23.164062 C 9.382812 22.613281 9.382812 22.128906 9.382812 21.71875 L 9.007812 21.785156 C 8.769531 21.828125 8.46875 21.84375 8.105469 21.839844 C 7.742188 21.835938 7.363281 21.796875 6.976562 21.726562 C 6.585938 21.65625 6.222656 21.492188 5.886719 21.238281 C 5.550781 20.984375 5.3125 20.652344 5.171875 20.238281 L 5.007812 19.867188 C 4.898438 19.617188 4.730469 19.339844 4.496094 19.035156 C 4.261719 18.734375 4.027344 18.527344 3.789062 18.417969 L 3.675781 18.335938 C 3.597656 18.28125 3.527344 18.21875 3.464844 18.140625 C 3.398438 18.066406 3.347656 17.988281 3.316406 17.914062 C 3.285156 17.839844 3.3125 17.777344 3.398438 17.726562 C 3.484375 17.679688 3.640625 17.652344 3.871094 17.652344 L 4.195312 17.703125 C 4.410156 17.746094 4.679688 17.875 5 18.09375 C 5.320312 18.308594 5.582031 18.589844 5.789062 18.9375 C 6.039062 19.382812 6.339844 19.722656 6.691406 19.953125 C 7.042969 20.1875 7.398438 20.304688 7.753906 20.304688 C 8.113281 20.304688 8.421875 20.277344 8.683594 20.222656 C 8.941406 20.167969 9.1875 20.085938 9.414062 19.980469 C 9.511719 19.253906 9.777344 18.695312 10.210938 18.304688 C 9.59375 18.238281 9.035156 18.140625 8.542969 18.011719 C 8.050781 17.882812 7.542969 17.667969 7.015625 17.375 C 6.488281 17.085938 6.054688 16.722656 5.707031 16.289062 C 5.359375 15.855469 5.074219 15.285156 4.851562 14.582031 C 4.632812 13.875 4.519531 13.0625 4.519531 12.140625 C 4.519531 10.828125 4.949219 9.714844 5.804688 8.792969 C 5.402344 7.804688 5.441406 6.699219 5.917969 5.476562 C 6.234375 5.378906 6.699219 5.449219 7.316406 5.695312 C 7.933594 5.9375 8.386719 6.148438 8.675781 6.320312 C 8.960938 6.492188 9.191406 6.640625 9.363281 6.761719 C 10.375 6.476562 11.414062 6.335938 12.488281 6.335938 C 13.558594 6.335938 14.601562 6.476562 15.609375 6.761719 L 16.226562 6.371094 C 16.648438 6.109375 17.148438 5.871094 17.722656 5.652344 C 18.296875 5.4375 18.734375 5.378906 19.039062 5.476562 C 19.527344 6.699219 19.570312 7.804688 19.167969 8.792969 C 20.027344 9.714844 20.453125 10.832031 20.453125 12.140625 C 20.453125 13.0625 20.34375 13.878906 20.121094 14.589844 C 19.898438 15.296875 19.613281 15.867188 19.257812 16.296875 C 18.90625 16.722656 18.46875 17.085938 17.941406 17.375 C 17.417969 17.667969 16.90625 17.882812 16.414062 18.011719 C 15.921875 18.140625 15.363281 18.238281 14.746094 18.304688 C 15.3125 18.792969 15.59375 19.5625 15.59375 20.613281 L 15.59375 24.042969 C 15.59375 24.238281 15.660156 24.402344 15.796875 24.53125 C 15.929688 24.660156 16.144531 24.699219 16.4375 24.644531 C 18.953125 23.808594 21.003906 22.304688 22.59375 20.132812 C 24.179688 17.960938 24.972656 15.511719 24.972656 12.792969 C 24.972656 10.527344 24.414062 8.4375 23.300781 6.523438 Z M 23.300781 6.523438"/></svg><!--[if lt IE 9]><em>Github</em><![endif]--></a></li>
                               <li><a href="//www.facebook.com/danwalt2000" class="icon-10 facebook" title="Мой профиль в Фейсбуке"><svg style="width:30px;" viewBox="0 0 512 512"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"/></svg><!--[if lt IE 9]><em>Facebook</em><![endif]--></a></li>
                               <li><a href="//www.linkedin.com/in/vitalii-pozdniakov-aa3b791b3/" class="icon-17 linkedin" title="Мой профиль ЛинкедИн"><svg style="width:30px;" viewBox="0 0 512 512"><path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"></path></svg><!--[if lt IE 9]><em>Cart</em><![endif]--></a></li>
                             </ul>                            
                          </nav>
                     </div>
                   <!--конец блока 3 футера -->
                   
               </div>  <!-- конец footer-inner -->               
           </footer>
       </div> <!-- end of site wrapper -->
    </body>
</html>
