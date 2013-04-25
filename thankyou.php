<?php

/////////////////////////////////////////
// @ Example usage of the HK API
// @ 15th February 2013
// @ Author: Ashley Ford
// @ ashley@harkable.com
////////////////////////////////////////

include('class/HkCompAPI.class.php');

$competition = new HkCompAPI();

    if(isset($_POST['_submit'])){
    
    	$_POST['dob'] = $_POST['_year'].'-'.$_POST['_month'].'-'.$_POST['_day'];
    
	    $validation = array(
	
	    	//@ Format of the array is as follows:
	    	//@ Input Value Name
	    	//@ Error Message
	    	//@ Required, valid_email, over_18, captcha (value must be blank)    	
	    	
			array('fname', 		"Please enter your first name",   			 'required'),
			array('lname', 		"Please enter your last name",    			 'required'),
			array('dob',  		"This promotion is open to users over 18!",	 'over_18'),
			array('email', 		"Please enter a valid email address", 		 'valid_email'),
			array('terms', 		"Please Accept the Terms &amp; Conditions",	 'required'),
			array('_captcha',	"We're not sure you're a human...", 		 'captcha')
	
		);  
		
		// validate for errors
		$errors = $competition->validate($validation);
		
		// validate returns FALSE if no errors are found
		if($errors===FALSE){
			// save the data via the api call with the campaign name
        	$save = $competition->save('ign_bioshock');
        	        	
        	if(isset($save['_auth']) && $save['_auth']=='failed'){
	        	echo 'Error Authenticating With the API';     	  	
        	}
             
            // if the data was saved successfully  	
        	if(isset($save['_saved'])==TRUE){
	        
	        //redirect to thankyou page
	        	
	        header('location: thankyou.php');

        	}
          		       
        }
                      
    } 
?>


<!DOCTYPE html>

<html lang="en" ng-app="myApp">

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IGN Columbia</title>

<link rel="stylesheet" href="stylesheets/ign-styles.css">
<link rel="stylesheet" href="stylesheets/app.css">

</head>

<body class="dob_gate comp">
	<div class="moving_clouds"></div>
	<div id="zepplin"></div>
	<div id="floating_house"></div>
<!-- 
	<section class="row">
		<div class="twelve columns">
			<div class="title title-tagline"><img src="images/comp_tagline.png" alt=""></div>
		</div>
	</section> -->

	<header id="ignHeaderHeader">
	<div id="ignHeader" class="clear">
		<div class="fixed">
			<div id="ignHeader-userBar">
				<div class="container"> <a id="ignHeader-logo" href="./"></a>
				</div>
			</div>
		</div>

		<div id="ignHeader-navigation">
			<div class="container">
				<div class="title"><img src="images/bg_bioshock_logo.png" alt=""></div>
			</div>
		</div>
	</div>
</header>


<div class="age_gate competition">

                
 <div class="row comp_copy">
 	<div class="twelve columns">
 		<h4 style="margin: 20px 0px 50px; text-align: center; font-weight: normal;" class="bebas">Thanks! Your entry has been added</h4>
	</div>
</div>

</div>
 
	<!--footer section-->
		<!-- start footer -->    
	<footer id="ign_footer">
		<div class="ign-elements">
			<div class="row">
				<section class="six columns">
               		<p class="corp-terms">Copyright 2012 <b>IGN Entertainment UK, Inc.</b><br>
               		 <a href="http://corp.ign.com/privacy.html" title="Privacy Policy">Privacy Policy</a> | <a href="http://corp.ign.com/user-agreement.html" title="User Agreement">User Agreement</a></p>
            	</section>
	            <section class="six columns right">
	                <p class="corp-links"><a href="http://uk.corp.ign.com/#about" title="About Us">About Us</a> | <a href="http://uk.corp.ign.com/#contact" title="Contact Us">Contact Us</a> | <a href="http://corp.ign.com/feeds.html" title="RSS Feeds">RSS Feeds</a></p>
	            </section>
	          </div>
		</div>
    </footer>
	<!--end footer-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script src="javascripts/easing.js"></script>

<script>
$(document).ready(function(){

  $(window).scroll(function()
  {

      var footer = $('#ign_footer');

      if (document.body.scrollHeight - $(this).scrollTop()  <= $(this).height())
      {
          console.log('point reached');
          footer.stop().animate({
              bottom : 0
          }, 300, 'easeInOutSine').addClass('visible');

      } else if(document.body.scrollHeight - $(this).scrollTop()  >= $(this).height()) {
        if(footer.hasClass('visible')) {

              footer.stop().animate({
                  bottom : -70
              }, 500, 'easeInOutSine').removeClass('visible');

        }
      }
  });

});
</script>

</body>
</html>

 


