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
if(isset($_POST['nom_usr'])  and isset($_POST['email_usr']) and isset($_POST['mdp_usr']))
{
  echo "test2"; 
    
    $nom_usr = $_POST['nom_usr'];
    $email_usr = $_POST['email_usr'];
    $mdp_usr = $_POST['mdp_usr'];
    $statut = "participant"; 

    

     
        inscription($nom_usr,$email_usr, $mdp_usr,$statut); 
      

  }
?> 