<?php
 
$method = $_SERVER['REQUEST_METHOD'];
 
//Script Foreach
$c = true;
if ( $method === 'POST' ) {
 
  $project_name = 'perevozkirostov.ru';
  $admin_email  = 'perevozkirostov@mail.ua';
  $form_subject = 'Вам сообщение с сайта perevozkirostov.ru';
 
  foreach ( $_POST as $key => $value ) {
    if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
        if($key === 'startTown' || $key === 'startTown2'){
            $key = "Город отправления";
        } elseif ($key === 'endTown' || $key === 'endTown2'){
            $key = "Город назначения";
        } elseif ($key === 'count' || $key === 'count2'){
            $key = "Количество мест";
        } elseif ($key === 'cars' || $key === 'cars2'){
            $key = "Тип транспорта";
        } elseif ($key === 'count' || $key === 'count2'){
            $key = "Количество мест";
        } elseif ($key === 'name' || $key === 'name2'){
            $key = "Имя пользователя";
        } elseif ($key === 'tell' || $key === 'tell2'){
            $key = "Телефон пользователя";
        } elseif ($key === 'comments' || $key === 'comments2'){
            $key = "Сообщение пользователя";
        } elseif ($key === 'numberOfSeats'){
            $key = "Количество мест";
        } elseif ($key === 'typeOfTransport'){
            $key = "Тип транспорта";
        } elseif ($key === 'calendar'){
            $key = "Дата";
        } elseif ($key === 'checkbox' || $key=== "send"){
            continue;
        }
      $message .= "
      " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
        <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
      </tr>
      ";
    }
  }
} else if ( $method === 'GET' ) {
 
  $project_name = trim($_GET["project_name"]);
  $admin_email  = trim($_GET["admin_email"]);
  $form_subject = trim($_GET["form_subject"]);
 
  foreach ( $_GET as $key => $value ) {
    if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
      $message .= "
      " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
        <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
      </tr>
      ";
    }
  }
}
 
$message = "<table style='width: 100%;'>$message</table>";
 
function adopt($text) {
  return '=?UTF-8?B?'.Base64_encode($text).'?=';
}
 
$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.$project_name. PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;
 
mail($admin_email, adopt($form_subject), $message, $headers);

header('Location: /index.html');
?>