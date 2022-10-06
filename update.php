<?php 

include "database.php";

header('location:homepage.php');
if($Name==""){"";}
$id = $_POST['Id'];
$Name = $_POST['Name'] ;
$Surname =  $_POST['Surname'];
$PhoneNumber = $_POST['PhoneNumber'];
$HomeNumber = $_POST['HomeNumber'];
echo $id;
$dc = $db -> prepare("UPDATE persons SET Name=?,Surname=?,PhoneNumber=?,HomeNumber=? WHERE Id=?");
$dc -> execute(array($Name,$Surname,$PhoneNumber,$HomeNumber,$id));
	echo "Succes";
 	header("refresh:2;url=homepage.php");


?>