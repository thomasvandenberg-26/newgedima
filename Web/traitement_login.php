<?php

session_start(); 
include 'function.php';

echo "test"; 


if(isset($_POST['formconnexion'])){

    echo $_POST['email_participant'];
    echo "test2"; 
    $mdp = $_POST['mdp_participant'];
    $mail = $_POST['email_participant'];
    $_SESSION['email_participant'] = $mail;
    $_SESSION['mdp_participant'] = $mdp;
    
    $id = getIdUtilisateur($mail);

   if(connexion($mail,$mdp)==4)
   {
    echo "OUI";
    $_SESSION["id"] = $id;
     if(verificationParticipation($id) == 1)
     {
         echo "Vous avez déjà participé";
         header("Location:profil.php");
     }
     else
     {
         header("Location:formulaire_realisation.php");
     }
   }
   else 
   {
    echo "cet utilisateur n'existe pas";
   }
}