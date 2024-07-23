<?php
session_start();
if(!isset($_SESSION['login']))
header("Location:index.php?err12=1");
$con=mysqli_connect("localhost","root","","webproject") or die("server not found");
$query="select * from question";
$r=mysqli_query($con,$query);
$array=mysqli_fetch_array($r);
if(isset($_POST['1']))
$q1=$_POST['1'];
$q1=0;
$q2=0;
$q3=0;
$q4=0;$q5=0;$q6=0;$q7=0;$q8=0;$q9=0;$q10=0;
if(isset($_POST['1']))
{
$q1=$_POST['1'];
if($q1==$array[answer])
	$q1=1;
else 
	$q1=2;
}
$array=mysqli_fetch_array($r);

if(isset($_POST['2'])){
$q2=$_POST['2'];
if($q2==$array[answer])
	$q2=1;
else 
	$q2=2;
}
$array=mysqli_fetch_array($r);
if(isset($_POST['3'])){
$q3= $_POST['3'];
if($q3==$array[answer])
	$q3=1;
else 
	$q3=2;
}
$array=mysqli_fetch_array($r);

if(isset($_POST['4'])){
$q4=$_POST['4'];
if($q4==$array[answer])
	$q4=1;
else 
	$q4=2;
}
$array=mysqli_fetch_array($r);
if(isset($_POST['5']))
{
$q5= $_POST['5'];
if($q5==$array[answer])
	$q5=1;
else 
	$q5=2;
}
$array=mysqli_fetch_array($r);
if(isset($_POST['6'])){
$q6= $_POST['6'];
if($q6==$array[answer])
	$q6=1;
else 
	$q6=2;
}
$array=mysqli_fetch_array($r);

if(isset($_POST['7'])){
$q7= $_POST['7'];
if($q7==$array[answer])
	$q7=1;
else 
	$q7=2;
}
$array=mysqli_fetch_array($r);
if(isset($_POST['8'])){
$q8=$_POST['8'];
if($q8==$array[answer])
	$q8=1;
else 
	$q8=2;
}
$array=mysqli_fetch_array($r);
if(isset($_POST['9'])){
$q9= $_POST['9'];
if($q9==$array[answer])
	$q9=1;
else 
	$q9=2;
}
$array=mysqli_fetch_array($r);
if(isset($_POST['10'])){
$q10= $_POST['10'];
if($q10==$array[answer])
	$q10=1;
else 
	$q10=2;
}
$x=$_SESSION['login'];
echo $x;
$query= ("update result set one='$q1',two='$q2',three='$q3',four='$q4',five='$q5',six='$q6',
seven='$q7',eight='$q8',nine='$q9',ten='$q10' where email='$x'") or die("not found");

mysqli_query($con,$query) or die("wrong query");
header("Location:result.php");
?>
