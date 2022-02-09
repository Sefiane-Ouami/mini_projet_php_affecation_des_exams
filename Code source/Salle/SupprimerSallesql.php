<?php 
include "../Professeur/menu.php";
include "../Professeur/connectdb.php";
$num=$_GET['num'];
$sql="DELETE FROM `salle` WHERE `Num_salle` = '$num'";
$requete=$connexion->prepare($sql);
$resulte=$requete->execute();
if($resulte){
echo "<br><br><h1 style='text-align:center;background-color:red;padding:60px;border-radius:15px;'>Suppression avec succes</h1>";
}
header( "refresh:3;url=AfficherSalles.php" );
?>