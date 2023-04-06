<?php
$data = [];
session_start(); 
include 'function.php';

if (!empty($_POST['titre_rea']) and !empty($_POST['description_rea']) and !empty($_POST['date_rea']) and !empty($_POST['date_participation']) and !empty($_FILES['upfile'])) {
   $date_debut ="2023-04-06";
   $date_fin = "2023-04-10";
   $date_now =  date("Y-m-d");
   $id =  $_SESSION["id"];
   if ($date_now < $date_debut || $date_now > $date_fin)
   {
      echo "le concours a n'a pas commencé ou est déja fini";
   }
   else{

   $titre_rea= htmlspecialchars(strip_tags($_POST['titre_rea'])); 
   $description_rea= htmlspecialchars(strip_tags($_POST['description_rea'])); 
    $date_rea= htmlspecialchars(strip_tags($_POST["date_rea"]));
    $date_participation = htmlspecialchars(strip_tags($_POST["date_participation"])); 
    
   $fichier = "/web/assets/photos/" . $_FILES['upfile']['name'];

   $nom = date("Y-m-d-H-i-s")."_". strtolower($_FILES['upfile']['name']);
   $filetype = $_FILES['upfile']['type'];
   $filesize = $_FILES['upfile']['size'];
   $extension = strtolower(pathinfo($nom,PATHINFO_EXTENSION));    
   $allowed = [
      "jpg" => "image/jpg",
      "jpeg" => "image/jpeg",
      "png" => "image/png"
     ];   
  
   $newfilename = __DIR__ . "/assets/photos/$nom";
   if ($filesize >= 5097152) {
      echo  'fichier trop volumineux';
   }else{ 
      if (!array_key_exists($extension,$allowed)|| !in_array($filetype,$allowed)) { // si le type d'extension du fichier est envoyé, la participation est refusé
      echo 'extension du fichier : incompatible';
      }else{
      $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], $newfilename);
      insertionRealisation($id,$titre_rea, $description_rea, $date_rea, $date_participation, $fichier);
      echo 'vous avez posté votre réalisation';
       }
   
   }
  
}
}

   
?>
