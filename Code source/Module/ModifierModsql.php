<?php 
session_start();
include "../Professeur/connectdb.php";
$id=$_SESSION['id'];
$module=$_POST['module'];
$professeur=$_POST['profs'];

$sql="UPDATE `module` SET `Nom_module`='$module',`Professeur`='$professeur' WHERE `Id_module`='$id' ";
$requete=$connexion->prepare($sql);
$resulte=$requete->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .boite{
            min-height: 100vh;
           display: flex;
           justify-content: center;
           align-items: center;
          
        }
        .msg{
            padding: 20px 100px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border:2px solid;
            background-color: whitesmoke;
            
        }
        .image{
            width:170px;
            
        }
        </style>
</head>
<body>
<div class="boite">
        <h2 class="msg">
            <img src="../valide.png" alt="validation" class="image"><br><br>
            modification  avec succes
    </h2>
    </div>
    <?php 
      header( "refresh:3;url=AfficherModules.php" );
 ?>
</body>
</html>
