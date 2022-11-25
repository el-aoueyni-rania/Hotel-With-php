<?php
    session_start();
    if(!isset($_SESSION['user_session'])) { 
    header('Location:index.php');
    }
    session_destroy();
    unset($_SESSION['user_session']);
	header('Location:index.php');
?>