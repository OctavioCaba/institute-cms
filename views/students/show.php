<?php
    require_once '../../includes/header.php';

    Utils::isLogin();
    $db = Database::connect();
    $students = Utils::getAllStudents($db);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>Alumnos</h1>
            <table class="table">
                <tr>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                </tr>
                <?php foreach ($students as $student) : ?>
                    <tr class="<?=$_SESSION['login']->id == $student['id'] ? 'its_me' : ''?>">
                        <td><?=$student['name'] . ' ' . $student['surname']?></td>
                        <td><?=$student['email']?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php
    require_once '../../includes/footer.php';
?>
