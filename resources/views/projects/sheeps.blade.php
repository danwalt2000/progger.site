@extends('parts.base')
 
@section('title', "Игра Волк и овцы")
@section('description', "Легкая браузерная игра, написанная на JS")
@section('addition')
    <link href="/Game_Sheeps/style/style.css" rel="stylesheet" type="text/css">
@endsection

@section('main')
<div class="headingIntro">
    <h1>
        <em>Игра</em>
        <strong id="mainHeroTitle">Волк и овцы</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => "15", 'next' => "provence"])
        <div class="mobile__only">
            <h2>Извините, на экранах шириной ниже 600 dpi игра не может быть отображена.<br>
            Я работаю над этим, а пока, если Ваш браузер поддерживает функцию "полная версия сайта" попробуйте воспользоваться ею.</h2>
        </div>
         <section class="wrap__sheeps">
             <div class="relative">
                <canvas id='example'>Обновите браузер</canvas>

                <img id="wolf" width="35" height="35" src="/Game_Sheeps/images/wolf.png"/>
                <img class="sheep" id="sheep_0" width="35" height="35" src="/Game_Sheeps/images/sheep.png"/>
                <img class="sheep" id="sheep_1" width="35" height="35" src="/Game_Sheeps/images/sheep.png"/>
                <img class="sheep" id="sheep_2" width="35" height="35" src="/Game_Sheeps/images/sheep.png"/>
                <img class="sheep" id="sheep_3" width="35" height="35" src="/Game_Sheeps/images/sheep.png"/
             </div>
             <div class="rules" id="rule">
                <h2>Правила игры</h2>
                <p>Волку нужно добраться до нижнего поля.</p>
                <p>Овцам нужно окружить волка, то есть, сделать так, чтобы у волка не осталось ходов.</p>
                <p>Для того, чтобы совершить ход - нажмите на фигуру: появятся доступные ходы.</p>
                <p>Выберите один из появившихся элементов и фигура переместится на его клетку. </p>
               <button class="refresh" onclick="window.location.reload();">Сброс</button>
          </div>
        </section>

                <div class="project-details" style="box-sizing:border-box;">
                    <div class="project-details-primary">
                        <h2> {{ __('strings.proj_desc') }}</h2>
                        <div class="project-details-intro">
                            <p>"Волк и овцы" (в некоторых источниках игра называется "Овца и волки") - традиционная настольная шашечная игра для двух игроков. </p>
                        </div>
                        <p> В распоряжении первого игрока находится один волк, в распоряжении второго - четыре овцы. При этом действие игры происходит на обычной шахматно-шашечной доске.</p>
                        <p> Овцы ходят как шашки, по диагонали на одну клетку и только вперед. Волк имеет право также ходить назад.
                            Цель волка - прорваться на первую линию, а цель овец - не дать ему этого сделать. Правильная стратегия волка - агрессивность. </p>
                        <p> Он (как ни странно!) должен сразу же действовать резко, буквально нападать на овец, стремясь разрушить их ровную цепочку, прорвать их оборону, внести дисгармонию в их ряды.</p>
                        <p> К сожалению, при правильной игре овец у волка нет шансов на победу. </p>
                        <p> Я написал эту игру при помощи Javascript и библиотеки jQuery. </p>

                    </div>
                    <div class="project-details-secondary">
                        <div class="project-details-block project-details-sector">
                            <h2> {{ __('strings.proj_type') }}</h2>
                            Браузерная игра
                        </div>
                        <div class="project-details-block">
                            <h2>Что я написал</h2>
                            <ul>
                                <li>Внешний вид</li>
                                <li>Движок и логика игры</li>
                                <li>Система просчета координат фигуры</li>
                                <li>Система поиска потенциальных ходов и отсечения невозможных</li>
                            </ul>

                            <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                                <div style="outline: medium none;cursor:auto">
                                    <h2>Примененные технологии</h2>
                                    <ul><li>HTML5, CSS3, Javascript, jQuery, Canvas</li></ul>
                                </div>
                            </div>

                            <a class="buttonBlockElement" href="/blog/15-article">Статья о создании игр</a>
                        </div>
                    </div>
                </div>



                <script>

                </script>

                <!-- конец описания проекта -->
                <script src="/Game_Sheeps/scripts/jquery.js" type="text/javascript"></script>
                <script src="/Game_Sheeps/scripts/canvas.js" type="text/javascript"></script>
                <script src="/Game_Sheeps/scripts/main.js" type="text/javascript"></script>
    </main>

@stop