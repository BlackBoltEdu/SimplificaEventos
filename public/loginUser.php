<?php

require __DIR__ . '/../vendor/autoload.php';

// DEPENDENCIAS
use \App\Session\Login;
use App\Model\Conexao;

// VERIFICANDO STATUS
Login::logado();

if (!empty($_POST['btnSubmit']) && isset($_POST['btnSubmit'])) {

    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $con = new Conexao('user');

    $mail = $data['email'];
    $login = $con->read('email = ' . "'$mail'");

    if (!empty($login)) {

        /** 
         * Metodo PHP password_verify($parametro_1, $parametro_2)
         * Ele gera um hash para o $parametro_1 enviado pelo form de login
         * e compara como hash gerado no form de cadastro que é trazido pela consutla no banco de dados;
         */
        if (password_verify($data['password'], $login[0]['password'])) {

            // SESSÃO DE VALIDAÇÃO
            $_SESSION['usuario_mestre'] = [

                'id'       => $login[0]['id'],
                'name'     => $login[0]['name'],
                'email'    => $login[0]['email'],
                'cpf'      => $login[0]['cpf'],
                'logado'   => true,
            ];

            header('Location: landingPage.php');
            exit;
        } else {

            header('Location: ' . $_SERVER['PHP_SELF'] . '?user=false');
            exit;
        }
    } else {

        header('Location: ' . $_SERVER['PHP_SELF'] . '?user=false');
        exit;
    }
}

include __DIR__ . '/../templates/headerLogin.php';
include __DIR__ . '/../view/public/loginUser.php';
include __DIR__ . '/../templates/footer.php';
