
<?php
$account=$_POST["account"];
$password=$_POST["password"];
$password2=$_POST["password2"];
echo $account;
echo $password;
$link = mysqli_connect("localhost","root","","scphoto");
mysqli_set_charset($link, "utf8");
//$link = mysqli_connect("localhost", "", "", "");
 
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