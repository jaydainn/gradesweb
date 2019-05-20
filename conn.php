<?php
$subject = $_POST['subject'];
$type = $_POST['type'];
$grade = $_POST['grade'];

if (!empty($subject) || !empty($type) || !empty($grade) ) {
 $host = "localhost";
    $dbUsername = "jay";
    $dbPassword = "root";
    $dbname = "gradesweb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT laabel From subject Where laabel = ? Limit 1";
     $INSERT = 'INSERT Into register (label , grade) values($subject,$grade)';

     //Prepare statement
     //$stmt = $conn->prepare($SELECT);
     //$stmt->bind_param("s", $subject);
     //$stmt->execute();
     //$stmt->bind_result($subject);
     //$stmt->store_result();
     //$rnum = $stmt->num_rows;
     //if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $subject, $grade);
      $stmt->execute();
      echo "New record inserted sucessfully";
     //} else {
     // echo "Someone already register using this email";
    // }
     //$stmt->close();
    // $conn->close();
   // }
//} else {
// echo "All field are required";
 //die();
//}
?>