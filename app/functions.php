<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function checkToken() {
    $key = JWT_KEY;

    if(isset($_COOKIE['token'])){
        $decoded = JWT::decode($_COOKIE['token'], new Key($key, 'HS256'));
    } else {
        header('location:login.php');
    }
}

// 다른 함수나 상수 등을 정의할 수 있음

?>