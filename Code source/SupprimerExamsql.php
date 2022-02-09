<?php 
include "menu.php";
include "Professeur/connectdb.php";
$id=$_GET['id'];
$sql="DELETE FROM `calendrier` WHERE `Id` = '$id'";
$requete=$connexion->prepare($sql);
$resulte=$requete->execute();
if($resulte){
echo "<br><br><h1 style='text-align:center;background-color:green;padding:60px;border-radius:15px;'>Suppression avec succes</h1>";
}
header( "refresh:3;url=AfficherExam.php" );
?>