<?php
// CONNECTION AVEC LA BASE DE DONNEES ET GESTION DES ERREURS
   $con=mysqli_connect('127.0.0.7','root','root','partiel'); //$con variable pour ce connecter défini par mysql_connect (puis les données)
   if(!$con){
      die('erreur de connexion a la base de donnée'); // si non accès aux données = erreur 
   }else{
      }
   $pdo= new PDO('mysql:dbname=partiel;host=localhost','root','root'); //sinon connection à la bdd (PDO, PHP data object) extension orienté objet
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs
?>

