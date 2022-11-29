<?php
define('SITE_ROOT', realpath(dirname(__FILE__)));
$data = [];
include 'function.php';
echo "test"; 
if (isset($_POST['titre_rea']) and isset($_POST['description_rea']) and isset($_POST['date_rea']) and isset($_POST['date_participation']) and isset($_FILES['upfile'])) {
   echo "test2"; 
   $titre_rea = htmlspecialchars(strip_tags($_POST['titre_rea']));
   echo $titre_rea; 
   $description_rea = htmlspecialchars(strip_tags($_POST['description_rea']));
   $date_rea = htmlspecialchars(strip_tags($_POST["date_rea"]));
   $date_participation = htmlspecialchars(strip_tags($_POST["date_participation"]));
   
   $message = "pas derreur";
   $msg="";
   $fichier = "/web/assets/photos/" . $_FILES['upfile']['name'];
   $allowed = [
      "jpg" => "image/jpg",
      "jpeg" => "image/jpeg",
      "png" => "image/png"
   ];

   $nom = date("Y-m-d-H-i-s")."_". strtolower($_FILES['upfile']['name']);
   $filetype = $_FILES['upfile']['type'];
   $filesize = $_FILES['upfile']['size'];
   $extension = strtolower(pathinfo($nom, PATHINFO_EXTENSION));
   $success= 1;
   $newfilename = __DIR__ . "/assets/photos/$nom";
   if (!array_key_exists($extension, $allowed) || !in_array($filetype, $allowed)) {
      $message = "the ext is incorrect";
      $msg="the ext is incorrect";   
      $success = 0;
   }
   if ($filesize >= 5097152) {
      $message = "fichier trop volumineux";
      $msg=  "fichier trop volumineux";
      $success = 0; 
   }
   
   if ($success !=0){
      $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], $newfilename);
      insertionRealisation($titre_rea, $description_rea, $date_rea, $date_participation, $fichier);
      $success = 1;
      $msg="OK";
   }
   $res = ["success" => $success, "msg" => $msg];
   var_dump( $res); 
   echo json_encode($res);   
}
     

   
?>
