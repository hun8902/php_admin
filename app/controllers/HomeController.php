<?php

namespace App\Controllers;

require_once __DIR__ . '/../functions.php';

class HomeController
{
    public function index()
    {
        checkToken(); // 토큰 확인
        $config = [
            'html_class' => 'light-style layout-wide customizer-hide',
            'html_dir' => 'ltr',
            'data_theme' => 'theme-default',
            'data_assets_path' => '../../assets/',
            'data_template' => 'vertical-menu-template'
        ];

        require __DIR__ . '/../views/home/index.php';
    }
}
?>