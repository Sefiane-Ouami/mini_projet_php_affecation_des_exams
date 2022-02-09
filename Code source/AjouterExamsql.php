<?php 
    include "Professeur/connectdb.php";
    include "menu.php";
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
       echo "<br><br><h1 style='text-align:center;background-color:red;padding:60px;border-radius:15px;'>La salle $salle est occupé à cette date</h1>";
       header( "refresh:3;url=AjouterExam.php");
       exit();
     }
      $indice++;
     }while($indice<$N);


   $sql2="INSERT INTO `calendrier`(`Module`, `Professeur`,`Salle`,`Date`) VALUES ('$module','$professeur','$salle','$date')";
$requete=$connexion->prepare($sql2);
 $resulte=$requete->execute();
 echo " <br><br><h1 style='text-align:center;background-color:green;padding:60px;border-radius:15px;'>Affecttion avec succes</h1>";  
    header( "refresh:3;url=AfficherExam.php");
?>