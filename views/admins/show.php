<?php
    require_once '../../includes/header.php';

    Utils::isLogin();
    $db = Database::connect();
    $admins = Utils::getAllAdmins($db);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>ADMINISTRADORES</h1>
            <div class="table">
                <table>
                    <tr>
                        <?php foreach ($admins as $admin) : ?>
                            <th><?=$admin['name'] . ' ' . $admin['surname']?></th>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <?php foreach ($admins as $admin) : ?>
                            <td><?=$admin['email']?></td>
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
