'use strict';

//custom easing parameter gsgd


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

	var break_open = $('#break_open'),
		action_a = $('.open_break');

	action_a.on('click', function(event){
		console.log('----> break_opening');
		event.preventDefault();
    //jQuery.easing.def = "easeOutBounce";

    $.scrollTo( '#break_stop', 800, {easing:'easeInOutSine'});

		//break_open.slideDown(1500, 'easeOutBounce');
    break_open.slideDown(800, 'easeInOutSine');
	}); 

  $('#close').on('click', function(event){

        event.preventDefault();
        break_open.slideUp(800, 'easeInOutSine');
  });


  /**form field updte for pre-order overlay**/

   $("input[type='radio']").on("click", function() {
        var prizeType = $(this).attr('class');

        switch (prizeType) {
          case 'normal':
           $("#chzn-select").empty().append('<option></option><option value="tesco">Tesco</option><option value="blockbuster">Blockbuster</option><option value="xtra vision">Xtra Vision</option><option value="asda">Asda</option><option value="gamestop">GameStop</option><option value="game">GAME</option><option value="play">Play</option><option value="amazon">Amazon</option><option value="the hut">The Hut</option><option value="shopto">ShopTo</option><option value="sainsburys">Sainsburys</option><option value="zavvi">Zavvi</option>');
          break;

          case 'ultimate':
           $("#chzn-select").empty().append('<option></option><option>GAME</option>');
          break;

          case 'premium':
           $("#chzn-select").empty().append('<option></option><option value="gamestop">GameStop</option><option value="game">GAME</option><option value="play">Play</option><option value="amazon">Amazon</option><option value="the hut">The Hut</option><option value="shopto">ShopTo</option><option value="sainsburys">Sainsburys</option><option value="zavvi">Zavvi</option>');
          break;

        }
    
        $("#chzn-select").trigger("liszt:updated");
   });

    //$("#chzn-select").chosen().change({ alert('>>>>>>'); });

    $('.go').on('mousedown', function(){
        var retailer = $('#chzn_select_chzn').find('span').text();

        //console.log(retailer);

        switch (retailer) {
          case 'Tesco':
            $(this).attr('href', 'http://www.tesco.com/direct/search-results/results.page?catId=4294967294&searchquery=bioshock+infinite&SrchId=4294967294&_requestid=2335359');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'Tescos']); 
          break;

          case 'Blockbuster':
            $(this).attr('href', 'http://www.blockbuster.co.uk/searchandbrowse/productsearchresults.aspx?basic=bioshock%20infinite&productservicetype=Either&mediagroup=Other&format=Other&tab=home', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'Blockbuster']); 
          break;

          case 'Xtra Vision':
            $(this).attr('href', 'http://www.xtra-vision.co.uk/catalogsearch/result/?q=bioshock', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'Xtra Vision']);  
          break;

          case 'Asda':
            $(this).attr('href', 'http://direct.asda.com/on/demandware.store/Sites-ASDA-Site/default/Search-Show?q=Bioshock+infinite', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'Asda']); 
          break;

          case 'GameStop':
            $(this).attr('href', 'http://www.gamestop.ie/SearchResult/QuickSearch?q=BioShock%20Infinite', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'GameStop']); 
          break;

          case 'GAME':
            $(this).attr('href', 'http://www.game.co.uk/webapp/wcs/stores/servlet/AjaxCatalogSearch?storeId=10151&catalogId=10201&langId=44&pageSize=20&beginIndex=0&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&pageView=image&predictiveSearchURL=http://www.game.co.uk/webapp/wcs/stores/servlet/AjaxPredictiveSearchView%3FcatalogId%3D10201%26langId%3D44%26storeId%3D10151&searchTerm=Bioshock+infinite&searchBtn.x=0&searchBtn.y=0&searchBtn=Search', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'GAME']); 
          break;

          case 'Play':
            $(this).attr('href', 'http://www.play.com/Search.html?searchstring=bioshock+infinite&searchsource=0&searchtype=allproducts', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'Play']); 
          break;

          case 'Amazon':
            $(this).attr('href', 'http://www.amazon.co.uk/s/ref=nb_sb_ss_i_0_17?url=search-alias%3Dvideogames&field-keywords=bioshock+infinite&sprefix=Bioshock+Infinite%2Cvideogames%2C128&rh=n%3A300703%2Ck%3Abioshock+infinite', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'Amazon']); 
          break;

          case 'The Hut':
            $(this).attr('href', 'http://www.thehut.com/elysium.search?search=bioshock+infinite', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'The Hut']); 
          break;

          case 'ShopTo':
            $(this).attr('href', 'http://www.shopto.net/product/search?platform=&search=bioshock+infinite', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'ShopTo']); 
          break;

          case 'Sainsburys':
            $(this).attr('href', 'http://www.sainsburysentertainment.co.uk/en/Games/search.html?t=bioshock+infinite&section=games', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'Sainsburys']); 
          break;

          case 'Zavvi':
            $(this).attr('href', 'http://www.zavvi.com/offers/bioshock.list?s=bioshock+infinite', '_blank');
            _gaq.push(['_trackEvent', 'Retailer', 'clicked', 'Zavvi']); 
          break;
        }
    });



   // //chosen update
});




// Declare app level module which depends on filters, and services
angular.module('myApp', ['myApp.filters', 'myApp.services', 'myApp.directives']).value('$anchorScroll', angular.noop).
  config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/heavyhitters', {templateUrl: 'partials/partial1.html', controller: MyCtrl1});
    $routeProvider.when('/founders', {templateUrl: 'partials/partial2.html', controller: MyCtrl1});
    $routeProvider.when('/elizabeth', {templateUrl: 'partials/partial3.html', controller: MyCtrl1});
    $routeProvider.when('/combat', {templateUrl: 'partials/partial4.html', controller: MyCtrl1});
    $routeProvider.when('/franchisehistory', {templateUrl: 'partials/partial5.html', controller: MyCtrl1});
    $routeProvider.when('/columbia', {templateUrl: 'partials/partial6.html', controller: MyCtrl1});
    // $routeProvider.when('/gallery', {templateUrl: 'partials/partial7.html', controller: MyCtrl1});
    //$routeProvider.otherwise({redirectTo: '/elizabeth'});
  }]).directive('columbiaDirective', function() {
    return {
      compile: function(elm) {

        console.log('compiling');
        $(elm).css('opacity', 0.1);

        // $('a.imageAction').on('click', function(event){
        //     event.preventDefault();
        //     var num = $(this).attr('data-slidenum');
        //     console.log(num);
        //     $('body').data('slideNum', num);
        // });

        // $("#featured").carouFredSel({
        //   width: 980,
        //   height: 650,
        //   auto: false,
        //   prev: '#prev2',
        //   next: '#next2',
        //   swipe: {
        //     onMouse: true,
        //     onTouch: true
        //   },
        //    scroll : {
        //       duration : 1000
        //   }
        // });

        // var daOne = $('body').data('slideNum');
        // console.log(daOne);

        // $("#featured").trigger("slideTo", "img." + daOne);

        return function(scope, elm, attrs) {
          console.log('animating');
          $(elm).animate({ opacity : 1.0 }, 1000 );

      };
      }
    };
  }).directive( "preloader", function(){

      var directive = {

        restrict : "A",

        link : function( scope, elm, attrs ) {

          scope.preloader = jQuery( "<ng-include />" );
          scope.preloader.attr( "src", "'"+ attrs.preloader +".html'" );

          $compile( scope.preloader )( scope );

          jQuery( "body" ).append( scope.preloader );

          scope.$on( "applicationComplete", function( event ) {

            jQuery( scope.preloader ).remove();
          });
        }
      }
      return directive;
    });



  function MainCtrl($scope, $location) {

      $scope.setRoute = function(route) {
          $location.path(route);
          event.preventDefault();
      }

  }


function PreloaderController( $scope, $timeout ) {

  $scope.percentCompleted = 0;

  $scope.applicationProgressMock = function() {

    if( $scope.percentCompleted == 100 ) {
      $scope.$emit( "applicationComplete" );

      $('.preloader').fadeOut(300);
      $('#preload_background').fadeOut(300);
      $('#article_reader').fadeIn(500);
    }
    else
    {
      $scope.percentCompleted += 5;
      $timeout( $scope.applicationProgressMock, 100 );
    }
  }
  $timeout( $scope.applicationProgressMock, 100 );

  $scope.clickHandler = function( event ) {
    $scope.percentCompleted = 100;
  }
}