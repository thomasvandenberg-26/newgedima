<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/parametres.css">
</head>
<body>
    



 <form method="post"action="traitement_formulaire_parametres.php">

<h2> Parametres du jeu concours Gedimagination</h2>
 <label> date du début de jeu concours </label> 
 <input type='date'name='date_debut_concours' placeholder='date de début du concours ' required="required"></input> <br><br>
 <label> date du fin de jeu concours </label> 
 <input type='date'name='date_fin_concours' placeholder='date de fin du concours ' required="required"></input> <br><br>
<input type="submit" class="form_parametres">

 </form>

</body>
</html>