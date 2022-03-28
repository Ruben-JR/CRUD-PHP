<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
    <script defer src="js/bootstrap.min.js"></script>
    <title>CRUD</title>
</head>
<body>
    <div class="container">
        
        <?php
            //conexao com a base de dados
            include "conexao.php";
            include "funcoes.php";
            include "validar.php";

            //variaveis para receber dados do POST
            $nome = clear ($con, $_POST['nome']);
            $endereco = clear ($con, $_POST['endereco']);
            $telefone = clear ($con, $_POST['telefone']);
            $email = clear ($con, $_POST['email']);
            $data_nascimento = clear ($con, $_POST['data_nascimento']);
            $foto = clear ($con, $_FILES['foto']);            //Recebendo ficheiros
            $nome_foto = mover_foto($foto) ;     //quardando nome da foto
            if($nome_foto == 0){
                $nome_foto == NULL;
            }

            //query para adicionar dados na tabela da base de dados
            $insert = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email`, `data_nascimento`, `foto`) VALUES ('$nome', '$endereco', $telefone, '$email', '$data_nascimento', '$nome_foto')";

            //codigo que executa a query
            if (mysqli_query($con, $insert)) {
                if($nome_foto != NULL){
                    echo "img src='img/$nome_foto' title='$nome_foto'>";    //apresentar a foto da pessoa
                }
                mensagem ("$nome registrado com sucesso", 'success');
            } 
            else{ 
                mensagem ("$nome nao foi registrado", 'danger');  
            } 
        ?>

        <a class="btn btn-primary" href="registrar.php">Voltar</a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>