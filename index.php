<?php
$minAge = 18; //
$minAge *= 3600*24*365.25;  // $minAge in seconds

if (isset($_COOKIE["age"])) 
	{
	if ($_COOKIE["age"] == "under") 
		{
 			header('Location:fail.php');
		}
	
	else if ($_COOKIE["age"] == "over")
		{
		header('Location:ign_columbia.php');
	}
	
	}	
$html = <<< OET


<!DOCTYPE html>

<html lang="en">

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, 
    minimum-scale=0.5, maximum-scale=0.5">

<title>IGN Bioshock Infinite</title>

<link rel="stylesheet" href="stylesheets/ign-styles.css">
<link rel="stylesheet" href="stylesheets/app.css">

<style type="text/css">

@media screen and (min-width: 321px) and (max-width: 1200px) and (orientation:landscape) {

	#ignHeader .container {
		width: 100%;
	}

    .dob_gate footer {
		bottom: -75px;
	}

	body .age_gate {
		top: 150px;
	}
}

@media screen and (max-width: 700px) and (orientation:portrait){

	#ignHeader .container {
		width: 100%;
	}

	#ign_footer .six.right {
		display: none;
	}

	#ign_footer p {
		font-size: 11px;
	}

	.ign-elements .row {
		background: none;
	}

}

	
</style>

</head>

<body class="dob_gate intro">
	<div class="moving_clouds"></div>


	<header id="ignHeaderHeader">
	<div id="ignHeader" class="clear">
		<div class="fixed">
			<div id="ignHeader-userBar">
				<div class="container"> <a id="ignHeader-logo" href="./"></a>
					<!-- <div id="promoEvoEventBoxContainer"></div> -->
					<script type="text/javascript">try{var evoRenderDomain="widgets.ign.com";IGNheader.Init();}catch(err){};</script>
				</div>
			</div>
		</div>

		<div id="ignHeader-navigation">

		</div>
	</div>
</header>

<div class="age_gate">
<img src="images/bg_bioshock_logo.png" alt="">
<form action="#" method="post" onsubmit="return validateForm();" name="age_check" onkeypress="return numbersOnly(event);">

	<h2 class="bebas">ENTER YOUR DATE OF BIRTH</h2>

	<div class="label_row"><label class="control-label">Day</label><label class="control-label">Month</label><label class="control-label">Year</label></div>

	
	<input type="text" name="day" value="" maxlength="2" type="number" class="first"/>

	
	<input type="text" name="month" value="" maxlength="2"/>

	
	<input type="text" name="year" value="" maxlength="4" class="last"/> 

    <input type="submit" name="submit" value="Verify Age" class="submit bebas verify-input"/>
    
  </form>
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
  
OET;

/*day month and year passed to dob var which calculates if age is > 18 in real-time
*/

if(isset($_POST['submit'])){

$day = ($_POST['day']);
$month = ($_POST['month']);
$year = ($_POST['year']);
$dob = ($day.".".$month.".".$year);
$birth_date = strtotime($dob);
$now = strtotime("now");
$age = $now - $birth_date; // age is in seconds

	if($age > $minAge)
        {	
        include ('age_over.php'); /*sets the over age cookie*/
        header('Location:ign_columbia.php');        
		}
		
	else if ($age < $minAge)			
		header('Location: fail.php');
		
} else
{
	echo $html;
}
?>

<script type="text/javascript">
/*disable keyboard entry function*/
function numbersOnly(evt)
 {	 
	 evt = (evt) ? evt : event;
	 var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
           ((evt.which) ? evt.which : 0));
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {          
           return false;		
}
return true;
	}
/*input validation checks date is sensible or submit will return false:
- all form fields must contain value
- day must be < 32
- month < 13
- year > 1900
*/	
function validateForm() {
	var day = document.forms["age_check"]["day"].value;
	var month = document.forms["age_check"]["month"].value;
	var year = document.forms["age_check"]["year"].value;
	var submitButton = document.forms["age_check"]["submit"].value;
	if (day==null || day=="" || day > 31) 
	{
		window.alert("Enter correct value"); /*delete to remove validation alert*/
		return false;		
	}
	
	else if  (month==null || month=="" || month > 12) 
	{
		window.alert("Enter correct value"); /*delete to remove validation alert*/
		return false;
		
	}
	
	else if  (year==null || year=="" || year < 1900) 
	{
		window.alert("Enter correct value"); /*delete to remove validation alert*/
		return false;
		
	}
}

</script>


</body>
</html>

 


