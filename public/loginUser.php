<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Model\Conexao;

if (!empty($_POST['btnSubmit']) && isset($_POST['btnSubmit'])) {
 
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $con = new Conexao('user');
    
    $mail = $data['email'];
    $email = $con->read('email = '."'$mail'");

    if(!empty($email)){

        /** 
         * Metodo PHP password_verify($parametro_1, $parametro_2)
         * Ele gera um hash para o $parametro_1 enviado pelo form de login
         * e compara como hash gerado no form de cadastro que é trazido pela consutla no banco de dados;
         */ 
        if(password_verify($data['password'], $email[0]['password'])){
            header('Location: landingPage.php?success=true');
        }else{
            header('Location: '.$_SERVER['PHP_SELF'].'?user=false');
        }

    }else{
        header('Location: '.$_SERVER['PHP_SELF'].'?user=false');
    }
}

include __DIR__ . '/../templates/headerLogin.php';
include __DIR__ . '/../view/public/loginUser.php';
include __DIR__ . '/../templates/footer.php';