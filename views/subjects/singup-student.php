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
            <h1>INSCRIBIRSE A UNA MATERIA</h1>

            <div class="form">
                <form action="../../controllers/SubjectController.php" method="post">
                    <div class="form-field">
                        <label for="subject">Materia</label>
                        <select class="sex-select" name="subject" required>
                            <?php foreach($subjects as $subject): ?>
                                <option value="<?=$subject['id']?>"><?=$subject['name']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <input type="hidden" name="id" value="<?=$_SESSION['login']->id?>">
                    <input class="btn-submit" type="submit" value="Inscribirse">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require_once '../../includes/footer.php';
?>
