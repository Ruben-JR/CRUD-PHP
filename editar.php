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
        <div class="row">
            <div class="col">
                <h1>Editar</h1>

                <?php
                    //conexao com a base de dados e funcoes
                    include "conexao.php";
                    include "funcoes.php";
                    include "validar.php";

                    //instrucao que recebe o id que vai ser editado
                    $id = clear ($con, $_GET['id'] ?? '');
                    $editar = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

                    $query = mysqli_query($con, $editar);
                    if (!$query) {
                        mensagem ("Id nao foi recebido", 'danger');
                    } 

                    $dados = mysqli_fetch_array($query);
                    if (!$dados) {
                        mensagem ("Query nao executada", 'danger');
                    } 
                ?>

                <form action="editar_script.php" method="POST"> 
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $dados ['cod_pessoa']; ?>">
                    </div>    

                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" name="nome" value="<?php echo $dados ['nome']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereco</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $dados ['endereco']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $dados ['telefone']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $dados ['email']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="data">Data nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" value="<?php echo $dados ['data_nascimento']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="data">Foto</label>
                        <input type="file" class="form-control" name="foto" value="<?php echo $dados['foto']; ?>">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-success" value="Editar">
                        <a class="btn btn-primary" style="margin: 1%" href="listar.php">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>