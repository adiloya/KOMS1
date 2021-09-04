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

if(isset($_POST['Submit'])){
$teacher_firstname = $_POST['teacher_firstname'];
$teacher_lastname = $_POST['teacher_lastname'];
$teacher_id = $_POST['teacher_id'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$center = $_POST['center'];
$prof = $_POST['prof'];

}
$sql = "INSERT INTO guides (teacher_firstname, teacher_lastname,teacher_id,email,address,phone,center,prof)
VALUES ('$teacher_firstname', '$teacher_lastname', '$teacher_id','$email','$address','$phone','$center','$prof')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>