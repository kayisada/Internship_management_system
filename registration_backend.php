<?php

include("conn.php");
$names=$_POST["names"]
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$level=$_POST["level"];
$time=$_POST["time"];
$photo=$_POST["photo"];

$_sql= "INSERT INTO student_registration(names,email,password,cpassword,level,time,photo) values($names,$email,$passowrd,$cpassword,$level,$time,$photo)";
if($query){
    echo"Data inserted";
} 
else{
    echo "Data failed to insert:" .$conn->error;
}

?>