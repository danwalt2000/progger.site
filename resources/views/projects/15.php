<?php
$title = "Игра пятнашки на чистом JS";
$description = "Простой и понятный скрипт игры пятнашки, написанный без использования сторонних библиотек";
$underline = 3;
?>

<?php include "./head.php"; ?>
<?php include "./functions/connection.php"; ?>
<?php

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query = "SELECT * FROM rec ORDER BY score LIMIT 10";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$queryScore = "SELECT score FROM rec LIMIT 10 ORDER BY ASC";
$resultScore = mysqli_query($link, $queryScore);

$sql = mysqli_query($link, $query);


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST["winName"]);
    $score = $_POST["score"];
    if (isset($username)) {
        $quer = "INSERT INTO rec (name, score) VALUES('$username', '$score')";
        mysqli_query($link, $quer) or die("Ошибка " . mysqli_error($link));
        echo "<meta http-equiv='refresh' content='0'>";
        header("Refresh: 0");
    } else {
        $feedback = $validation_error;
    }

}
mysqli_close($link);

?>
            <div class="headingIntro">
                <p>
                    <em>Игра</em>
                </p>
                <p>
                    <strong id="mainHeroTitle">Пятнашки</strong>
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
                                    <a href="bustravel"></a>
                                </div>


                                <a href="portfolio" style="
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
                                    <a href="sheeps"></a>
                                </div>

                            </nav>
                        </div>

                    </div>

                </div>
                <div class="hrContainer" style="margin-top:0;
                    margin-bottom:30px;">
                </div>



                <div class="MyMultiDeviceImages">

                    <style>
                        .wrap15{
                            width: 100%;
                            height: 100%;
                        }
                        td {
                            border: lightgrey solid;
                            background: url('content/woodTd.jpg');
                        }

                        .table-bordered {
                            border: black;
                            padding: 5px;
                            background: url("content/woodBack.jpg");
                            display: inline-block;
                            position: relative;

                        }
                        .row{
                            display: flex;
                            margin-bottom: 20px;
                        }
                        .row table, .row div{
                            margin: 0 auto;
                        }
                        .row h1{
                            margin-top: 0;
                        }
                        .records table{
                            display: block;
                            max-width: 300px;
                            border-collapse: collapse; /* Убираем двойные линии между ячейками */
                        }
                        .records table th, .row .records table td{
                            padding: 1px; /* Поля вокруг содержимого таблицы */
                            border: 1px solid black; /* Параметры рамки */
                            text-align: center;
                        }
                        .p-3 {
                            border-radius: 10%;
                            color: floralwhite;
                            font-family: sans-serif;
                            font-size: 300%;
                            text-align: center;
                            width: 100px;
                            height: 90px;
                            margin: 0;
                            padding: 0;
                            min-width: 80px;
                        }

                        .p-3:hover {
                            border: saddlebrown solid ;
                            cursor: pointer;
                        }

                        .count {
                            color: floralwhite;
                            width: 100%;
                            margin: 30px auto;
                            position: relative;

                            background: url("content/woodBack.jpg");
                            text-align: center;
                            font-size: 20px;
                        }


                            .refresh {
                            margin-left: auto;
                            margin-right: auto;
                        }

                        .rec-table{
                            border: solid;
                            border-collapse: collapse;
                            text-align: left;
                        }
                        .refresh a {
                            position: relative;
                            display: inline-block;
                            padding: 1.2em 2em;
                            text-decoration: none;
                            text-align: center;
                            cursor: pointer;
                            user-select: none;
                            color: white;
                        }
                        .refresh a::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: 0;
                            bottom: 0;
                            right: 0;
                            background: linear-gradient(135deg, #794d07, #f1ce93);
                            border-radius: 4px;
                            transition: box-shadow 0.5s ease, transform 0.2s ease;
                            will-change: transform;
                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                            transform: translateY(var(--ty, 0)) rotateX(var(--rx, 0)) rotateY(var(--ry, 0)) translateZ(var(--tz, -12px));
                        }
                        .refresh a:hover::before {
                            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                        }
                        .refresh a::after {
                            position: relative;
                            display: inline-block;
                            content: attr(data-title);
                            transition: transform 0.2s ease;
                            font-weight: bold;
                            letter-spacing: 0.01em;
                            will-change: transform;
                            transform: translateY(var(--ty, 0)) rotateX(var(--rx, 0)) rotateY(var(--ry, 0));
                        }
                        body .refresh {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            height: 70px;
                            transform-style: preserve-3d;
                            transform: perspective(200px);
                        }
                        .modal {
                            display: none; /* Hidden by default */
                            position: fixed; /* Stay in place */
                            z-index: 100; /* Sit on top */
                            padding-top: 300px; /* Location of the box */
                            left: 0;
                            top: 0;
                            width: 100%; /* Full width */
                            height: 100%; /* Full height */
                            overflow: auto; /* Enable scroll if needed */
                            background-color: rgb(0,0,0); /* Fallback color */
                            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

                        }

                        /* Modal Content */
                        .modal-content {
                            position: relative;
                            background-color: #ffff;
                            margin: auto;
                            padding: 0;
                            border: 1px solid #888;
                            min-width: 200px;
                            max-width: 400px;
                            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
                            -webkit-animation-name: animatetop;
                            -webkit-animation-duration: 0.4s;
                            animation-name: animatetop;
                            animation-duration: 0.4s
                        }

                        /* Add Animation */
                        @-webkit-keyframes animatetop {
                            from {top:-300px; opacity:0}
                            to {top:0; opacity:1}
                        }

                        @keyframes animatetop {
                            from {top:-300px; opacity:0}
                            to {top:0; opacity:1}
                        }

                        /* The Close Button */
                        .close {
                            margin-top: 15px;
                            color: grey;
                            float: right;
                            font-size: 28px;
                            font-weight: bold;
                        }

                        .close:hover,
                        .close:focus {
                            color: #000;
                            text-decoration: none;
                            cursor: pointer;
                        }

                        .modal-header {
                            padding: 2px 16px;
                            background-color: #ffff;
                        }

                        .modal-body {
                            padding: 2px 16px;
                            border-top: solid lightgrey 0.1px;
                            border-bottom: solid lightgrey 0.1px;
                            color: #212529;
                        }

                        .but_wrap{
                            display: flex;
                            width: 80%;
                            margin: 10px auto;
                        }


                        .but_wrap div{
                            width: 100px;
                            margin: 10px auto 10px;
                        }

                        .red__but__wrap, .red__but__wrap button{
                            background: #9B4D4D;
                            border: none;
                        }
                        .green__but__wrap, .green__but__wrap button{
                            background: #1bd760;
                            border: none;
                        }
                        .green__but__wrap button{
                            position: relative;

                        }
                        .red__but__wrap:hover, .green__but__wrap:hover{
                            background: #0a6aa1;
                        }

                        .red__but__wrap button:active, .green__but__wrap button:active{
                            top: 2px;
                        }

                        #closeModalWin{
                            margin: 0;
                            width: 100%;
                            border-radius: 5px;
                        }


                        @media screen and (max-device-width: 800px){
                            .count{
                                width: 80%;
                                margin: 0 auto;
                            }
                            .row{
                                display: block;
                            }
                            .modal-content{
                                top: -200px;
                            }
                        }
                    </style>
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
                        <div class="records">

                            <h1>Рекордсмены</h1>

                                <?php
                                $i = 0;
                                  while ($result1 = mysqli_fetch_array($sql)) {
                                    $i++;
                                      if($i % 2){
                                          $color = "lightgrey";
                                      } else{
                                          $color = "none";
                                      }
                                   echo "<div class='rec-table' style='background: {$color}'>{$i}. {$result1['name']}: {$result1['score']} {$resultScore}</div>";
                                  }?>

                        </div>
                    </div>
                     <div class="refresh">

                         <a onclick="window.location.reload();" id="asBut" data-title="Сброс"></a>
                     </div>
                    <div class="count"><p>Счетчик ходов:
                        <div id="counter">0</div>
                        </p></div>
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

                            <a class="buttonBlockElement" href="15-article">Подробнее</a>
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

                <script src="scripts/game15.js" type="text/javascript"></script>
    </main>

<?php include "./footer.php"; ?>