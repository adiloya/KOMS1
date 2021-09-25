<?php

$servername = "localhost";
$username = "shakedha";
$password = "AEHPqAazeLLZZ";
$dbname = "shakedha_komsdb";
$dbpassword = "AEHPqAazeLLZZ";
$dbhost = "localhost";
$dbusername = "shakedha_user";

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
$teacher_phone = $_POST['teacher_phone'];
$teacher_mail = $_POST['teacher_mail'];
$teacher_domain = $_POST['teacher_domain'];
$Sunday1 = $_POST['Sunday1'];
$Sunday2 = $_POST['Sunday2'];
$Sunday3 = $_POST['Sunday3'];
$Monday1 = $_POST['Monday1'];
$Monday2 = $_POST['Monday2'];
$Monday3 = $_POST['Monday3'];
$Tuesday1 = $_POST['Tuesday1'];
$Tuesday2 = $_POST['Tuesday2'];
$Tuesday3 = $_POST['Tuesday3'];
$Wednesday1 = $_POST['Wednesday1'];
$Wednesday2= $_POST['Wednesday2'];
$Wednesday3= $_POST['Wednesday3'];
$Thursday1 = $_POST['Thursday1'];
$Thursday2= $_POST['Thursday2'];
$Thursday3 = $_POST['Thursday3'];


}
$sql = "INSERT INTO Teachers (teacher_firstname, teacher_lastname,teacher_id,teacher_mail,teacher_phone,teacher_domain,Sunday1,Sunday2,Sunday3,Monday1,Monday2,Monday3,Tuesday1,Tuesday2,Tuesday3,Wednesday1,Wednesday2,Wednesday3,Thursday1,Thursday2,Thursday3)
VALUES ('$teacher_firstname', '$teacher_lastname', '$teacher_id','$teacher_mail','$teacher_phone','$teacher_domain','$Sunday1','$Sunday2','$Sunday3','$Monday1','$Monday2','$Monday3','$Tuesday1','$Tuesday2','$Tuesday3','$Wednesday1','$Wednesday2','$Wednesday3','$Thursday1','$Thursday2','$Thursday3')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close(); 
?>
<P><label><button type="button"style="font-size: small;" ><a href="https://shakedha.mtacloud.co.il/repositories/KOMS1/guides/guides2.php"><label>חזור</label></a></button></label>