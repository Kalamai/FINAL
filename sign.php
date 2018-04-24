
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
    echo "sign up successfully.<br>";
	header('Location: index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);

       $host = '140.123.175.91';
       $port = '21';
       $user = '666';
       $pass = '';
       $link = ftp_connect($host,$port);
       ftp_login($link,$user,$pass);

		$dir = $account;

		if (ftp_mkdir( $link,$dir))
		  {
		  echo "Successfully created $dir";
		  }
		else
		  {
		  echo "Error while creating $dir";
		  }

		// close connection
		ftp_close($link);		


?>