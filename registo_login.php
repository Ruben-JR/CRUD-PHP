<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
    <title>CRUD</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="jumbotrom">
                    <h1 class="display-4">Sign</h1>
                    <p class="lead">Doing the register adding your datas</p>
                    <hr class="my-4">
                    <form method="registoLogin_script.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" require>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" require>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" require>
                         </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-primary" href="login.php">Cancelar</a>
                    </form>
                </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>