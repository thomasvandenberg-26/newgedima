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

function insertionRealisation($id_usr,$titre_rea,$description_rea,$date_rea,$date_participation,$url_rea){

    $connexion = connexionBase();
    $requete = "INSERT INTO realisation(`id_usr`,`titre_rea`,`description_rea`,`date_rea`,`date_participation`,`url_rea`) VALUES (?,?,?,?,?,?)";
    $prep= $connexion->prepare($requete);
    $prep->execute([$id_usr,$titre_rea,$description_rea,$date_rea,$date_participation,$url_rea]);
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

function inscription($nom_usr, $email_usr, $mdp_usr, $statut)
{
    
    $connexion = connexionBase();
    $requete = "INSERT INTO users(nom_usr,email_usr,mdp_usr,statut_usr ) VALUES(?,?,?,?)" ;
    $prep= $connexion->prepare($requete);
    $prep->execute([$nom_usr,$email_usr,$mdp_usr, $statut]);
    $prep->fetch();
    if($prep->fetch())
    {
        return 1;
    }
    else{
        return 0; 
    }
}
    

function connexion($mail, $mdp){

    $connexion = connexionBase();
    $requete = "SELECT email_usr, mdp_usr FROM users WHERE email_usr = ? AND mdp_usr= ?";
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
    $requete = " SELECT id_usr FROM users WHERE email_usr = ?";
    $prep = $connexion->prepare($requete);
    $prep->execute([$mail]);
    $resultat = $prep->fetch(PDO::FETCH_ASSOC);
    return $resultat['id_usr'];
}

function verificationParticipation($id)
{
    $connexion =  connexionBase();
    $requete = "SELECT titre_rea, description_rea from realisation where id_usr = ?";
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

function parametresdates($date_debut,$date_fin){
    try{
    $connexion = connexionBase();
    $requete = "INSERT INTO parametres(date_debut_concours,date_fin_concours) VALUES (?,?)";
    $prep = $connexion->prepare($requete);
    $prep->execute([$date_debut,$date_fin]);
    }
    catch(PDOException $e)
    {
        return $e; 
    }



}

function recupererDateDebut(){
    try{
        $connexion = connexionBase();
        $requete = " SELECT date_debut_concours FROM parametres";
        $prep = $connexion->prepare($requete);
        $res = $prep->fetchColumn(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    {
        return $e; 
    }
    return $res; 
}
function recupererDateFin()
{
    try{
        $connexion = connexionBase();
        $requete = " SELECT date_fin_concours FROM parametres";
        $prep = $connexion->prepare($requete);
        $res = $prep->fetchColumn(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    {
        return $e; 
    }
    return $res; 
}

function getStatut($id)
{
    try{
        $connexion = connexionBase();
        $requete = " SELECT statut_usr FROM users WHERE id_usr = $id";
        $prep = $connexion->prepare($requete);
        $res = $prep->fetchColumn(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    {
        return $e; 
    }
    return $res; 
}