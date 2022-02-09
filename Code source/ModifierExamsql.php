<?php 

include "Professeur/connectdb.php";
$id=$_POST['id'];
$module=$_POST['modules'];
$professeur=$_POST['profs'];
$salle=$_POST['salles'];
$date=$_POST['date'];

$sql1="SELECT * FROM `calendrier`";
    $requete=$connexion->prepare($sql1);
    $resulte=$requete->execute();
    $N =$requete->rowCount();
    $indice=0;
    do{
      
        $enregistrement = $requete->fetch();
        $date1=strtotime($enregistrement[4]);
        $date2=strtotime($date);
      if( (abs($date1-$date2)<=7200) && $enregistrement[3]==$salle){
       echo "la salle est occupé a cette heure";
       header( "refresh:3;url=AjouterExam.php");
       exit();
     }
      $indice++;
     }while($indice<$N);



$sql="UPDATE `calendrier` SET `Module`='$module',`Professeur`='$professeur',`Salle`='$salle',`Date`='$date'WHERE `Id`='$id' ";
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
            <img src="valide.png" alt="validation" class="image"><br><br>
            modification  avec succes
    </h2>
    </div>
    <?php 
      header( "refresh:3;url=AfficherExam.php" );
 ?>
</body>
</html>
