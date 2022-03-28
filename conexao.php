<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "RJ9414/*-+";
    $database = "empresa";

    //criando conexao
    $con = mysqli_connect($host, $username, $password, $database);

    //verificando canexao
    if(!$con){
        echo "Conexao falhada" .mysqli_connect_error();
    }