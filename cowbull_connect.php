<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','farmdb');

// get the post records
$calfid=$_POST["calfid"];
$breed=$_POST["breed"];
$fatid=$_POST["fatid"];
$motid=$_POST["motid"];
$dob=$_POST["dob"];
$stime=$_POST["stime"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$sid=$_POST["sid"];
$msid=$_POST["msid"];
$pos=$_POST["pos"];
$sex=$_POST["sex"];
$details=$_POST["details"];


// database insert SQL code
$sql= "INSERT INTO cowbull(calfid,breed,fatid,motid,dob,stime,height,weight,sid,msid,pos,sex,details)
 VALUES(".$calfid.",'".$breed."',".$fatid.",".$motid.",'".$dob."','".$stime."',".$height",".$weight.",".$sid.",".$msid.",'".$pos."','".$sex."','".$details."')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted ";

}

?>