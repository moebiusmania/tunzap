// Salvo Twit Feed - Plugin per jQuery
var stfMain;
jQuery.fn.salvoTwitFeed = function(utente,n){
	stfMain = this;
	var stringa = "http://twitter.com/statuses/user_timeline.json?screen_name="+
	utente+"&count="+n+"&callback=?";
	jQuery.getJSON(stringa,parsing);
}
function parsing(dati){
	console.log(dati);
	$(dati).each(function(){
		var ogg = jQuery("<li />");
		var quando = jQuery("<span />");
		ogg.html(this.text);
		/*quando.addClass("quando").html(this.created_at);
		quando.appendTo(ogg);*/
		ogg.appendTo(stfMain);
	});
}