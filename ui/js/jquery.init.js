/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

new WOW().init();

jQuery(function($){
	
	$('.navbar-nav > li.menu-item-has-children ').append('<span></span>');
	$('.navbar-nav li span').on('click', function(){
		$(this).siblings('ul').toggleClass('open');
		
	});


// 	$("#commentForm").validate();


    var shrinkHeader = 300;
    $(window).scroll(function() {
        var scroll = getCurrentScroll();
        if ( scroll >= shrinkHeader ) {
           $('.navbar').addClass('shrink');
        }
        else {
            $('.navbar').removeClass('shrink');
        }
    });

    

	///Border Around Images
	
	$(window).load(function() {
		var customWidth = $('.border-img img').width();
		$('.border-img').css('max-width', customWidth);
	});

    var $sidebar   = $("#sidebar"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 60;

        //console.log($("#left-sidebar").height());

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
           if ($window.scrollTop() < ($("#left-sidebar").height())-topPadding) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
            }
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });



    
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    

    $('li.dropdown > a').addClass('dropdown-toggle');
    $('li.dropdown > a').attr('data-toggle', 'dropdown');
    	

    
    $('.nav-tabs-dropdown').each(function(i, elm) {

        $(elm).text($(elm).next('ul').find('li.active a').text());
    
    });
    
    $('.nav-tabs-dropdown').on('click', function(e) {
    
        e.preventDefault();
    
        $(e.target).toggleClass('open').next('ul').slideToggle();
    
    });
    
    $('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {
    
        e.preventDefault();
    
        $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());
    
    });
    
    $('.collapse').on('shown.bs.collapse', function(){
        $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hidden.bs.collapse', function(){
        $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });

$(function(){
 var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.navbar').addClass('shrink');
        }
        else {
            $('.navbar').removeClass('shrink');
        }
  });
});


function getCurrentScroll() {
    return window.pageYOffset;
    }
});




(function() {

  "use strict";

  var toggles = document.querySelectorAll(".c-hamburger");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();

var menuLeft = document.getElementById( 'bs-example-navbar-collapse-1' ),
    showLeftPush = document.getElementById( 'showLeftPush' ),
    navigate = document.getElementById( 'navigate' ),
	body = document.body;

showLeftPush.onclick = function() {
	classie.toggle( this, 'active' );
	classie.toggle( body, 'cbp-spmenu-push-toright' );
	classie.toggle( menuLeft, 'cbp-spmenu-open' );
	classie.toggle( navigate, 'cbp-spmenu-push-toright' );
	disableOther( 'showLeftPush' );
};

function disableOther( button ) {
	if( button !== 'showLeftPush' ) {
		classie.toggle( showLeftPush, 'disabled' );
	}
}