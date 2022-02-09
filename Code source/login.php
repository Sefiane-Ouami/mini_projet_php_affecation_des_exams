<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <title>connexion</title>
</head>
<body>
    
    <div id="loginForm">
        <div class="ensa">
            <img id="logo" src="logoensate.png" title="logo ensaté" />
        </div>
        
        <h1>Connexion</h1>
        <form method="post" action="verification.php" >
          <label>Nom d'utilisateur </label>
          <input type="text" name="Username" placeholder="saiser votre adresse email" required="required"> 
          <label>Mot du passe </label>
          <input type="password" name="Password" placeholder="saiser votre mot du passe" required="required">
          <input  type="submit" value="Connecter">
          
        </form>
      </div>
      
</body>
</html>