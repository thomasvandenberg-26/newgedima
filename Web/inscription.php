<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>

        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="inscription.css">
    </head>
    <body style="background-color: #121212"; >
      <header>
        </header>
      <div class="row">
    <div class="col-md-12">
    <form  action="inscription_traitement.php" method="post">
        <h1> Sign Up </h1>
        
        <fieldset>

        
        <label for="pet-select"></label>

<select name="statut" id="pet-select">
    <option value="">--Choisissez votre statut--</option>
    <option value="participant">participant</option>
    <option value="gerant">gerant</option>
</select>

          <label for="name">Name:</label>
          <input type="text" id="nom_participant" name="nom_participant"required>
        
          <label for="email">Email:</label>
          <input type="email" id="email_participant" name="email_participant" required>
       
          <label for="password">Password:</label>
          <input type="password" id="mdp_participant" name="mdp_participant" required>
        

        <button type="submit" name="forminscription">Sign Up</button>
        
       </form>
        </div>
      </div>
      
    </body>
</html>
