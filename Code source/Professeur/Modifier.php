
<?php 
session_start();
include "menu.php";
$email=$_GET['email'];
include "connectdb.php";
    $sql1="SELECT * FROM `prof` WHERE `Email_instit` = '$email' ";
    $requete=$connexion->prepare($sql1);
    $resulte=$requete->execute();
    $enregistrement = $requete->fetch();
    $_SESSION['id']=$enregistrement[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Ajouterstyle.css">
    <title>Modifier un professeur</title>
    <style>
        input{
            font-size:18px;
        }
    </style>
</head>
<body>
<div class="Form">
    <form  action="Modifiersql.php?" method="POST">
       <table>
           <tr >
              <td>Nom</td>
          <td><input name="nom" type="text"  value="<?php echo $enregistrement[1]; ?>"/></td>
           </tr>
           <tr >
              <td>Prenom</td>
              <td><input name="prenom" type="text"  value="<?php echo $enregistrement[2]; ?>" /></td>
           </tr>
           <tr>
              <td>Email</td>
              <td><input name="email" type="email"  value="<?php echo $enregistrement[3]; ?>"  /></td>
           </tr>
           <tr >
              <td>Téléphone</td>
              <td><input name="telephone" type="tel"  value="<?php echo $enregistrement[4]; ?>"  /></td>
           </tr>
           <tr><td><button type="submit" class="btn_m" >Modifier</button></td></tr>
       </table>
    </form>
    <div class="link">
      <a class="view" href="Afficher.php">Annuler</a></td>
    </div>
</div>
</body>
</html>