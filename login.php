<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="scphoto";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){die("失敗");}

	$account=$_POST["account"];
	$password=$_POST["password"];

	$sql="SELECT * from user where Account='$account' and Password='$password'";

	if(mysqli_num_rows(mysqli_query($conn,$sql))>0){
		session_start();
		$_SESSION["account"]=$account;
		$_SESSION["Pw"]=$password;
		echo "success";
		header('location: gallery.php');
	} 
	else{
		echo"failed";
	}
	?>