<?php

namespace App\Controllers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\User;

class AuthController
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function login()
    {
        $message = '';
        $error = '';
        $email = '';
        $password = '';
        $remember_me = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $remember_me = isset($_POST["remember_me"]) ? true : false;

            if (empty($email)) {
                $error = 'Please Enter Email Details';
            } else if (empty($password)) {
                $error = 'Please Enter Password Details';
            } else {
                $data = $this->userModel->findByEmail($email);
                if ($data) {
                    if (password_verify($password, $data['user_password'])) {
                        $token = JWT::encode(
                            array(
                                'iat' => time(),
                                'nbf' => time(),
                                'exp' => time() + 3600,
                                'data' => array(
                                    'user_id' => $data['user_id'],
                                    'user_name' => $data['user_name']
                                )
                            ),
                            JWT_KEY,
                            'HS256'
                        );

                        $cookie_expiration = $remember_me ? time() + (30 * 24 * 60 * 60) : 0;
                        setcookie("token", $token, $cookie_expiration, "/", "", true, true);
                        header('location:index.php');
                        exit();
                    } else {
                        $error = 'Wrong Password';
                    }
                } else {
                    $error = 'Wrong Email Address';
                }
            }
        }

        require '../app/views/auth/login.php';
    }
}
?>