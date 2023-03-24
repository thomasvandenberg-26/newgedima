<h1>inscription</h1>
<?php
include 'function.php';

echo "test1"; 
if(isset($_POST['forminscription']))
{

    $nom_participant = $_POST['nom_participant'];
    $email_participant = $_POST['email_participant'];
    $mdp_participant = $_POST['mdp_participant'];

    if(inscription($nom_participant,$email_participant, $mdp_participant)==4){
        header("Location:login.php");
        
    }

    else{
       ?>

    <p> <?php echo "il manque des informations pour pouvoir vous inscrire" ?></p>
    <?php 
    }

}
?> 