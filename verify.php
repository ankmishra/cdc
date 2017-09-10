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
                        <p><?php $msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';?>
</p>
                    </div>
                </div>
            </div>
        </div>
         <?php 


   if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = $_GET['email']; // Set email variable
    $hash = $_GET['hash'];
    $pass = $_GET['pass']; // Set hash variable
    $roll = $_GET['roll'];
    $sql = ("SELECT email, hash FROM auth WHERE Email='".$email."' AND hash='".$hash."'") ; 
         $result = $conn->query($sql);
                   if ($result->num_rows > 0) {
   
        // We have a match, activate the account
        $sq = "UPDATE auth SET active='1' WHERE Email='".$email."' AND hash='".$hash."' AND active='0'";
      $conn->query($sq) or die("Error in updatig".mysqli_error($conn));
        echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
 session_start();
                    $_SESSION['email'] = $email; 
                  $_SESSION['roll'] = $roll;    
 header("Location: signup.php");
die();
    }

    
    else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
    }
                 
}
else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">this is a invalid path for verification.</div>';
    }

$conn->close();
?>


        <div class="container">
            <div class="row text-center">
                <h1> Your Data Has Been Submmited</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>to See your profile logged to your account</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<?php
		require 'footer.php'
		?>