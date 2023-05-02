<?php include 'function.php'; 

if(isset($_POST['date_debut_concours']) and isset($_POST['date_fin_concours'])){
   
  
    echo "test"; 
    $date_debut_concours = $_POST['date_debut_concours'];
    echo $date_debut_concours; 
    $date_fin_concours = $_POST['date_fin_concours'];
    if(parametresdates($date_debut_concours,$date_fin_concours) == 4){
      echo "param ok"; 
    }
} 