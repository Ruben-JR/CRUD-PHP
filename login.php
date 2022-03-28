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
            <div class="col-3"></div>
            <div class="col-6">
                <div class="jumbotrom">
                    <h1 class="display-4">Login</h1>
                    <p class="lead">Login with you access data</p>
                    <hr class="my-4">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" require>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <a href="registo_login.php" class="btn btn-primary">Registrar</a>
                        </div>           
                    </form>   
        <!------------------------------------------------------PHP-------------------------------------------------------->
                    <?php
                        //conexao com a base de dados
                        include "conexao.php";

                        //verificar se foi enviado o email do usuario
                        if(isset($_POST['email'])){
                            $email = mysqli_real_scape_string ($con, $_POST['email']); //evitar o sql injection
                            $password = mysqli_real_scape_string ($con, $_POST['password']); 

                            //Query para pesquisa no banco de dados
                            $login = "SELECT * FROM `empresa.utilizador` WHERE email = '$email' AND pass = '$password'";
                           
                            //codigo que executa a query
                            $query = mysqli_query($con, $login);
                            if($query){ 
                                if(mysqli_num_rows($query) == 1){
                                    $dados = mysqli_fetch_array($query);
                                    if($email == $dados["email"] && $password == $dados["pass"]){
                                        session_start();
                                        $_SESSION['user'] = "Ruben";
                                        header("location: index.php");
                                    }
                                    else{
                                        echo "Dados invalidos";
                                    }
                                }
                                else{
                                    echo "Dados nao encontrados na base de dados";
                                }
                            }
                            else{
                                print "Nenhum resultado no banco de dados";
                            }
                        }
                    ?>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>