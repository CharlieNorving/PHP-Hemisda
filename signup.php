<?php
session_start();

    include("connection.php");
    include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST");
  {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        $user_id = random_num(20);
        $query = "INSERT INTO users (user_id,user_name,password) VALUES ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    }else
      {
      echo "Invalid info, try again, ГЛУПЫЙ! ";
      }
    
  }

?>

<!Doctype html>
<html>
  <head>
    <link rel="stylesheet" href="DB.css">
   <meta charset="utf-8">
  </head>
  <body>
    <div id="box">
        <form method="post">
            <div id="Signup">Signup</div>
            
            <input type="text" name="user_name"><br><br>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Signup"><br><br>

            <a href="login.php">Login</a><br><br>
        </form>
    </div>
  </body>
</html>
