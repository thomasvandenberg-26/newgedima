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
<body>

<?php 

$date_inscription = [2022-11-30];
$date_limite = [2022-12-10];

if (date("Y-m-d") >= $date_inscription and $date_inscription <= $date_limite){
?> 
<button type='submit' value='envoi' class='btn' onclick="location.href='formulaire_realisation';">Envoyer </button>
<?} ?>
    
</body>
</html>