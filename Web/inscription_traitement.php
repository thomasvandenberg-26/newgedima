<h1>inscription</h1>
<?php
include 'function.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

$today = date("j-m-y");


echo $today; 
echo "<br>"; 

echo recupererDateFin(); 
echo "<br>"; 
echo "test1"; 
if(isset($_POST['nom_participant'])  and isset($_POST['email_participant']) and isset($_POST['mdp_participant']) and isset($_POST['statut']))
{
  echo "test2"; 
    
    $nom_participant = $_POST['nom_participant'];
    $email_participant = $_POST['email_participant'];
    $mdp_participant = $_POST['mdp_participant'];
    $statut = $_POST['statut'];

    

      echo "test"; 
      if($today >= recupererDateDebut() and $today <= recupererDateFin())
      {
        echo "test4"; 
        inscription($nom_participant,$email_participant, $mdp_participant,$statut); 
      }
      else
      {
        $erreur = "le concours n'a pas commencé ou est déjà fini";
        echo $erreur; 
      }
      

  }
?> 