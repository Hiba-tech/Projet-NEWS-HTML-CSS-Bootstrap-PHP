<?php 

session_start();
$_SESSION = array();
session_destroy();
header("Location: ../A_LA_UNE.php");


 ?>