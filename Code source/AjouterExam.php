<?php 
            session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Calendrierstlye.css">
    <title>Exams</title>
    <style>
        h3{
                background-color: #ff1012;
                padding:100px;
                border-radius :20px;
                font-family: sans-serif;
                text-align:center;
            }
    </style>
</head>
<body>    
<?php
    if(isset($_SESSION['login']))
     { 
        include "menu.php";
    ?>       
<div class="Form">
    <div class="box">
    <form method="post" action="AjouterExamsql.php">
    <table>
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
                     <input type="submit" class="btn_a"  value="Ajouter"  />
                </td>
         </tr>   
                 
            
              
    </table>
    </form>
    <div class="link">
      <a class="view" href="AfficherExam.php">Voir</a></td>
    </div>
    </div>
    <?php }
      else{ 
    ?>
            <div class="Form">
               <h3>Vous n'êtes  pas autorisés à voir le contenu de cette page <br> !!!</h3>
            </div>
    
    <?php }
     
    ?>

</body>
</html>