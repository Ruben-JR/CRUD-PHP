<?php
    include "conexao.php";
    include "funcoes.php";

    //variaveis para receber os dados do post com uma funcao para evitar sql injection
    $email = clear ($con, $_POST["email"]);
    $password = clear ($con, $_POST["password"]);
    $nome = clear ($con, $_POST["nome"]);

    //query para a base de dados
    $inserir = "INSERT INTO `utilizador` (`email`, `password`, `nome`) VALUES ('$email', '$password', '$nome')";
    
    //execusao da query
    if(mysqli_query($con, $inserir)){
        echo "$nome foi registado com sucesso";
    }
    else{
        echo "Registro nao foi feito";
    }
?>