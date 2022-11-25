<?php include 'function.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
        <link rel="header" href="header.php" />
    <title>Document</title>
</head>
<header>
    <header>
        <!--<h1> Gedimagination </h1>
            <nav class="navbar navbar-inverse">
                        <a href="accueil.php.php">Accueil</a></li>
                        <a  href="tableau_gagnants.php">Classement </a>
                        <a href="formulaire_realisation.php">Concours </a>
                        <a href="login.php">Connexion </a>
                </div>
            </nav>-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="accueil.php">Accueil</a></li>
            <li><a  href="classement.php">Classement </a></li>
            <li><a href="formulaire_realisation.php">Concours </a></li>
            <li><a href="login.php">Connexion </a></li>
            <li><a href="inscription.php">Inscription</a></li>
            <li><a href="profil.php">profil</a></li>


          </ul>
        </div>
      </nav>
</header>

</header>
<body>
<?php 
  //  if(isset($_GET['message']) and !empty($_GET['message']) ){
  //    echo "<p> message : ".$_GET["message"]." </p>";
  // }
  ?>


 <form   method="POST" action="#" enctype="multipart/form-data" id="formcom">
<h2> Realisation </h2><br>
<input type='text'name='titre_rea' placeholder='titre rea' required="required" ></input> <br> <br> 
<textarea  name="description_rea" rows="5" cols="33" placeholder='description' required="required"></textarea> <br> <br>
<input type='date'name='date_rea' placeholder='date rea' required="required"></input> <br><br>
<input type='date'name='date_participation' placeholder='date participation' required="required"></input> <br> <br>
<input type='file' name='upfile' placeholder='inserez votre photo' required="required"></input> <br> 
<button  id="envoi" type='submit' value='envoi' class='btn'  >Envoyer </button>
</form>    


</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
<script type="text/javascript">
  $(function(){
    $("#formcom").submit(function(){
     titre_rea = $(this).find("input[name=titre_rea]").val();
     description_rea = $(this).find("textarea[name=description_rea]").val();
     date_rea = $(this).find("input[name=date_rea]").val();
     date_participation = $(this).find("input[name=date_participation]").val(); 
     upfile = $(this).find("input[name=upfile").val(); 
     $.post("jqphp.php", {titre_rea: titre_rea,description_rea: description_rea,date_rea: 
        date_rea, date_participation: date_participation, upfile: upfile},
        function(data) {
            alert(data);
        });
      
        return false; 
      });
}); 
</script>


</html>

<style>
  p{
    color : white; 
  }
</style>
