<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
        <link rel="header" href="header.php" />
    <title>Document</title>
</head>
<header>
<?php include('header.php') ?>
</header>
<body>
<form action="traitement_formulaire_realisation.php">
 <h2> Realisation </h2><br>
 <input type='text'name='titre_rea' placeholder='titre rea'></input> <br> <br> 
 <textarea  name="description_rea" rows="5" cols="33" placeholder='description'></textarea> <br> <br>
 <input type='date'name='date_rea' placeholder='date rea'></input> <br><br>
 <input type='date'name='date_participation' placeholder='date participation'></input> <br> <br>
<input type='file' name='upfile' placeholder='inserez votre photo'></input> <br>
<button type='button' value='valider' name='form_realisation' class='btn'>Envoyer </button>
</form>    
</body>
</html>
