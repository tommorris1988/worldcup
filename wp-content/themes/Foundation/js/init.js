// Slideshows
var slideshow1 = $('.fullslider').imagesLoaded();
var slideshow2 = $('.carousel').imagesLoaded();
var slideshow3 = $('.singleslider').imagesLoaded();

$(window).load(function() {

	slideshow1.flexslider({
		animation: "fade",
        animationSpeed: 800,
        animationLoop: true,
        directionNav: true,
        smoothHeight:true,
        slideshow:false,
        start: function(slider) {
               slideshow1.removeClass('loading');
           },
        manualControls: ".slideshow-nav li",
        sync: '.carousel',
        keyboard: true
	});

    slideshow2.flexslider({
        animation: "fade",
        animationSpeed: 800,
        animationLoop: true,
        directionNav: false,
        smoothHeight:true,
        slideshow:false,
        keyboard: true,
        manualControls: ".slideshow-nav li"
    });

    slideshow3.flexslider({
        animation: "fade",
        animationSpeed: 800,
        animationLoop: true,
        controlNav:false,
        directionNav: true,
        smoothHeight:true,
        slideshow:false,
        start: function(slider) {
               slideshow3.removeClass('loading');
           },
        keyboard: true
    });

});

// Shop Styling
/*$(document).ready(function(){

    var bookstyles = [
        background-color: '#000',
        font-family: 'museo-sans,sans-serif',
    ]
    $(".product iframe").contents().find(".book").css("display", "none !important")

    var styles = [
        background-color: 'transparent !important',
        font-family: 'museo-sans,sans-serif'
    ]
    $( '.product body' ).css{ styles };

}*/

// Landscape
jQuery(document).ready(function($) {

    var timer;
    var delay = 200;

    $( '#nav li a' ).not('#nav li li a').hover(function(e) {
        var parent = $(this).parent();
        var editid = parent.attr("id") + ' moving';
        timer = setTimeout(function() {
            $( '#landscape' ).removeClass();
            $( '#landscape' ).addClass( editid );
        }, delay);
    }, function() {
        clearTimeout(timer);
    });

    $('.no-click a').not('.no-click ul a').click(function ( event ) {
        event.preventDefault();
    });

});

// Mobile Menu
$('.mobile-menu-icon, .content-cover').click(function ( event ) {
  event.preventDefault();
  $('body').toggleClass('open');
});

// Pull Down Menu
$('.tab').click(function ( event ) {
    event.preventDefault();
    $('body').toggleClass('open-tray');
});

// Secondary menu
$('.sticky-mobile').click(function ( event ) {
    event.preventDefault();
    $('#side-nav').toggleClass('drop-down');
});

// Isotope
var container = $('#isotope').imagesLoaded( function(f){
    
    filters = {};

    container.isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows',
        masonry: {
            columnWidth: '.item'
        }
    });
    
    // Isotope filter buttons
    $('.filter a').click(function(n){
        var $this = $(this);

        if ( $this.hasClass('selected') ) {
        return;
        }
        
        var $optionSet = $this.parents('.option-set');

        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        
        var group = $optionSet.attr('data-filter-group');
        filters[ group ] = $this.attr('data-filter-value');

        var isoFilters = [];
        for ( var prop in filters ) {
        isoFilters.push( filters[ prop ] )
        }
        var selector = isoFilters.join('');
        container.isotope({ filter: selector });
        
        return false;
    });
    
});

// Sticky Scroll Nav
$(document).ready(function(){
    $("#nav").sticky({topSpacing:0});
    $("#side-nav.follow").sticky({topSpacing: 90});
});

// To Top Button
jQuery(document).ready(function($) {

    $(".scroll").click(function(event){     
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top-90}, 500);
    });

});