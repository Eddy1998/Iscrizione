<?php
session_start();
if(isset($_SESSION['passid']))
{ session_destroy();}
header("location: index.php");
?>
