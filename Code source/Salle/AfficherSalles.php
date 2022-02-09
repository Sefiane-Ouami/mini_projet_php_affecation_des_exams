<?php
           include "../Professeur/menu.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Professeur/Afficherstyle.css">
    <title>Afficher liste des salles</title>
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
    <h4 class="liste"> liste des salles</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table>
        <tr style="height:40px">
           <th>#</th>
           <th>Etage</th>
           <th>N° salle</th>
           <th colspan="2">Action</th>
        </tr>
        <?php
           include "../Professeur/connectdb.php";
           $sql1="SELECT * FROM `salle`";
           $requete=$connexion->prepare($sql1);
           $resulte=$requete->execute();
           $N =$requete->rowCount();
           $indice=0;
           do{
               $enregistrement = $requete->fetch();
        ?>      
              <tr>
                  <td><?php echo $indice+1; ?></td>
                 <?php for($col=1; $col<3 ; $col++) { ?>
                 <td>  <?php echo $enregistrement[$col] ?></td>
                 <?php }?>
                 <td>
                     <a class="btn_m"  href="ModifierSalle.php?num=<?php echo $enregistrement[2]; ?>"  >Modifier</a>
                     <a class='btn_d'  href="SupprimerSallesql.php?num=<?php echo $enregistrement[2]; ?>" >Supprimer</a>
                </td>
              </tr> 

        
         <?php      
               $indice++;
           }while($indice<$N);
          
        ?>

    </table>
    </form>
    <div class="link">
      <a class="view" href="AjouterSalle.php">Ajouter</a></td>
    </div>
    </div>
   

</body>
</html>