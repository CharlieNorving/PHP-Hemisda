<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!Doctype html>
<html>
  <head>
    <link rel="stylesheet" href="DB.css">
   <meta charset="utf-8">
  </head>
  <body>
    <a href="logout.php">Logout</a>
  </body>
</html>