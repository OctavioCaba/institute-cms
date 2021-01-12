<?php
    require_once '../../helpers.php';
    require_once '../../includes/header.php';
    require_once '../../config/db.php';
    Utils::isLogin();
    $db = Database::connect();
    $subjects = Utils::getSubjectsById($db);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>Materias</h1>
            <div class="table">
                <table>
                    <tr>
                        <?php foreach ($subjects as $subject) : ?>
                            <th><?=$subject['name']?></th>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <?php foreach ($subjects as $subject) : ?>
                            <td><?=$subject['description']?></td>
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
