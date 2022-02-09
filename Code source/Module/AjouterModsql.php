<?php 
    include "../Professeur/connectdb.php";
    $module=$_POST['module'];
    $professeur=$_POST['profs'];

    $sql1="SELECT * FROM `module`";
    $requete=$connexion->prepare($sql1);
    $resulte=$requete->execute();
    $N =$requete->rowCount();
    $indice=0;
    do{
        $enregistrement = $requete->fetch();
        if($enregistrement[1]==$module ){
            echo "<br><br><h1 style='text-align:center;background-color:red;padding:40px 2px;margin-top:100px;border-radius:15px;'>Ce module déja exite dans la Bd</h1>";
            header( "refresh:3;url=AfficherModules.php");
            exit();
        }
        $indice++;
    }while($indice<$N);


    $sql2="INSERT INTO `module`(`Nom_module`, `Professeur`) VALUES ('$module','$professeur')";
    $requete=$connexion->prepare($sql2);
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
            padding-left:20px;
        }
        </style>
</head>
<body>
<div class="boite">
        <h2 class="msg">
            <img src="../valide.png" alt="validation" class="image"><br><br>
            module ajouter
    </h2>
    </div>
    <?php header( "refresh:3;url=AfficherModules.php"); ?>
</body>
</html>
