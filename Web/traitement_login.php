<?php

session_start(); 
include 'function.php';


echo $_POST['email_participant'];echo "<br><br>";
echo $_POST['mdp_participant'];echo"<br><br>";
if(isset($_POST['email_participant']) and isset($_POST['mdp_participant'])) {

    echo $_POST['email_participant'] . "<br>";
    $mdp = $_POST['mdp_participant'];
    $mail = $_POST['email_participant'];
    $_SESSION['email_participant'] = $mail;
    $_SESSION['mdp_participant'] = $mdp;
    
echo "e:" . $mail; 
    echo  $mdp; echo "<br";
    $id = getIdUtilisateur($mail);


    
    echo $id; 
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

