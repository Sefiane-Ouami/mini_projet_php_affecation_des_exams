<?php 
include "menu.php";
include "connectdb.php";
$email=$_GET['email'];
$sql="DELETE FROM `prof` WHERE `Email_instit` = '$email'";
$requete=$connexion->prepare($sql);
$resulte=$requete->execute();
if($resulte){
echo "<br><br><h1 style='text-align:center;background-color:red;padding:60px;border-radius:15px;'>Suppression avec succes</h1>";
}
header( "refresh:3;url=Afficher.php" );
?>