<?php
    if (isset($_SESSION['login'])) {
        header('Location: http://localhost/institute-cms/index.php');
    }
    require_once '../includes/header.php';
?>

<div class="container">
    <h1>INICIAR SESIÓN</h1>

    <div class="form">
        <form action="../controllers/LoginController.php" method="post">
            <div class="form-field">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-field">
                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>

            <input class="btn-submit" type="submit" value="Iniciar Sesión">
        </form>
        <a class="btn-register" href="register.php">Registrarse</a>
    </div>
</div>

<?php
    require_once '../includes/footer.php';
?>
