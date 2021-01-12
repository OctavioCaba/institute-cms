<?php
    require_once '../../includes/header.php';

    Utils::isLogin();
    $db = Database::connect();
    $professors = Utils::getAllProfessors($db);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>PROFESORES</h1>
            <div class="table">
                <table>
                    <tr>
                        <?php foreach ($professors as $professor) : ?>
                            <th><?=$professor['name'] . ' ' . $professor['surname']?></th>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <?php foreach ($professors as $professor) : ?>
                            <td><?=$professor['email']?></td>
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
