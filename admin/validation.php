<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Model\Conexao;
use App\Session\Login;

Login::loginAdmin();

$con = new Conexao('eventos_contratados');

if(!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])){

    header('Location: dashboard.php');
}

$id = $_GET['id'];

$rows = $con->read('id_evento = '. $id);

$id_contrato = $rows[0]['id'];

count($rows) > 0 ? header('Location: editDetails.php?id='.$id_contrato) : header('Location: details.php?id='.$id);