<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Model\Conexao;
use App\Session\Login;

Login::loginAdmin();


$con = new Conexao('user, eventos, eventos_contratados');
$conn = new Conexao('eventos_contratados');
$connn = new Conexao('eventos');

$id_user = $_SESSION['section_admin']['id'];

$tables = [];

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){

    $id = $_GET['id'];

    $tables = $con->read('eventos_contratados.id_cliente = user.id AND eventos_contratados.id_evento = eventos.id AND eventos_contratados.id = '. $id, null, null, 'user.id AS iduser, user.name as username, email, whatsapp, eventos.id as eventoid, eventos.data_criacao, eventos.data_alteracao, eventos.servicos, status,  eventos_contratados.*');
}


if (isset($_POST['btn_enviar']) && !empty($_POST['btn_enviar'])) {

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit;

    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $personagem     = !empty($data['s_personagem']) ? $data['s_personagem'] : '';
    $fotografo      = !empty($data['s_fotografo'])  ? $data['s_fotografo']  : '';
    $bufert         = !empty($data['s_buffet'])     ? $data['s_buffet']     : '';
    $musica         = !empty($data['s_musica'])     ? $data['s_musica']     : '';
    $decorador      = !empty($data['s_decorador'])  ? $data['s_decorador']  : '';
    $local          = !empty($data['s_local'])      ? $data['s_local']      : '';

    $id_contrato = $data['id_contrato'];

    $operation = $conn->update('id = '. $id_contrato,[

        'animador' => $personagem,
        'fotografo'  => $fotografo,
        'buffet'     => $bufert,
        'musica'     => $musica,
        'decorador'  => $decorador,
        'local'      => $local,

        'p_animador'   => $data['p_personagem'],
        'p_fotografo'  => $data['p_fotografo'],
        'p_buffet'     => $data['p_buffet'],
        'p_musica'     => $data['p_musica'],
        'p_decorador'  => $data['p_decorador'],
        'p_local'      => $data['p_local'],

    ]);

    if ($operation) {

        // ATUALIZANDO STATUS
        if ($data['status'] != $data['status_atual']) {

            $id = $data['id_evento'];

            $operation2 = $connn->update('id = ' . $id, [

                'status' => $data['status']
            ]);
        }

        header('Location: dashboard.php?success=true');
    }
}

include __DIR__ . '/../templates/admin/header.php';
include __DIR__ . '/../templates/admin/side.php';
include __DIR__ . '/../view/admin/editDetails.php';
include __DIR__ . '/../templates/admin/footer.php';
