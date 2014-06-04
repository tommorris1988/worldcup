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

// Close
$('.close').click(function ( event ) {
    event.preventDefault();
    $('#header').toggleClass('view');
});

// To Top Button
jQuery(document).ready(function($) {

    $(".dates > a").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top-90}, 500);
    });

});