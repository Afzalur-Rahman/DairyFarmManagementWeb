<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','farmdb');

// get the post records
$aid=$_POST["aid"];
$bname=$_POST["bname"];
$dob=$_POST["dob"];
$btime=$_POST["btime"];
$bheight=$_POST["bheight"];
$bweight=$_POST["bweight"];
$place=$_POST["place"];
$sid=$_POST["sid"];
$iid=$_POST["iid"];
$age=$_POST["age"];
$cata=$_POST["cata"];
$pos=$_POST["pos"];
$sex=$_POST["sex"];
$details=$_POST["details"];

// database insert SQL code
$sql= "INSERT INTO buy(aid,bname,dob,btime,bheight,bweight,place,sid,iid,age,cata,pos,sex,details) 
VALUES(".$aid.",'".$bname."','".$dob."','".$btime."',".$bheight.",".$bweight.",'".$place."',".$sid.",".$iid.",".$age.",'".$cata."','".$pos."','".$sex."','".$details."')";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted ".$btime;

}

?>