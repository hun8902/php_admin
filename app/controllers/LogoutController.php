<?php

namespace App\Controllers;

class LogoutController {
    public function index() {
        // 쿠키 삭제
        setcookie("token", "", time() - 3600, "/");
        // 로그인 페이지로 리다이렉트
        header('Location: index.php');
        exit(); // 리다이렉트 후 스크립트 종료
    }
}