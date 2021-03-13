<?php
session_start();

  if(!empty($_POST)){
    require_once "includes/config.php";

    $email = mysqli_real_escape_string($con,$_POST['correo']);
    $password = md5(mysqli_real_escape_string($con,$_POST['contraseña']));
    //persona
    $query = mysqli_query($con,"SELECT * FROM persona WHERE email='$email' AND contrasena = '$password'");

    //empresa
    $queryy = mysqli_query($con,"SELECT * FROM empresa WHERE email='$email' AND contrasena = '$password'");
    
    mysqli_close($con);
    $resultado = mysqli_num_rows($query);// resultado persona
    $resultadoo = mysqli_num_rows($queryy);//resultado empresa

    //IF INGRESO PERSONA
    if($resultado > 0)
    {
        $data = mysqli_fetch_array($query);
        session_start();
        $_SESSION['email'] = $data['email'];

        header ('location: index.php');
        }else{
            echo 'El usuario o la clave son incorrectos';
            session_destroy();
        }

    //IF DE INGRESO EMPRESA
    if($resultadoo > 0)
    {
        $data = mysqli_fetch_array($queryy);
        session_start();
        $_SESSION['email'] = $data['email'];

        header ('location: index.php');
        }else{
            echo 'El usuario o la clave son incorrectos';
            session_destroy();
        }
  }
  

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Todos</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="assets/css/-Filterable-Cards-.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-142.css">
    <link rel="stylesheet" href="assets/css/dh-navbar-inverse.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php include "includes/nav.php";?>
    <div class="register-photo" style="background-color: rgb(255,255,255);">
        <div class="form-container">
            <div class="image-holder"></div>
            <form class="form-signin" method="post" >
                <div class="container text-center" style="width: 246px;margin-top: -50px;"><img class="img-fluid profile-img-card" src="assets/img/Logo.png" style="width: 100px;">
                    <h5 style="font-size: 35px;color: #00b8d9;">Inicio </h5>
                    <span class="form-control"> </span>
                    <input class="form-control" type="text" id="text"  placeholder="Correo Electronico" autofocus="" style="font-size: 14px;color: rgb(95,95,95);font-family: sans-serif;" name="correo">
                    <input class="form-control" type="password" id="inputPassword" required="" placeholder="Contraseña" style="font-size: 14px;color: rgb(95,95,95);font-family: sans-serif;" name="contraseña">
                    <button class="btn btn-primary btn-block btn-lg border rounded btn-signin" type="submit" style="font-size: 16px;font-family: sans-serif;background-color: #51b7c9;color: #d1edf2;">Entrar </button>
                </div>
                <div>
                <a href="registro.php" button class="btn btn-primary btn-block btn-lg border rounded " style="font-size: 16px;font-family: sans-serif;background-color: #51b7c9;color: #d1edf2;" >Registro </button>
                <a class=""  href="#">Olvido la contraseña?</a><br>
                </div>
            </form>
        </div>
    </div>
                
</body>