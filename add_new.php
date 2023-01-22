<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$number = $_POST['number'];

    $sql = "INSERT INTO `participant`(`id`, `nom`, `prenom`, `email`, `number`) VALUES (NULL,'$nom','$prenom','$email','$number')";

    $result = mysqli_query($conn,$sql);
    
    if($result){

        echo("Enregistré avec succès");

    }else{
        echo "Inscription échouée" . mysqli_error($conn);
    }
}




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

<nav class="navbar navbar-light justity-content-center fs-3 mb-5" style="background-color: #00ff5573">
         Formulaire d'Inscription
</nav>

<div class="container">

<div class="text-center mb-4">
    <h3>Ajouter un participant</h3>
    <p class="text-muted">Completez le tableau</p>

</div>

<div class="container d-flex justity-content-center">
    <form action="" method="post" style="width: 50vw; min-width: 300px;">
    <div class="row mb-3">
        <div class="col">
            <label class="from-label">
              Nom :  
            </label>
            <input type="text" class="form-control" placeholder="votre nom" name="nom" required>
        </div>

        <div class="col">
            <label class="from-label">
              Prénom(s) :  
            </label>
            <input type="text" class="form-control" placeholder="votre prenom" name="prenom" required>
        </div>

        <div class="mb-3">
            <label class="from-label">
              Email :  
            </label>
            <input type="email" class="form-control" placeholder="nom@example.com" name="email" required>
        </div>


        <div class="col">
            <label class="from-label">
              Numéro de Téléphone:  
            </label>
            <input type="number" class="form-control" placeholder="votre numéro" name="number" required>
</div>
</br>
<div>
</br>
<button type ="submit" class="btn btn-success" name="submit" >Envoyez</button>
    <a href="add_new.php" class="btn btn-danger">Annuler</a>


</div>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>

