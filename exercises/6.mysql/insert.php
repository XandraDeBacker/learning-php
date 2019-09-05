<!DOCTYPE html>

<?php
require 'connection.php';
$conn=openConnection();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$linkedin = $_POST['linkedin'];
$github = $_POST['github'];
$email = $_POST['email'];
$preferred_language = $_POST['preferred_language'];
$avatar = $_POST['avatar'];
$video = $_POST['video'];
$quote= $_POST['quote'];
$quote_author = $_POST['quote_author'];

if(isset($_POST['submit']))
{
$sql = "INSERT INTO hopper_2 (first_name, last_name, username, linkedin, github,
                              email, preferred_language, avatar, video, quote,
                              quote_author)
VALUES ('$firstname', '$lastname','$username',
        '$linkedin', '$github','$email',
        '$preferred_language', '$avatar',
        '$video', '$quote', '$quote_author')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">

          <div>
          <label for="firstname">firstname:</label>
          <input id="firstname"type="text" name="firstname"required>
          </div>

          <div>
          <label for="lastname">lastname:</label>
          <input id="lastname"type="text" name="lastname"required>
          </div>

          <div>
          <label for="username">username:</label>
          <input id="username" type="text" name="username"required>
          </div>

          <div>
          <label for="linkedin">linkedin:</label>
          <input id="linkedin" type="url" name="linkedin"required>
          </div>

          <div>
          <label for="github">github:</label>
          <input id="github"type="url" name="github"required>
          </div>

          <div>
          <label for="email">email:</label>
          <input id="email"type="email" name="email"required>
          </div>

          <div>
          <label for="preferred_language">preferred language:</label>
          <select name="preferred_language" id="preferred_language"required>
          <option value="be">Dutch</option>
          <option value="de">German</option>
          <option value="en">English</option>
          </select>
          </div>

          <div>
          <label for="avatar">avatar:</label>
          <input id="avatar" type="url" name="avatar"required>
          </div>

          <div>
          <label for="video">video:</label>
          <input id="video"type="text" name="video">
          </div>

          <div>
          <label for="quote">quote:</label>
          <input id="quote"type="text" name="quote"required>
          </div>

          <div>
          <label for="quote_author">quote author:</label>
          <input id="quote_author" type="text" name="quote_author"required>
          </div>



      <input type="submit" value="Submit" name="submit">







  </body>
</html>
