<?php
session_start();

?>

<DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Inscription Simplon CI</title>

<meta name="description" content="La description visible sur les moteurs de recherche">
</head>
<body>

<nav class=" navbar-light justity-content-center fs-3 mb-5" style="background-color: #00ff5573">
         Tableau d'Inscris
</nav>
<?php
if(isset($_GET['msg'])){
  $msg= $_GET['msg'];
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  '. $msg .'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>


      <div class="container">
            <a href ="add_new.php" class="btn btn-dark"> Ajoutez </a> </br>



            <table class="table table-hover text-center">
            </br>
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom (s)</th>
      <th scope="col">Email</th>
      <th scope="col">Numéro</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php
    include "db_conn.php";

    $sql = "SELECT `id`, `nom`, `prenom`, `email`, `number` FROM `participant` WHERE 1";
    $result = mysqli_query($conn,$sql); 
    while ($row = mysqli_fetch_assoc($result)) {
    
      ?>
       <tr>
      <td ><?php echo $row['id'] ?></td>
      <td ><?php echo $row['nom'] ?></td>
      <td ><?php echo $row['prenom'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['number'] ?></td>
      <td>
      <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class ="fa-solid fa-pen-to-square fs-3 me-3"></i></a>
      <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class ="fa-solid fa-trash fs-5"></i></a>
      </td>
    </tr>
    
    <?php } ?>
    
    
  </tbody>
</table>
<a href ="logout.php" class="btn btn-danger"> deconnexion </a> 
<?php  ?>
      </div>
 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>

 