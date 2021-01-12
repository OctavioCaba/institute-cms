<?php
    require_once '../config/db.php';
    require_once '../models/user.php';
    if (!isset($_SESSION)) {
        session_start();
    }

    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    if ($email && $password) {
        $user = new User();
        $user->setEmail($email);
        $user->setPassword($password);

        $login = $user->login();

        if ($login) {
            $_SESSION['login'] = $login;
            header('Location: http://localhost/institute-cms/index.php');
        } else {
            var_dump($login);
        }

    } else {
        $_SESSION['login'] = 'failed';
    }
?>
