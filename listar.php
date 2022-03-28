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
                <h1>Listar</h1>

                <?php
                    //Incluir funções e conexao com a base de dados
                    include "conexao.php";
                    include "funcoes.php";
                    include "validar.php";

                    $pesquisa = clear ($con, $_POST['busca'] ?? '');

                    //intrucao sql que seleciona a tabela
                    $listar = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
                        
                    //codigo que executa a query
                    $query = mysqli_query($con, $listar);
                    if (!$query) {
                        mensagem ("Query nao executada", 'danger');
                    } 
                ?>

                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" action="listar.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="pesquisa" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereco</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data nascimento</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                        
                    <tbody>    
                    <?php   
                        while ($dados = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php $dados ['cod_pessoa']; ?></td>
                                <td><?php echo mostrar_foto($dados ['foto']); ?></td>
                                <td><?php echo $dados ['nome']; ?></td>
                                <td><?php echo $dados ['endereco']; ?></td>
                                <td><?php echo $dados ['telefone']; ?></td>
                                <td><?php echo $dados ['email']; ?></td>
                                <td><?php echo mostra_data($dados ['data_nascimento']); ?></td>

                                <!--botoes editar e eliminar--> 
                                <td width=150px> 
                                    <a class="btn btn-success btn-sm" href="editar.php?id=<?php echo $dados['cod_pessoa'];?>">Editar</a>
                                    <a class="btn btn-danger btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#confirma"  onclick="pegar_dados('<?php echo $dados['cod_pessoa'] ?>', '<?php echo $dados['nome'] ?>')">Eliminar</a> 
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <a class="btn btn-primary" href="index.php">Voltar</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal- dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirma a eliminação</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="eliminar_script.php" method="POST">
                        <p>Deseja realmente eliminar <b id="nome_pessoa">Nome da pessoa</b>?</p>
                </div>

                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <input type="text" name="nome" id="nome_pessoa_1" value="">
                        <input type="text" name="id" id="cod_pessoa" value="">
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function pegar_dados(id, nome) {
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('nome_pessoa_1').value = nome;
            document.getElementById('cod_pessoa').value = id;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>