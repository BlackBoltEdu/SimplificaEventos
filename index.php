<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Session\Login;

Login::init();

include __DIR__ . '/templates/header.php';
include __DIR__ . '/view/public/landingPage.php';
include __DIR__ . '/templates/footer.php';