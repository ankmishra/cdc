<?php
require 'header.php';
require 'dbcon.php';
ini_set( "display_errors", 0); 
?>	 
	 <section class="contact " id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1></h1>
                        <img src="images/shape.png" alt="">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
         <?php 


       $fname = $_GET['fname'];
        $mname = $_GET['mname'];
    $lname =  $_GET['lname'];
   $Number = $_GET['number'];
    $email = $_GET['email'];
     $fn = $_GET['fn'];
   $mn = $_GET['mn'];
    $g = $_GET['radio'];
    $db= $_GET['db'];
     $Address =  $_GET['Address'];
     $B1 = $_GET['Board'];
     $n1 = $_GET['highnumber'];
     $b2 = $_GET['Boardi'];
   $sh =  $_GET['schoolh'];
   $yh = $_GET['yh'];
     $si = $_GET['schooli'];
     $yi = $_GET['yi'];
   $n2 =  $_GET['internumber'];
    $gdn = $_GET['gdn'];
   $gdp = $_GET['gdp'];
    $gdc = $_GET['gdc'];
    $gdm= $_GET['gdm'];
    $upr= $_GET['upr'];
     $Br = $_GET['Branch'];
     $r = $_GET['Rollnumber'];
     $ng1 = $_GET['number1'];
    $ng2 =  $_GET['number2'];
   
    $sql = "INSERT INTO info (fname,mname,lname,MobileNumber,email,fathername,mothername,gender,dob,Address,Board,10school,10passing,12school,12passing,Highnumber,Boardi,Internumber,grdip_name,grdipc_name,grdip_year,grdip_mark,upsee_rank,Branch,Rollnumber)
VALUES ('$fname','$mname','$lfname','$Number','$email','$fn','$mn','$g','$db','$Address','$B1','$sh','$yh','$si','$yi','$n1','$b2','$n2','$gdn','$gdc','$gp','$gdm','$upr','$Br','$r')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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