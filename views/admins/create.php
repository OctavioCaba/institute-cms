<?php
    require_once '../../includes/header.php';

    Utils::isLogin();
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>AÑADIR ADMINISTRADOR</h1>

            <div class="form">
                <form action="../../controllers/UserController.php" method="post">
                    <div class="form-register">
                        <div class="form-field">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" placeholder="Nombre" required>
                        </div>

                        <div class="form-field">
                            <label for="surname">Apellido</label>
                            <input type="text" name="surname" placeholder="Apellido" required>
                        </div>

                        <div class="form-field">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="form-field">
                            <label for="sex">Sexo</label>
                            <select class="sex-select" name="sex" required>
                                <option value="female">Femenino</option>
                                <option value="male">Masculino</option>
                            </select>
                        </div>

                        <div class="form-field">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="pass1" onkeyup="passChecker();" placeholder="Contraseña" required>
                        </div>

                        <div class="form-field">
                            <label for="password-check">Repetir contraseña</label>
                            <input type="password" id="pass2" onkeyup="passChecker();" name="password-check" placeholder="Repetir contraseña" required>
                        </div>
                    </div>

                    <input type="hidden" name="rol" value="admin">
                    <input class="btn-submit" type="submit" value="Añadir">
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const pass1 = document.getElementById('pass1');
    const pass2 = document.getElementById('pass2');
    const btnSubmit = document.getElementById('btn-submit');


    function passChecker() {
        if (pass2.value == pass1.value) {
            console.log(pass2.value);
            pass2.style.background = "#d1d1d1";
            btnSubmit.disabled = false;
        } else {
            console.log(pass2.value);
            pass2.style.background = "red";
            btnSubmit.disabled = true;
        }
    }
</script>

<?php
    require_once '../../includes/footer.php';
?>
