// Mobile Menu
$(".mobile-menu-icon, .content-cover").click(function(e){e.preventDefault(),$("body").toggleClass("open")}),$(".tab").click(function(e){e.preventDefault(),$("body").toggleClass("open-tray")}),$(".sticky-mobile").click(function(e){e.preventDefault(),$("#side-nav").toggleClass("drop-down")}),$(".close").click(function(e){e.preventDefault(),$("#header").toggleClass("view")}),$(".close-landing").click(function(e){e.preventDefault(),$("#landing").toggleClass("view")}),$("#helper").click(function(e){e.preventDefault(),$(this).toggleClass("view")}),$(document).ready(function(){$(".details").sticky({topSpacing:0})}),$(function(){$("#bookmarkme").click(function(){if(window.sidebar&&window.sidebar.addPanel)window.sidebar.addPanel(document.title,window.location.href,"");else if(window.external&&"AddFavorite"in window.external)window.external.AddFavorite(location.href,document.title);else{if(window.opera&&window.print)return this.title=document.title,!0;alert("Press "+(navigator.userAgent.toLowerCase().indexOf("mac")!=-1?"Command/Cmd":"CTRL")+" + D to bookmark this page.")}})}),$(".dates").localScroll({target:"body",offset:-120});