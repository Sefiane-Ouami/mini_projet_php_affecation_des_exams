<?php
    include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Professeur/Afficherstyle.css">
    <title>Afficher liste des exams</title>
    <style>
            th{
                background-color:#ffffff;
            }
            table{
                border-collapse: collapse;
                border-spacing: 0px;
                
            }
            table tr:nth-child( odd ){
            background-color: #E5E5E5;}
    </style>
</head>
<body>
<div class="Form">
    <div class="box">
    <h4 class="liste"> Calendrier des exams au sien de l'ENSA</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table>
        <tr style="height:40px">
           <th>#</th>
           <th>Nom module</th>
           <th>Superviseur</th>
           <th >N° Salle</th>
           <th >Date</th>
           <th colspan="2">Action</th>
        </tr>
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
                 <td>
                     <a class="btn_m"  href="ModifierExam.php?num=<?php echo $enregistrement[0]; ?>"  >Modifier</a>
                     <a class='btn_d'  href="SupprimerExamsql.php?id=<?php echo $enregistrement[0]; ?>" >Supprimer</a>
                </td>
              </tr> 
         <?php      
               $indice++;
           }while($indice<$N); 
        ?>

    </table>
    </form>
    <div class="link">
      <a class="view" href="AjouterExam.php">Ajouter</a></td>
    </div>
    </div>
    
</body>
</html>
