<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','farmdb');

// get the post records
$aid=$_POST["aid"];
$did=$_POST["did"];
$diseaseid=$_POST["diseaseid"];
$pdate=$_POST["pdate"];

$details=$_POST["details"];


// database insert SQL code
$sql= "INSERT INTO treatment(aid,did,diseaseid,pdate,details) VALUES(".$aid.",".$did.",".$diseaseid.",'".$pdate."','".$details."')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted ".$pdate;

}

?>