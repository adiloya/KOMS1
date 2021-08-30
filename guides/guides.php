<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "koms";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Connection successful";
}

if(isset($_POST(['submit'])){
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$id = $_POST['id'];
$email = $_POST['email'];
$address = $_POST['address'];
$center = $_POST['center'];
$prof = $_POST['prof'];


$sql = "INSERT INTO guides (FirstName, LastName,id,email,address,center,prof)
VALUES ('$firstName', '$lastName', '$id','$email','$address','$center','$prof')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();
?>