<?php
           include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Afficherstyle.css">
    <title>Afficher liste des professeurs</title>
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
    <h4 class="liste"> liste des professeurs</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table>
        <tr style="height:40px">
           <th>#</th>
           <th>Nom</th>
           <th>Prenom</th>
           <th>Email</th>
           <th>Téléphone</th>
           <th colspan="2">Action</th>
        </tr>
        <?php
           include "connectdb.php";
           $sql1="SELECT * FROM `prof`";
           $requete=$connexion->prepare($sql1);
           $resulte=$requete->execute();
           $N =$requete->rowCount();
           $indice=0;
           do{
               $enregistrement = $requete->fetch();
        ?>      
              <tr>
                  <td><?php echo $indice+1; ?></td>
                 <?php for($col=1; $col<5 ; $col++) { ?>
                 <td>  <?php echo $enregistrement[$col] ?></td>
                 <?php }?>
                 <td>
                     <a class="btn_m"  href="Modifier.php?email=<?php echo $enregistrement[3]; ?>"  >Modifier</a>
                     <a class='btn_d'  href="Supprimersql.php?email=<?php echo $enregistrement[3]; ?>" >Supprimer</a>
                </td>
              </tr> 

        
         <?php      
               $indice++;
           }while($indice<$N);
          
        ?>

    </table>
    </form>
    <div class="link">
      <a class="view" href="Ajouter.php">Ajouter</a></td>
    </div>
    </div>
   

</body>
</html>