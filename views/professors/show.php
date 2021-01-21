<?php
    require_once '../../includes/header.php';
    if (!isset($_SESSION)) {
        session_start();
    }
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
            <table class="table">
                <tr>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                </tr>
                <?php foreach ($professors as $professor) : ?>
                    <tr class="<?=$_SESSION['login']->id == $professor['id'] ? 'its_me' : ''?>">
                        <td><?=$professor['name'] . ' ' . $professor['surname']?></td>
                        <td><?=$professor['email']?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php
    require_once '../../includes/footer.php';
?>
