// Page Start Height
$(window).load(function(){$("html, body").animate({scrollTop:$("#today").offset().top-110},1)}),$(".close").click(function(e){e.preventDefault(),$("#header").toggleClass("view")}),$(".close-landing").click(function(e){e.preventDefault(),$("#landing").toggleClass("view")}),$("#helper").click(function(e){e.preventDefault(),$(this).toggleClass("view")}),$(document).ready(function(){$(".details").sticky({topSpacing:0})}),$(function(){$("#bookmarkme").click(function(){if(window.sidebar&&window.sidebar.addPanel)window.sidebar.addPanel(document.title,window.location.href,"");else if(window.external&&"AddFavorite"in window.external)window.external.AddFavorite(location.href,document.title);else{if(window.opera&&window.print)return this.title=document.title,!0;alert("Press "+(navigator.userAgent.toLowerCase().indexOf("mac")!=-1?"Command/Cmd":"CTRL")+" + D to bookmark this page.")}})}),$(function(){function r(t){t=t?t:window.event;var n=t.target?t.target:t.srcElement,r=Math.floor(((screen.availWidth||1024)-e.Width)/2),i=Math.floor(((screen.availHeight||700)-e.Height)/2),s=window.open(n.href,"social","width="+e.Width+",height="+e.Height+",left="+r+",top="+i+",location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1");return s&&(s.focus(),t.preventDefault&&t.preventDefault(),t.returnValue=!1),!!s}var e={Link:".social li a",Width:500,Height:500},t=document.querySelectorAll(e.Link);for(var n=0;n<t.length;n++)t[n].onclick=r}()),$(".dates").localScroll({target:"body",offset:-120});