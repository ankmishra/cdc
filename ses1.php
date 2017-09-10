<?php
  require 'dbcon.php';
   session_start();
   
   $user_check = $_SESSION['email'];
$r = $_SESSION['roll'];
    $sql = "SELECT * FROM info where Email= '$user_check' AND Roll_Number = '$r' ";
                  $result = $conn->query($sql);

                   if ($result->num_rows > 0) {
                 // output data of each row
                    while($row = $result->fetch_assoc()) {
   
   
   $email = $row['Email'];
$r = $row['Roll_Number'];
   }
}
if(!isset($_SESSION['email']&&$_SESSION['roll'])){
      header("location:sign.php");
   }
  
?>