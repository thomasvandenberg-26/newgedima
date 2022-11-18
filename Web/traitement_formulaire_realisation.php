<?php
 define ('SITE_ROOT', realpath(dirname(__FILE__)));
$data=[];
 include 'function.php';

 if (!empty($_POST['titre_rea']) and !empty($_POST['description_rea']) and !empty($_POST['date_rea']) and !empty($_POST['date_participation']) and !empty($_POST['upfile'])){
   $titre_rea= htmlspecialchars(strip_tags($_POST['titre_rea'])); 
   $description_rea= htmlspecialchars(strip_tags($_POST['description_rea'])); 
    $date_rea= htmlspecialchars(strip_tags($_POST["date_rea"]));
    $date_participation = htmlspecialchars(strip_tags($_POST["date_participation"])); 
    $fichier = $_FILES['upfile']; 
   echo 'titre' . $titre_rea; 
   echo 'description ' . $description_rea;
   echo 'date realisation :'  . $date_rea;  
   echo 'date participation : ' .$date_participation;
    echo "titre_rea ". $titre_rea;
    $tailleMax= 5097152;
    $extensionsValides = array('jpg', 'jpeg', 'pdf', 'png');

    if($_FILES['upfile']['size']> $tailleMax)
    {
        echo ' la taille de limage est superieur a 5mo'; 
    }else{
        $extensionsUpload = strtolower(substr(strrchr($_FILES['upfile']['name'], '.'), 1));
        if (in_array($extensionsUpload, $extensionsValides) == false) { // si le type d'extension du fichier est envoyé, la participation est refusé
            echo 'extension du fichier : incompatible';
          }else {
            echo 'insertion base de données';
            $chemin = "/assets/photos";
            $nom =  date("Y-m-d-H-i-s") . "." . $extensionsUpload;
           $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], SITE_ROOT, $chemin .$nom);
            // $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], $chemin . $nom);
            $fichier= $_FILES['upfile']["name"];
         
          
         $success = 1; 
            $msg = "insertio ok";
            $res = ["success" => $success, "msg" => $msg]; 
            insertionRealisation($titre_rea,$description_rea,$date_rea,$date_participation, $fichier);
            echo json_encode($res);
            
          }
      }
 }
     
?>
