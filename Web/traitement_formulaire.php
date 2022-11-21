<?php
 define ('SITE_ROOT', realpath(dirname(__FILE__)));
$data=[];
 include 'function.php';

  if (!empty($_POST['titre_rea']) and !empty($_POST['description_rea']) and !empty($_POST['date_rea']) and !empty($_POST['date_participation']) and !empty($_FILES['upfile']) ){
   $titre_rea= htmlspecialchars(strip_tags($_POST['titre_rea'])); 
   $description_rea= htmlspecialchars(strip_tags($_POST['description_rea'])); 
    $date_rea= htmlspecialchars(strip_tags($_POST["date_rea"]));
    $date_participation = htmlspecialchars(strip_tags($_POST["date_participation"])); 
     $fichier = $_FILES['upfile']['name']; 
    
           $allowed = [
            "jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "png" => "image/png"
           ];
          
           $nom =  strtolower($_FILES['upfile']['name']); 
           $filetype = $_FILES['upfile']['type'];
           $filesize = $_FILES['upfile']['size'];
           $extension = strtolower(pathinfo($nom,PATHINFO_EXTENSION));
       
      if(!array_key_exists($extension,$allowed) || !in_array($filetype,$allowed)){
        die("Erreur : format de fichier incorrect"); 
      }
        if($filesize >= 5097152){
          die("fichier trop volumineux"); 
        }
       
        $newfilename = __DIR__ . "/assets/photos/$nom";

         if( $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], $newfilename))
          {
               print "Téléchargé avec succes !";
          }
          else{
             print "nom fichier : " . $_FILES['upfile']['name']; 
             print "Echec du téléchargement " ; 
          }
       
         $success = 1; 
            $msg = "insertio ok";
            $res = ["success" => $success, "msg" => $msg]; 
           if( insertionRealisation($titre_rea,$description_rea,$date_rea,$date_participation,$fichier)){
              print "insertion réussi";
           };
           {
              print "erreur d'insertion"; 
           }
            echo json_encode($res);
            
          }
     
?>
