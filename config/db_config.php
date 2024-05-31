<?php

// 데이터베이스 설정
define('DB_HOST', 'localhost');
define('DB_NAME', 'phpsys'); // 적절한 데이터베이스 이름으로 변경
define('DB_USER', 'root');
define('DB_PASS', '1234');

// JWT 키 설정
define('JWT_KEY', '1a3LM3W966D6QTJ5BJb9opunkUcw_d09NCOIJb9QZTsrneqOICoMoeYUDcd_NfaQyR787PAH98Vhue5g938jdkiyIZyJICytKlbjNBtebaHljIR6-zf3A2h3uy6pCtUFl1UhXWnV6madujY4_3SyUViRwBUOP-UudUL4wnJnKYUGDKsiZePPzBGrF4_gxJMRwF9lIWyUCHSh-PRGfvT7s1mu4-5ByYlFvGDQraP4ZiG5bC1TAKO_CnPyd1hrpdzBzNW4SfjqGKmz7IvLAHmRD-2AMQHpTU-hN2vwoA-iQxwQhfnqjM0nnwtZ0urE6HjKl6GWQW-KLnhtfw5n_84IRQ');

// 기타 설정
$config = [
    'title' => 'Your Website Title',
    'html_class' => 'your-html-class',
    'html_dir' => 'ltr', // 또는 'rtl'
    'data_theme' => 'theme-default',
    'data_assets_path' => '../../assets/',
    'data_template' => 'vertical-menu-template'
];

return $config;
?>


