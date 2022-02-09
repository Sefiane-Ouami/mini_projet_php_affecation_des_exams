<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Accueil.css">
    <title>Exams</title>
</head>
<body>
<div class="header">
          <div class="ense"><a href="#" >Ecole nationale des sciences appliquées Tétouan</a></div> 
           <div class="login"><a href="login.php" class="login">Connexion</a></div>   
      
 </div> 
    <div class="titre">  
    <h4 >Calendrier des exams au sein de l'ENSA</h4>
    </div>   
    <table class="calendrier">
        <thead>
        <tr style="height:40px">
           <th>#</th>
           <th>Nom module</th>
           <th>Superviseur</th>
           <th >N° Salle</th>
           <th >Date</th>
        </tr>
        </thead>
        <tbody> 
        <?php
           include "Professeur/connectdb.php";
           $sql1="SELECT * FROM `calendrier`";
           $requete=$connexion->prepare($sql1);
           $resulte=$requete->execute();
           $N =$requete->rowCount();
           $indice=0;
           do{
               $enregistrement = $requete->fetch();
        ?>  
          
              <tr>
                  <td><?php echo $indice+1; ?></td>
                 <td>  <?php echo $enregistrement[1] ?></td>
                 <td>  <?php echo $enregistrement[2] ?></td>
                 <td>  <?php echo $enregistrement[3] ?></td>
                 <td>  <?php echo $enregistrement[4] ?></td>
              </tr> 
         <?php      
               $indice++;
           }while($indice<$N); 
        ?>
      </tbody> 
    </table>
</body>
</html>