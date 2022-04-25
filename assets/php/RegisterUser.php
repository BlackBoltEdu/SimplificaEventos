<?php
    include_once 'Conexao.php';
    include_once 'User.php';
    
    $con = new Conexao();

    $name = addslashes($_POST['name']);
    $cpf = addslashes($_POST['cpf']);
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    
    //verificar se o e-mail já está cadastrado no banco
    $inserir = $con -> getPDO() -> prepare("SELECT id FROM usuario  WHERE email = :email");
    $inserir -> bindValue (':email' , $email);
    $inserir -> execute();

    if($inserir->rowCount() > 0){
        echo "<script>alert('Usuário já cadastrado'); location.href='../view/cadastro.html'; </script>";
    }else{
        $inserir = $con -> getPDO() -> prepare("INSERT into usuario (nome, cpf, email, senha) VALUES (:nome,:cpf,:email,:senha)");
        $inserir -> bindValue (':nome', $name);
        $inserir -> bindValue (':cpf', $cpf);
        $inserir -> bindValue (':email', $email);
        $inserir -> bindValue (':senha', $password);
        $inserir -> execute();
        echo "<script>alert('Cadastrado com sucesso'); location.href='../SimplificaEventos/index.html'; </script>";
    }
?>