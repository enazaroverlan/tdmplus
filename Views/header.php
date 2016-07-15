<?php
/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 13.07.2016
 * Time: 15:47
 */
?>
<html>
<head>
    <title><?php echo($pageTitle); ?></title>
    <link rel="stylesheet" type="text/css" href="/tdm/Resources/style/style.css" />
    <link rel="stylesheet" type="text/css" href="/tdm/Resources/style/bootstrap.css" />
    <script src="/tdm/Resources/js/jquery-3.0.0.min.js"></script>
    <script src="/tdm/Resources/js/tdmplus.js"></script>
    <script src="/tdm/Resources/js/bootstrap.js"></script>
    <meta charset="utf-8" />
</head>

<body>
<div class="header_logo">
    <div class="header_top_border"></div>
    <div class="logo"></div>
    <div class="header_bottom_border"></div>
</div>

<div class="top_nav_menu">
    <div class="top_nav_elements">
        <div class="top_nav_element" >
            <ul>
                <!--<li id="menu">About us</li>-->
                <li class="<?php if(!isset($_REQUEST['action'])) { echo('active'); } else { echo('menu'); } ?>"><a href="/tdm/">О компании</a></li>
                <li class="<?php if(isset($_REQUEST['action'])) { if($_REQUEST['action'] != 'service') {echo('menu');} else {echo('active');} } ?>"><a href="/tdm/service">Услуги</a></li>
                <li class="<?php if(isset($_REQUEST['action'])) { if($_REQUEST['action'] != 'team') {echo('menu');} else {echo('active');} } ?>"><a href="/tdm/team">Команда</a></li>
                <li class="<?php if(isset($_REQUEST['action'])) { if($_REQUEST['action'] != 'news') {echo('menu');} else {echo('active');} } ?>"><a href="/tdm/news">Новости</a></li>
                <li class="<?php if(isset($_REQUEST['action'])) { if($_REQUEST['action'] != 'career') {echo('menu');} else {echo('active');} } ?>"><a href="/tdm/career">Карьера</a></li>
                <li class="<?php if(isset($_REQUEST['action'])) { if($_REQUEST['action'] != 'contacts') {echo('menu');} else {echo('active');} } ?>"><a href="/tdm/contacts">Контакты</a></li>
            </ul>
        </div>
    </div>
</div>
