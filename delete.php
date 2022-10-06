<?php 

include "database.php";

header('location:index.php');

$id = $_GET['Id'];

$dc = $db -> prepare("DELETE from persons WHERE Id=?");
$dc -> execute(array($id));
	echo "Person Deleted";
 	header("refresh:5;url=index.php");


?>