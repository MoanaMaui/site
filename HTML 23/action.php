<?php
//Database connection
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user";
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname); 

if(isset($_POST['submit'])) {
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 if(!empty($username) && !empty($email) && !empty($password)) {
  //save to database
  $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
  $sql = "INSERT INTO user (username, email, password)
values ('$username', '$email', '$password')";

   if($conn -> query($sql)) {
      echo "Form Submitted Successfully!";
    } else {
      die("Connection error!");
    }
    
 } else {
  echo "All fields are required please fill out those fields!";
 }
}

?>