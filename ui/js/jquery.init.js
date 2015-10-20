/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

new WOW().init();

jQuery(function($){

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
    
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })


});

function getCurrentScroll() {
    return window.pageYOffset;
    }
});

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