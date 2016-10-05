(function ($, Drupal) {
	$(document).ready(function(){
		var SAFARI = (navigator.userAgent.toString().toLowerCase().indexOf("safari") != -1) && (navigator.userAgent.toString().toLowerCase().indexOf("chrome") == -1);
		var FIREFOX = (navigator.userAgent.toString().toLowerCase().indexOf("firefox") != -1);
		var CHROME = (navigator.userAgent.toString().toLowerCase().indexOf("chrome") != -1);
		var ANDROID = (navigator.appVersion.toString().indexOf("Android", 0)!=-1)
		var MOBILE_SAFARI = ((navigator.userAgent.toString().toLowerCase().indexOf("iphone")!=-1) || (navigator.userAgent.toString().toLowerCase().indexOf("ipod")!=-1) || (navigator.userAgent.toString().toLowerCase().indexOf("ipad")!=-1)) ? true : false;

		var element = $('<div></div>');

		if(CHROME){
			element.css({
				"display": "block",
			    "position": "absolute",
			    "width": "100%",
			    "height": "54px",
			    "background-color": "#FFF",
			    "content": "",
			    "clear": "both",
			    "top": "0",
			    "margin-left": "-17px"
			});
		}

		if(FIREFOX){
			element.css({
				"display": "block",
			    "position": "absolute",
			    "width": "100%",
			    "height": "32px",
			    "background-color": "#FFF",
			    "content": "",
			    "clear": "both",
			    "top": "0"
			});
		}

		$("#cboxContent").prepend(element);
	});
}(jQuery, Drupal));