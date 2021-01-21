<?php
    require_once '../../includes/header.php';

    Utils::isLogin();
    $db = Database::connect();
    $subjects = Utils::getAllSubjects($db);
    $professors = Utils::getAllProfessors($db);
?>

<div class="container">
    <div class="container-grid">
        <?php
            require_once '../../includes/sidebar.php';
        ?>

        <div class="content">
            <h1>ASIGNAR PROFESOR A UNA MATERIA</h1>

            <div class="form">
                <form action="../../controllers/SubjectController.php" method="post">
                    <div class="form-field">
                        <label for="professor">Profesor</label>
                        <select class="sex-select" name="professor" required>
                            <?php foreach($professors as $professor): ?>
                                <option value="<?=$professor['id']?>"><?=$professor['name'] . ' ' . $professor['surname']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-field">
                        <label for="subject">Materia</label>
                        <select class="sex-select" name="subject" required>
                            <?php foreach($subjects as $subject): ?>
                                <option value="<?=$subject['id']?>"><?=$subject['name']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <input type="hidden" name="id" value="<?=$_SESSION['login']->id?>">
                    <input class="btn-submit" type="submit" value="Asignar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require_once '../../includes/footer.php';
?>
