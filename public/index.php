<?php
require '../vendor/autoload.php';
require '../config/db_config.php';

use App\Controllers\HomeController;
use App\Controllers\LogoutController;

// 요청에 따른 컨트롤러 호출
$request = isset($_GET['r']) ? $_GET['r'] : 'home'; // 기본적으로 홈 페이지로 설정

switch ($request) {
    case 'home':
        $homeController = new HomeController();
        $homeController->index();
        break;
    case 'logout':
        $logoutController = new LogoutController();
        $logoutController->index();
        break;
    // 다른 요청에 대한 처리를 추가할 수 있습니다.
    default:
        // 기본적으로 홈 페이지로 리다이렉트
        $homeController = new HomeController();
        $homeController->index();
        break;
}
?>