<?php
	
	if(isset($_SESSION["account"] ))
		{   
			echo "會員姓名: "; 
			echo ($_SESSION["account"]);

		   echo '<a href="logout.php" style="float:right" >log-out</a><br>';			
		}
	else {

			echo '<a href="sign.html"  style="float:right">sign-up</a><br>';
			echo '<a href="login.html"   style="float:right">login</a><br>';
		   //echo '<input type ="button" onclick="javascript:location.href="sign.html" value="Sign"></input>';

		   //echo '<input type ="button" onclick="javascript:location.href="login.html" value="Login"></input>';	

	}
?>