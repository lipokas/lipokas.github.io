
(function($) {
  var cache = [];
  // Arguments are image paths relative to the current page.
  $.preLoadImages = function() {
    var args_len = arguments.length;
    for (var i = args_len; i--;) {
      var cacheImage = document.createElement('img');
      cacheImage.src = arguments[i];
      cache.push(cacheImage);
    }
  }
})(jQuery);

(function($){ 
$.fn.preloader = function(callback){
	return this.each(function() {
		$(this).html('<div id="preloader" align="center"><img src="http://img.mucheat.com/ajax-loader3.gif"></img></div>');
		if ($.isFunction(callback)){
			callback.call(this);
		}
	});
	
}})(jQuery);

(function($){
$.fn.fakeLinks = function(options,callback){
	var defaults = {
		trgt: 'div#midContent',
		auth: ''
	}
	if (options) { var options = $.extend(defaults, options); }
	
	return this.each(function() {
		var ax = 0;
		$(this).unbind().click(function() {
			ax++
			if (ax == 1) {
				var file = $(this).attr('id');
				$(options.trgt).preloader(function() {
					$(this).load('include/' + file, { auth: options.auth }, function() {
						if ($(this).height() > 300) {
							$('#leftRanks').fadeIn();
						} else {
							$('#leftRanks').hide();
						}
						ax = 0;
					});
				});
			}
		});
		
		if ($.isFunction(callback)){
			//callback.call(element,options.seconds);
			callback.call(element);
		}
	});
	
}})(jQuery);

(function($){
$.fn.wait = function(options,callback){
	var element = this;
	var defaults = {
		seconds: 60,
		output: '',
		left: '',
		right: '',
		intervalId: 'default'
	}
	options = options || {};
	options = $.extend(defaults, options);
	return this.each(function() {
		var count = 0;
		if (options.output != 'hidden') {
			element.html(options.left + options.seconds + options.right);
		}
		function timer() {
			++count
			if (options.output != 'hidden') {
				var rem = options.seconds-count;
				var secHtml = options.left + rem + options.right;
				element.html(secHtml);
			}
			if (count == options.seconds) {
				clearInterval(window[options.intervalId]);
				if ($.isFunction(callback)){
					callback.call(element);
				}
			}
		}
		window[options.intervalId] = setInterval(timer, 1000);
	});
}})(jQuery);


(function($){
$.fn.checkStatus = function(options,callback){
	var element = $(this);
	var defaults = { auth: '', secs: 60, type: '', lang: 'en' }
	if (options.lang == 'en') { var emsg = 'Your Session has expired, please reload the page.'; }
	else if (options.lang == 'es') { var emsg = 'Tu Sesion ha expirado, por favor actualiza la pagina.'; }
	options = options || {};
	options = $.extend(defaults, options);
	return this.each(function() {
		clearInterval(window.checkStatsTimer);
		if (options.type != 'kill') {
			function checkIt() {
				$.ajax({
					url: 'include/functions.php',
					type: 'post',
					dataType: 'json',
					data:  { auth: options.auth, fun: 'checkStatus' },
					success: function(rs) {
						if (!rs) {
							if (element.hasClass('hidden')) {
								return false;
							} else {
								element.fadeOut().addClass('hidden');
							}
						} else {
							var fmsg = '<strong>' + rs.title + '</strong> ' + rs.msg;
							element.html(fmsg).fadeIn().removeClass('hidden');
						}
					},
					error: function(xhr, textStatus, errorThrown) {
						if (textStatus != 'error') {
							element.html(emsg).fadeIn().removeClass('hidden');
						}
					}
				});
			}
			checkIt();
			if (options.type == 'timer') { window.checkStatsTimer = setInterval(checkIt, options.secs*1000); }
		}
		
		if ($.isFunction(callback)){
			callback.call(element);
		}
	});
}})(jQuery);

(function($){
$.fn.initialVal = function(options,callback){
	var element = $(this);
	var defaults = {
		swClass: ''
	}
	if (options) { var options = $.extend(defaults, options); }
	return this.each(function() {
		element.focus(function() {
			$(this).removeClass(options.swClass);
		}).blur(function() {
			if ( $(this).val() == '' ) {
				$(this).addClass(options.swClass);
			}
		});
		
		if ($.isFunction(callback)){
			callback.call(element);
		}
	});
}})(jQuery);

(function($){ 
$.fn.serverTime = function(){
	var element = $(this);
	function timf(val) {
		var str = '' + val;
		if (str.length < 2) {
			var fixed = '0' + str;
			return fixed;
		}
		return str;
	}
	function getServerTime() {
		clearInterval(window.serverTime);
		$.getJSON('include/jquery.servertime.php', function(data){
			var hour = data.h;
			var minutes = data.i;
			var seconds = data.s;
			var meri = data.a;
			var dayOfWeek = data.dw;
			var month = data.m;
			var day = data.d;
			var year = data.y;
			
			function serTime() {
				++seconds;
				if (seconds == 60) {
					seconds = 0;
					++minutes
					if (minutes == 60) {
						minutes = 0;
						++hour
						if (hour == 12) {
							if (meri == 'AM') {
								meri = 'PM';
							} else {
								getServerTime();
							}
							$("#serverTimeMer").text(meri);
						}
						if (hour == 13) {
							hour = 1;
						}
						$("#serverTimeHour").text(timf(hour));
					}
					$("#serverTimeMin").text(timf(minutes));
				}
				$("#serverTimeSec").text(timf(seconds));
			}
			window.serverTime = setInterval(serTime, 1000);
			
			$(element).html('<span class="remark"><span id="serverTimeHour">' + timf(hour) + '</span>:<span id="serverTimeMin">' + timf(minutes) + '</span>:<span id="serverTimeSec">' + timf(seconds) + '</span> <span id="serverTimeMer">' + meri + '</span></span> &nbsp;' + month + ' ' + day + ', ' + year);
		});
	}
	getServerTime();
}})(jQuery);

(function($){
	$.fn.tipTip = function(options) {
		var defaults = { 
			activation: "hover",
			keepAlive: false,
			maxWidth: "200px",
			edgeOffset: 3,
			defaultPosition: "bottom",
			delay: 400,
			fadeIn: 200,
			fadeOut: 200,
			attribute: "title",
			content: false,
		  	enter: function(){},
		  	exit: function(){}
	  	};
	 	var opts = $.extend(defaults, options);
	 	
	 	if($("#tiptip_holder").length <= 0){
	 		var tiptip_holder = $('<div id="tiptip_holder" style="max-width:'+ opts.maxWidth +';"></div>');
			var tiptip_content = $('<div id="tiptip_content"></div>');
			var tiptip_arrow = $('<div id="tiptip_arrow"></div>');
			$("body").append(tiptip_holder.html(tiptip_content).prepend(tiptip_arrow.html('<div id="tiptip_arrow_inner"></div>')));
		} else {
			var tiptip_holder = $("#tiptip_holder");
			var tiptip_content = $("#tiptip_content");
			var tiptip_arrow = $("#tiptip_arrow");
		}
		
		return this.each(function(){
			var org_elem = $(this);
			if(opts.content){
				var org_title = opts.content;
			} else {
				var org_title = org_elem.attr(opts.attribute);
			}
			if(org_title != ""){
				if(!opts.content){
					org_elem.removeAttr(opts.attribute);
				}
				var timeout = false;
				
				if(opts.activation == "hover"){
					org_elem.hover(function(){
						active_tiptip();
					}, function(){
						if(!opts.keepAlive){
							deactive_tiptip();
						}
					});
					if(opts.keepAlive){
						tiptip_holder.hover(function(){}, function(){
							deactive_tiptip();
						});
					}
				} else if(opts.activation == "focus"){
					org_elem.focus(function(){
						active_tiptip();
					}).blur(function(){
						deactive_tiptip();
					});
				} else if(opts.activation == "click"){
					org_elem.click(function(){
						active_tiptip();
						return false;
					}).hover(function(){},function(){
						if(!opts.keepAlive){
							deactive_tiptip();
						}
					});
					if(opts.keepAlive){
						tiptip_holder.hover(function(){}, function(){
							deactive_tiptip();
						});
					}
				}
			
				function active_tiptip(){
					opts.enter.call(this);
					tiptip_content.html(org_title);
					tiptip_holder.hide().removeAttr("class").css("margin","0");
					tiptip_arrow.removeAttr("style");
					
					var top = parseInt(org_elem.offset()['top']);
					var left = parseInt(org_elem.offset()['left']);
					var org_width = parseInt(org_elem.outerWidth());
					var org_height = parseInt(org_elem.outerHeight());
					var tip_w = tiptip_holder.outerWidth();
					var tip_h = tiptip_holder.outerHeight();
					var w_compare = Math.round((org_width - tip_w) / 2);
					var h_compare = Math.round((org_height - tip_h) / 2);
					var marg_left = Math.round(left + w_compare);
					var marg_top = Math.round(top + org_height + opts.edgeOffset);
					var t_class = "";
					var arrow_top = "";
					var arrow_left = Math.round(tip_w - 12) / 2;

					    if(opts.defaultPosition == "bottom"){
						t_class = "_bottom";
						} else if(opts.defaultPosition == "top"){ 
							t_class = "_top";
						} else if(opts.defaultPosition == "left"){
							t_class = "_left";
						} else if(opts.defaultPosition == "right"){
							t_class = "_right";
						}
					
					var right_compare = (w_compare + left) < parseInt($(window).scrollLeft());
					var left_compare = (tip_w + left) > parseInt($(window).width());
					
					if((right_compare && w_compare < 0) || (t_class == "_right" && !left_compare) || (t_class == "_left" && left < (tip_w + opts.edgeOffset + 5))){
						t_class = "_right";
						arrow_top = Math.round(tip_h - 13) / 2;
						arrow_left = -12;
						marg_left = Math.round(left + org_width + opts.edgeOffset);
						marg_top = Math.round(top + h_compare);
					} else if((left_compare && w_compare < 0) || (t_class == "_left" && !right_compare)){
						t_class = "_left";
						arrow_top = Math.round(tip_h - 13) / 2;
						arrow_left =  Math.round(tip_w);
						marg_left = Math.round(left - (tip_w + opts.edgeOffset + 5));
						marg_top = Math.round(top + h_compare);
					}

					var top_compare = (top + org_height + opts.edgeOffset + tip_h + 8) > parseInt($(window).height() + $(window).scrollTop());
					var bottom_compare = ((top + org_height) - (opts.edgeOffset + tip_h + 8)) < 0;
					
					if(top_compare || (t_class == "_bottom" && top_compare) || (t_class == "_top" && !bottom_compare)){
						if(t_class == "_top" || t_class == "_bottom"){
							t_class = "_top";
						} else {
							t_class = t_class+"_top";
						}
						arrow_top = tip_h;
						marg_top = Math.round(top - (tip_h + 5 + opts.edgeOffset));
					} else if(bottom_compare | (t_class == "_top" && bottom_compare) || (t_class == "_bottom" && !top_compare)){
						if(t_class == "_top" || t_class == "_bottom"){
							t_class = "_bottom";
						} else {
							t_class = t_class+"_bottom";
						}
						arrow_top = -12;						
						marg_top = Math.round(top + org_height + opts.edgeOffset);
					}
				
					if(t_class == "_right_top" || t_class == "_left_top"){
						marg_top = marg_top + 5;
					} else if(t_class == "_right_bottom" || t_class == "_left_bottom"){		
						marg_top = marg_top - 5;
					}
					if(t_class == "_left_top" || t_class == "_left_bottom"){	
						marg_left = marg_left + 5;
					}
					tiptip_arrow.css({"margin-left": arrow_left+"px", "margin-top": arrow_top+"px"});
					tiptip_holder.css({"margin-left": marg_left+"px", "margin-top": marg_top+"px"}).attr("class","tip"+t_class);
					
					if (timeout){ clearTimeout(timeout); }
					timeout = setTimeout(function(){ tiptip_holder.stop(true,true).fadeIn(opts.fadeIn); }, opts.delay);	
				}
				
				function deactive_tiptip(){
					opts.exit.call(this);
					if (timeout){ clearTimeout(timeout); }
					tiptip_holder.fadeOut(opts.fadeOut);
				}
			}				
		});
	}
})(jQuery);

(function($){
$.idleTimer = function(newTimeout, elem){
    var idle    = false,
        enabled = true,
        timeout = 30000,
        events  = 'mousemove keydown DOMMouseScroll mousewheel mousedown';
    elem = elem || document;
    var toggleIdleState = function(myelem){
        if (typeof myelem == 'number') myelem = undefined;
        var obj = $.data(myelem || elem,'idleTimerObj');
        obj.idle = !obj.idle;
        obj.olddate = +new Date;
        var event = jQuery.Event( $.data(elem,'idleTimer', obj.idle ? "idle" : "active" )  + '.idleTimer'   );
        event.stopPropagation();
        $(elem).trigger(event);            
    },
    stop = function(elem){
        var obj = $.data(elem,'idleTimerObj');
        obj.enabled = false;
        clearTimeout(obj.tId);
        $(elem).unbind('.idleTimer');
    },
    handleUserEvent = function(){
        var obj = $.data(this,'idleTimerObj');
        clearTimeout(obj.tId);
        if (obj.enabled){
            if (obj.idle){
                toggleIdleState(this);           
            }
            obj.tId = setTimeout(toggleIdleState, obj.timeout);
        }    
     };
    var obj = $.data(elem,'idleTimerObj') || new function(){};
    obj.olddate = obj.olddate || +new Date;
    if (typeof newTimeout == "number"){
        timeout = newTimeout;
    } else if (newTimeout === 'destroy') {
        stop(elem);
        return this;  
    } else if (newTimeout === 'getElapsedTime'){
        return (+new Date) - obj.olddate;
    }
    $(elem).bind($.trim((events+' ').split(' ').join('.idleTimer ')),handleUserEvent);
    obj.idle    = idle;
    obj.enabled = enabled;
    obj.timeout = timeout;
    obj.tId = setTimeout(toggleIdleState, obj.timeout);
    $.data(elem,'idleTimer',"active");
    $.data(elem,'idleTimerObj',obj);  
};
$.fn.idleTimer = function(newTimeout){
  this[0] && $.idleTimer(newTimeout,this[0]);
  return this;
}
})(jQuery);

