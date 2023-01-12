<?php
include('connexion.php'); 
if(isset($_POST['button'])){  
  $nom = $_POST['nom']; 
  $prenom = $_POST['prenom']; 
  $age = $_POST['age']; 
$req = "INSERT INTO users(nom, prenom, age) VALUES(?, ?, ?)";
$execute = $pdo->prepare($req); 
$stm = $execute->execute([$nom, $prenom, $age]);  

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un utilisateur</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" placeholder="Nom *" name="nom" required>
            <label>Prénom</label>
            <input type="text" placeholder="Prénom *" name="prenom" required>
            <label>âge</label>
            <input type="number" placeholder="Age *" name="age" required>
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>