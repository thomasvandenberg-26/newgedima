<?php
define('SITE_ROOT', realpath(dirname(__FILE__)));
$data = [];
include 'function.php';
echo "test"; 
if (!empty($_POST['titre_rea']) and !empty($_POST['description_rea']) and !empty($_POST['date_rea']) and !empty($_POST['date_participation']) and !empty($_FILES['upfile'])) {
   echo "test2";
   $date ="2023-03-28";
   $date_now =  date("Y-m-d");
   if ($date_now < $date || $date_now > $date)
   {
      echo "vous netes pas à la bonne date";
   }
   else{

   $titre_rea= htmlspecialchars(strip_tags($_POST['titre_rea'])); 
   $description_rea= htmlspecialchars(strip_tags($_POST['description_rea'])); 
    $date_rea= htmlspecialchars(strip_tags($_POST["date_rea"]));
    $date_participation = htmlspecialchars(strip_tags($_POST["date_participation"])); 
    $msg =""; 
    $success = 0; 
    
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
      $msg = " fichier trop volmineux";
   }else{ 
      if (!array_key_exists($extension,$allowed)|| !in_array($filetype,$allowed)) { // si le type d'extension du fichier est envoyé, la participation est refusé
       $msg = " ext is incorrect";
      }else{
      $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], $newfilename);
      insertionRealisation($titre_rea, $description_rea, $date_rea, $date_participation, $fichier);
       $msg = "vous avez posté votre réalisation";;
       $success = 1 ; 
       }
   
   }
  $res = ["success" => $success, "msg" => $msg];
echo json_encode($res);
}
}


   
?>
