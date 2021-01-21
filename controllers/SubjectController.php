<?php
    require_once '../config/db.php';
    $db = Database::connect();

    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $description = isset($_POST['description']) ? $_POST['description'] : false;
    $course_id = isset($_POST['course']) ? $_POST['course'] : false;

    if ($name && $description && $course_id) {
        $sql = " INSERT INTO subjects VALUES(NULL, $course_id, '$name', '$description', CURDATE()) ";
        $query = $db->query($sql);
        
        if ($query) {
            header('Location: http://localhost/institute-cms/views/subjects/show.php');
        } else {
            var_dump($db);
            die();
        }
    }

    $subject_id = isset($_POST['subject']) ? $_POST['subject'] : false;
    $student_id = isset($_POST['id']) ? $_POST['id'] : false;
    $professor_id = isset($_POST['professor']) ? $_POST['professor'] : false;

    if ($student_id && $student_id) {
        $sql = " INSERT INTO student_in_subject VALUES($subject_id, $student_id) ";
        $query = $db->query($sql);

        if ($query) {
            header('Location: http://localhost/institute-cms/views/subjects/show-singup.php');
        } else {
            var_dump($query);
            die();
        }
    }

    if ($subject_id && $professor_id) {
        $sql = " INSERT INTO professor_in_subject VALUES($subject_id, $professor_id) ";
        $query = $db->query($sql);

        if ($query) {
            header('Location: http://localhost/institute-cms/index.php');
        } else {
            echo '<pre>';
            print_r($query);
            echo '</pre>';
            die();
        }
    }
?>
