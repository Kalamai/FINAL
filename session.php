<?php
	
	session_start();
	
	if($_SESSION["username"] != null)
		{   
			echo "會員姓名: "; 
			echo ($_SESSION["username"]);

		}
	else {
		   echo "您無權限觀看此頁面!";
		   header('location: sign.html');
	}
?>