<?php
include "../DB/Database.php";
$DB2 = new Database();
$d_id = $_GET['id'];
$Status = $_GET['Status'];
$sql = "Delete FROM requests WHERE 	Request_id = '$d_id' AND Status=2 " ;

$DB2->query($sql);
$DB2->execute();

header("Location: ../viewRequest.php");
?>
