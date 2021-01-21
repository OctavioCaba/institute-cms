<?php
    require_once '../../includes/header.php';

    Utils::isLogin();
    $db = Database::connect();
    $subjects = Utils::getAllSubjects($db);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>MATERIAS</h1>
            <table class="table">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
                    <?php foreach ($subjects as $subject) : ?>
                        <tr>
                            <td><?=$subject['name']?></td>
                            <td><?=$subject['description']?></td>
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php
    require_once '../../includes/footer.php';
?>
