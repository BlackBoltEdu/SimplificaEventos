<?php

require __DIR__.'/../vendor/autoload.php';

use App\Model\Conexao;
use App\Session\Login;

Login::loginAdmin();

$con = new Conexao('admin');
$id_user = $_SESSION['section_admin']['id'];
$tables = $con->read();


// echo '<pre>';
// print_r($tables);
// echo '<pre>';

// AUXILIARES
$modal = [];
$alert = '';

if(isset($_GET['success']) && !empty($_GET['success'])){
    $alert = $_GET['success'];
}

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $modal = $con->read('id = '.$id);
}

include __DIR__ . '/../templates/admin/header.php';
include __DIR__ . '/../templates/admin/side.php';
include __DIR__ . '/../view/admin/usuarios.php';
include __DIR__ . '/../templates/admin/footer.php';

if(!empty($modal)){
    echo '<script> var mod = new bootstrap.Modal(document.querySelector("#modalEvent"));
    mod.show(); </script>';
}