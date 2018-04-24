<?php
header("Content-Type:text/html; charset=utf-8");
//開啟Session
session_start();
//清除Session
session_destroy();
//導到login.php
<<<<<<< HEAD
header("Location:login.html");
=======
header("Location:index.php");
>>>>>>> 6ac646a9deaa6a1c569585ac62d257721dd46284
?>