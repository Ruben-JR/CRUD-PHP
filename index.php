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
    <?php 
        include "validar.php";
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotrom">
                    <h1 class="display-4">CRUD WEB</h1>
                    <p class="lead">Sistema simplificado de crud. Base de estudo para criacao de sistemas web com php e Mysql</p>
                    <hr class="my-4">
                    <p>Acesse as funcoes</p>
                    <a class="btn btn-primary btn-lg" href="registrar.php" role="button">Registrar</a>
                    <a class="btn btn-primary btn-lg" href="listar.php" role="button">Listar</a>
                    <a class="btn btn-primary btn-lg" href="login.php" role="button">Log-out</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>