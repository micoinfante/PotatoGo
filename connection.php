<?php
ob_start();
session_start();
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
 ?>
<?php

$host = 'localhost';
$user = 'mico';
$pass = 'root';
$db_name = 'PotatoGo';
$error = "";
$con = mysqli_connect($host, $user, $pass, $db_name) or die("Failed to connect"). mysqli_error($con);
echo "Connected";

  if(isset($_POST['btnLogin'])){
    mysqli_select_db($con,  $db_name);
    echo "hello";
    $username = mysqli_real_escape_string($con, $_POST['login-email']);
    $pass = mysqli_real_escape_string($con, $_POST['login-pass']);
    $query = "SELECT id from admin WHERE username = '$username' and password = '$pass';";
    $result = mysqli_query($con, $query);


    echo "hello2";
    $row = mysqli_fetch_array($result);
    echo $row;
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count == 1){
      echo"hello tasd";
      // session_register('myusername');
      $_SESSION['login_user'] = $username;
      header("location: admin.php");
      exit;
    }
    else{
      $error = "your login Name or password is invalid";

    }
    ob_end_flush();
  }
?>

<form method=post>
  <input type="text" name="login-email">
  <input type="password"name="login-pass">
  <input type="submit" name="btnLogin">
</form>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
