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


   if(isset($_GET['user']) && !empty($_GET['user']) AND isset($_GET['pass']) && !empty($_GET['pass'])){
    // Verify data
    $email = $_GET['user']; // Set email variable
    $pass = $_GET['pass']; // Set hash variable
                 
    $sql = ("SELECT Email, pass FROM auth WHERE Email='".$email."' AND pass='".$pass."' AND active >'0'") ; 
         $result = $conn->query($sql);
                   if ($result->num_rows > 0) {
 $sq = ("SELECT Email, pass FROM auth WHERE Email='".$email."' AND pass='".$pass."' AND active ='1'") ; 
         $resul = $conn->query($sq);
                   if ($resul->num_rows > 0) {

                    session_start();
                    $_SESSION['USER'] = $email;
                    header("location:profile.php");
        // We have a match, activate the account
       
       // echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
    }
    else{
                    session_start();
                    $_SESSION['USER'] = $email;
                    header("location:admin.php");
    }
}
    
    else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg">Youe Email  is not Vrified or Incorrect Emai or Password</div>';
    }
                 
}
else{
        // No match -> invalid url or account has already been activated.
        echo ' <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>Fill Your Data Correctly</h3>
                    </div>
                </div>
            </div>
        </div>';
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