
<?php
require_once 'auth.php';
require_once 'connection.php';

$conn=openConnection();
?>
<?php

//When button LOG is pushed
if(isset($_POST['LOG'])){
//use the now 2 created vars:
$user_log = $_POST['username_log'];
$email_log = $_POST['$email_log'];
$password_log = $_POST['password_log'];

//create a var, $sql, that checks gets all information from hopper2 that has the same username in the database as the username from the var $user_log.
$sql = "SELECT * FROM hopper_2 WHERE username = '$user_log' OR email = '$user_log'";
//create the var $result, which is the ourcome due to connecting with the database and request $sql(the above statement):
$result = $conn->query($sql);

//If that result is more than zero, the username exists:
if ($result->num_rows > 0) {
// see if user exist and password is correct :
//fetch the result as an array from that user;
$row = mysqli_fetch_array($result);
//create a var $id that contains the array from the row from the one from the database
$id = $row['id'];

}
//If loguser and database-user or mail  are identical AND the log-password matches the HASHpsw
if(($user_log == $row['username']) || ($user_log == $row['email']) && (password_verify($password_log, $row['password']))){

  //session has options: creating, getting, updating and deleting.
  //for information on session and other pre-defined vars go to: https://www.php.net/manual/en/reserved.variables.session.php

// Note that first a session start has to be created. It is done in connection.php while being connected to all php-files in this forlder.
//$_SESSION is een serverside cookie dat alleen uitgelezen wordt door de server.
//Die sessie gaat na of de user is ingelogd en steekt de $id er dan bij.
$_SESSION['id'] = $id;

//create a serverside cookie with username and add the $user_log to it.
$_SESSION['username'] = $user_log;

// and direct to the url from index.php
header("Location: index.php");

}else{
  echo "Error!" . "<br>" . "Please try again.";

}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="style-register.css" -->
    <link rel="icon" href="./favicon_icons/login_fav_icon.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style-login.css">
    <title></title>
  </head>
  <body>

    <div class="wrap">

      <form class = "login_form" action="" method="post">

        <h1>Login</h1>

        <div>
        <label for="username/E-mail">Username or E-mail:</label>
        <input id="username/E-mail"type="text" name="username_log"required>

        </div>

        <div>
        <label for="psw">Password:</label>
        <input id="psw" type="password" name="password_log"required>
        </div>

        <input type="submit" value=" Login" name="LOG">

      </form>

    </div>
