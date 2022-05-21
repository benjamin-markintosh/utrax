<?php

include ('header.php');
include ('nav.php');



?>

    <!-- Intro -->
	<div id="inner-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 pull-right wow fadeInUp animated">
						<h1 class="inner-heading"><span>We'd love to hear from you,</span> whether you want to come in for a cup of tea or discuss a new project.</h1>
						<div class="text-inner wow fadeInUp animated">GET IN TOUCH</div>
                        
					</div>
				</div>
			</div>
	</div>
    <!-- /Intro -->
    
        
    <!-- Contact Banner -->
    <div class="container">
         <div class="row">
           <div class="banner">
             <img src="images/banner-contact.jpg" alt=""/>
             </div>
            </div>        
     </div>
     <!-- /Contact Banner -->

       
     <div class="container">
           <div class="row">
             <div class="line-symbol"></div>
           </div>
     </div>
     
     
     <!-- Contact info -->
     <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 contact-margin wow fadeInUp animated">
            <h2 class="contact-heading">CONTACT US
            <span>Phone: 212-333-4000</span>
            <img src="images/photo10.jpg" alt=""/>
            </h2>
          </div>
          <div class="col-md-7 col-sm-7 contact-margin">
            <p class="text-contact">What's really important is to simplify. The work of most photographers would be improved immensely if they could do one thing: get rid of the extraneous.
</p> 
<form method="post" action="">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        </div>
                    </div>
                   
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="contact-btn btn">Send Message</button>
                </form>
          </div>
        </div>
     </div>
     <!-- Contact info -->

     
     
     <div class="container">
           <div class="row">
             <div class="line-symbol2"></div>
           </div>
     </div>
     
     
     <!-- Google map -->
     <div class="container">
       <div class="row">
         <div class="col-md-12">
         <div id="map-canvas"></div>
       </div>
     </div>
     </div>
     <!-- /Google map -->

     
          
     <!-- Some text -->
	 <div class="inner-projects">
			<div class="container">
				<div class="row">
					<div class="col-md-8 pull-right wow fadeInUp animated">
						<h1 class="inner-projects-heading"><span>Beauty of style and harmony and grace</span> and good rhythm depend on simplicity. </h1>
						<div class="text-inner-projects">- Plato</div>
                        
					</div>
				</div>
			</div>
	 </div>
     <!-- /Some text -->
     
    
     <!-- Footer -->
     
<?php include('footer.php');?>

	<!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Boostrap JS -->
	<script src="js/bootstrap.min.js"></script>
    <!-- Nav JS -->
	<script src="js/nav.js"></script>
    <!-- Smooth scroll JS -->
    <script src="js/smoothscroll.js"></script>
    <!-- Gogle map JS -->
    <script src="js/app.js"></script> 
    <!-- Wow JavaScript -->
    <script src="js/wow.js"></script>
    
     <script>
     new WOW().init();
     </script>


	</body>
</html>

