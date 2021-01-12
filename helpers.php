<?php
    class Utils {
        public static function isLogin() {
            if (!isset($_SESSION)) {
                session_start();
            }

            if (!isset($_SESSION['login'])) {
                header('Location: /institute-cms/views/login.php');
            }
        }

        public static function getCoursesById($db) {
            $sql = " SELECT * FROM courses ";
            $courses = mysqli_query($db, $sql);
            $result = array();

            if ($courses && mysqli_num_rows($courses) >= 1) {
                $result = $courses;
            }

            return $result;
        }

        public static function getSubjectsById($db) {
            $sql = " SELECT * FROM subjects ";
            $subjects = mysqli_query($db, $sql);
            $result = array();

            if ($subjects && mysqli_num_rows($subjects) >= 1) {
                $result = $subjects;
            }

            return $result;
        }
    }
?>
