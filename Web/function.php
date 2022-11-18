<?php
function connexionBase(){

   $serveur= "localhost"; 
   $bd="newgedima";
   $login= "Thomas_VANDENBERG";
   $mdp= "10082426";
  

   try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'')); 
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO ";
        print $e;
        die();
    }
}

function insertionRealisation($titre_rea,$description_rea,$date_rea,$date_participation,$url_rea){

    $connexion = connexionBase();
    $requete = "INSERT INTO realisation(`titre_rea`,`description_rea`,`date_rea`,`date_participation`,`url_rea`) VALUES (?,?,?,?,?)";
    $prep= $connexion->prepare($requete);
    $prep->execute([$titre_rea,$description_rea,$date_rea,$date_participation,$url_rea]);
    if($prep->fetch())
    {
        return 4;
    }
    else{
        return 2; 
    }
}

