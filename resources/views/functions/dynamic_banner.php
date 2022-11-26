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