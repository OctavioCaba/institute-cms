<?php
    require_once '../config/db.php';
    require_once '../models/user.php';

    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $sex = isset($_POST['sex']) ? $_POST['sex'] : false;
    $rol = isset($_POST['rol']) ? $_POST['rol'] : false;

    if ($name && $surname && $email && $password && $sex && $rol) {
        $user = new User();
        $user->setName($name);
        $user->setSurname($surname);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setGender($sex);
        $user->setRol($rol);

        $save = $user->save();
        if ($save) {
            if ($rol == 'professor') {
                header('Location: http://localhost/institute-cms/views/professors/show.php');
            } else {
                header('Location: http://localhost/institute-cms/views/admins/show.php');
            }
        } else {
            var_dump($save);
        }

    } else {
        $_SESSION['create'] = 'failed';
    }
?>
