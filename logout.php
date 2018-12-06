<?php 
session_start();
if (session_destroy()){
//unset($_SESSION['login']);
//$_SESSION['message'] = 'you are now logged out';
header("location: index.php");
}
?>