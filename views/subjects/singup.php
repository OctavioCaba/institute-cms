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
