<?php
           include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Ajouterstyle.css">
    <title>Ajouter un professeur</title>
</head>
<body>
<div class="Form">
    <form  action="Ajoutersql.php" method="POST">
       <table>
           <tr >
              <td>Nom</td>
              <td><input name="nom" type="text" /></td>
           </tr>
           <tr >
              <td>Prenom</td>
              <td><input name="prenom" type="text"  /></td>
           </tr>
           <tr>
              <td>Email</td>
              <td><input name="email" type="email"   /></td>
           </tr>
           <tr >
              <td>Téléphone</td>
              <td><input name="telephone" type="tel"   /></td>
           </tr>
           <tr><td> <button type="submit" class="btn_m" >Ajouter</button></td></tr>
       </table>
    </form>
    <div class="link">
      <a class="view" href="Afficher.php">Voir</a></td>
    </div>
</div>
</body>
</html>