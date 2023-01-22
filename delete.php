<?php
include "db_conn.php";


$id = $_GET['id'];
$sql = "DELETE FROM `participant` WHERE id = '$id'";
$result= mysqli_query($conn, $sql);
if ($result){
    header("Location:index.php? msg= Supprimé avec succès");
}
else{
    echo ("Suppression échouée") .mysqli_error($conn);
}
?>
