<?php
session_start();
if(isset($_SESSION['userid']))
{ session.destroy();}
header(location: "index.php");
?>