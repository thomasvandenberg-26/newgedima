<?php include 'function.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= style.css media="screen" type="text/css" />
        <link rel="header" href="header.php" />
    <title>Document</title>
</head>
  <?php include 'header.php'; ?>
</header>
<body>
<?php 
    if(isset($_GET['message']) and !empty($_GET['message']) ){
      echo "<p> message : ".$_GET["message"]." </p>";
   }
  ?>


<form id="formulaire">
<h2> Realisation </h2><br>
<input type='text'name='titre_rea' placeholder='titre rea' required="required" ></input> <br> <br> 
<textarea  name="description_rea" rows="5" cols="33" placeholder='description' required="required"></textarea> <br> <br>
<input type='date'name='date_rea' placeholder='date rea' required="required"></input> <br><br>
<input type='date'name='date_participation' placeholder='date participation' required="required"></input> <br> <br>
<input type='file' name='upfile' placeholder='inserez votre photo' required="required"></input> <br> 
<button  id="envoi" type='submit' value='envoi' class='btn'>Envoyer </button>
</form>    
</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
<script src="app.js"></script>
</html>
