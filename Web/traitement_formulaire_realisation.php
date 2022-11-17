<?php
// define ('SITE_ROOT', realpath(dirname(__FILE__)));
$data=[];
// include 'function.php';
// if (isset($_POST['envoi']))
// {
    // $id =1; 
    // $titre_rea= htmlspecialchars(strip_tags($_POST['titre_realisation'])); 
    // $description_rea= htmlspecialchars(strip_tags($_POST['description_rea'])); 
    // $date_participation = htmlspecialchars(strip_tags($_POST["date_participation"])); 
    // $date_rea= htmlspecialchars(strip_tags($_POST["titre_rea"]));

    // echo "titre_rea ". $titre_rea;
    // $tailleMax= 5097152;
    // $extensionsValides = array('jpg', 'jpeg', 'pdf', 'png');

    // if($_FILES['upfile']['size']> $tailleMax)
    // {
    //     echo ' la taille de limage est superieur a 5mo'; 
    // }else{
    //     $extensionsUpload = strtolower(substr(strrchr($_FILES['upfile']['name'], '.'), 1));
    //     if (in_array($extensionsUpload, $extensionsValides) == false) { // si le type d'extension du fichier est envoyé, la participation est refusé
    //         echo 'extension du fichier : incompatible';
    //       }else {
    //         echo 'insertion base de données';
    //         $chemin = "/assets/photos";
    //         $nom =  date("Y-m-d-H-i-s") . "." . $extensionsUpload;
    //        $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], SITE_ROOT, $chemin .$nom);
    //         // $resultat = move_uploaded_file($_FILES['upfile']['tmp_name'], $chemin . $nom);
    //         $fichier = $_FILES['upfile']["name"];
    //         $data['titre_rea'] =$titre_rea;
            // insertionRealisation($id,$titre_rea,$description_rea,$date_participation,$date_rea);
         $success = 1; 
            $msg = "insertio ok";
            $res = [success => $success, "msg" => $msg];
            echo json_encode($res);
            
    
// }
     
?>
