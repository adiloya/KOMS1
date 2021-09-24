<?PHP 
$servername = "localhost";
$username = "shakedha";
$password = "AEHPqAazeLLZZ";
$dbname = "shakedha_komsdb";
$dbpassword = "AEHPqAazeLLZZ";
$dbhost = "localhost";
$dbusername = "shakedha_user";
header('Content-Type: text/html; charset=utf-8');

 @mysql_connect($dbhost,$dbusername,$dbpassword) or die ('MySQL Not found // Could Not Connect.');
@mysql_select_db("$dbname") or die ("No Database found.");

mysql_query("SET NAMES utf8");

$message="";


 if (isset($_POST['Submit'])){
    $query1="SELECT max(course_num) FROM `Courses` GROUP BY course_num";
    $uid=2+(mysql_query($query1));
    
                           
    $course_name = $_POST['course_name'];
    $course_domain=$_POST['course_domain'];
    $course_start_date=$_POST['course_start_date'];
    $course_end_date=$_POST['course_end_date'];
    $course_day=$_POST['course_day'];
    $course_time=$_POST['course_time'];
 

    $query = "INSERT INTO `Courses` (course_name, course_domain,course_start_date,course_end_date,course_day,course_time,course_num)
        VALUES ('$course_name', '$course_domain', '$course_start_date','$course_end_date','$course_day','$course_time','$uid')";
                            
                            mysql_query($query)
                            or die(mysql_error());
                            
        $message="success";
        
                           
 }                      
     
     
                            
  

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
    <link rel="stylesheet" href="Course.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="Course.js"></script> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>קורסים</title>
</head>
<body>
    <header>
        <img  src="../home/img/ORT-Israel-logo-turquoise-white.webp">
        <h1 >ניהול קורסים</h1>

        
    </header>

    <aside> 
        
        <div id="mySidebar" class="sidebar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../home/home.html#"> <i class="fa fa-fw fa-home"></i>  דף הבית</a>
            <a href="index.php#" > ניהול תכנים</a>
            <a href="../Course/Course.php"> <font color=#4BE1BE><i class="fa fa-fw  fa-arrow-circle-left" aria-hidden="true"></i> ניהול קורסים ושיעורים</font></a>
            <a href="../guides/guides.html">ניהול מדריכים</a>
            <a href="#">ניהול לקוחות</a>
            <a href="#">דו"חות</a>
          </div>
          
          <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; תפריט </button>
          </div>
    </aside>
           
     <main>
        <div class="pagebar">
            <input id="rdb1" type="radio" name="toggler" value="1" >הקמת קורס 
            <input id="rdb2" type="radio" name="toggler" value="2" >ניהול קורסים
            <br>

            
        </div>
       
        
        <div1 id="blk-1"  style="display:none" class=box>
            
            <section class="one">
      <?php
       $query2="SELECT max(course_num) FROM `Courses` GROUP BY course_num";
  echo (mysql_query($query2));
    
      ?>
             <form action="" method="post" >
                   <?php echo $message; ?>
                   
                    <p><label> שם הקורס: </label> <input type="text" name="course_name" placeholder="שם הקורס"></p><br>
                    <p><label>  תחום התמחות:</label>
                        <select name="course_domain" size="1">
                        <option >לשון</option>
                        <option  >אנגלית</option>
                        <option >מתמטיקה</option>
                        <option >ספרות</option></select></p><br>                     
                    
                    <p><label> תאריך התחלה: </label> <input type="date"  id="start" name="course_start_date"
                            min="2021-01-01" max="2021-12-31"></p><br>
                    <p><label> תאריך סיום: </label> <input type="date"  id="end" name="course_end_date"
                        min="2021-01-01" max="2021-12-31"></p><br>
                   
                      
                        <p><label>  יום בשבוע:</label>
                                <select name="course_day" size="1">
                                <option value="1">ראשון</option>
                                <option value="2">שני</option>
                                <option value="3" >שלישי</option>
                                <option value="4">רביעי</option>
                                <option value="5">חמישי</option>
                            </select></p><br>
                        <p> <label>  שעת הקורס:</label>
                                <select name="course_time" size="1">
                                <option value="1">09:00-11:00</option>
                                <option value="2" >14:00-16:00</option>
                                <option value="3">18:00-20:00</option>
                            </select></p><br>
                    
                            
                            <button type="submit" style="font-size: small; margin-top:30px;" >בחירת מדריך</button>
                            
                          
                        </form> 
       
                    
                 
        </section>
            
        </div1>
  
     

                <div1 id="blk-2"  style="display:none">
     <section >
     
       <?php
    //execute the SQL query and return records
    $result = mysql_query("SELECT course_name, course_start_date,course_end_date,course_num FROM Courses");
    ?>                
                <table>
                <thead>
                    <th>שם הקורס</th>
                    <th>תאריך תחילה</th>
                    <th>תאריך סיום</th>
                    <th>הזנת התנהלות</th>
                </thead>
                <tbody>
            <?php
            while ($row = mysql_fetch_assoc($result)) {
                echo
                "<tr>
          <td>{$row['course_name']}</td>
          <td>{$row['course_start_date']}</td>
           <td>{$row['course_end_date']}</td>
            <td>{$row['course_num']}</td>
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
  
  
