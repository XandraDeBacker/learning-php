
<?php
function openConnection() {

 // Try to figure out what these should be for you
 //Before we can access data in the MySQL database, we need to be able to connect to the server:
 /*$dbhost will be the host where your local server is running it is usually localhost.
    1. $dbuser will be the username i.e. root and
    2. dbpass will be the password which is the same that you used to access your phpmyadmin.
    3. $dbname will be the name of your database which we have created (becode_genk).
*/

 $dbhost    = "localhost";
 $dbuser    = "root";
 $dbpass    = "!Aqwxcvbn01";
 $db        = "becode_genk";


 /* Online dB credentials
$dbhost    = "136.144.221.129";
$dbuser    = "genk";
$dbpass    = "{)+O^O@iw!].zmjT";
$db        = "becode_genk";
*/

 // Try to understand what happens here
 // the connection needs to be created this way with the 4 perameters to get the database running:
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn->error);

 // Why we do this here
 // It will show the requested $conn
 return $conn;
}



// And why would we do this here ?
// Have the option to also close
function closeConnection($conn) {
    $conn->close();
}

?>
