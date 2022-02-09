<?php 
include "../Professeur/menu.php";
include "../Professeur/connectdb.php";
$module=$_GET['module'];
$sql="DELETE FROM `module` WHERE `Nom_module` = '$module'";
$requete=$connexion->prepare($sql);
$resulte=$requete->execute();
if($resulte){
echo "<br><br><h1 style='text-align:center;background-color:red;padding:60px;border-radius:15px;'>Suppression avec succes</h1>";
}
header( "refresh:3;url=AfficherModules.php" );
?>