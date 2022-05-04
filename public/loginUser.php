<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Model\Conexao;

if (!empty($_POST['btnSubmit']) && isset($_POST['btnSubmit'])) {
 
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $con = new Conexao('user');
    
    $mail = $data['email'];
    $email = $con->read('email = '."'$mail'");
    
    if(!empty($email)){
        if($email[0]['password'] == $data['password']){
            header('Location: landingPage.php?success=true');
        }else{
            header('Location: '.$_SERVER['PHP_SELF'].'?user=false');
        }
    }
}

include __DIR__ . '/../templates/headerLogin.php';
include __DIR__ . '/../view/public/loginUser.php';
include __DIR__ . '/../templates/footer.php';