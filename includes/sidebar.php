<aside class="sidebar">
    <button class="sidebar-item"><a href="http://localhost/institute-cms/index.php">Dashboard</a></button>

    <button class="sidebar-item has-menu">Carreras</button>
    <div class="submenu">
        <?php if($_SESSION['login']->rol == 'admin'): ?>
            <a href="/institute-cms/views/courses/create.php">Añadir nueva</a>
        <?php endif; ?>
        <a href="/institute-cms/views/courses/show.php">Ver todas</a>
    </div>

    <button class="sidebar-item has-menu">Materias</button>
    <div class="submenu">
        <?php if($_SESSION['login']->rol == 'admin'): ?>
            <a href="/institute-cms/views/subjects/create.php">Añadir nueva</a>
            <a href="/institute-cms/views/subjects/singup-professor.php">Asginar profesor</a>
        <?php endif; ?>
        <?php if($_SESSION['login']->rol == 'professor'): ?>
            <a href="/institute-cms/views/subjects/show-singup.php">Ver mis materias</a>
        <?php endif; ?>
        <?php if($_SESSION['login']->rol == 'student'): ?>
            <a href="/institute-cms/views/subjects/singup-student.php">Inscribirse</a>
            <a href="/institute-cms/views/subjects/show-singup.php">Ver mis materias</a>
        <?php endif; ?>
        <a href="/institute-cms/views/subjects/show.php">Ver todas</a>
    </div>

    <?php if($_SESSION['login']->rol != 'student'): ?>
        <button class="sidebar-item has-menu">Profesores</button>
        <div class="submenu">
            <?php if($_SESSION['login']->rol == 'admin'): ?>
                <a href="/institute-cms/views/professors/create.php">Añadir nuevo</a>
            <?php endif; ?>
            <a href="/institute-cms/views/professors/show.php">Ver todos</a>
        </div>
    <?php endif; ?>

    <button class="sidebar-item has-menu">Alumnos</button>
    <div class="submenu">
        <a href="/institute-cms/views/students/show.php">Ver todos</a>
    </div>

    <?php if($_SESSION['login']->rol == 'admin'): ?>
        <button class="sidebar-item has-menu">Administradores</button>
        <div class="submenu">
            <a href="/institute-cms/views/admins/create.php">Añadir nuevo</a>
            <a href="/institute-cms/views/admins/show.php">Ver todos</a>
        </div>
    <?php endif; ?>

    <button class="sidebar-item"><a href="/institute-cms/logout.php">Cerrar Sesión</a></button>
</aside>
