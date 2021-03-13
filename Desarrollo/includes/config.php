<?php
/*define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'fundacion');*/

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'fundacion';

$con = @mysqli_connect($server,$user,$password,$database);
// Check connection

?>