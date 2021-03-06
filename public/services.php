<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Model\Conexao;
use \App\Session\Login;

Login::login();

// AUXILIARES
$title = 'Agendar - Simplifica Eventos';

if (isset($_POST['btn_agendar']) && !empty($_POST['btn_agendar'])) {
  
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $con = new Conexao('eventos');

    date_default_timezone_set('America/fortaleza');
    
    $operation = $con->create([
        'nome_evento'  => $data['nome_evento'],
        'data_evento' => $data['data_evento'],
        'servicos' => $data['servicos'],
        'user' => $_SESSION['section_user']['id'],
        'data_criacao' => date('Y-m-d H:i:s'),
        'data_alteracao' => date('Y-m-d H:i:s'),
        'status' => 'Pendente de análise'
    ]);

    if ($operation) {
        header('Location: dashboard.php?success=true');
        exit;
    } else {
        header('Location: dashboard.php?error=true');
        exit;
    }
}

include __DIR__ . '/../templates/headerMain.php';
include __DIR__ . '/../view/public/services.php';
include __DIR__ . '/../templates/footerMain.php';