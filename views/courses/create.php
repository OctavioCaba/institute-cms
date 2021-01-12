<?php
    require_once '../../helpers.php';
    require_once '../../includes/header.php';

    Utils::isLogin();
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>AÑADIR CARRERA</h1>

            <div class="form">
                <form action="../controllers/CourseController.php" method="post">
                    <div class="form-field">
                        <label for="name">Nombre de la carrera</label>
                        <input type="text" name="name" placeholder="Nombre carrera" required>
                    </div>

                    <div class="form-field">
                        <label for="descrption">Descripción de la carrera</label>
                        <input type="text" name="descrption" placeholder="Descripción carrera" required>
                    </div>

                    <input class="btn-submit" type="submit" value="Añadir">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require_once '../../includes/footer.php';
?>
