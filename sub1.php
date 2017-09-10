<?php
require 'header.php';
require 'dbcon.php';

?>	 
	 <section class="contact " id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1></h1>
                        <img src="images/shape.png" alt="">
                        <p>
</p>
                    </div>
                </div>
            </div>
        </div>
         <?php 
         $e = $_GET['user'];
          $r = $_GET['roll'];
         $pass = $_GET['pass'];
$sql = "SELECT * FROM auth where Email= '$e' AND Roll_Number = '$r' ";
                  $result = $conn->query($sql);
                $email = $_GET['user'];
                  $pass = $_GET['pass'];
                   if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                echo '<section><div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h2>Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email</h2>
                   </div>
                </div>
            </div>
        </div></section>';
  echo   $pass = $_GET['pass'];
 echo   $hash = md5(rand(0,1000)) ;
  echo   $email = $_GET['user'];
   echo   $ac = 0;
  
 $sq = "UPDATE auth SET hash='$hash', pass='$pass', active='$ac' WHERE Roll_Number ='$r'";
$conn->query($sq) or die("Error in Inserting".mysqli_error($conn));

$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$email.'
Password: '.$pass.'
------------------------
 
Please click this link to activate your account:
http://www.trickester.net/cdc/cdc/verify.php?email='.$email.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:noreply@cdcknit.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

}
}
                  elseif ($resul->num_rows > 0) {
                    echo "gfdszfghjkl";
                   }
else{
    echo  '<section><div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h2>Your Email is Not Registered In Our Database</h2>
                    </div>
                </div>
            </div>
        </div></section>';
}

$conn->close();
?>


        <div class="container">
            <div class="row text-center">
                <h1> </h1>
            </div>
        </div>
        
    </section>
		<?php
		require 'footer.php'
		?>