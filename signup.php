<?php
require 'header.php';
?>   
     <section class="contact " id="CONTACT" style ="background-color:#558C89; ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>get in touch</h1>
                        <img src="images/shape.png" alt="">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" >
                <div class="col-md-2  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        
                       
                    </div>
                </div>
                <div class="col-md-8  wow fadeInRight animated">
                    <form class="contact-form" method="get" action="Submit.php">
                        <div class="row">
                            <div class="col-md-12">
                            <h2>Personal Details</h2>
                                <input type="text" class="form-control"  name= "fname" placeholder="Frist Name" required>
                                  <input type="text" class="form-control"  name= "mname" placeholder="Middle Name">
                                   <input type="text" class="form-control"  name= "lname" placeholder="Last Name" required>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                 <input type="text" class="form-control"  name= "fn" placeholder="Father's Name" required>
                                <input type="text" class="form-control" name="mn" placeholder="Mother's Name" required>
                                <input type="number"  class="form-control" min="1000000000" max="9999999999" maxlength="10" name="number" placeholder="Mobile Number" required>
                                 <input type="date" class="form-control" name="db" placeholder="Date Of Birth" required>
                                 <p>Gender &nbsp&nbsp   <input type="radio" name="radio" value="Male">male
                                 <input type="radio" name="radio" value="Female">Female</p>
                                <input type="text" class="form-control" name="Address" placeholder="Address" required> 
                              
                                     <h2>Academics Details</h2>
                                     <input type="text" class="form-control"  name= "Board" placeholder="10'th Board" required>
                                     <input type="text" class="form-control"  name= "schoolh" placeholder="10'th School" required>
                                     <input type="text" class="form-control"  name= "yh" placeholder="10'th passing Year " required>
                                   
                                <input type="text" class="form-control" name="highnumber" placeholder="10'th percentage or CGPA" required>
                                <input type="text" class="form-control" name="Boardi" placeholder="12' Board" required>
                                <input type="text" class="form-control" name="internumber" placeholder="12'th Percentage" required> 
                                <input type="text" class="form-control"  name= "schooli" placeholder="12'th School" required>
                                     <input type="text" class="form-control"  name= "yi" placeholder="12'th passing Year " required>
                                     <input type="text" class="form-control" name="gdn" placeholder="Another graduation Or Diploma Name"> 
                                 <input type="text" class="form-control" name="gdc" placeholder="graduation Or Diploma collage name"> 
                                  <input type="year" class="form-control" name="gdp" placeholder="graduation Or Diploma passing year"> 
                                  <input type="text" class="form-control" name="gdm" placeholder="graduation Or Diploma marsks Ex 567/1000">
                                   <input type="text" class="form-control" name="upr" placeholder="UPSEE Rank">  
                                 <h2>College Details</h2>
                                     <input type="text" class="form-control"  name= "Branch" placeholder="Branch" required>
                                <input type="text" class="form-control" name="Rollnumber" placeholder="Roll Number" required>
                                <input type="text" class="form-control" name="Yearg" placeholder="Expected Year Of Graduation" required>
                               
                                <button type="submit" class="btn btn-default submit-btn form_submit">Update</button>                                  
                            </div>
                            <div class="col-md-2  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        
                    </div>
                                                           
                            
                        </div>
                    </form>
                </div>

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