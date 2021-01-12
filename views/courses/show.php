<?php
    require_once '../../helpers.php';
    require_once '../../includes/header.php';
    require_once '../../config/db.php';
    Utils::isLogin();
    $db = Database::connect();
    $courses = Utils::getCoursesById($db);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>Carreras</h1>
            <div class="table">
                <table>
                    <tr>
                        <?php foreach ($courses as $course) : ?>
                            <th><?=$course['name']?></th>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <?php foreach ($courses as $course) : ?>
                            <td><?=$course['description']?></td>
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
