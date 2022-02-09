<?php     
            session_start();
           include "menu.php";
             $id=$_GET['num']; 
             
              
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Calendrierstlye.css">
    <title>Exams</title>
</head>
<body>           
<div class="Form">
    <div class="box">
    <form action="ModifierExamsql.php"  method="POST">
    <table>
        <tr>
        <td> Entrez les nouvelles données </td>
        <td > <input  type="hidden" name="id" value="<?php echo $id ?>"></td>
        </tr>
        <tr style="height:40px">
           <td>Nom module</td>
           <td>            
                <select name="modules"  class="selection" >   
                <?php
                        include "Professeur/connectdb.php";
                        $sql1="SELECT * FROM `module`";
                        $requete=$connexion->prepare($sql1);
                        $resulte=$requete->execute();
                        $N =$requete->rowCount();
                        $indice=0;
                        do{
                            $enregistrement = $requete->fetch();
                            ?>   
                        <option><?php echo $enregistrement[1] ?></option>  
                        <?php  $indice++; }while($indice<$N); ?> 
                      </select>
                      
                </td>
        </tr> 
        <tr>          
        <td>Professeur</td>   
        <td>
                    <select name="profs"  class="selection" >
                    <?php
                        include "Professeur/connectdb.php";
                        $sql1="SELECT * FROM `prof`";
                        $requete=$connexion->prepare($sql1);
                        $resulte=$requete->execute();
                        $N =$requete->rowCount();
                        $indice=0;
                        do{
                            $enregistrement = $requete->fetch();
                            ?>   
                        <option ><?php echo $enregistrement[1]." ".$enregistrement[2]; ?></option>
                        <?php  $indice++; }while($indice<$N); ?>
                     </select>
                     
         </td> 
         </tr>  
         <tr>
         <td>Salle</td>
         <td>
                    <select name="salles"  class="selection">
                    <?php
                        include "Professeur/connectdb.php";
                        $sql1="SELECT * FROM `salle`";
                        $requete=$connexion->prepare($sql1);
                        $resulte=$requete->execute();
                        $N =$requete->rowCount();
                        $indice=0;
                        do{
                            $enregistrement = $requete->fetch();
                            ?>
                        <option ><?php echo $enregistrement[2] ?></option>
                        
                        <?php $indice++; }while($indice<$N); ?>
                     </select>
                     
         </td>  
         </tr>
           <tr>
           <td>date</td>
           <td>
                    <input  name="date" type="datetime-local" class="date"  />
           </td> 
           </tr>     
                
         <tr>
               <td>
                <input class="btn_a"  type="submit" value="Modifier"  />
                </td>
         </tr>   
                 
            
              
    </table>
    </form>
    <div class="link">
      <a class="view" href="AfficherExam.php">Voir</a></td>
    </div>
    </div>