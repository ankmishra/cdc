<?php
require 'header.php';
require 'dbcon.php';
require 'session.php';
ini_set( "display_errors", 0); 
?>	 
<style>
    
</style>
	 <section class="contact " id="CONTACT" style ="background-color:#3cc47c; ">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>Your Profile</h1>
                        <img src="images/shape.png" alt="">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
         <div class="container">
                   <div class="row">
                <?php
                $e = $login_session;
                 $sql = "SELECT * FROM info where email= '$e' ";
                  $result = $conn->query($sql);

                   if ($result->num_rows > 0) {
                 // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo  '
                      <div class="col-md-4  wow fadeInRight animated">
                      <div class="single_contact_info" style ="color:red;">
                      <h2>Name</h2><p>' .$row['name'].'</p>
                        
                    </div>
                    <div class="single_contact_info" >
                        <h2>Email</h2>
                        <p> '. $row['email']. '</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>FATHER NAME</h2>
                        <p> '. $row['fathername'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>MOTHER NAME</h2>
                        <p> '. $row['mothername'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>MOBILE NUMBER</h2>
                        <p>'. $row['MobileNumber'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2><ADDRESS/h2>
                        <p> '. $row['Address'] .'</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>DATE OF BIRTH</h2>
                        <p>'. $row['dob'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>GENDER</h2>
                        <p> '. $row['gender'] .'</p>
                    </div>
                    
                    
                </div>
               <div class="col-md-4  wow fadeInLeft animated">
              <div class="single_contact_info">
                        <h2>HIGH SCHOOL BOARD</h2>
                        <p> '. $row['Board'].'</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>10TH  SCHOOL NAME</h2>
                        <p> '.$row['10school'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>HIGH SCHOOL PASSED YEAR</h2>
                        <p>'.$row['10passing'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>HIGH  SCHOOL MARKS  '.$row['Highnumber'].'</h2>  
                      
                    </div>
                    <div class="single_contact_info">
                        <h2>12TH  SCHOOL NAME</h2>
                        <p> '. $row['12school'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>12TH PASSED YEAR</h2>
                        <p> ' .$row['12passing'] .'</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>12TH BOARD</h2>
                        <p> '. $row['Boardi'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2><12TH MARKS/h2>
                        <p> '. $row['Internumber'].' </p>
                    </div>
                </div>
                <div class="col-md-4  wow fadeInLeft animated"> <div class="single_contact_info">
                        <h2>BRANCH</h2>
                        <p> '.$row['Branch'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>ROLL NUMBER</h2>
                        <p>'.$row['Rollnumber'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>1ST YEAR NUMBER</h2>
                        <p> '.$row['Number1'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>2ND YEAR NUMBER</h2>
                        <p> '. $row['Number2'].' </p>
                    </div>
                    <div class="single_contact_info">
                        <h2>3RD YEAR NUMBER</h2>
                        <p> ' .$row['Number3'] .'</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>FINAL Year Number</h2>
                        <p> '. $row['Number4'].' </p>
                    </div></div>
            ';

       }
                } else {
                       echo "You don't have any data";
                  }

                            ?>
                            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>looking forward to hearing from you!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<?php
		require 'footer.php'
		?>