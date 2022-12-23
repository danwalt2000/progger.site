@extends('parts.base')
 

@section('title', "Игра пятнашки на чистом JS")
@section('description', "Простой и понятный скрипт игры пятнашки, написанный без использования сторонних библиотек")
@section('addition')
    <link href="/style/15.css" rel="stylesheet" type="text/css">
@endsection

@section('main')
<div class="headingIntro">
    <h1>
        <em>Игра</em>
        <strong id="mainHeroTitle">Пятнашки</strong>
    </h1>
</header>
</header>
<main id="page">
    <div id="content">
        <div class="page-content projectOverViewWide" >
            @include('parts.projects-nav', ['prev' => $prev, 'next' => $next])
      
                <div class="MyMultiDeviceImages">
                 <div class="wrap15">
                    <div class="row">
                     <table class="table-bordered" onselectstart="return false" onmousedown="return false">
                        <tbody>
                        <tr>
                            <td class="p-3" id="0"></td>
                            <td class="p-3" id="1"></td>
                            <td class="p-3" id="2"></td>
                            <td class="p-3" id="3"></td>
                        </tr>
                        <tr>
                            <td class="p-3" id="4"></td>
                            <td class="p-3" id="5"></td>
                            <td class="p-3" id="6"></td>
                            <td class="p-3" id="7"></td>
                        </tr>
                        <tr>
                            <td class="p-3" id="8"></td>
                            <td class="p-3" id="9"></td>
                            <td class="p-3" id="10"></td>
                            <td class="p-3" id="11"></td>
                        </tr>
                        <tr>
                            <td class="p-3" id="12"></td>
                            <td class="p-3" id="13"></td>
                            <td class="p-3" id="14"></td>
                            <td class="p-3" id="15"></td>
                        </tr>

                        </tbody>

                     </table>
                        {{-- <div class="records">

                            <h2>Рекордсмены</h2> --}}

                                <?php
                                // $i = 0;
                                //   while ($result1 = mysqli_fetch_array($sql)) {
                                //     $i++;
                                //       if($i % 2){
                                //           $color = "lightgrey";
                                //       } else{
                                //           $color = "none";
                                //       }
                                //    echo "<div class='rec-table' style='background: {$color}'>{$i}. {$result1['name']}: {$result1['score']} {$resultScore}</div>";
                                //   }
                                  ?>

                        {{-- </div> --}}
                    </div>
                
                     <div class="refresh">
                        <div class="count"><p>Счетчик ходов:&nbsp; <div id="counter">0</div>
                            </p></div>
                         <a onclick="window.location.reload();" id="asBut" data-title="Сброс"></a>
                     </div>
                    
                     <form id="myModal" class="modal" method="post">

                         <!-- Modal content -->
                         <div class="modal-content">
                             <div class="modal-header">
                                 <span class="close">&times;</span>
                                 <h2>Поздравляю!</h2>
                             </div>
                             <div class="modal-body">
                                 <input type="text" name='winName' id='winName' placeholder="Введите имя" minlength="3" maxlength="20" required>
                             </div>
                             <div class="but_wrap">
                                 <div class="red__but__wrap">
                                     <button id="closeModalWin" type="reset">Отмена</button>
                                 </div>
                                 <div class="green__but__wrap">
                                     <button id="winSub" type="submit" name="score">Подтвердить</button>
                                 </div>
                             </div>
                         </div>

                     </form>

                 </div>






                </div>

                <!-- Описание проекта -->


                <div class="project-details" style="box-sizing:border-box;">
                    <div class="project-details-primary">
                        <h2>Описание проекта</h2>
                        <div class="project-details-intro">
                            <p>Популярная головоломка, придуманная в 1878 году Ноем Чепмэном. Представляет собой набор одинаковых квадратных костяшек с нанесёнными числами, заключённых в квадратную коробку. Длина стороны коробки в четыре раза больше длины стороны костяшек для набора из 15 элементов, соответственно в коробке остаётся незаполненным одно квадратное поле. Цель игры — перемещая костяшки по коробке, добиться упорядочивания их по номерам, желательно сделав как можно меньше перемещений. </p>
                        </div>
                        <p>Я написал эту игру без использования сторонних библиотек с помьщью одного лишь DOM API. Я считаю, что понимание работы чистого DOM API - это основа,
                            без которой переключаться на фреймворки нельзя. </p>

                    </div>
                    <div class="project-details-secondary">
                        <div class="project-details-block project-details-sector">
                            <h2>Тип проекта</h2>
                            Браузерная игра
                        </div>
                        <div class="project-details-block">
                            <h2>Что я написал</h2>
                            <ul>
                                <li>Внешний вид</li>
                                <li>Движок игры</li>
                                <li>Система подсчета ходов</li>
                                <li>Интеграция с базой данных для публикации рекордсменов</li>
                            </ul>

                            <div class="textParagraph" style='text-align:left;padding-left:0; padding-right:0;padding-top:0'>
                                <div style="outline: medium none;cursor:auto">
                                    <h2>Примененные технологии</h2>
                                    <ul><li>HTML5, CSS3/SASS, Javascript</li></ul>
                                </div>
                            </div>

                            <a class="buttonBlockElement" href="/blog/15-article">Подробнее</a>
                        </div>
                    </div>
                </div>



                <script>

                </script>

                <!-- конец описания проекта -->

                <script>
                    const docStyle = document.documentElement.style;
                    const aElem = document.querySelector('#asBut');
                    const boundingClientRect = aElem.getBoundingClientRect();

                    aElem.onmousemove = function(e) {

                        const x = e.clientX - boundingClientRect.left;
                        const y = e.clientY - boundingClientRect.top;

                        const xc = boundingClientRect.width/2;
                        const yc = boundingClientRect.height/2;

                        const dx = x - xc;
                        const dy = y - yc;

                        docStyle.setProperty('--rx', `${ dy/-30 }deg`);
                        docStyle.setProperty('--ry', `${ dx/5 }deg`)

                    }

                    aElem.onmouseleave = function(e) {

                        docStyle.setProperty('--ty', '0');
                        docStyle.setProperty('--rx', '0');
                        docStyle.setProperty('--ry', '0');

                    }

                    aElem.onmousedown = function(e) {

                        docStyle.setProperty('--tz', '-25px');

                    }

                    document.body.onmouseup = function(e) {

                        docStyle.setProperty('--tz', '-12px');

                    }
                 </script>
                <script>
                    var modal = document.getElementById("myModal");
                    var btn = document.getElementById("myBtn");
                    var span = document.getElementsByClassName("close")[0];
                    var closeModalWin = document.getElementById('closeModalWin');
                    var showModalWin = function() {
                        modal.style.display = "block";
                    }

                    span.onclick = function() {
                        modal.style.display = "none";
                    }
                    closeModalWin.onclick = function() {
                        modal.style.display = "none";
                    }

                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>

                <script src="/scripts/game15.js" type="text/javascript"></script>
    </main>

@stop