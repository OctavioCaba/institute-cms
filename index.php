<?php
    require_once 'config/db.php';
    require_once 'includes/header.php';
    if (!isset($_SESSION)) {
        session_start();
    }
    Utils::isLogin();
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once 'includes/sidebar.php';
        ?>

        <div class="content">
            <h1>Hola, <?=$_SESSION['login']->name?></h1>
        </div>
    </div>
</div>

<?php
    require_once 'includes/footer.php';
?>
