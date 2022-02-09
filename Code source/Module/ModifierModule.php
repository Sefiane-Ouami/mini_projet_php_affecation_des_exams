<?php
        
           session_start();
           include "../Professeur/menu.php";
           $module=$_GET['module'];
           include "../Professeur/connectdb.php";
           $sql1="SELECT * FROM `module` WHERE `Nom_module` = '$module' ";
           $requete=$connexion->prepare($sql1);
           $resulte=$requete->execute();
            $enregistrement = $requete->fetch();
           $_SESSION['id']=$enregistrement[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Professeur/Ajouterstyle.css">
    <title>Modifier un module</title>
    <style>
        .selection{
            border-radius:6px;
            height:30px;
            width:250px;
            font-size:18px;
        }
        input{
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="Form">
    <form  action="ModifierModsql.php" method="POST">
       <table>
           <tr >
              <td>Nom Module</td>
              <td><input name="module" type="text" value="<?php echo $enregistrement[1]; ?> " /></td>
           </tr>
           <tr >
              <td><label for="profs">Professeur:</label></td>
              <td>
              <select name="profs" id="profs" class="selection">
                    <?php
                    include "../Professeur/connectdb.php";
                    $sql1="SELECT * FROM `prof`";
                    $requete=$connexion->prepare($sql1);
                    $resulte=$requete->execute();
                    $N =$requete->rowCount();
                    $indice=0;
                    do{
                        $enregistrement = $requete->fetch();
                        
                 ?>      
                   <option value="<?php echo $enregistrement[1]." ".$enregistrement[2]; ?>"><?php echo $enregistrement[1]." ".$enregistrement[2]; ?></option>
                   <?php 
                       $indice++;
                    }while($indice<$N);
                   ?>
                 </select>
              </td>
           </tr>
           <tr><td> <button type="submit" class="btn_m" >Modifier</button></td></tr>
       </table>
    </form>
    <div class="link">
      <a class="view" href="AfficherModules.php">Voir</a></td>
    </div>
    
    

</div>
</body>
</html>