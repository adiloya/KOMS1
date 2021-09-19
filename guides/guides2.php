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



    $sql=$conn->prepare('SELECT * FROM gudies WHERE teacher_firstname=:teacher_firstname');
    $sql execute(array(':teacher_firstname'=>$_REQUEST[searchcategory]));

    while ($row=$sql->fetch())
    {
       //Here is where you will loop through all the results for your search. If 
       //you had for example for each product name, price, and category, 
       //you might do the following
       echo "<tr><td>$row[teacher_firstname]</td><td>$row[teacher_lastname]</td><td>$row[teacher_id]</td></tr>";
    }

/*
$sql="select teacher_firstname,teacher_lastname,teacher_id from guides ";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
         echo    "<table><tr><th>teacher_firstname</th>
                  <th>teacher_lastname</th>
                  <th>teacher_id</th></tr>";
          while($row=$result->fetch_assoc()){
                  echo
                   "<tr><td>".$row["teacher_firstname"]."</td>
                    <td>".$row["teacher_lastname"]." </td>
                    <td>".$row["teacher_id"]."</td></tr>";
            }
             echo "</table>";
    }
    else
              echo "No data found";

//one try
   /* // Run the query.
$result = $conn->query("select teacher_firstname,teacher_lastname,teacher_id from guides");

// Get the result in to a more usable format.
$query = array();
while($query[] = mysqli_fetch_assoc($result));
array_pop($query);

// Output a dynamic table of the results with column headings.
echo '<table border="1">';
echo '<tr>';
foreach($query[0] as $key => $value) {
    echo '<td>';
    echo $key;
    echo '</td>';
}
echo '</tr>';
foreach($query as $row) {
    echo '<tr>';
    foreach($row as $column) {
        echo '<td>';
        echo $column;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
//two
$resultSet = $conn ->query("select teacher_firstname FROM guides");

if (mysqli_num_rows($resultSet)>0)
{
echo "<select>";

while($rows=mysqli_fetch_assoc($result)){
echo "<option>".$rows["teacher_firstname"]."</option>";
    }
echo "</select>";
}*/

$conn->close(); 
?>