<?php 
    include "connectdb.php";
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];

    $sql1="SELECT `Email_instit`FROM `prof`";
    $requete=$connexion->prepare($sql1);
    $resulte=$requete->execute();
    $N =$requete->rowCount();
    $indice=0;
    do{
        $enregistrement = $requete->fetch();
        if($enregistrement[0]==$email){
            echo "ce professuer déja exite dans la Bd";
            exit();
        }
        $indice++;
    }while($indice<$N);


    $sql2="INSERT INTO `prof`(`Nom_prof`, `Prenom_prof`, `Email_instit`, `Telephone`) VALUES ('$nom','$prenom','$email','$telephone')";
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
            
        }
        </style>
</head>
<body>
<div class="boite">
        <h2 class="msg">
            <img src="../valide.png" alt="validation" class="image"><br><br>
            Ajoute avec succes
    </h2>
    </div>
    <?php 
    header( "refresh:3;url=Afficher.php"); ?>
</body>
</html>
