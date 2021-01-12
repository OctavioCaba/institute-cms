<?php
    require_once '../config/db.php';
    $db = Database::connect();

    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $description = isset($_POST['description']) ? $_POST['description'] : false;

    if ($name && $description) {
        $sql = " INSERT INTO courses VALUES(NULL, '$name', '$description', CURDATE()) ";
        $query = $db->query($sql);
        
        if ($query) {
            header('Location: http://localhost/institute-cms/views/courses/show.php');
        } else {
            var_dump($db);
            die();
        }
    }
?>
