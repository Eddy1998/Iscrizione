<?php
session_start();
if(!isset($_SESSION['userid']))

  header("Location: sign-in.php");
?>
<!DOCTYPE hmtl>
<html>
  <h2>
    Your Dashboard
  </h2>
  <ul>
    <li><a href="">Main Menu</a> </li>
    <li><a href="SignOut.php">Sign-out</a> </li>
  </ul>
</html>