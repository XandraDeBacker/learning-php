<!DOCTYPE html>

<?php

require_once 'auth.php';
//needed to get access to the database
require_once 'connection.php';

$conn=openConnection();
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <!-- responsive webdesign -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style-register.css">
      <link rel="icon" href="./favicon_icons/register_fav_icon.png">
    <title>Document</title>
  </head>
  <body>
    <div class="wrap">

      <!-- <form action="index.php" method="post"> -->
      <!-- method post to hide the information -->
      <form class = "registration_form" action="" method="post">

        <h1>Registration</h1>

          <div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
          </div>

        <!-- Assuming the user POSTed the firstname Lisa, the output will be Lisa:
        example: open php tag echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!'; close php tag
        output: Hello Lisa!

        Isset is used to check weather a var is set or not. If so thus true, the echo will show it.
        with a  soft refresh, it will check again and it echo's again. Google has a built in square to ask if
        the same input can be used during a soft refresh. The trueths will appear again and don't have to be filled in again.   -->

          <div>
          <label for="firstname">Firstname:</label>
          <!-- in stap 7 :optie om ingevulde velden niet te laten verdwijnen na refresh: -->
          <input id="firstname"type="text" name="firstname" placeholder="Firstname"required
            value="<?php
            if (isset($_POST['firstname'])){echo $_POST['firstname'];};
            ?>">
          </div>

          <div>
          <label for="lastname">Lastname:</label>
          <input id="lastname"type="text" name="lastname" placeholder="Lastname"required
          value="<?php
            if (isset($_POST['lastname'])){echo $_POST['lastname'];};
            ?>">
          </div>

          <div>
          <label for="preferred_language">Preferred language:</label>
          <select name="preferred_language" id="preferred_language"required value="<?php
          if (isset($_POST['preferred_language'])){echo $_POST['preferred_language'];};
          ?>">
          <option value="en">English</option>
          <option value="de">German</option>
          <option value="be">Dutch</option>
          </select>
          </div>

          <div>
          <label for="avatar">Avatar:</label>
          <input id="avatar" type="url" name="avatar" placeholder="url" required
            value="<?php
            if (isset($_POST['avatar'])){echo $_POST['avatar'];};
            ?>">
          </div>

          <div>
          <label for="video">Video:</label>
          <input id="video"type="url" name="video" placeholder="url" required
            value="<?php
            if (isset($_POST['video'])){echo $_POST['video'];};
            ?>">
          </div>

          <div>
          <label for="quote">Quote:</label>
          <input id="quote"type="text" name="quote" placeholder="Quote"required
            value="<?php
            if (isset($_POST['quote'])){echo $_POST['quote'];};
            ?>">
          </div>

          <div>
          <label for="quote_author">Quote author:</label>
          <input id="quote_author" type="text" name="quote_author" placeholder="Quote author"required
            value="<?php
            if (isset($_POST['quote_author'])){echo $_POST['quote_author'];};
            ?>">
          </div>


          <div>
          <label for="username">Username:</label>
          <input id="username" type="text" name="username" placeholder="Username"required
            value="<?php
            if (isset($_POST['username'])){echo $_POST['username'];};
            ?>">
          </div>

          <div>
          <label for="email">Email:</label>
          <input id="email"type="email" name="email" placeholder="E-mail"required
            value="<?php
            if (isset($_POST['email'])){echo $_POST['email'];};
            ?>">
          </div>



          <div>
          <label for="linkedin">Linkedin:</label>
          <input id="linkedin" type="url" name="linkedin" placeholder="Linkedin url"required value="<?php
          if (isset($_POST['linkedin'])){echo $_POST['linkedin'];};
          ?>">

          </div>

          <div>
          <label for="github">GitHub:</label>
          <input id="github"type="url" name="github" placeholder="GitHub url"required
            value="<?php
            if (isset($_POST['github'])){echo $_POST['github'];};
            ?>">
          </div>

          <div>
          <label for="psw">Password:</label>
          <input id="psw" type="password" name="psw" placeholder="Password"required>
          </div>

          <div>
          <label for="c_psw">Confirm Password:</label>
          <input id="c_psw" type="password" name="c_psw" placeholder="Confirm password"required>
          </div>

          </div>




      <input type="submit" value=" Register" name="submit">




    </form>



  </body>
</html>
