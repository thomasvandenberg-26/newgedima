<?php include 'function.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "css/style.css" media="screen" type="text/css" />
    <title>Document</title>
</head>
  <?php include 'header.php'; ?>
</header>
<body>
<?php 
    if(isset($_GET['message']) and !empty($_GET['message']) ){
      echo "<p> message : ".$_GET["message"]." </p>";
   }
   echo "<p style='color:#E2E2E2;'>" . date("j-m-y"). "</p>";

  ?>


<form id="formulaire" action="traitement_formulaire.php" method="post" enctype="multipart/form-data">
<h2> Realisation </h2><br>
<input type='text'name='titre_rea' placeholder='titre rea' required="required" ></input> <br> <br> 
<textarea  name="description_rea" rows="5" cols="33" placeholder='description' required="required"></textarea> <br> <br>
<input type='date'name='date_rea' placeholder='date rea' required="required"></input> <br><br>
<input type='date'name='date_participation' placeholder='date participation' required="required"></input> <br> <br>
<input type='file' name='upfile' placeholder='inserez votre photo' required="required"></input> <br> 
<button  id="envoi" type='submit' value='envoi' class='btn'>Envoyer </button>
</form>    
</body>




</html>
