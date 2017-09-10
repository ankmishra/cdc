<?php
  require 'dbcon.php';
   session_start();
   
   $user_check = $_SESSION['USER'];
    $sql = "SELECT * FROM info where email= '$user_check' ";
                  $result = $conn->query($sql);

                   if ($result->num_rows > 0) {
                 // output data of each row
                    while($row = $result->fetch_assoc()) {
   
   
   $login_session = $row['email'];
   }
}
   if(!isset($_SESSION['USER'])){
      header("location:login.php");
   }
?>