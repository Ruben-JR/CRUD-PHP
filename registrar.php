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
                <h1>Registrar</h1>
                <?php
                    include "validar.php";
                ?>
                <form method="POST" action="registrar_script.php" enctype="multipart/form-data"> 
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereco</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="data">Data nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" name="foto" accept="image/*">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-success" value="Registar">
                        <a class="btn btn-primary" style="margin: 1%" href="index.php">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>