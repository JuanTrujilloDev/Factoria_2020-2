
<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/funcs.php');
// Code user Registration
$errors = array();
if(!empty($_POST))
{
//PERSONA
$tipo_documento=$_POST['tdocumento']; 
$numero_documento=$_POST['ndocumento'];   
$lastname=$_POST['apellido'];
$imagen_documento=$_POST['file'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['correo'];
$contraseña=md5($_POST['contrasena']);
$departamento=$_POST['departamento'];
$ciudad=$_POST['ciudad'];
$nombre=$_POST['nombre'];

    //sql para incertar datos en persona
    
    $query = mysqli_query($con,"SELECT * FROM persona WHERE email = '$email' OR numero_documento = '$numero_documento'");
    $result = mysqli_fetch_array($query);

    if($result >0){
        echo "<script>alert('el documento o email ya esta registrado');</script>";
    }else{
        $sql = "INSERT INTO persona (nombre,lastname,direccion,telefono, email,contrasena,departamento,ciudad,numero_documento,tipo_documento,imagen_documento) VAlUES ('$nombre','$lastname','$direccion','$telefono','$email','$contraseña','$departamento','$ciudad','$numero_documento','$tipo_documento','$imagen_documento')";
        if ($con->query($sql) === true) {
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
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
    <div class="card">
        <div class="card-body">
            <div id="nav-tabContent" class="tab-content">
                <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                    <div class="container" style="margin-top: 50px;width: 1000px;">
                        <form class="text-left" method="post">
                            <h4 id="heading" style="color: rgb(0,0,0);margin-bottom: 20px;">Informacion Personal</h4>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback"><strong>Nombre</strong></div><input class="form-control" type="text" required="" name="nombre"></div>
                                    <div class="col-sm-6" style="width: 163px;">
                                        <div class="form-group"><strong>Adjuntar Documento (500 kb)</strong></div>
                                        <div><input type="file" style="color: rgb(0,0,0);background-color: #ffffff;"  name="file"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback"><strong>Apellido</strong></div><input class="form-control" type="text" required="" name="apellido"></div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback"><strong>Correo Electronico *</strong></div><input class="form-control" type="email" required="" name="correo"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><strong>Telefono (fijo/movil)</strong></div><input class="form-control" type="tel" required="" name="telefono"></div>
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-sm-6">
                                                    <div class="form-group has-feedback"><strong>Contraseña *</strong></div><input class="form-control" type="password" required="" name="contrasena"></div>
                                                <div class="col-sm-6" style="width: 163px;">
                                                    <div class="form-group"><strong>Verificar Contraseña *</strong></div><input class="form-control" type="password" required="" name="vcontrasena"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback"><strong>Tipo de Documento *</strong></div><select class="form-control" required="" name="tdocumento"><option value="1" selected="">Cedula de Ciudadania</option><option value="2" selected="">Tarjeta de Identidad</option></select></div>
                                    <div
                                        class="col-sm-6">
                                        <div class="form-group has-feedback"><strong>Direccion*</strong></div><input class="form-control" type="text" required="" name="direccion"></div>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><strong>Numero de Documento *</strong></div><input class="form-control" type="tel" required="" name="ndocumento"></div>
                            <div class="col">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback"><strong>Departamento</strong></div><select class="form-control" required="" name="departamento"><option value="Antioquia">Antioquia</option><option value="Cauca">Cauca</option><option value="Bogota">Bogota</option><option value="Huila" selected="">Huila</option></select></div>
                                        <div
                                            class="col-sm-6" style="width: 163px;">
                                            <div class="form-group"><strong>Ciudad</strong></div><select class="form-control" required="" name="ciudad"><option value="Neiva">Neiva</option><option value="Bogota" selected="">Bogota</option><option value="13">Popayan</option><option value="Santa Elena">Santa Elena</option></select></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="form-check" required=""><label class="form-check-label"><input class="form-check-input" type="checkbox">Acepto terminos y condiciones<br></label></div>
                </div>
                <div class="form-group mx-auto" style="width: 120px;"><button class="btn btn-primary btn-block border rounded" style="background-color: #51b7c9;font-family: ABeeZee, sans-serif;color: #d1edf2;" type="submit" name="submit" value="persona">Registrarse</button></div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row p-0 m-0" style="background-color: #92ddea;">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center p-0 m-0">
            <a class="text-dark" href="https://www.omolds.com/home/" target="_blank">
                <h6 class="text-center p-0 m-2" style="color: #006b7e;font-family: ABeeZee, sans-serif;">Todos los contenidos son de propiedad de la Universidad Surcolombiana 2021 De Todos para Todos</h6>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center align-content-center p-0 m-0">
            <p class="p-0 m-0" style="color: #006b7e;font-family: ABeeZee, sans-serif;">Contactenos xx@usco.edu.co &nbsp;&nbsp;</p>
            <a class="p-0 m-2 d-inline-block" href="https://www.facebook.com/omolds/" target="_blank">
                <h3><i class="fa fa-facebook-square" style="color: #006b7e;"></i></h3>
            </a>
            <a class="p-0 m-2 d-inline-block" href="https://twitter.com/OmoldsCo" target="_blank">
                <h3><i class="fa fa-twitter" style="color: #006b7e;"></i></h3>
            </a>
            <a class="p-0 m-2 d-inline-block" href="https://plus.google.com/u/0/114804899141677023355" target="_blank">
                <h3><i class="fa fa-google-plus" style="color: #006b7e;"></i></h3>
            </a>
            <a class="p-0 m-2 d-inline-block" href="https://www.youtube.com/channel/UCO8bVpiYLrkNhxoQUdyIYEQ" target="_blank">
                <h3><i class="fa fa-youtube-play" style="color: #006b7e;"></i></h3>
            </a>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>