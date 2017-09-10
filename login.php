<?php
require 'header.php'
?>	 
	 <section class="contact " id="CONTACT" style ="background-color:#3cc47c; ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>Login to Your Account</h1>
                        <img src="images/shape.png" alt="">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-md-3  wow fadeInLeft animated">
                    
                </div>
                <div class="col-md-6  wow fadeInLeft animated">
                    <form class="contact-form" action="auth.php">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <input type="email" class="form-control" name="user" placeholder="Email" required>
                                  <input type="password" class="form-control" name="pass" placeholder="passward" required> 
                                  <button type="submit" class="btn btn-default submit-btn form_submit">User Login</button>                                
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="col-md-6  wow fadeInRight animated">
                   
                </div>
<div class="col-md-3  wow fadeInLeft animated">
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<?php
		require 'footer.php'
		?>