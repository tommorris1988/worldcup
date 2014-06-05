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

// Sticky Scroll Nav
$(document).ready(function(){
    $(".details").sticky({topSpacing:0});
    $("#side-nav.follow").sticky({topSpacing: 90});
});

// To Top Button
jQuery(document).ready(function($) {

    $(".dates > a").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top-90}, 500);
    });

});

// Bookmark

$(function() {
    $('#bookmarkme').click(function() {
        if (window.sidebar && window.sidebar.addPanel) {
            window.sidebar.addPanel(document.title,window.location.href,'');
        } else if(window.external && ('AddFavorite' in window.external)) {
            window.external.AddFavorite(location.href,document.title); 
        } else if(window.opera && window.print) {
            this.title=document.title;
            return true;
        } else {
            alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != - 1 ? 'Command/Cmd' : 'CTRL') + ' + D to bookmark this page.');
        }
    });
});