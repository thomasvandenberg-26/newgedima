<?php

session_start(); 
include 'function.php';


echo $_POST['email_usr'];echo "<br><br>";
echo $_POST['mdp_usr'];echo"<br><br>";
if(isset($_POST['email_usr']) and isset($_POST['mdp_usr'])) {

    echo $_POST['email_usr'] . "<br>";
    $mdp = $_POST['mdp_usr'];
    $mail = $_POST['email_usr'];
    $_SESSION['email_usr'] = $mail;
    $_SESSION['mdp_usr'] = $mdp;
   // echo "coucou";
//echo "e:" . $mail; 
  //  echo  $mdp; echo "<br";
    $id = getIdUtilisateur($mail);
    echo "id" . $id['id_usr']; 
   
    $s = getStatut($id['id_usr']); 
    $_SESSION['statut'] = $s; 
    
    echo "statut : " . $s['statut_usr'];
    
    
    
    
    echo $id; 
   if(connexion($mail,$mdp)==4)
   {
            if($s == "gerant")
            {
            header("Location: parametres.php"); 
            
            }
            else {
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
   }
   else 
   {
    echo "cet utilisateur n'existe pas";
   }
}

