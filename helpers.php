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

        public static function getAllCourses($db) {
            $sql = " SELECT * FROM courses ";
            $courses = mysqli_query($db, $sql);
            $result = array();

            if ($courses && mysqli_num_rows($courses) >= 1) {
                $result = $courses;
            }

            return $result;
        }

        public static function getAllSubjects($db) {
            $sql = " SELECT * FROM subjects ";
            $subjects = mysqli_query($db, $sql);
            $result = array();

            if ($subjects && mysqli_num_rows($subjects) >= 1) {
                $result = $subjects;
            }

            return $result;
        }
        
        public static function getStudentSubjectsById($db, $id) {
            $sql = " SELECT * FROM subjects su ";
            $sql .= "INNER JOIN student_in_subject st_su ON st_su.subject_id = su.id ";
            $sql .= "WHERE st_su.student_id = $id ";
            $subjects = mysqli_query($db, $sql);
            $result = array();

            if ($subjects && mysqli_num_rows($subjects) >= 1) {
                $result = $subjects;
            }

            return $result;
        }

        public static function getProfessorSubjectsById($db, $id) {
            $sql = " SELECT * FROM subjects su ";
            $sql .= "INNER JOIN professor_in_subject pr_su ON pr_su.subject_id = su.id ";
            $sql .= "WHERE pr_su.professor_id = $id ";
            $subjects = mysqli_query($db, $sql);
            $result = array();

            if ($subjects && mysqli_num_rows($subjects) >= 1) {
                $result = $subjects;
            }

            return $result;
        }

        public static function getAllProfessors($db) {
            $sql = " SELECT * FROM users WHERE rol = 'professor' ";
            $subjects = mysqli_query($db, $sql);
            $result = array();

            if ($subjects && mysqli_num_rows($subjects) >= 1) {
                $result = $subjects;
            }

            return $result;
        }
        
        public static function getAllStudents($db) {
            $sql = " SELECT * FROM users WHERE rol = 'student' ";
            $subjects = mysqli_query($db, $sql);
            $result = array();

            if ($subjects && mysqli_num_rows($subjects) >= 1) {
                $result = $subjects;
            }

            return $result;
        }

        public static function getAllAdmins($db) {
            $sql = " SELECT * FROM users WHERE rol = 'admin' ";
            $subjects = mysqli_query($db, $sql);
            $result = array();

            if ($subjects && mysqli_num_rows($subjects) >= 1) {
                $result = $subjects;
            }

            return $result;
        }
    }
?>
