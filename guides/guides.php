<?php
$servername = "localhost";
$username = "shakedha";
$password = "AEHPqAazeLLZZ";
$dbname = "shakedha_komsdb";

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
$ava_1 = $_POST['ava_1'];
$ava_2 = $_POST['ava_2'];
$ava_3 = $_POST['ava_3'];
$ava_4 = $_POST['ava_4'];
$ava_5 = $_POST['ava_5'];
$ava_6 = $_POST['ava_6'];
$ava_7 = $_POST['ava_7'];
$ava_8 = $_POST['ava_8'];
$ava_9 = $_POST['ava_9'];
$ava_10 = $_POST['ava_10'];
$ava_11= $_POST['ava_11'];
$ava_12= $_POST['ava_12'];
$ava_13 = $_POST['ava_13'];
$ava_14 = $_POST['ava_14'];
$ava_15 = $_POST['ava_15'];

}
$sql = "INSERT INTO guides (teacher_firstname, teacher_lastname,teacher_id,email,address,phone,center,prof,ava_1,ava_2,ava_3,ava_4,ava_5,ava_6,ava_7,ava_8,ava_9,ava_10,ava_11,ava_12,ava_13,ava_14,ava_15)
VALUES ('$teacher_firstname', '$teacher_lastname', '$teacher_id','$email','$address','$phone','$center','$prof','$ava_1','$ava_2','$ava_3','$ava_4','$ava_5','$ava_6','$ava_7','$ava_8','$ava_9','$ava_10','$ava_11','$ava_12','$ava_13','$ava_14','$ava_15')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>