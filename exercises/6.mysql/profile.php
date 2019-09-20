



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style-profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./favicon_icons/profile_fav_icon.png">
    <title>Profile page</title>

    <!-- Deze link is nodig om een icoon te kopiëren -->
    <script src="https://kit.fontawesome.com/468f2c3127.js"></script>
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
  <!-- <div class="flex-container"> -->


  <div class="wrapper">
  <div class="allData">

  <div class="pr">
  <h1>Profile</h1>
  </div>

  <div class="avatar">
  <?= "<img src = '".$row['avatar']."'>"?>
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
  <p><a href="<?php echo $row['linkedin'];?>"><i class="fab fa-linkedin-in"></i></a></p>
  </div>

  <div class="github">
    <p><a href="<?= $row['github'];?>"<i class="fab fa-github-square"></i></i></a></p>
  <!-- indien je geen icon wilt maar gewoon het woord github als link: -->
  <!-- <div class="github">
  <p>e open tag php"<a href=" . $row ['github'] . "> GitHub </a>"gesloten tag php</p>
  </div> -->

  <!-- <div class="email">
  <p>email: open php tag met een is teken dat de echo vervangt $row['E-mail'] sluit php tag </p>
  </div> -->

  <div class="email">
  <p><a href="<?= $row['email'];?>"<i class="fas fa-envelope"></i></a></p>




  <div class="preferred_language">
  <?= "Language:" . "<img height=\"30px\" width=\"30px\" src='imgs/" . $row['preferred_language'] . ".svg'>"?>
  </div>

  <!-- <div class="video">
  <p>open php tag and is sign for echo"<a href=" . $row['video'] . "> Play video </a>" close php tag</p>
  </div> -->
  <div class="video">
  <p><a href="<?= $row['video'];?>"<i class="fab fa-youtube-square"></i></a> </p>


  <div class="quote">
  <p>Quote: <?=$row['quote'] ?></p>
  </div>

  <div class="quote_author">
  <p>Quote author: <?=$row['quote_author'] ?></p>
  </div>

  <div class="bill">
  </div>

  <?php
  echo '<img height="180px" width="260px" src="https://belikebill.ga/billgen-API.php?default=1&name=' . $row['first_name'] . '&sex=f"/>'
  ?>

  </div>

  </div>
  <!-- </div> -->

 </body>
</html>
