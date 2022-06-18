<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="dashboard.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php
  if ($_SESSION['section_admin']['permissao'] == 's') : ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="usuarios.php">
                    <i class="bi bi-people"></i>
                    <span>Usuários</span>
                </a>
            </li>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link collapsed disabled text-danger" href="usuarios.php">
                    <i class="bi bi-people text-danger"></i>
                    <span>Usuários</span>
                </a>
            </li>
        <?php endif; ?>

        <li class="nav-item">
            <a class="nav-link collapsed" href="../index.php">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>
        </li>

    </ul>

</aside>