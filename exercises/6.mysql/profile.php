



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Profile page</title>
  </head>

  <body>
<?php

require 'connection.php';

$conn=openConnection();

if(isset ($_GET['user'])){;
  $id =$_GET['user'];
}
$sql = "SELECT * FROM hopper_2 WHERE id=$id";

$result = mysqli_query ($conn, $sql);
$row = mysqli_fetch_array($result);






closeConnection($conn);

 ?>










  <div class="wrapper">
    <div class="allData">

      <div class="pr">
        <h1>Profile</h1>
      </div>

      <div class="avatar">
        <?= "<img height='300px' width= '400px' src = '".$row['avatar']."'>"?>
      </div>

      <div class="first_name">
        <p>First name: <?=$row['first_name'] ?></p>
      </div>

      <div class="last_name">
        <p>Last name: <?=$row['last_name'] ?></p>
      </div>


          <div class="username">
              <p>Username: <?=$row['username'] ?></p>
            </div>

            <div class="linkedin">
              <p>Linkedin: <?=$row['linkedin'] ?></p>
            </div>

      <div class="github">
        <p>GitHub: <?=$row['github'] ?></p>
      </div>

      <div class="email">
        <p>Last name: <?=$row['email'] ?></p>
      </div>


          <div class="preferred_language">
              <?= "Preferred Language:" . "<img height=\"30px\" width=\"30px\" src='imgs/" . $row['preferred_language'] . ".svg'>"?>
            </div>

            <div class="video">
              <p>Video: <?="<a href=" . $row['video'] . "> Play video </a>" ?></p>
            </div>

              <div class="quote">
                <p>Quote: <?=$row['quote'] ?></p>
              </div>

              <div class="quote_author">
                <p>Quote author: <?=$row['quote_author'] ?></p>
              </div>

          <div class="bill">
          </div>

            <?php
            echo '<img src="https://belikebill.ga/billgen-API.php?default=1&name=' . $row['first_name'] . '&sex=f"/>'
             ?>

              </div>

  </div>




 </body>
</html>
