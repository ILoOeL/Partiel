<?php include('connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
        <!--<a href="modifier.php" class="Btn_add"> <img src="images/plus.png"> Modifier</a>-->
        <!--<a href="supprimer.php" class="Btn_add"> <img src="images/plus.png"> Supprimer</a>-->
        <table>
            <tr id="items">
                <?php 
                $mysqli = new mysqli("localhost", "root", "root", "partiel");
                $req ="SELECT * FROM users";
                $res = $mysqli->query($req);
                while ($ligne = $res->fetch_assoc()) {
                    echo $ligne['nom'] . ' ' . $ligne['prenom'] . ' ' . $ligne['age'] . '<br>';
                }
                ?>
                <!--<th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>-->
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </table>




    </div>
</body>

</html>