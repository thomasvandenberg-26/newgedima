<?php
function connexionBase()
{
$serveur = "localhost";
$bd = "newgedima";
$login = "Thomas_VANDENBERG";
$mdp = "10082426";
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
function GED_getAllRealisations(){
    try {
        $conn = connexionBase();
        $requete = "SELECT id_realisation, titre_rea, description_rea from realisation";
        $lignes = $conn->query($requete)->fetchAll(PDO::FETCH_ASSOC);
        return $lignes;
    }
    catch (Exception $e){
        throw new Exception("GED_getAllRealisation()" . $e->getMessage());

    }

}