<?php
    header("Content-type: text/css; charset: UTF-8");
   $servername = "localhost";
$username = "jay";
$password = "root";
$dbname = "gradesweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT grade FROM subject WHERE laabel = MAT3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $grade = . $row["grade"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

.progress {
	width = <?php echo $grade; ?>"%";
}