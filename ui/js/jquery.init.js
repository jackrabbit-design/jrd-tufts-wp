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
    });
    
    
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