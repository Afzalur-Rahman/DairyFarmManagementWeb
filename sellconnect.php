<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','farmdb');

// get the post records
$aid=$_POST["aid"];
$sid=$_POST["sid"];
$sdate=$_POST["sdate"];
$time=$_POST["time"];
$price=$_POST["price"];
$product=$_POST["product"];
$details=$_POST["details"];


// database insert SQL code
$sql= "INSERT INTO sell(aid,sid,sdate,time,price,product,details) VALUES(".$aid.",".$sid.",'".$sdate."','".$time."',".$price.",'".$product."','".$details."')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted ".$sdate;

}

?>