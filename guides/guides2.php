<?php


$dbname = "shakedha_komsdb";
$dbpassword = "AEHPqAazeLLZZ";
$dbhost = "localhost";
$dbusername = "shakedha_user";
header('Content-Type: text/html; charset=utf-8');


  
   @mysql_connect($dbhost,$dbusername,$dbpassword) or die ('MySQL Not found // Could Not Connect.');
@mysql_select_db("$dbname") or die ("No Database found.");

mysql_query("SET NAMES utf8");



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
            <a href="https://shakedha.mtacloud.co.il/repositories/KOMS1/home/"> <i class="fa fa-fw fa-home"></i>  דף הבית</a>
            <a href="https://shakedha.mtacloud.co.il/repositories/KOMS1/files/">ניהול תכנים</a>
            <a href="https://shakedha.mtacloud.co.il/repositories/KOMS1/Course/Course.php">ניהול קורסים ושיעורים</a>
            <a href="https://shakedha.mtacloud.co.il/repositories/KOMS1/guides/guides2.php"><font color=#4BE1BE><i class="fa fa-fw  fa-arrow-circle-left" aria-hidden="true"></i>  ניהול מדריכים</font></a>
            <a href="https://shakedha.mtacloud.co.il/repositories/KOMS1/Costumers/Costumers.php">ניהול לקוחות</a>
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
                
   
                <form method="post" action="https://shakedha.mtacloud.co.il/repositories/KOMS1/guides/guides.php">
                    <p><label> שם פרטי: </label> <input type="text" placeholder="שם פרטי" name="teacher_firstname" required>
                    <label>זמינות:</label><label>בוקר</label> <label>צהריים</label><label>ערב</label></p>
                    <p><label> שם משפחה: </label> <input type="text" placeholder="שם משפחה" name="teacher_lastname" required> 
                    <label>ראשון</label>
                    <label><input type="checkbox" name="Sunday1" value="1" ></label>
                    <label><input type="checkbox" name="Sunday2" value="1" ></label>
                    <label><input type="checkbox" name="Sunday3" value="1" ></label></p>
                    
                      <P> <label>טלפון נייד: </label> <input type="tel" placeholder="טלפון נייד" name="teacher_phone"maxlength="10" required>
                      <label>שני</label>
                    <label><input type="checkbox" name="Monday1" value="1" ></label>
                    <label><input type="checkbox" name="Monday2" value="1" ></label>
                    <label><input type="checkbox" name="Monday3" value="1" ></label></p></P> 
                      <p> <label> אימייל: </label> <input type="email" placeholder="אימייל" name="teacher_mail" required>
                      <label>שלישי</label>
                    <label><input type="checkbox" name="Tuesday1" value="1" ></label>
                    <label><input type="checkbox" name="Tuesday2" value="1" ></label>
                    <label><input type="checkbox" name="Tuesday3" value="1" ></label></p>
                    <p><label> ת"ז: </label> <input type="text" placeholder="תז " maxlength="9" name="teacher_id" required>
                    <label>רביעי</label>
                    <label><input type="checkbox" name="Wednesday1" value="1" ></label>
                    <label><input type="checkbox" name="Wednesday2" value="1" ></label>
                    <label><input type="checkbox" name="Wednesday3" value="1" ></label></p> 
                        
                   <p> <label>  תחום התמחות:</label>
                    <select name="teacher_domain" size="1" required >
                    <option value="language">לשון</option>
                    <option value="English" selected>אנגלית</option>
                    <option value="Math">מתמטיקה</option>
                    <option value="Literature">ספרות</option></select><br><label>חמישי</label>
                    <label><input type="checkbox" name="Thursday1" value="1" ></label>
                    <label><input type="checkbox" name="Thursday2" value="1" ></label>
                    <label><input type="checkbox" name="Thursday3" value="1" ></label> </p> 
                   
                    <P><label><button type="button"style="font-size: small;" ><a href="https://shakedha.mtacloud.co.il/repositories/KOMS1/guides/guides2.php"><label>חזור</label></a></button></label>
                    <label><button type="submit" name="Submit" style="font-size: small;" ><label>שלח טופס</label></button></label>

                </form>

             </section>
            </div1>

        <div1 id="blk-2"  style="display:none">
        <?php
    //execute the SQL query and return records
    $query = "SELECT teacher_id,teacher_firstname, teacher_lastname,teacher_mail,teacher_phone,teacher_domain FROM Teachers";
    $result = mysql_query($query);
   
    
    ?>                
                <table>
                <thead>
                    <th>ת.ז</th>
                    <th>שם פרטי </th>
                    <th>שם משפחה</th>
                    <th>אימייל </th>
                    <th>טלפון </th>
                    <th>תחום התמחות </th>
                    <th> אפשרויות </th>
                   
                </thead>
                <tbody>
            <?php
            while ($row = mysql_fetch_assoc($result)) {
          
            $teacher_id=$row['teacher_id'];
            $teacher_firstname=$row['teacher_firstname'];
            $teacher_lastname=$row['teacher_lastname'];
            $teacher_mail=$row['teacher_mail'];
            $teacher_phone=$row['teacher_phone'];
            $teacher_domain=$row['teacher_domain'];
                echo
                "<tr>
            <td>$teacher_id</td>
          <td>$teacher_firstname</td>
          <td>$teacher_lastname</td>
            <td>$teacher_mail</td>
            <td>$teacher_phone</td>
              <td>$teacher_domain</td>
              <td>
           <button><a href='update.php?updateid=$teacher_id'>עדכן</a></button>
           <button><a href='delete.php?deleteid=$teacher_id'>מחק</a></button>
           </td>
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
  
