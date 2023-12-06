<?php error_reporting(0); $current = 4; ?><!doctype html>
 <html lang="en-gb" class="no-js"> <!--<![endif]-->


<?php include('head.php'); ?>

<body>


<div class="site_wrapper">

<?php include('open_close_identifier.php'); ?>

<header id="header">

	<div id="trueHeader">
    
	<div class="wrapper">
    
     <div class="container">
    
		<!-- Logo -->
		<div class="logo"><a href="index.php" id="logo"></a></div>
		
	<!-- Menu -->
	<?php include('menu.php'); ?>
	<!-- end menu -->
        
	</div>
		
	</div>
    
	</div>
    
</header>

<div class="clearfix"></div>
<div class="content_fullwidth lessmar">
<div class="container">
	
    <img src="images/career.png" alt="" class="rimg banner"/>
	
    <br /><br />
    
   <div class="alileft"><h3>Professional Website Design &amp; Development. Satisfied Customers Around the World.</h3></div>
     
		<p>Propel Soft provides ample opportunities to its work force on mutual benefit against grow and development. Strategies are not only framed for our clients but also for the employees to upgrade their skills. To make it more Effortlessness and Pleasurable, Propel Soft offers its employees a flexible working time and freedom to work without any restrictions all what we need is, get the work done at the end of the day. At Propel Soft your academic performance is never looked upon; all what is required, is your desire to work and sufficient talent to project your skills.</p>
    
    <div class="clearfix divider_dashed2"></div><!-- end divider line -->
</div>
    
    
    
    <div class="container">
    <div class="one_full">
    
    	<h3>1.Web Designers :</h3>
		<span><strong>Web Designer : </strong><em> &nbsp;&nbsp;Job Description, Duties and Requirements.</em></span><br/><br/>
		
		<span><strong>Web Designer Job Positions : </strong><em> &nbsp;&nbsp;2 – 3 Nos.</em></span><br/><br/>
		
		<span><strong>Qualification : </strong><em> &nbsp;&nbsp;Any Graduate.</em></span><br/><br/>
		
		<span><strong>Experience : </strong><em> &nbsp;&nbsp;0 to 2 year.</em></span><br/><br/>
		
		<span><strong>Required Skills : </strong><em> &nbsp;&nbsp; Adobe Photoshop, Html, css, html5, css3, Responsive, javascript.</em></span><br/><br/>
        
       <span><strong>Expert with proficiency in multiple design software like : </strong><em> &nbsp;&nbsp; Photoshop, Dreamweaver, Adobe illustrator.</em></span><br/><br/>
	   
	   <span><strong>Required Skills : </strong><em> &nbsp;&nbsp; Adobe Photoshop, Html, css, html5, css3, Responsive, javascript.</em></span><br/><br/>
	   
	   <span><strong>Strong knowledge of </strong><em> &nbsp;&nbsp; Adobe Photoshop, Html, css, html5, css3, Responsive, javascript.Exceptional creativity and designing skills. Expert in converting PSD to HTML.</em></span><br/><br/><br/>
	
	 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Apply Online</button>



   </div><!-- end section -->
   
	<div class="clearfix divider_dashed2"></div><!-- end divider line -->
	
	<div class="one_full">
    
    	<h3>2. Android Developer ( 1yr - 3yrs of relevant experience ) :</h3>
		
		<p>We are looking for a Android Devloper with strong knowledge in Android SDK and Working with remote data via REST and JSON.</p><br/>
		
		<strong>Required Skills : </strong><br/><br/>
		
		<span><strong>1.


		</strong><em> &nbsp;&nbsp;Professional development experience with a strong understanding of Java, OO, Android & SDK - and design patterns.</em></span><br/><br/>
		
		<span><strong>Web Designer Job Positions : </strong><em> &nbsp;&nbsp;2 – 3 Nos.</em></span><br/><br/>
		
		<span><strong>Qualification : </strong><em> &nbsp;&nbsp;Any Graduate.</em></span><br/><br/>
		
		<span><strong>Experience : </strong><em> &nbsp;&nbsp;0 to 2 year.</em></span><br/><br/>
		
		<span><strong>Required Skills : </strong><em> &nbsp;&nbsp; Adobe Photoshop, Html, css, html5, css3, Responsive, javascript.</em></span><br/><br/>
        
       <span><strong>Expert with proficiency in multiple design software like : </strong><em> &nbsp;&nbsp; Photoshop, Dreamweaver, Adobe illustrator.</em></span><br/><br/>
	   
	   <span><strong>Required Skills : </strong><em> &nbsp;&nbsp; Adobe Photoshop, Html, css, html5, css3, Responsive, javascript.</em></span><br/><br/>
	   
	   <span><strong>Strong knowledge of </strong><em> &nbsp;&nbsp; Adobe Photoshop, Html, css, html5, css3, Responsive, javascript.Exceptional creativity and designing skills. Expert in converting PSD to HTML.</em></span><br/><br/><br/>
	   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Apply Online</button>

<!-- Modal -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Apply Web Designer Job</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal col-sm-12" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="register_form_official" method="post" enctype="multipart/form-data">
          <div class="form-group"><label>Name</label><input class="form-control required" name="name" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
          <div class="form-group"><label>Message</label><textarea class="form-control" name="message" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea></div>
          <div class="form-group"><label>E-Mail</label><input class="form-control email" name="email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
          <div class="form-group"><label>Phone</label><input class="form-control phone" name="phone" placeholder="9876543210" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (9876543210)" type="text"></div>
          <div class="form-group"><label>Resume : </label><input id="tele" class="form-control"  name="filename" type="file"  /></div>
          <div class="form-group"><input type="submit" name="submit" value="Send" class="btn btn-success pull-right"> <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p></div>

        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>






<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Apply Android Developer Job </h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal col-sm-12" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="register_form_official" method="post" enctype="multipart/form-data">
          <div class="form-group"><label>Name : </label><input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" name="name" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
          <div class="form-group"><label>Message : </label><textarea class="form-control" name="message" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea></div>
          <div class="form-group"><label>E-Mail : </label><input class="form-control email" name="email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
          <div class="form-group"><label>Phone : </label><input class="form-control phone" name="phone" placeholder="9876543210" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (9876543210)" type="text"></div>
           <div class="form-group"><label>Resume : </label><input id="tele" class="form-control"  name="filename" type="file"  /></div>
          <div class="form-group"><input type="submit" name="submit" value="Send" class="btn btn-success pull-right"> <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p></div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>


                      <?php
                     

if ($_REQUEST['submit']){
	
   // Set the "To" email address
  $to="admin@propelsoft.in";


	//Subject of the mail
   $subject="Job Request";

   // Get the sender's name and email address plug them a variable to be used later
   $from = stripslashes($_POST['name'])."<".stripslashes($_POST['email']).">";
	
	// Check for empty fields
   if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['message']))
	{
		$errors .= "\n Error: all fields are required";
	}
	
	// Get all the values from input
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	// Check the email address
	if (!eregi(	"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_address))
	{
		$errors .= "\n Error: Invalid email address";
	}

   // Now Generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // Now Store the file information to a variables for easier access
   $tmp_name = $_FILES['filename']['tmp_name'];
   $type = $_FILES['filename']['type'];
   $file_name = $_FILES['filename']['name'];
   $size = $_FILES['filename']['size'];

   // Now here we setting up the message of the mail
   $message = "\n\n Name: $name \n\n Email: $email_address \n\n Mobile: $phone \n\nMessage: \n\n $message \n\nHere is your file: $file_name";

   // Check if the upload succeded, the file will exist
   if (file_exists($tmp_name)){

      // Check to make sure that it is an uploaded file and not a system file
      if(is_uploaded_file($tmp_name)){

         // Now Open the file for a binary read
         $file = fopen($tmp_name,'rb');

         // Now read the file content into a variable
         $data = fread($file,filesize($tmp_name));

         // close the file
         fclose($file);

         // Now we need to encode it and split it into acceptable length lines
         $data = chunk_split(base64_encode($data));
     }

      // Now we'll build the message headers
      $headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
         "Content-Type: multipart/mixed;\r\n" .
         " boundary=\"{$mime_boundary}\"";

      // Next, we'll build the message body note that we insert two dashes in front of the  MIME boundary when we use it
      $message = "This is a multi-part message in MIME format.\n\n" .
         "--{$mime_boundary}\n" .
         "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
         "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";

      // Now we'll insert a boundary to indicate we're starting the attachment we have to specify the content type, file name, and disposition as an attachment, then add the file content and set another boundary to indicate that the end of the file has been reached
      $message .= "--{$mime_boundary}\n" .
         "Content-Type: {$type};\n" .
         " name=\"{$file_name}\"\n" .
         //"Content-Disposition: attachment;\n" .
         //" filename=\"{$fileatt_name}\"\n" .
         "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n" .
         "--{$mime_boundary}--\n";

      // Thats all.. Now we need to send this mail... :)
      if (@mail($to, $subject, $message, $headers))
	  {
         ?>
         <div><center><h3 style="color: green;">Mail Sent successfully !!</h3></center></div>
         <?php
	  }else
	  {
         ?>
         <div><center>
           <h3 style="color: red;">Error !! Unable to send Mail..</h3></center></div>

         <?php
	  }
   }
}
?>
      
    </div><!-- end section -->
	
	<div class="clearfix divider_dashed2"></div><!-- end divider line -->
</div>
</div><!-- end content area -->




<?php include('footer.php'); ?>
</div>
  <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- animations -->
<script src="js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="js/animations/js/smoothscroll.js" type="text/javascript"></script>

<!-- slide panel -->
<script type="text/javascript" src="js/slidepanel/slidepanel.js"></script>

<!-- mega menu -->
<script src="js/mainmenu/bootstrap.min.js"></script> 
<script src="js/mainmenu/customeUI.js"></script> 

<!-- jquery jcarousel -->
<script type="text/javascript" src="js/carousel/jquery.jcarousel.min.js"></script>

<!-- Toggle -->
<script type="text/javascript">
    $(document).ready(function(){
      $("#colosebut1").click(function(){
        $("#div1").fadeOut("slow");
      });
      $("#colosebut2").click(function(){
        $("#div2").fadeOut("slow");
      });
      $("#colosebut3").click(function(){
        $("#div3").fadeOut("slow");
      });
      $("#colosebut4").click(function(){
        $("#div4").fadeOut("slow");
      });
    
    });
</script>

<!-- scroll up -->
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- tabs -->
<script src="js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<!-- jquery jcarousel -->
<script type="text/javascript">
(function($) {
 "use strict";

	jQuery(document).ready(function() {
			jQuery('#mycarouselthree').jcarousel();
	});

})(jQuery);
</script>

<!-- accordion -->
<script type="text/javascript" src="js/accordion/custom.js"></script>

<!-- sticky menu -->
<!-- <script type="text/javascript" src="js/mainmenu/sticky.js"></script>
 --><script type="text/javascript" src="js/mainmenu/modernizr.custom.75180.js"></script>

<!-- progress bar -->
<script src="js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>
  


<!-- cubeportfolio -->
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="js/cubeportfolio/main.js"></script>
<script type="text/javascript" src="js/cubeportfolio/main5.js"></script>
<script type="text/javascript" src="js/cubeportfolio/main6.js"></script>

<!-- carousel -->
<script defer src="js/carousel/jquery.flexslider.js"></script>
<script defer src="js/carousel/custom.js"></script>

<!-- lightbox -->
<script type="text/javascript" src="js/lightbox/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/lightbox/custom.js"></script>



</body>

</html>
