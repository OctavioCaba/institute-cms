<?php
    require_once '../../includes/header.php';

    Utils::isLogin();
    $db = Database::connect();
    $courses = Utils::getAllCourses($db);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>AÑADIR MATERIA</h1>

            <div class="form">
                <form action="../../controllers/SubjectController.php" method="post">
                    <div class="form-field">
                        <label for="name">Nombre de la materia</label>
                        <input type="text" name="name" placeholder="Nombre materia" required>
                    </div>

                    <div class="form-field">
                        <label for="description">Descripción de la materia</label>
                        <input type="text" name="description" placeholder="Descripción materia" required>
                    </div>

                    <div class="form-field">
                        <label for="course">Carrera</label>
                        <select name="course" class="sex-select">
                            <?php foreach($courses as $course): ?>
                            <option value="<?=$course['id']?>"><?=$course['name']?></option>
                            <?php endforeach; ?>
                        </select>
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
