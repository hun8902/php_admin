<?php
require '../vendor/autoload.php';
require '../config/db_config.php';

use App\Models\User;
use App\Controllers\AuthController;

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $userModel = new User($pdo);
    $authController = new AuthController($userModel);

    $authController->login();

} catch (PDOException $e) {
    echo 'Database Error: ' . $e->getMessage();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>