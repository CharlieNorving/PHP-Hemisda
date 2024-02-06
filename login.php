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

    $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
    $result = mysqli_query($con, $query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);

        if($user_data['password'] === $password)
        {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        }
      }
    }
}else
  echo "Ivalid info, try again, ГЛУПЫЙ!";
  {
  echo "Invalid info, try again ГЛУПЫЙ!";
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
            <div id="Login">Login</div>
            
            <input type="text" name="user_name"><br><br>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Login"><br><br>

            <a href="signup.php">Signup</a><br><br>
        </form>
    </div>
  </body>
</html>

