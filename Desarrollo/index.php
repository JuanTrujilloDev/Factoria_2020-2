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
                    </div>
            </div>
        </nav>
    </div>

    <?php
session_start();

include('includes/config.php');

$sql= "SELECT id, nombre, usuario, imagen_producto, descripcion FROM producto";

$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<div class='container'; style='margin-top: 40px';margin-bottom: '40px'>";
    echo "<div class='row product-list'>";
  while($row = $result->fetch_assoc()) {
    echo "<div class='col-sm-6 col-md-4 product-item' style='width: 250px;'>";
    echo "<div class='card border-dark'>";
    echo "<div class='card-header bg-dark text-light'style='font-family: Raleway;
    sans-serif; background-color: #ffffff;'>";
     echo "<h5 class='m-0'>".$row['nombre']."</h5>";
    echo "</div>";
    echo "<img class='img-fluid card-img w-100 d-block rounded-0' 
    src='assets/img/".$row['imagen_producto']."' style='height: 150px;'>";
    echo "<div class='card-body'>";
    echo "<p class='card-text'>".$row['descripcion']."</p>";
    echo "</div>";
    echo "<div class='text-secondary d-flex card-footer'>
    <button class='btn btn-dark btn-sm' type='button'><i></i>".$row['usuario']."</button><i class='fa fa-heart ml-auto' style='color: rgb(238,46,46);font-size: 31px;'></i></div>";
    echo "</div>";
    echo "</div>";

  }
  echo "</div>";
  echo"</div>";
} else {
  echo "0 results";
}
$con->close();
?>
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
