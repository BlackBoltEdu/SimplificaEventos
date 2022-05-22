<?php

require __DIR__ . '/../vendor/autoload.php';

use \App\Session\Login;

Login::login();

echo 'Está logando!';
echo '<br>';
echo '<a href="logout.php">Sair</a>';
echo '<br>';

include __DIR__ . './../templates/headerLandingPage.php';
include __DIR__ . '/../view/public/landingPage.php';
include __DIR__ . '/../templates/footer.php';