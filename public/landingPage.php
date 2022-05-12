<?php

require __DIR__ . '/../vendor/autoload.php';

use \App\Session\Login;

Login::login();

echo 'Está logando!';
echo '<br>';
echo '<a href="logout.php">Sair</a>';
echo '<br>';
