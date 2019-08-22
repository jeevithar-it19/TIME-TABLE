<?php
$servername = "121.200.55.60:3307";
$username = "2019UIT1086";
$password = "2019UIT1086";
$dbname = "2019UIT1086";

// create connection
$conn =new  mysqli($servername,$username,$password,$dbname);
// check connection
//if ($conn->connect_error){
//die("connection failed: " .
//$conn->connect_error);/
//}
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
     while ($row =$result->fetch_assoc()) {
    echo "s_no:" . $row["s_no"]. " enroll" . $row["enrollment_no"]. "name" .$row["student_name"]."<br />";
//echo "1";
 }
} else {
     echo "0 results";
}
$conn->close();
?>

