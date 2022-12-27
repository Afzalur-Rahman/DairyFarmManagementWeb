<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','farmdb');

// get the post records
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$empid=$_POST["empid"];
$mid=$_POST["mid"];
$dob=$_POST["dob"];
$jdate=$_POST["jdate"];
$phone=$_POST["phone"];
$cityname=$_POST["cityname"];
$roadno=$_POST["roadno"];
$houseno=$_POST["houseno"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$pos=$_POST["pos"];
$sex=$_POST["sex"];



// database insert SQL code
$sql= "INSERT INTO emp(fname,mname,lname,empid,mid,dob,jdate,phone,cityname,roadno,houseno,password,cpassword,pos,sex)
 VALUES('".$fname."','".$mname."','".$lname."',".$empid.",".$mid.",'".$dob."','".$jdate."',".$phone.",'".$cityname."',".$roadno.",".$houseno.",'".$password."','".$cpassword."','".$pos."','".$sex."')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted ".$jdate;

}

?>