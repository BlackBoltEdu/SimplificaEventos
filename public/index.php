<?php

if (isset($_GET['session']) && !empty($_GET['session']) && $_GET['session'] == 'closed') {
    echo 'sessão encerrada!';
}

echo '<br>';
echo '<a href="loginUser.php">Login</a>';
echo '<br>';
