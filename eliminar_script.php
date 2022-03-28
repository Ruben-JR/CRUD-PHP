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

            //variaveis
            $id = clear ($con, $_POST['id']);
            if(!$id){
                echo "Id nao foi recebido";
            }
            $nome = clear ($con, $_POST['nome']);
            
            //query para eliminar dados na tabela da base de dados
            $delete = "DELETE FROM `pessoas` WHERE `cod_pessoa` = $id";

            //codigo que executa a query
            $query = mysqli_query($con, $delete); 
            if (!$query) { 
                mensagem ("Excluido com sucesso", 'success'); 
                header('Location: listar.php');
                die();
            } 
            else{ 
                mensagem ("Falha ao excluir", 'danger');  
            } 
        ?>

        <a class="btn btn-primary" href="listar.php">Voltar</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>