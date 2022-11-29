<?php
define('SITE_ROOT', realpath(dirname(__FILE__)));
$data = [];
include 'function.php';
echo "test"; 
if (!empty($_POST['titre_rea']) and !empty($_POST['description_rea']) and !empty($_POST['date_rea']) and !empty($_POST['date_participation']) and !empty($_FILES['upfile'])) {
   $titre_rea= htmlspecialchars(strip_tags($_POST['titre_rea'])); 
   $description_rea= htmlspecialchars(strip_tags($_POST['description_rea'])); 
    $date_rea= htmlspecialchars(strip_tags($_POST["date_rea"]));
    $date_participation = htmlspecialchars(strip_tags($_POST["date_participation"])); 
    
   $fichier = "/web/assets/photos/" . $_FILES['upfile']['name'];
   $allowed = [
      "jpg" => "image/jpg",
      "jpeg" => "image/jpeg",
      "png" => "image/png"
   ];

   $nom = date("Y-m-d-H-i-s")."_". strtolower($_FILES['upfile']['name']);
   $filetype = $_FILES['upfile']['type'];
   $filesize = $_FILES['upfile']['size'];
   $extensionsValides = array('jpg', 'jpeg', 'pdf', 'png');
   $extensionsUpload = strtolower(substr(strrchr($_FILES['upfile']['name'], '.'), 1));
   $newfilename = __DIR__ . "/assets/photos/$nom";
   if (in_array($extensionsUpload, $extensionsValides) == false) { // si le type d'extension du fichier est envoyé, la participation est refusé
      echo 'extension du fichier : incompatible';
}
   if ($filesize >= 5097152) {
      echo  'fichier trop volumineux';
   }
   
   else{
      $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], $newfilename);
      insertionRealisation($titre_rea, $description_rea, $date_rea, $date_participation, $fichier);
      echo 'vous avez posté votre réalisation';
   }
   
//    $res = ["success" => $success, "msg" => $msg];
//    var_dump( $res); 
//    echo json_encode($res);   
// 
}
     

   
?>
