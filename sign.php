
<?php
$account=$_POST["account"];
$password=$_POST["password"];
$password2=$_POST["password2"];
include 'connect.php';
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution

$sql = "INSERT INTO user(Account,Password) VALUES ('$account', '$password')";
if(mysqli_query($link, $sql)){
    echo "sign up successfully.";
	header('Location: index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);

?>