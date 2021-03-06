<?php
    require_once '../config/db.php';
    require_once '../models/user.php';
    if (!isset($_SESSION)) {
        session_start();
    }

    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $sex = isset($_POST['sex']) ? $_POST['sex'] : false;
    $rol = 'student';

    if ($name && $surname && $email && $password && $sex) {
        $user = new User();
        $user->setName($name);
        $user->setSurname($surname);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setGender($sex);
        $user->setRol($rol);

        $save = $user->save();
        if ($save) {
            if (!isset($_SESSION)) {
                session_start();
            }
            $login = $user->login();
            $_SESSION['login'] = $login;
            header('Location: http://localhost/institute-cms/index.php');
        } else {
            echo '<pre>';
            print_r($save);
            echo '</pre>';
            die();
        }

    } else {
        $_SESSION['register'] = 'failed';
    }
?>
