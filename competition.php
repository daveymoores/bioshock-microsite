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

	<section class="row">
		<div class="twelve columns">
			<div class="title title-tagline"><img src="images/comp_tagline.png" alt=""></div>
		</div>
	</section>

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
 		<p>We’ve teamed up with the folks over at <strong>2K</strong> to offer you an incredible <strong>BioShock Infinite</strong> prize. One lucky winner will receive:</p>
 
		<ul class="bebas">
			<li>A copy of BioShock Infinite on a platform of the winner’s choice</li>
			<li>A choice of an Xbox or PS3 console to play it on</li>
			<li>A load of official merchandise including a replica sky hook!</li>
		</ul>
 
<p>on top of this we have copies of the game to give to nine runners-up. All you need to do is enter your details below and hit submit <strong>before 1pm on 27 March 2013</strong>, it couldn’t be simpler!</p>
 
<p style="font-style: italic; font-size: 12px;">Please note this competition is only open to UK residents over the age of 18, full terms and conditions can be found <a href="tandc.html">here</a>.</p>
	</div>

</div>

<?php 

		if(isset($errors)){
			// if there were errors in form processing show them here
	        echo '<div class="alert-error"><ul>';	       	        
		        foreach($errors as $error){		        
			      echo '<li class="alert">'.$error.'</li>';  
		        }	        
	        echo '</ul></div>';
        
        }
?>


	<form action="" method="post" class="form-horizontal">
		<div class="row">
	        <div class="control-group six columns">
	            <label class="control-label">First Name</label>
	            <div class="controls">
		            <input type="text" name="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>"> 
	        	</div>
	        </div>

	        <div class="control-group six columns">
	            <label class="control-label">Last Name</label>
	            <div class="controls">
		            <input type="text" name="lname" value="<?php if(isset($_POST['lname'])){echo $_POST['lname'];}?>"> 
	        	</div>
	        </div>
    	</div>
     
     	<div class="row">
	        <div class="control-group six columns">
	            <label class="control-label">Email</label>
	            <div class="controls">
		            <input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"> 
	        	</div>
	        </div>
	        
	        <div class="control-group six columns">
	            <label class="control-label">DATE OF BIRTH</label>
	             <div class="controls">
					<select name="_day" class="span1">
					<option value="0">Day</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					</select>

					<select name="_month" class="span2">
					<option value="0">Month</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
					</select>
					
					<select name="_year" class="span2">
					<option value="0">Year</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996</option>
					<option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
					<option value="1987">1987</option>
					<option value="1986">1986</option>
					<option value="1985">1985</option>
					<option value="1984">1984</option>
					<option value="1983">1983</option>
					<option value="1982">1982</option>
					<option value="1981">1981</option>
					<option value="1980">1980</option>
					<option value="1979">1979</option>
					<option value="1978">1978</option>
					<option value="1977">1977</option>
					<option value="1976">1976</option>
					<option value="1975">1975</option>
					<option value="1974">1974</option>
					<option value="1973">1973</option>
					<option value="1972">1972</option>
					<option value="1971">1971</option>
					<option value="1970">1970</option>
					<option value="1969">1969</option>
					<option value="1968">1968</option>
					<option value="1967">1967</option>
					<option value="1966">1966</option>
					<option value="1965">1965</option>
					<option value="1964">1964</option>
					<option value="1963">1963</option>
					<option value="1962">1962</option>
					<option value="1961">1961</option>
					<option value="1960">1960</option>
					<option value="1959">1959</option>
					<option value="1958">1958</option>
					<option value="1957">1957</option>
					<option value="1956">1956</option>
					<option value="1955">1955</option>
					<option value="1954">1954</option>
					<option value="1953">1953</option>
					<option value="1952">1952</option>
					<option value="1951">1951</option>
					<option value="1950">1950</option>
					<option value="1949">1949</option>
					<option value="1948">1948</option>
					<option value="1947">1947</option>
					<option value="1946">1946</option>
					<option value="1945">1945</option>
					<option value="1944">1944</option>
					<option value="1943">1943</option>
					<option value="1942">1942</option>
					<option value="1941">1941</option>
					<option value="1940">1940</option>
					<option value="1939">1939</option>
					<option value="1938">1938</option>
					<option value="1937">1937</option>
					<option value="1936">1936</option>
					<option value="1935">1935</option>
					<option value="1934">1934</option>
					<option value="1933">1933</option>
					<option value="1932">1932</option>
					<option value="1931">1931</option>
					<option value="1930">1930</option>
					<option value="1929">1929</option>
					<option value="1928">1928</option>
					<option value="1927">1927</option>
					<option value="1926">1926</option>
					<option value="1925">1925</option>
					<option value="1924">1924</option>
					<option value="1923">1923</option>
					<option value="1922">1922</option>
					<option value="1921">1921</option>
					<option value="1920">1920</option>
					<option value="1919">1919</option>
					<option value="1918">1918</option>
					<option value="1917">1917</option>
					<option value="1916">1916</option>
					<option value="1915">1915</option>
					<option value="1914">1914</option>
					<option value="1913">1913</option>
					<option value="1912">1912</option>
					<option value="1911">1911</option>
					<option value="1910">1910</option>
					<option value="1909">1909</option>
					</select>
	             </div>
	        </div>
    	</div>
        

        <div class="control-group row tc">
            <div class="controls twelve columns">
                <label class="checkbox"><input type="checkbox" name="terms" value="1">Terms &amp; Conditions</label>
                <span class="help-block">I confirm that I am a UK resident over the age of 18 and have read and understood the <a href="tandc.html">terms and conditions</a></span>
            </div>
        </div>
        
        <div class="control-group row tc">
            <div class="controls twelve columns">
                <label class="checkbox"><input type="checkbox" name="subscribe" value="1">Newsletter</label>
                <span class="help-block">I agree that my email details can be used by IGN Entertainment and Take Two Interactive to keep me informed of exciting new products, promotions and services until I choose otherwise.</span>
            </div>
        </div>
        
        <div class="control-group">
            <div class="controls">
            	<input type="hidden" name="_captcha" value=""> 
	            <input type="submit" class="btn-primary bebas submit verify-input" name="_submit">
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

 


