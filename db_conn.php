<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="login";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connexion échouée" . mysqli_connect_error());
}
echo "";
?>