/*!
 * imagesLoaded PACKAGED v3.1.4
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */(function(e){function t(){}function n(e,t){for(var n=e.length;n--;)if(e[n].listener===t)return n;return-1}function r(e){return function(){return this[e].apply(this,arguments)}}var i=t.prototype,s=this,o=s.EventEmitter;i.getListeners=function(e){var t,n,r=this._getEvents();if("object"==typeof e){t={};for(n in r)r.hasOwnProperty(n)&&e.test(n)&&(t[n]=r[n])}else t=r[e]||(r[e]=[]);return t},i.flattenListeners=function(e){var t,n=[];for(t=0;e.length>t;t+=1)n.push(e[t].listener);return n},i.getListenersAsObject=function(e){var t,n=this.getListeners(e);return n instanceof Array&&(t={},t[e]=n),t||n},i.addListener=function(e,t){var r,i=this.getListenersAsObject(e),s="object"==typeof t;for(r in i)i.hasOwnProperty(r)&&-1===n(i[r],t)&&i[r].push(s?t:{listener:t,once:!1});return this},i.on=r("addListener"),i.addOnceListener=function(e,t){return this.addListener(e,{listener:t,once:!0})},i.once=r("addOnceListener"),i.defineEvent=function(e){return this.getListeners(e),this},i.defineEvents=function(e){for(var t=0;e.length>t;t+=1)this.defineEvent(e[t]);return this},i.removeListener=function(e,t){var r,i,s=this.getListenersAsObject(e);for(i in s)s.hasOwnProperty(i)&&(r=n(s[i],t),-1!==r&&s[i].splice(r,1));return this},i.off=r("removeListener"),i.addListeners=function(e,t){return this.manipulateListeners(!1,e,t)},i.removeListeners=function(e,t){return this.manipulateListeners(!0,e,t)},i.manipulateListeners=function(e,t,n){var r,i,s=e?this.removeListener:this.addListener,o=e?this.removeListeners:this.addListeners;if("object"!=typeof t||t instanceof RegExp)for(r=n.length;r--;)s.call(this,t,n[r]);else for(r in t)t.hasOwnProperty(r)&&(i=t[r])&&("function"==typeof i?s.call(this,r,i):o.call(this,r,i));return this},i.removeEvent=function(e){var t,n=typeof e,r=this._getEvents();if("string"===n)delete r[e];else if("object"===n)for(t in r)r.hasOwnProperty(t)&&e.test(t)&&delete r[t];else delete this._events;return this},i.removeAllListeners=r("removeEvent"),i.emitEvent=function(e,t){var n,r,i,s,o=this.getListenersAsObject(e);for(i in o)if(o.hasOwnProperty(i))for(r=o[i].length;r--;)n=o[i][r],n.once===!0&&this.removeListener(e,n.listener),s=n.listener.apply(this,t||[]),s===this._getOnceReturnValue()&&this.removeListener(e,n.listener);return this},i.trigger=r("emitEvent"),i.emit=function(e){var t=Array.prototype.slice.call(arguments,1);return this.emitEvent(e,t)},i.setOnceReturnValue=function(e){return this._onceReturnValue=e,this},i._getOnceReturnValue=function(){return this.hasOwnProperty("_onceReturnValue")?this._onceReturnValue:!0},i._getEvents=function(){return this._events||(this._events={})},t.noConflict=function(){return s.EventEmitter=o,t},"function"==typeof define&&define.amd?define("eventEmitter/EventEmitter",[],function(){return t}):"object"==typeof module&&module.exports?module.exports=t:this.EventEmitter=t}).call(this),function(e){function t(t){var n=e.event;return n.target=n.target||n.srcElement||t,n}var n=document.documentElement,r=function(){};n.addEventListener?r=function(e,t,n){e.addEventListener(t,n,!1)}:n.attachEvent&&(r=function(e,n,r){e[n+r]=r.handleEvent?function(){var n=t(e);r.handleEvent.call(r,n)}:function(){var n=t(e);r.call(e,n)},e.attachEvent("on"+n,e[n+r])});var i=function(){};n.removeEventListener?i=function(e,t,n){e.removeEventListener(t,n,!1)}:n.detachEvent&&(i=function(e,t,n){e.detachEvent("on"+t,e[t+n]);try{delete e[t+n]}catch(r){e[t+n]=void 0}});var s={bind:r,unbind:i};"function"==typeof define&&define.amd?define("eventie/eventie",s):e.eventie=s}(this),function(e,t){"function"==typeof define&&define.amd?define(["eventEmitter/EventEmitter","eventie/eventie"],function(n,r){return t(e,n,r)}):"object"==typeof exports?module.exports=t(e,require("eventEmitter"),require("eventie")):e.imagesLoaded=t(e,e.EventEmitter,e.eventie)}(this,function(e,t,n){function r(e,t){for(var n in t)e[n]=t[n];return e}function i(e){return"[object Array]"===h.call(e)}function s(e){var t=[];if(i(e))t=e;else if("number"==typeof e.length)for(var n=0,r=e.length;r>n;n++)t.push(e[n]);else t.push(e);return t}function o(e,t,n){if(!(this instanceof o))return new o(e,t);"string"==typeof e&&(e=document.querySelectorAll(e)),this.elements=s(e),this.options=r({},this.options),"function"==typeof t?n=t:r(this.options,t),n&&this.on("always",n),this.getImages(),f&&(this.jqDeferred=new f.Deferred);var i=this;setTimeout(function(){i.check()})}function u(e){this.img=e}function a(e){this.src=e,p[e]=this}var f=e.jQuery,l=e.console,c=l!==void 0,h=Object.prototype.toString;o.prototype=new t,o.prototype.options={},o.prototype.getImages=function(){this.images=[];for(var e=0,t=this.elements.length;t>e;e++){var n=this.elements[e];"IMG"===n.nodeName&&this.addImage(n);for(var r=n.querySelectorAll("img"),i=0,s=r.length;s>i;i++){var o=r[i];this.addImage(o)}}},o.prototype.addImage=function(e){var t=new u(e);this.images.push(t)},o.prototype.check=function(){function e(e,i){return t.options.debug&&c&&l.log("confirm",e,i),t.progress(e),n++,n===r&&t.complete(),!0}var t=this,n=0,r=this.images.length;if(this.hasAnyBroken=!1,!r)return this.complete(),void 0;for(var i=0;r>i;i++){var s=this.images[i];s.on("confirm",e),s.check()}},o.prototype.progress=function(e){this.hasAnyBroken=this.hasAnyBroken||!e.isLoaded;var t=this;setTimeout(function(){t.emit("progress",t,e),t.jqDeferred&&t.jqDeferred.notify&&t.jqDeferred.notify(t,e)})},o.prototype.complete=function(){var e=this.hasAnyBroken?"fail":"done";this.isComplete=!0;var t=this;setTimeout(function(){if(t.emit(e,t),t.emit("always",t),t.jqDeferred){var n=t.hasAnyBroken?"reject":"resolve";t.jqDeferred[n](t)}})},f&&(f.fn.imagesLoaded=function(e,t){var n=new o(this,e,t);return n.jqDeferred.promise(f(this))}),u.prototype=new t,u.prototype.check=function(){var e=p[this.img.src]||new a(this.img.src);if(e.isConfirmed)return this.confirm(e.isLoaded,"cached was confirmed"),void 0;if(this.img.complete&&void 0!==this.img.naturalWidth)return this.confirm(0!==this.img.naturalWidth,"naturalWidth"),void 0;var t=this;e.on("confirm",function(e,n){return t.confirm(e.isLoaded,n),!0}),e.check()},u.prototype.confirm=function(e,t){this.isLoaded=e,this.emit("confirm",this,t)};var p={};return a.prototype=new t,a.prototype.check=function(){if(!this.isChecked){var e=new Image;n.bind(e,"load",this),n.bind(e,"error",this),e.src=this.src,this.isChecked=!0}},a.prototype.handleEvent=function(e){var t="on"+e.type;this[t]&&this[t](e)},a.prototype.onload=function(e){this.confirm(!0,"onload"),this.unbindProxyEvents(e)},a.prototype.onerror=function(e){this.confirm(!1,"onerror"),this.unbindProxyEvents(e)},a.prototype.confirm=function(e,t){this.isConfirmed=!0,this.isLoaded=e,this.emit("confirm",this,t)},a.prototype.unbindProxyEvents=function(e){n.unbind(e.target,"load",this),n.unbind(e.target,"error",this)},o}),function(e){var t={topSpacing:0,bottomSpacing:0,className:"is-sticky",wrapperClassName:"sticky-wrapper",center:!1,getWidthFrom:""},n=$(window),r=$(document),i=[],s=n.height(),o=function(){var e=n.scrollTop(),t=r.height(),o=t-s,u=e>o?o-e:0;for(var a=0;a<i.length;a++){var f=i[a],l=f.stickyWrapper.offset().top,c=l-f.topSpacing-u;if(e<=c)f.currentTop!==null&&(f.stickyElement.css("position","").css("top",""),f.stickyElement.parent().removeClass(f.className),f.currentTop=null);else{var h=t-f.stickyElement.outerHeight()-f.topSpacing-f.bottomSpacing-e-u;h<0?h+=f.topSpacing:h=f.topSpacing,f.currentTop!=h&&(f.stickyElement.css("position","fixed").css("top",h),typeof f.getWidthFrom!="undefined"&&f.stickyElement.css("width",$(f.getWidthFrom).width()),f.stickyElement.parent().addClass(f.className),f.currentTop=h)}}},u=function(){s=n.height()},a={init:function(e){var n=$.extend(t,e);return this.each(function(){var e=$(this),t=e.attr("id"),r=$("<div></div>").attr("id",t+"-sticky-wrapper").addClass(n.wrapperClassName);e.wrapAll(r),n.center&&e.parent().css({width:e.outerWidth(),marginLeft:"auto",marginRight:"auto"}),e.css("float")=="right"&&e.css({"float":"none"}).parent().css({"float":"right"});var s=e.parent();s.css("height",e.outerHeight()),i.push({topSpacing:n.topSpacing,bottomSpacing:n.bottomSpacing,stickyElement:e,currentTop:null,stickyWrapper:s,className:n.className,getWidthFrom:n.getWidthFrom})})},update:o};window.addEventListener?(window.addEventListener("scroll",o,!1),window.addEventListener("resize",u,!1)):window.attachEvent&&(window.attachEvent("onscroll",o),window.attachEvent("onresize",u)),$.fn.sticky=function(e){if(a[e])return a[e].apply(this,Array.prototype.slice.call(arguments,1));if(typeof e=="object"||!e)return a.init.apply(this,arguments);$.error("Method "+e+" does not exist on jQuery.sticky")},$(function(){setTimeout(o,0)})}(jQuery),function(e){typeof define=="function"&&define.amd?define(["jquery"],e):e(jQuery)}(function(e){function n(t){return e.isFunction(t)||typeof t=="object"?t:{top:t,left:t}}var t=e.scrollTo=function(t,n,r){return e(window).scrollTo(t,n,r)};return t.defaults={axis:"xy",duration:parseFloat(e.fn.jquery)>=1.3?0:1,limit:!0},t.window=function(t){return e(window)._scrollable()},e.fn._scrollable=function(){return this.map(function(){var t=this,n=!t.nodeName||e.inArray(t.nodeName.toLowerCase(),["iframe","#document","html","body"])!=-1;if(!n)return t;var r=(t.contentWindow||t).document||t.ownerDocument||t;return/webkit/i.test(navigator.userAgent)||r.compatMode=="BackCompat"?r.body:r.documentElement})},e.fn.scrollTo=function(r,i,s){return typeof i=="object"&&(s=i,i=0),typeof s=="function"&&(s={onAfter:s}),r=="max"&&(r=9e9),s=e.extend({},t.defaults,s),i=i||s.duration,s.queue=s.queue&&s.axis.length>1,s.queue&&(i/=2),s.offset=n(s.offset),s.over=n(s.over),this._scrollable().each(function(){function v(e){u.animate(c,i,s.easing,e&&function(){e.call(this,a,s)})}if(r==null)return;var o=this,u=e(o),a=r,l,c={},p=u.is("html,body");switch(typeof a){case"number":case"string":if(/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(a)){a=n(a);break}a=p?e(a):e(a,this);if(!a.length)return;case"object":if(a.is||a.style)l=(a=e(a)).offset()}var d=e.isFunction(s.offset)&&s.offset(o,a)||s.offset;e.each(s.axis.split(""),function(e,n){var r=n=="x"?"Left":"Top",i=r.toLowerCase(),f="scroll"+r,m=o[f],g=t.max(o,n);if(l)c[f]=l[i]+(p?0:m-u.offset()[i]),s.margin&&(c[f]-=parseInt(a.css("margin"+r))||0,c[f]-=parseInt(a.css("border"+r+"Width"))||0),c[f]+=d[i]||0,s.over[i]&&(c[f]+=a[n=="x"?"width":"height"]()*s.over[i]);else{var y=a[i];c[f]=y.slice&&y.slice(-1)=="%"?parseFloat(y)/100*g:y}s.limit&&/^\d+$/.test(c[f])&&(c[f]=c[f]<=0?0:Math.min(c[f],g)),!e&&s.queue&&(m!=c[f]&&v(s.onAfterFirst),delete c[f])}),v(s.onAfter)}).end()},t.max=function(t,n){var r=n=="x"?"Width":"Height",i="scroll"+r;if(!e(t).is("html,body"))return t[i]-e(t)[r.toLowerCase()]();var s="client"+r,o=t.ownerDocument.documentElement,u=t.ownerDocument.body;return Math.max(o[i],u[i])-Math.min(o[s],u[s])},t}),function(e){typeof define=="function"&&define.amd?define(["jquery"],e):e(jQuery)}(function(e){function r(t,n,r){var i=n.hash.slice(1),s=document.getElementById(i)||document.getElementsByName(i)[0];if(!s)return;t&&t.preventDefault();var o=e(r.target);if(r.lock&&o.is(":animated")||r.onBefore&&r.onBefore(t,s,o)===!1)return;r.stop&&o._scrollable().stop(!0);if(r.hash){var u=s.id===i?"id":"name",a=e("<a> </a>").attr(u,i).css({position:"absolute",top:e(window).scrollTop(),left:e(window).scrollLeft()});s[u]="",e("body").prepend(a),location.hash=n.hash,a.remove(),s[u]=i}o.scrollTo(s,r).trigger("notify.serialScroll",[s])}var t=location.href.replace(/#.*/,""),n=e.localScroll=function(t){e("body").localScroll(t)};return n.defaults={duration:1e3,axis:"y",event:"click",stop:!0,target:window},e.fn.localScroll=function(i){function s(){return!!this.href&&!!this.hash&&this.href.replace(this.hash,"")==t&&(!i.filter||e(this).is(i.filter))}return i=e.extend({},n.defaults,i),i.hash&&location.hash&&(i.target&&window.scrollTo(0,0),r(0,location,i)),i.lazy?this.on(i.event,"a,area",function(e){s.call(this)&&r(e,this,i)}):this.find("a,area").filter(s).bind(i.event,function(e){r(e,this,i)}).end().end()},n.hash=function(){},n}),$(window).load(function(){(function(){var t,n=function(e){e=$(e);if(!e||e.length===0)return!1;var t=$(window).scrollTop()+150,n=t+$(window).height(),r=e.offset().top,i=r+e.height();return i>=t&&r<=n};$(window).scroll(function(){$(".dates li a").each(function(e,r){r=$(r);if(n(r.attr("href")))return t&&t.removeClass("active"),r.addClass("active"),t=r,!1})}),$(window).scroll()})()});