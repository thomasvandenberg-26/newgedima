<?php
function connexionBase(){

   $serveur= "localhost"; 
   $bd="newgedima";
   $login= "Thomas_VANDENBERG";
 $mdp= "10082426";
  

   try {
         $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp,  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'')); 
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO ";
        print $e;
        die();
    }
}

function insertionRealisation($id_participant,$titre_rea,$description_rea,$date_rea,$date_participation,$url_rea){

    $connexion = connexionBase();
    $requete = "INSERT INTO realisation(`id_participant`,`titre_rea`,`description_rea`,`date_rea`,`date_participation`,`url_rea`) VALUES (?,?,?,?,?,?)";
    $prep= $connexion->prepare($requete);
    $prep->execute([$id_participant,$titre_rea,$description_rea,$date_rea,$date_participation,$url_rea]);
    if($prep->fetch())
    {
        return 4;
    }
    else{
        return 2; 
    }
}

function classement(){
   try{
    $connexion = connexionBase();
    $requete = "SELECT `titre_rea`,`nbJaime` FROM realisation ORDER BY`nbJaime` DESC LIMIT 5; ";
    $prep= $connexion->prepare($requete);
    $prep->execute();
    $res = $prep->fetchAll(PDO::FETCH_ASSOC);
    
   }
   catch(PDOException $e)
   {
        print $e;
        die(); 
   }
   return $res; 
}

function inscription($nom_participant, $email_participant, $mdp_participant )
{
    $connexion = connexionBase();
    $requete = "INSERT INTO participants(nom_participant,email_participant,mdp_participant) VALUES(?,?,?)" ;
    $prep= $connexion->prepare($requete);
    $prep->execute([$nom_participant,$email_participant,$mdp_participant]);
    if($prep->fetch())
    {
        return 4;
    }
    else{
        return 2; 
    }



}
function connexion($mail, $mdp){

    $connexion = connexionBase();
    $requete = "SELECT email_participant, mdp_participant FROM participants WHERE email_participant = ? AND mdp_participant= ?";
    $prep = $connexion->prepare($requete);
    $prep->execute([$mail,$mdp]);
    if($prep->fetch())
    {
        return 4;
    }
    else{
        return 2; 
    }


}
function getIdUtilisateur($mail)
{
    $connexion =  connexionBase();
    $requete = " SELECT id_participant FROM participants WHERE email_participant = ?";
    $prep = $connexion->prepare($requete);
    $prep->execute([$mail]);
    $resultat = $prep->fetch(PDO::FETCH_ASSOC);
    return $resultat['id_participant'];
}

function verificationParticipation($id)
{
    $connexion =  connexionBase();
    $requete = "SELECT titre_rea, description_rea from realisation where id_participant = ?";
    $prep = $connexion->prepare($requete);
    $prep->execute([$id]);
    if($prep->fetch())
    {
        return 4;
    }       
    else
    {
        return 2;
    }

}