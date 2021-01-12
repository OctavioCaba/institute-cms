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
            <div class="table">
                <table>
                    <tr>
                        <?php foreach ($students as $student) : ?>
                            <th><?=$student['name'] . ' ' . $student['surname']?></th>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <?php foreach ($students as $student) : ?>
                            <td><?=$student['email']?></td>
                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
    require_once '../../includes/footer.php';
?>
