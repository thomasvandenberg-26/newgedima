<h1>inscription</h1>
<?php
include 'function.php';

$today = date("j-m-y");


echo $today; 
echo "<br>"; 

echo recupererDateFin(); 
echo "<br>"; 
echo "test1"; 
if(isset($_POST['nom_participant']) and isset($_POST['email_participant']) and isset($_POST['mdp_participant']))
{
  echo "test2"; 
    $nom_participant = $_POST['nom_participant'];
    $email_participant = $_POST['email_participant'];
    $mdp_participant = $_POST['mdp_participant'];

    if($today >= recupererDateDebut() and $today <= recupererDateFin() ){

      echo "test"; 
     
       die();
        if(inscription($nom_participant,$email_participant, $mdp_participant)==4){
        header("Location:login.php");
        
      }
    }
    else{
       ?>

    <p> <?php  echo "<p style='color:#E2E2E2;'> vous ne pouvez vous inscrire le concours est fini ou n'a pas commencé</p>";?></p>
    <?php 
    }


}

?> 