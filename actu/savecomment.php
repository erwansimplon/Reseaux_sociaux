<?php
include("../bdd/connexion_bdd.php");
connexion_bd();
session_start();
$id=$_SESSION['id'];
$mcomment=$_POST['mcomment'];
$mesgid=$_POST['mesgid'];
mysql_query("INSERT INTO comments (comments, msg_id_fk, idLog)
VALUES ('".htmlentities(addslashes($mcomment))."','$mesgid','$id')");
$hachage = $id;
$URL_NEWS = "../user/user.php?id=".$hachage;
header("location: $URL_NEWS");
?>
