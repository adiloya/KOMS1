<?php

$servername = "https://mtapanel.mtacloud.co.il:2083/";
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
$teacher_phone = $_POST['teacher_phone'];
$teacher_mail = $_POST['teacher_mail'];
$teacher_domain = $_POST['teacher_domain'];
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
$sql = "INSERT INTO Teachers (teacher_firstname, teacher_lastname,teacher_id,teacher_mail,address,teacher_phone,center,teacher_domain,ava_1,ava_2,ava_3,ava_4,ava_5,ava_6,ava_7,ava_8,ava_9,ava_10,ava_11,ava_12,ava_13,ava_14,ava_15)
VALUES ('$teacher_firstname', '$teacher_lastname', '$teacher_id','$teacher_mail','$address','$phone','$center','$teacher_domain','$ava_1','$ava_2','$ava_3','$ava_4','$ava_5','$ava_6','$ava_7','$ava_8','$ava_9','$ava_10','$ava_11','$ava_12','$ava_13','$ava_14','$ava_15')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="guides.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="guides.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>מדריכים</title>
</head>
<body>
    <header>
        <img  src="../home/img/ORT-Israel-logo-turquoise-white.webp">
        <h1 >ניהול מדריכים</h1>

        
    </header>

    <aside> 
        
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../home/home.html"> <i class="fa fa-fw fa-home"></i>  דף הבית</a>
            
            
            <a href="../files/files.html#">ניהול תכנים</a>
            <a href="../Course/Course.html#">ניהול קורסים ושיעורים</a>
            <a href="../guides/guides.html"><font color=#4BE1BE><i class="fa fa-fw  fa-arrow-circle-left" aria-hidden="true"></i>  ניהול מדריכים</font></a>
            <a href="#">ניהול לקוחות</a>
            <a href="#">דו"חות</a>
          </div>
          
          <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; תפריט </button>
          </div>
    </aside>
           
     <main>
        <input id="rdb1" type="radio" name="toggler" value="1" />רישום מדריך חדש </input>
        <input id="rdb2" type="radio" name="toggler" value="2" />עריכת מדריך קיים</input><br>
        <div1 id="blk-1"  style="display:none" class="box">
            <section class="one">
                <form method="post" action="http://localhost/test/guides.php">
                    <p><label> שם פרטי: </label> <input type="text" placeholder="שם פרטי" name="teacher_firstname" required>
                        <label>טלפון נייד: </label> <input type="tel" placeholder="טלפון נייד" name="teacher_phone" required>
                        <label> שעות עבודה רצויות: </label> <input type="checkbox"  name="ava" style="display: none;">&nbsp;
                        <label> ראשון בוקר: </label> <input type="checkbox" name="ava_1" value="1" ></p>
                    <p><label> שם משפחה: </label> <input type="text" placeholder="שם משפחה" name="teacher_lastname" required>
                        <label> אימייל: </label> <input type="text" placeholder="אימייל" name="teacher_mail" required>
                        <label> ראשון צהריים: </label> <input type="checkbox"  name="ava_2" value="1">
                        <label> ראשון ערב: </label> <input type="checkbox"  name="ava_3" value="1"></p>
                    <p><label> ת"ז: </label> <input type="text" placeholder="תז " maxlength="9" name="teacher_id" required>
                    <label> שני בוקר: </label> <input type="checkbox"  name="ava_4" value="1">
                    <label>שני צהריים: </label> <input type="checkbox"  name="ava_5" value="1"> </p>
                    <p> <lable></lable> <label></label><label></label><label></label><label> שני ערב: </label> <input type="checkbox" name="ava_6" value="1">
                        <label> שלישי בוקר: </label> <input type="checkbox"  name="ava_7" value="1"></p> 
                        
                    <label>  תחום התמחות:</label>
                    <select name="teacher_domain" size="1" required >
                    <option value="language">לשון</option>
                    <option value="English" selected>אנגלית</option>
                    <option value="Math">מתמטיקה</option>
                    <option value="Literature">ספרות</option></select><br>  
                    <label> שלישי צהריים: </label> <input type="checkbox"  name="ava_8" value="1">
                    <label> שלישי ערב: </label> <input type="checkbox"  name="ava_9" value="1"></p>
                    <p> <lable></lable> <label></label><label></label><label></label><label> רביעי בוקר: </label> <input type="checkbox"  name="ava_10" value="1">
                        <label> רביעי צהריים: </label> <input type="checkbox"  name="ava_11" value="1"></p> 
                        <p> <lable></lable> <label></label><label></label><label></label><label> רביעי ערב: </label> <input type="checkbox" name="ava_12" value="1">
                            <label> חמישי בוקר: </label> <input type="checkbox"  name="ava_13" value="1"></p>
                    <P><label><button type="button"style="font-size: small;" ><a href="http://127.0.0.1:5500/VScode/page1/page%201.html"><label>חזור</label></a></button></label>
                    <label><button type="submit" name="Submit" style="font-size: small;" ><label>שלח טופס</label></button></label>
                    <lable></lable> <label></label><label> חמישי צהריים: </label> <input type="checkbox"  name="ava_14" value="1">
                        <label> חמישי ערב: </label> <input type="checkbox"  name="ava_15" value="1"></P>
                    
                </form>

             </section>
            </div1>

        <div1 id="blk-2"  style="display:none">
        <?php
    //execute the SQL query and return records
    $result = mysql_query("SELECT teacher_firstname, teacher_lastname,teacher_id,teacher_mail,teacher_phone,teacher_domain,ava_1,ava_2,ava_3,ava_4,ava_5,ava_6,ava_7,ava_8,ava_9,ava_10,ava_11,ava_12,ava_13,ava_14,ava_15 FROM Teachers");
    ?>                
                <table>
                <thead>
                    <th>שם פרטי</th>
                    <th>שם משפחה </th>
                    <th>ת.ז </th>
                    <th>כתובת </th>
                    <th>טלפון </th>
                    <th>מרכז </th>
                    <th>תחום התמחות </th>
                    <th>ראשון בוקר </th>
                    <th>ראשון צהריים </th>
                    <th>ראשון ערב </th>
                    <th>שני בוקר </th>
                    <th>שני צהריים </th>
                    <th>שני ערב </th>
                    <th>שלישי בוקר </th>
                    <th>שלישי צהריים </th>
                    <th>שלישי ערב </th>
                    <th>רביעי בוקר </th>
                    <th>רביעי צהריים </th>
                    <th>רביעי ערב </th>
                    <th>חמישי בוקר </th>
                    <th>חמישי צהריים </th>
                    <th>חמישי ערב </th>
                   
                </thead>
                <tbody>
            <?php
            while ($row = mysql_fetch_assoc($result)) {
                echo
                "<tr>
          <td>{$row['teacher_firstname']}</td>
          <td>{$row['teacher_lastname']}</td>
           <td>{$row['teacher_id']}</td>
            <td>{$row['teacher_mail']}</td>
            <td>{$row['teacher_phone']}</td>
              <td>{$row['teacher_domain']}</td>
              <td>{$row['ava_1']}</td>
              <td>{$row['ava_2']}</td>
               <td>{$row['ava_3']}</td>
                <td>{$row['ava_4']}</td>
                <td>{$row['ava_5']}</td>
              <td>{$row['ava_6']}</td>
               <td>{$row['ava_7']}</td>
                <td>{$row['ava_8']}</td>
                <td>{$row['ava_9']}</td>
              <td>{$row['ava_10']}</td>
               <td>{$row['ava_11']}</td>
                <td>{$row['ava_12']}</td>
                <td>{$row['ava_13']}</td>
                <td>{$row['ava_14']}</td>
                 <td>{$row['ava_15']}</td>
        </tr>";
            }
            ?>
        </tbody>
              </table>
                      </section>

        </div1>
        
     </main>
               
    
</body>
</html>
  
