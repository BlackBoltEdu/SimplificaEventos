<?php

require __DIR__ . '/../vendor/autoload.php';

// DEPENDENCIAS
use \App\Session\Login;
use App\Model\Conexao;

// VERIFICANDO STATUS
Login::logado();

// AUXILIARES
$title = 'Cadastro - Simplifica Eventos';

if (!empty($_POST['btnSubmit']) && isset($_POST['btnSubmit'])) {

    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $con = new Conexao('user');

    $operation = $con->create([
        'name'  => $data['name'],
        'email' => $data['email'],
        'cpf'   => preg_replace('/\D/', '', $data['cpf']),
        'password' => password_hash($data['password'], PASSWORD_DEFAULT),
    ]);

    if ($operation) {

        // SESSÃO DE VALIDAÇÃO
        $_SESSION['usuario_mestre'] = [

            'id'       => $operation,
            'name'     => $data['name'],
            'email'    => $data['email'],
            'cpf'      => preg_replace('/\D/', '', $data['cpf']),
            'logado'   => true,
        ];

        header('Location: dashboardUser.php');
        exit;
    }
}

include __DIR__ . '/../templates/headerMain.php';
include __DIR__ . '/../view/public/registerUser.php';
include __DIR__ . '/../templates/footerMain.php';
