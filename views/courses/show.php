<?php
    require_once '../../helpers.php';
    require_once '../../includes/header.php';
    require_once '../../config/db.php';
    Utils::isLogin();
    $db = Database::connect();
    $courses = Utils::getAllCourses($db);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>Carreras</h1>
            <table class="table">
                <tr>
                    <th>Carrera</th>
                    <th>Descripción</th>
                </tr>
                <?php foreach ($courses as $course) : ?>
                    <tr>
                        <td><?=$course['name']?></td>
                        <td><?=$course['description']?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php
    require_once '../../includes/footer.php';
?>
