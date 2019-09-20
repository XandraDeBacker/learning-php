<!-- write both the login and registration logic:
Create an auth.php file and write both the login and registration logic in them
The registration logic should:
Check if the email is valid (validate all other fields as well if necessary)
Check if password and password confirm are equal
Hash the password and add it to the database in it's hashed form (NEVER store unhashed / unencrypted passwords).
If the registration fails, go back to the previous form, fill in all the previously filled in data (except the passwords) and show an error on the correct field
If the registration succeeds, go to profile.php and show the user's own profile.
The login logic should:
Check if the filled in username / email can be found on a user with that credential
Check if the hashed database password, can be matched to the newly hashed (filled in) password
If not, go back to the login page, giving an error (WATCH OUT: never say whether the password or the username/email was incorrect, always say either one of them could be wrong)
If it's correct, move to the index.php page -->
<?php
require 'connection.php';
$conn=openConnection();

if(isset($_POST['submit'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$psw = $_POST['psw'];
$c_psw = $_POST['c_psw'];

$linkedin = $_POST['linkedin'];
$github = $_POST['github'];
$email = $_POST['email'];
$preferred_language = $_POST['preferred_language'];
$avatar = $_POST['avatar'];
$video = $_POST['video'];
$quote= $_POST['quote'];
$quote_author = $_POST['quote_author'];

$uppercase = preg_match('@[A-Z]@', $psw);
$lowercase = preg_match('@[a-z]@', $psw);
$number = preg_match('@[0-9]@', $psw);

if(!$uppercase || !$lowercase || !$number || strlen($psw) < 6 || empty($psw) ) {
echo "Password should be at least 6 characters" . "<br>" .
"in length and should include at least" . "<br>" . "one upper case letter and one number" . "<br>" .
"and this field should be filled";

}elseif($psw !== $c_psw){
echo  "Password doesnt match !";

}elseif(!preg_match("/^[a-zA-Z ]*$/",$firstname) || empty($firstname)){
echo "No numbers or special characters" . "<br>" . "allowed in firstname" . "<br>" .
 "and this field should be filled";

}elseif(!preg_match("/^[a-zA-Z ]*$/",$lastname) || empty($lastname)){
echo  "No numbers or special characters" . "<br>" . "allowed in lastname" . "<br>" .
"and this field should be filled";

}elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username) || empty($username)){
echo  "Only numbers and letters" . "<br>" . "allowed in username ". "<br>" .
"and this field should be filled";

}elseif(empty($linkedin) || empty($github) || empty($preferred_language) || empty($avatar) || empty($video) || empty($quote) || empty($quote_author || empty($c_psw))){
echo "All fields should be filled";


}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)){
echo "$email is not a valid email address" . "<br>" .
"and this field should be filled";
}else{
echo $psw;
$psw = password_hash($psw, PASSWORD_DEFAULT);
echo $psw;

//$sql vraag om goedgekeurde data in database te steken

$sql = "INSERT INTO hopper_2 (first_name, last_name, username, password, linkedin, github,
                              email, preferred_language, avatar, video, quote,
                              quote_author)
VALUES ('$firstname', '$lastname','$username', '$psw',
        '$linkedin', '$github','$email',
        '$preferred_language', '$avatar',
        '$video', '$quote', '$quote_author')";

if ($conn->query($sql) === TRUE) {


$sql = "SELECT * FROM hopper_2 WHERE first_name = '$firstname' AND last_name = '$lastname'";
$result = mysqli_query ($conn, $sql);
$row = mysqli_fetch_array($result);

header("Location: profile.php?user=" . $row[id]);

      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;

      }
      closeConnection ($conn);
}




// $firstname = test_input($_POST["firstname"]);
//check if firstname only contains letters and whitespace


// if (!preg_match("/^[a-zA-Z]*$",$firstname)){
// $firstnameErr = "Only letters and white space allowed";
// }
//
// $email = test_input($_POST["email"]);
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   $emailErr = "Invalid email format";
// }
//
//
// if ($psw == $c_psw) {
// echo "Password is OK!";
// }
// else {
//   echo "Wrong password"; //failed :(
// }
//
//
// $website = test_input($_POST["website"]);
// if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
//   $websiteErr = "Invalid URL";
// }

}
?>
