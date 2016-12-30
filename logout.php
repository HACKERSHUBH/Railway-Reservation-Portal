<?php
     session_start();
     session_destroy();
       setcookie(PHPSESSID,session_id(),time()-1);//this is a temporary cookie after somettime it automatically destroyed
	header("location:../index.php");
    

?>