@extends('parts.base')
 
@section('title', "Интернет-магазин на Вордпрессе")
@section('description', "Небольшой интернет-магазин торгового и кассового оборудования на Wordpress")
@section('addition')

<script src="/scripts/jquery2.14.js"></script>
  
<script src="/scripts/swiperbox.js"></script>

@endsection

@section('main')
<div class="headingIntro">
    <h1>
        <em>Интернет-магазин</em>
        <strong id="mainHeroTitle">ЧП "Инфотех"</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => "novozarievka", 'next' => "mebel"])

            <div class="MyMultiDeviceImages">
                <img src="/content/infotech-wall.jpg" alt="ЧП 'Инфотех'"/>
            </div>

        <div class="project-details" style="box-sizing:border-box;">
            <div class="project-details-primary">
                <h2>Описание проекта</h2>
                <div class="project-details-intro">
                    <p>Написанный под CMS Wordpress сайт с индивидуальным адаптивным дизайном и поддержкой WooCommerce позволяет комфортно вести небольшой магазин до 1000 товаров. </p>
                </div>
                <p>Поскольку сильной стороной Wordpress является администрирование блога, написание статей для сайта превращается в легкую и непринужденную работу.
                    Одним нажатием мышки адмимистратор может добавлять в свой блог сложные графические элементы: карусели, джамботроны, баннеры, контактные формы.</p>
                <p>И не только.</p>
                <p> В тело статьи всегда можно вставить HTML-код, стилизоровав статью под индивидуальные нужды.
                    Последние версии Wordpress поддерживают CSS и JS прямо внутри HTML-блока в редакторе статьи, что позволяет верстать страницу из админки, не переходя к другим файлам сайта (хотя с точки зрения программирования - это плохая практика).  </p>

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
                        <li>Подключение WooCommerce</li>
                        <li>Индивидуальные скрипты и плагины</li>
                        <li>Администрирование backend</li>
                    </ul>

                    <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                        <div style="outline: medium none;cursor:auto">
                            <h2>Использованные технологии</h2>
                            <ul><li>HTML5, JQuery, Ajax, PHP, Wordpress</li></ul>
                        </div>
                    </div>

                    <a id="gallery" class="buttonBlockElement" href="#">Посмотреть скриншот</a>
                    
                </div>
            </div>
        </div>
    </div>
</main>
<script>
$( '#gallery' ).click( function( e ) {
	e.preventDefault();
	$.swipebox( [
		// { href:'/content/screenshots/infotech.jpg', title:'My Caption' }, 
		{ href:'/content/screenshots/infotech.png', title:'Интернет-магазин Инфотех' }
	] );
} );
</script>
@stop