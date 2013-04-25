<?php
    if(!isset($_COOKIE["age"])) {
        // If no age cookie is set, direct them back to index.php to get one
        header('Location: /bioshockinfinite/index.php');
        // if that doesn't work try uncommenting the following line, and scrapping the one above:
        // header('Location: http://uk-microsites.ign.com/bioshockinfinite/index.php');
    } 
    else if ($_COOKIE["age"] == "under") {
        // If somehow they got the link but are underage, bounce them to fail.php directly
        header('Location: /bioshockinfinite/fail.php');
        // same here, if there's a problem use the absolute path:
        // header('Location: http://uk-microsites.ign.com/bioshockinfinite/fail.php');
    }
?>


<!DOCTYPE html>

<html lang="en" ng-app="myApp">

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
<!--         <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

	<title>IGN Bioshock Infinite</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="IGN is your site for Xbox 360, PS3, Wii, PC, 3DS, PS Vita &amp; iPhone games with expert reviews, news, previews, trailers, cheat codes, wiki guides &amp; walkthroughs" />
	<meta name="robots" content="noodp, noydir" />
	<meta name="copyright" content="IGN Entertainment, Inc." />

	<meta property="og:title" content="Bioshock Infinite">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="IGN Bioshock Infinite microsite - Win a copy of BioShock Infinite and official merch!">
    <meta property="og:url" content="http://uk-microsites.ign.com/bioshockinfinite/">
    <meta property="og:image" content="http://uk-microsites.ign.com/bioshockinfinite/images/mpu/mpu.jpg">
    <meta property="fb:admins" content="546507370">

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/ign-styles.css">
	<link rel="stylesheet" href="stylesheets/app.css">

	<script src="javascripts/foundation/modernizr.foundation.js"></script>


</head>
<body ng-controller="MainCtrl">
	<div class="moving_clouds"></div>
	<div id="zepplin"></div>
	<div id="floating_house"></div>


	<header id="ignHeaderHeader">
		
	<div id="ignHeader" class="clear">
		<ul class="social-btns" style="display:block;">
                <!-- facebook like -->

                <li>
                    <div class="fb-like" data-href="http://uk-microsites.ign.com/bioshockinfinite/" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false"></div>
                </li><!-- twitter -->

                <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://uk-microsites.ign.com/bioshockinfinite/" data-text="Win a copy of BioShock Infinite and official merch!" data-via="IGNUK">Tweet</a></li>

                <li>
                    <div class="g-plusone" data-size="tall" data-annotation="none" data-href="http://uk-microsites.ign.com/bioshockinfinite/"></div>
                </li>
            </ul>
		<div class="fixed">

			<div id="ignHeader-userBar">
				<div class="container"> <a id="ignHeader-logo" href="./"></a>
				</div>
			</div>
		</div>

		<div id="ignHeader-navigation">
			<div class="container">
				<div class="title"><img src="images/bg_bioshock_logo.png" alt=""></div>
				<div class="pre-order actionVidModal" data-reveal-id="preorderModal6" onClick="_gaq.push(['_trackEvent', 'Pre-order', 'clicked', 'overlay']);"></div>
			</div>
		</div>
	</div>
</header>

<!-- 
<section class="row">
	<div class="twelve columns">
		
	</div>
</section> -->

<div class="footer_pushdown">
<div id="placeholding_container">


  <article class="row feature_unit">
  	<div class="twelve columns">
  		<div class="clear">
			<div id="coverStoriesContainer">
				<div class="evo-wrapper">
					<div class="evo-coverStories">
						<div class="fuseNav clearfix"> <a style="width: 189px;" href="#_" class="first active">
							<span class="text"  ng-click="setRoute('view1')"> MYSTERIOUS GIRL</span>
							<span class="fuse"> <span class="activeFuse"></span> </span> </a> <a style="width: 189px;" href="#_"> <span class="text" ng-click="setRoute('view2')"> COLUMBIA'S CAVALRY</span>
							<span class="fuse"> <span class="activeFuse"></span> </span> </a> <a style="width: 189px;" href="#_"> <span class="text" ng-click="setRoute('view1')">  AWESOME ARSENAL </span>
							<span class="fuse"> <span class="activeFuse"></span> </span> </a> <a style="width: 189px;" href="#_"> <span class="text" ng-click="setRoute('view2')"> WAR FOR FUTURE </span> <span class="fuse"> <span class="activeFuse"></span> </span> </a> <a style="width: 192px;" href="win-a-copy-of-dishonored-and-an-alienware-pc.html"> <span class="text" ng-click="setRoute('view1')"> COMPETITION </span> <span class="fuse"> <span class="activeFuse"></span> </span> </a>
						</div>
						<!-- END: fuseNav -->
						<div class="carousel">
							<div class="storyUnit wide index-0 active">
								<!-- big image -->
								<div class="cvr-main"> <a href="#_" ng-click="setRoute('elizabeth')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Elizabeth']);"><img src="images/carousel_slides/elizabeth_slide.jpg" alt=""/></a> </div>
							</div>
							<!-- END: storyUnit -->
							<div class="storyUnit wide index-1">
								<!-- big image -->
								<div class="cvr-main"> <a href="#_" ng-click="setRoute('heavyhitters')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Columbia’s Cavalry']);"><img src="images/carousel_slides/hitters_slide.jpg" alt=""/></a> </div>
							</div>
							<!-- END: storyUnit -->
							<div class="storyUnit wide index-2">
								<!-- big image -->
								<div class="cvr-main"> <a href="#_" ng-click="setRoute('combat')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'The Awesome Arsenal of Factions at War']);"><img src="images/carousel_slides/arsenal.jpg" alt=""/></a> </div>
							</div>
							<!-- END: storyUnit -->
							<div class="storyUnit wide index-3">
								<!-- big image -->
								<div class="cvr-main"> <a href="#_" ng-click="setRoute('founders')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'The War for Columbia’s Future Escalates']);"><img src="images/carousel_slides/war.jpg" alt=""/></a> </div>
							</div>
							<!-- END: storyUnit -->
							<div class="storyUnit wide index-4">
								<!-- big image -->
								<div class="cvr-main"> <a href="competition.php" target="_blank"><img src="images/carousel_slides/prize.jpg" alt=""/></a>
								
							</div>
							<!-- END: storyUnit -->
						</div>
						<!-- END: carousel -->
					</div>
					<!-- END: evo-coverStories -->
				</div>
				<!-- END: evo-wrapper -->
			</div>
		</div>
	</div>
</div>
</article>

<div class="wrapper-shadow">
<article id="bi_main" class="row push-top">

		<div class="four columns push-eight">
			<div class="mpu_unit">
				<img src="images/mpu/marlowe_vigors.jpg" alt="" class="actionVidModal" data-reveal-id="preorderModal6">
			</div>
		</div>

		<div class="eight columns pull-four no-padding">
			<div class="three columns media_vid">
				<div class="video_unit">
					<a href="#_" class="actionVidModal" data-reveal-id="vidModal2" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'Lamb of columbia']);">
						<span class="play_btn"></span>
						<img src="images/carousel_slides/Lamb-of-Columbia-Trailer.jpg" alt="">
					</a>
				</div>
				<p class="bebas"><a href="#_" class="actionVidModal" data-reveal-id="vidModal2" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'Lamb of columbia']);">"LAMB OF COLUMBIA" TRAILER</a></p>
			</div>
			<div class="three columns media_vid">
				<div class="video_unit">
					<a href="#_" class="actionVidModal" data-reveal-id="vidModal3" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'Icarus part 2']);">
						<span class="play_btn"></span>
						<img src="images/carousel_slides/false_shepherd.jpg" alt="">
					</a>
				</div>
				<p class="bebas"><a href="#_" class="actionVidModal" data-reveal-id="vidModal3" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'False shepherd trailer']);">"FALSE SHEPHERD" TRAILER</a></p>
			</div>
			<div class="three columns media_vid">
				<div class="video_unit">
					<a href="#_" class="actionVidModal" data-reveal-id="vidModal4" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'City in the sky']);">
						<span class="play_btn"></span>
						<img src="images/carousel_slides/City-in-the-Sky.jpg" alt="">
					</a>
				</div>
				<p class="bebas"><a href="#_" class="actionVidModal" data-reveal-id="vidModal4" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'City in the sky']);">CITY IN THE SKY TRAILER</a></p>
			</div>
			<div class="three columns media_vid">
				<div class="video_unit">
					<a href="#_" class="actionVidModal" data-reveal-id="vidModal5" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'Icarus part 1']);">
						<span class="play_btn"></span>
						<img src="images/carousel_slides/Icarus-Part-I.jpg" alt="">
					</a>
				</div>
				<p class="bebas"><a href="#_" class="actionVidModal" data-reveal-id="vidModal5" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'Icarus part 1']);">COLUMBIA: MODERN DAY ICARUS? PART 1</a></p>
			</div>

			<div class="twelve columns" id="break_stop">
				
				<div class="border-bottom-header">
					<h4 class="top_stories-header">TOP STORIES</h4>
				</div>
			</div>
		</div>

</article>

<!--break open section-->
<section class="row" id="break_open">
	<div class="top_border"></div>
	<div class="twelve columns">

		<a href="#_" id="close"></a>

		<div ng-view></div>

	</div>

	<div class="bottom_border"></div>
</section>
<!--end break open section-->

<!--below break section-->
<section class="row push-top" id="below_break">

	<div class="four columns push-eight long">
		<!-- <div id="tweet_container">
			<div class="tweet_header"></div> -->
		<!-- 	<div class="tweet_inner">
			      <div id="twitterfeed">
			        <div id="twitter_div">
			          <h2 style="display: none;" >Twitter Updates</h2>
			        </div>
				  </div>
			</div> -->
			<!-- <div class="tweet_footer">
				<a href="http://twitter.com/irrationalgames" target="_blank" class="tweet_button"></a>
			</div> -->

			<!-- <form><input type="button" value=" BACK TO ARTICLE " class="btn-primary bebas submit verify-input" onclick="history.go(-1);return false;" /></form> -->
		<!-- </div> -->


		<a href="competition.php"><img src="images/mpu/mpu.jpg" alt=""></a>


		<div class="mpu_unit push-top actionVidModal" data-reveal-id="preorderModal6">
			<img src="images/mpu/bronco.jpg" alt="">
		</div>
	</div>

	<div class="eight columns pull-four news_stories">
		<div class="top_story-wrapper">
			<div class="three columns columns media_vid">
			<div class="video_unit">
				<a href="#_" ng-click="setRoute('franchisehistory')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'History of bioshock']);">
					<img src="Videos/video_screen-shots/franchise.jpg" alt="">
				</a>
			</div>
			</div>
			<div class="nine columns">
				<h5 class="bebas"><a href="#_" ng-click="setRoute('franchisehistory')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'History of bioshock']);">History of the BioShock franchise</a></h5>
				<p><span class="time">13 minutes ago</span> - In 2007 Ken Levine and his creative team at Irrational Games (known at the time as 2K Boston) launched BioShock
<a href="#_" class="open_break" ng-click="setRoute('franchisehistory')" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'History of bioshock']);">Read more...</a></p>
			</div>
		</div>

		<div class="top_story-wrapper">
			<div class="three columns columns media_vid">
			<div class="video_unit">
				<a href="#_" ng-click="setRoute('columbia')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Columbia: The World’s Greatest City']);">
					<img src="Videos/video_screen-shots/columbia_pic.jpg" alt="">
				</a>
			</div>
			</div>
			<div class="nine columns">
				<h5 class="bebas"><a href="#_" ng-click="setRoute('columbia')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'Columbia: The World’s Greatest City']);">Columbia: The World’s Greatest City</a></h5>
				<p><span class="time">38 minutes ago</span> - Unveiled at the 1893 Columbian technology exposition, the floating city of Columbia captured the imagination
<a href="#_" class="open_break" ng-click="setRoute('columbia')" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Columbia: The World’s Greatest City']);">Read more...</a></p>
			</div>
		</div>
	</div>

	<div class="eight columns pull-four">

		<a href="#_" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'Industrial Revolution']);">
			<iframe id="player" type="text/html" src="http://www.youtube.com/embed/9A9Hy7OVFAU?enablejsapi=1&wmode=transparent" frameborder="0" wmode="Opaque" height="352" onClick="_gaq.push(['_trackEvent', 'Video', 'clicked', 'Industrial Revolution']);"></iframe>
		</a>

	</div>
	
	<div class="eight columns pull-four news_stories">
		<div class="top_story-wrapper">
			<div class="three columns columns media_vid">
			<div class="video_unit">
				<a href="#_" ng-click="setRoute('elizabeth')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Elizabeth']);">
					<img src="Videos/video_screen-shots/liz.jpg" alt="">
				</a>
			</div>
		 </div>
			<div class="nine columns">
				<h5 class="bebas"><a href="#_" ng-click="setRoute('elizabeth')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Elizabeth']);">Elizabeth: The Mysterious Girl of Monument Island</a></h5>
				<p><span class="time">1 hour 2 minutes ago</span> - This seemingly straightforward order forms the words that are ringing in the ears of Booker DeWitt 
<a href="#_" ng-click="setRoute('elizabeth')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Elizabeth']);">Read more...</a></p>
			</div>
		</div>

		<div class="top_story-wrapper">
			<div class="three columns columns media_vid">
			<div class="video_unit">
				<a href="#_" ng-click="setRoute('heavyhitters')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Columbia’s Cavalry']);">
					<img src="Videos/video_screen-shots/hitters.jpg" alt="">
				</a>
			</div>
			</div>
			<div class="nine columns">
				<h5 class="bebas"><a href="#_" ng-click="setRoute('heavyhitters')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Columbia’s Cavalry']);">Columbia’s Cavalry: Details of the Heavy Hitters Exposed</a></h5>
				<p><span class="time">1 hour 24 minutes ago</span> - Booker DeWitt and his companion Elizabeth have a lot to contend with as they make their way
<a href="#_" ng-click="setRoute('heavyhitters')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'Columbia’s Cavalry']);">Read more...</a></p>
			</div>
		</div>
	</div>

	<div class="eight columns pull-four news_stories">
		<div class="top_story-wrapper">
			<div class="three columns columns media_vid">
			<div class="video_unit">
				<a href="#_" ng-click="setRoute('combat')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'The Awesome Arsenal of Factions at War']);">
					<img src="Videos/video_screen-shots/patriots_poster.jpg" alt="">
				</a>
			</div>
			</div>
			<div class="nine columns">
				<h5 class="bebas"><a href="#_" ng-click="setRoute('combat')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'The Awesome Arsenal of Factions at War']);">The Awesome Arsenal of Factions at War</a></h5>
				<p><span class="time">1 hour 28 minutes ago</span> - In 2007, BioShock introduced players to a unique arsenal, and an imaginative suite of combat options
<a href="#_" ng-click="setRoute('combat')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'The Awesome Arsenal of Factions at War']);">Read more...</a></p>
			</div>
		</div>

		<div class="top_story-wrapper">
			<div class="three columns columns media_vid">
			<div class="video_unit">
				<a href="#_" ng-click="setRoute('founders')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'The War for Columbia’s Future Escalates']);">
					<img src="Videos/video_screen-shots/handy_man.png" alt="">
				</a>
			</div>
			</div>
			<div class="nine columns">
				<h5 class="bebas"><a href="#_" ng-click="setRoute('founders')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'The War for Columbia’s Future Escalates']);">The War for Columbia’s Future Escalates</a></h5>
				<p><span class="time">2 hour 40 minutes ago</span> - BioShock Infinite’s two warring factions, the Founders and the Vox Populi, have their respective
<a href="#_"  ng-click="setRoute('founders')" class="open_break" onClick="_gaq.push(['_trackEvent', 'Article', 'clicked', 'The War for Columbia’s Future Escalates']);">Read more...</a></p>
			</div>
		</div>
	</div>

</section>
<!--end below break section-->
	<div class="footer_cap"></div>
</div>

</div>


	<!--footer section-->
		<!-- start footer -->    
	<footer id="ign_footer">
		<div class="ign-elements">
			<div class="row">
				<section class="six columns">
               		<p class="corp-terms">Copyright 2013 <b>IGN Entertainment UK, Inc.</b><br>
               		 <a href="http://corp.ign.com/privacy.html" title="Privacy Policy">Privacy Policy</a> | <a href="http://corp.ign.com/user-agreement.html" title="User Agreement">User Agreement</a></p>
            	</section>
	            <section class="six columns right">
	                <p class="corp-links"><a href="http://uk.corp.ign.com/#about" title="About Us">About Us</a> | <a href="http://uk.corp.ign.com/#contact" title="Contact Us">Contact Us</a> | <a href="http://corp.ign.com/feeds.html" title="RSS Feeds">RSS Feeds</a></p>
	            </section>
	          </div>
		</div>
    </footer>
	<!--end footer-->
</div>


<!--video modal heavy hitter part 1-->
<div id="vidModal2" class="reveal-modal medium">

	<iframe id="player2" type="text/html" src="http://www.youtube.com/embed/hvX0D3j4gbE#?enablejsapi=1&wmode=transparent" height="352" ></iframe>

  <a class="close-reveal-modal"></a>
</div>
<!--end video modal-->

<!--video modal heavy hitter part 2-->
<div id="vidModal3" class="reveal-modal medium">

	<iframe id="player3" type="text/html" src="http://www.youtube.com/embed/XLGWGEOgGsQ?enablejsapi=1&wmode=transparent" height="352" ></iframe>

  <a class="close-reveal-modal"></a>
</div>
<!--end video modal-->

<!--video modal heavy hitter part 3-->
<div id="vidModal4" class="reveal-modal medium">

	<iframe id="player4" type="text/html" src="http://www.youtube.com/embed/vRjNMQZ1qBk?enablejsapi=1&wmode=transparent" height="352" ></iframe>

 <a class="close-reveal-modal"></a>
</div>
<!--end video modal-->

<!--video modal heavy hitter part 4-->
<div id="vidModal5" class="reveal-modal medium">

	<iframe id="player5" type="text/html" src="http://www.youtube.com/embed/9KyP2gEKMzc?enablejsapi=1&wmode=transparent" height="352" ></iframe>

  <a class="close-reveal-modal"></a>
</div>
<!--end video modal-->

<!--video modal heavy hitter part 1-->
<div id="preorderModal6" class="reveal-modal large">
	<div class="bioshock_logo"></div>
	<div class="row">
		<div class="twelve columns">
			<h3 class="bebas">CHOOSE EDITION:</h3>
			<img src="images/comp_sprite.jpg" alt=""/>
		</div>
	</div>
	<div class="row">
		<div class="three columns">       
          
          <label for = "sizeSmall" class="bebas normal">BIOSHOCK INFINITE</label> 
          <input type = "radio"
                 name = "radSize"
                 id = "sizeSmall"
                 value = "small"
                 class="normal"
                 checked = "checked" />
		</div>
		<div class="six columns">
			
          	<label for = "sizeMed" class="bebas ultimate">ULTIMATE SONGBIRD EDITION</label>
          	<input type = "radio"
                 name = "radSize"
                 id = "sizeMed"
                 class="ultimate"
                 value = "medium" />
		</div>
		<div class="three columns">
			
          <label for = "sizeLarge" class="bebas premium">PREMIUM EDITION</label>
          <input type = "radio"
                 name = "radSize"
                 id = "sizeLarge"
                 class="premium"
                 value = "large" />
		</div>
	</div>

	<div class="row">
		  <div class="six columns">
			
	          <label for = "sizeLarge" class="bebas choose_label">CHOOSE RETAILER:</label>
	          <select id="chzn-select" style="width: 300px;" data-placeholder="Choose a retailer...">
	          	  <option value="retailer"></option>
				  <option>Tesco</option>
				  <option>Blockbuster</option>
				  <option>Xtra Vision</option>
				  <option>Asda</option>
				  <option>GameStop</option>
				  <option>GAME</option>
				  <option>Play</option>
				  <option>Amazon</option>
				  <option>The Hut</option>
				  <option>ShopTo</option>
				  <option>Sainsburys</option>
				  <option>Zavvi</option>
			   </select>

			   <a class="go bebas" href="" target="_blank" onClick="_gaq.push(['_trackEvent', 'Pre-order', 'clicked', 'GO']);"></a>
		   </div>

		   <div class="six columns">
		   		<div class="four columns">
		   			<p>
		   				<span class="top_text bebas">PRE-ORDER</span>
		   				<span class="btm_text bebas">BONUS</span>
		   			</p>
		   		</div>
		   		<div class="eight columns">
		   			<p class="top_push-down">Experience over 50 puzzles and earn in-game items for BioShock Infinite!</p>
		   			<p>Instantly play BioShock Infinite:
Industrial Revolution online today!</p>
		   		</div>
		   </div>
	</div>

  	<a class="close-reveal-modal"></a>
</div>
<!--end video modal-->

	<!-- Included JS Files (Uncompressed) -->
	  <script src="javascripts/evo.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

	<!--script src="javascripts/jquery.foundation.forms.js"></script-->
	
	<script src="javascripts/foundation/jquery.foundation.reveal.js"></script>

	<!--script src="javascripts/jquery.carouFredSel-6.2.0-packed.js"></script-->
	

	<script src="javascripts/jquery.parallax-1.1.3.js"></script>

	<script src="javascripts/easing.js"></script>

	<script src="javascripts/chosen.jquery.min.js"></script>

	  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js"></script>

	  <script src="javascripts/app.js"></script>
	  <script src="javascripts/services.js"></script>
	  <script src="javascripts/controllers.js"></script>
	  <script src="javascripts/filters.js"></script>
	  <script src="javascripts/directives.js"></script>

	<script src="javascripts/scrollTo.js"></script>

  <!-- Application Javascript, safe to override -->
  <script src="javascripts/foundation/app.js"></script>


  <script>

 	var tag = document.createElement('script');

 	tag.src = "//www.youtube.com/iframe_api";
	  var firstScriptTag = document.getElementsByTagName('script')[0];
	  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	  var player, player2, player3, player4, player5;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          width: '100%',
          height: '352',
          videoId: 'vRjNMQZ1qBk',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });

        player2 = new YT.Player('player2', {
          width: '100%',
          height: '352',
          //videoId: 'SkqcLIYWj5w',
          events: {
            'onReady': onPlayerReady
          }
        });

        player3 = new YT.Player('player3', {
          width: '100%',
          height: '352',
          //videoId: '0eDgjiy8JRc',
          events: {
            'onReady': onPlayerReady
          }
        });

        player4 = new YT.Player('player4', {
          width: '100%',
          height: '352',
          //videoId: 'btA07qRZR4Q',
          events: {
            'onReady': onPlayerReady
          }
        });

        player5 = new YT.Player('player5', {
          width: '100%',
          height: '352',
          //videoId: 'MOts__QlUHo',
          events: {
            'onReady': onPlayerReady
          }
        });
      }

       function onPlayerReady(event) {
        //event.target.playVideo();
      }

      var done = false;
     //  function onPlayerStateChange(event) {
	    //     if (event.data == YT.PlayerState.PLAYING && !done) {
	    //       //setTimeout(stopVideo, 6000);
	    //       done = true;
	    //     }
    	// }

        function onPlayerStateChange(event) { 
			if (event.data ==YT.PlayerState.PLAYING) 
			{_gaq.push(['_trackEvent', 'Video', 'clicked', 'Industrial Revolution']); } 
		} 

      function stopVideo() {
        player.stopVideo();
      }

  	
  	$(document).ready(function(){


  		$('.actionVidModal').on('click', function(){

      		var need_id = $(this).attr('data-reveal-id');

      		var vid_num =  $('#' + need_id).find('iframe').attr('id');

      		console.log(vid_num);
		
      		$('#' + need_id).reveal({ 
      			"open": function(){
      				switch(vid_num)
					{
					case 'player2':
					  var fn = function(){ player2.playVideo(); }
					  setTimeout(fn, 1000);
					  break;
					case 'player3':
					  var fn = function(){ player3.playVideo(); }
					  setTimeout(fn, 1000);
					  break;
					case 'player4':
					  var fn = function(){ player4.playVideo(); }
					  setTimeout(fn, 1000);
					  break;
					case 'player5':
					  var fn = function(){ player5.playVideo(); }
					  setTimeout(fn, 1000);
					  break;
					}
					  
      			},
      			"closed": function () { 
      				switch(vid_num)
					{
					case 'player2':
					  player2.stopVideo();
					  break;
					case 'player3':
					  player3.stopVideo();
					  break;
					case 'player4':
					  player4.stopVideo();
					  break;
					case 'player5':
					  player5.stopVideo();
					  break;
					  
					}
      			} 
      		});

      });


  		$("#chzn-select").chosen();

 		//parallax bg
  		$('#zepplin').parallax("95%", 0.5);
		$('#floating_house').parallax("96%", 1.5);


        $('#navigation_btns').find('a').live('click', function(event){

        	event.preventDefault();

        	if($(this).parent().hasClass('right')) {

        		$('#target').animate({
	              marginLeft : '-=325px'
	            }, 500, 'swing', function(){
	              console.log('article movement ended');
	            });

        	} else if($(this).parent().hasClass('left')){

        		$('#target').animate({
	              marginLeft : '+=325px'
	            }, 500, 'swing', function(){
	              console.log('article movement ended');
	            });

        	}

        });
	});

  </script>


  <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>

  	
	  <!--begin GA script-->
  <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15279170-1']);
	  _gaq.push(['_trackPageview', 'bioshock_clicks']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	  
	</script>
	<!--end GA script-->

  
  <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=147333065402611";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	<script type="text/javascript">
	  window.___gcfg = {lang: 'en-GB'};
	
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>

  <!-- Begin comScore Tag -->
	<script>
	  var _comscore = _comscore || [];
	  _comscore.push({ c1: "2", c2: "3000068" });
	  (function() {
	    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
	    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
	    el.parentNode.insertBefore(s, el);
	  })();
	</script>
	<noscript>
	  <img src="http://b.scorecardresearch.com/p?c1=2&c2=3000068&cv=2.0&cj=1" />
	</noscript>
   <!-- End comScore Tag -->
   <!--
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
-->

</body>
</html>
