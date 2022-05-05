<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Model\Conexao;

if (!empty($_POST['btnSubmit']) && isset($_POST['btnSubmit'])) {

    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $con = new Conexao('user');

    $operation = $con->create([

        'name'  => $data['name'],
        'email' => $data['email'],
        'cpf'   => $data['cpf'],
        'password' => $data['password']

    ]);

    if(is_numeric($operation)){
        header('Location: loginUser.php?success=true');
    }
}

include __DIR__ . '/../templates/headerRegister.php';
include __DIR__ . '/../view/public/registerUser.php';
include __DIR__ . '/../templates/footer.php';