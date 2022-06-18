<?php

require __DIR__.'/../vendor/autoload.php';

use App\Model\Conexao;
use App\Session\Login;

Login::login();

$con = new Conexao('eventos');
$id_user = $_SESSION['section_user']['id'];
$tables = $con->read('user  ='.$id_user);

// AUXILIARES
$modal = [];

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $modal = $con->read('id = '.$id);
}

include __DIR__ . '/../templates/dashboardUser/header.php';
include __DIR__ . '/../templates/dashboardUser/side.php';
include __DIR__ . '/../view/public/dashboard.php';
include __DIR__ . '/../templates/dashboardUser/footer.php';

if(!empty($modal)){
    echo '<script> var mod = new bootstrap.Modal(document.querySelector("#modalEvent"));
    mod.show(); </script>';
}