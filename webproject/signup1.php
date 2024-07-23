<?php

session_start();


if(isset($_POST["1"]))
{
	
	$name=$_POST["name"];
	$email=$_POST["email1"];
	$dob=$_POST["dob"];
	$gender=$_POST["gender"];
	$mobile=$_POST["mobile"];
	$password=$_POST["password"];
	$course=$_POST["course"];
	$insti=$_POST["institute"];

	echo $name;
	$con=mysqli_connect("localhost","root","","webproject") or die("database not found");
$query= "insert into registration set name='$name', email='$email',  
    dob='$dob', mobile='$mobile', course='$course',gender='$gender', password='$password' ";
$x=	mysqli_query($con,$query) or die("you are already registered".header("Location:index.php?err=1"));
header("Location:success.php?err=1");
}
else 
header("Location:index.php?err12=1");
?>

