<?php
session_start();
$_SESSION['login']=$_POST['Username'];
$_SESSION['mdp']=$_POST['Password'];
include "Professeur/connectdb.php";
    $sql1="SELECT * FROM `admin`";
    $requete=$connexion->prepare($sql1);
    $resulte=$requete->execute();
    $enregistrement = $requete->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background : url("sec.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
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
        h2{
            text-align:center;
            font-family: Arial, Helvetica, sans-serif;

        }
        
        </style>
</head>
<body>
    <?php 
        if($_SESSION['login']==$enregistrement[0] && $_SESSION['mdp']==$enregistrement[1]){
            include "menu.php";
        
    ?>
<div class="boite">
        <h2 class="msg">
            
           Vous êtes  Administarteur 
            <?php   header( "refresh:3;url=AfficherExam.php");?>
    </h2>
    </div>
    <?php
     }
     else{
    ?>
      <div class="boite">
        <h2 class="msg">
            
                       Ce site est sécurisé !!!! <br>
                  vérifier votre login et votre mot du passe
            <?php   header( "refresh:3;url=Accueil.php");?>
    </h2>
    </div>
    
</body>
</html>
<?php } ?>