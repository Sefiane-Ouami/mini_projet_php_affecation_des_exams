<?php
           include "../Professeur/menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Professeur/Ajouterstyle.css">
    <title>Ajouter une salle</title>
    <style>
        .selection{
            border-radius:6px;
            height:30px;
            width:250px;
            font-size:18px;
        }
    </style>
</head>
<body>
<div class="Form">
    <form  action="AjouterSallesql.php" method="POST">
       <table>
           <tr >
              <td>N° Salle</td>
              <td><input name="Numsalle" type="number" /></td>
           </tr>
           <tr >
              <td><label for="Etage">Etage:</label></td>
              <td>
              <select name="Etage" id="Etage" class="selection">  
                   <option value="1er étage">1er étage</option>
                   <option value="2éme étage">2éme étage</option>
                   <option value="3éme étage">3éme étage</option>
                 </select>
              </td>
           </tr>
           <tr><td> <button type="submit" class="btn_m" >Ajouter</button></td></tr>
       </table>
    </form>
    <div class="link">
      <a class="view" href="AfficherSalles.php">Voir</a></td>
    </div>
    
    

</div>
</body>
</html>