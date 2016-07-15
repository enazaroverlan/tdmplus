<?php
/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 13.07.2016
 * Time: 15:32
 */
set_include_path(__DIR__);
require_once('Defines/defines.php');
require_once('Database/Database.php');
require_once('Lib/Security.php');
require_once('Lib/Routing.php');


session_start();

$pageTitle = "";

if(!isset($_REQUEST['action'])) {
    $pageTitle = "Главная - TDM+";
} else {
    switch($_REQUEST['action']) {
        case 'about': $pageTitle = "О Компании - TDM+"; break;
        case 'service': $pageTitle = "Услуги - TDM+"; break;
        case 'team': $pageTitle = "Наша команда - TDM+"; break;
        case 'news': $pageTitle = "Новости - TDM+"; break;
        case 'career': $pageTitle = "Карьера - TDM+"; break;
        case 'contacts': $pageTitle = "Контакты - TDM+"; break;
    }
}



include_once('Views/header.php');
?>
<div class="content" id="content_block">
    <?php Routing::StartListeningRequests();?>
</div>
<?php
include_once('Views/footer.php');