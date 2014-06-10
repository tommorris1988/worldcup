// Page Start Height
$(window).load(function() {
    $('html, body').animate({ scrollTop: $('#today').offset().top - 110},1);
});

// Close
$('.close').click(function ( event ) {
    event.preventDefault();
    $('#header').toggleClass('view');
});
$('.close-landing').click(function ( event ) {
    event.preventDefault();
    $('#landing').toggleClass('view');
});
$('#helper').click(function ( event ) {
    event.preventDefault();
    $(this).toggleClass('view');
});

// Sticky Scroll Nav
$(document).ready(function(){
    $(".details").sticky({topSpacing:0});
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

// Pop Ups
$(function() {

    var Config = {
        Link: ".social li a",
        Width: 500,
        Height: 500
    };
 
    // add handler links
    var slink = document.querySelectorAll(Config.Link);
    for (var a = 0; a < slink.length; a++) {
        slink[a].onclick = PopupHandler;
    }
 
    // create popup
    function PopupHandler(e) {
 
        e = (e ? e : window.event);
        var t = (e.target ? e.target : e.srcElement);
 
        // popup position
        var
            px = Math.floor(((screen.availWidth || 1024) - Config.Width) / 2),
            py = Math.floor(((screen.availHeight || 700) - Config.Height) / 2);
 
        // open popup
        var popup = window.open(t.href, "social",
            "width="+Config.Width+",height="+Config.Height+
            ",left="+px+",top="+py+
            ",location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1");
        if (popup) {
            popup.focus();
            if (e.preventDefault) e.preventDefault();
            e.returnValue = false;
        }
 
        return !!popup;
    }
 
}());

// ScrollTo
$('.dates').localScroll({
    target:'body',
    offset: -120
});