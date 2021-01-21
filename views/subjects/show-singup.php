<?php
    require_once '../../includes/header.php';

    Utils::isLogin();
    $db = Database::connect();
    $student_subjects = Utils::getStudentSubjectsById($db, $_SESSION['login']->id);
    $professor_subjects = Utils::getProfessorSubjectsById($db, $_SESSION['login']->id);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>MIS MATERIAS</h1>
            <table class="table">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
                <?php if($_SESSION['login']->rol == 'student'): ?>
                    <?php foreach ($student_subjects as $subject) : ?>
                        <tr>
                            <td><?=$subject['name']?></td>
                            <td><?=$subject['description']?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php elseif($_SESSION['login']->rol == 'professor'): ?>
                    <?php foreach ($professor_subjects as $subject) : ?>
                        <tr>
                            <td><?=$subject['name']?></td>
                            <td><?=$subject['description']?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>

<?php
    require_once '../../includes/footer.php';
?>
