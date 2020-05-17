<?php
require_once 'vendor/autoload.php';

use SSYT\Auth\AuthController;

$auth = new AuthController();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    print_r($_POST);
    if(isset($_POST['login'])) {
        $auth->login($_POST['user_email'], $_POST['user_pwd']);
    }
}
