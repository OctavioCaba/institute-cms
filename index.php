<?php
    require_once 'includes/header.php';
    if (!isset($_SESSION)) {
        session_start();
    }
    Utils::isLogin();
    $db = Database::connect();
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once 'includes/sidebar.php';
        ?>

        <div class="content">
            <h1>Hola, <?=$_SESSION['login']->name?></h1>

            <div class="cards-container">
                <?php if($_SESSION['login']->rol == 'admin'): ?>
                    <div class="card">
                        <div class="card-header">
                            <p>Total de carreras</p>
                        </div>
                        <div class="card-body">
                            <p><?=Utils::getAllCourses($db)->num_rows?></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <p>Total de materias</p>
                        </div>
                        <div class="card-body">
                            <p><?=Utils::getAllSubjects($db)->num_rows?></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <p>Total de profesores</p>
                        </div>
                        <div class="card-body">
                            <p><?=Utils::getAllProfessors($db)->num_rows?></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <p>Total de alumnos</p>
                        </div>
                        <div class="card-body">
                            <p> <?=Utils::getAllStudents($db)->num_rows?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($_SESSION['login']->rol == 'professor'): ?>
                    <div class="card">
                        <div class="card-header">
                            <p>Materias impartidas</p>
                        </div>
                        <div class="card-body">
                            <p><?=Utils::getProfessorSubjectsById($db, $_SESSION['login']->id)->num_rows;?></p>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($_SESSION['login']->rol == 'student'): ?>
                    <div class="card">
                        <div class="card-header">
                            <p>Materias en curso</p>
                        </div>
                        <div class="card-body">
                            <p>
                                <?php
                                    $subjects = !empty(Utils::getStudentSubjectsById($db, $_SESSION['login']->id)) ? Utils::getStudentSubjectsById($db, $_SESSION['login']->id)->num_rows : false;
                                    if ($subjects) {
                                        echo $subjects;
                                    } else {
                                        echo 0;
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'includes/footer.php';
?>
