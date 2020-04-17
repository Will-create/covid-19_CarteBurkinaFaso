<?php
include_once('../class/ClassInclude.php');
//on prend les donne ou on insert dans la base de donne,c'est le controller(mvc)
$base=new schema();//dans le fichier schema.Class.php
$zone=new zonetouche();//dans le fichier zonetouche.Class.php
//le post est vide cela veux dire qu'il ya des donner a inserer on fait alors appel a la fonction inserer de schema.Class.php
if(count($_POST)!=0){
   $base->inserer($_POST);
    header("location:../index.php");
}
//dans le cas contraire ont prend les donner en json et on les affiche pour javascript
else {
    echo $zone->getAll($base->select());
}
?>