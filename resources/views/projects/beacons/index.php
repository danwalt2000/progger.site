<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="./style/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style/fonts.min.css">
  <link rel="stylesheet" href="./style/style.min.css">
</head>
<body>
<style>
    .preview{
        width: 100%;
        height: 100px;
        background: #1a1a1a;
        position: sticky;
    }
    #prev-h1{
        text-align: center;
        color: white;
    }
    .preview a{

    }
</style>
<div class="preview">
    <img src="../provence/css/images/back-to-home.png"  href="../index.php" />
    <a href="../portfolio.php">Вернуться назад</a>
    <h1 id="prev-h1">Это превью сайта. Все ссылки ведут на главную страницу.</h1>
</div>
    <?php include "./header.html"; ?>

    <?php include "./choose-beacons.html"; ?>  
    
    <?php include './steps.html'?>
  
    <?php include './footer.html'?>

    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>
