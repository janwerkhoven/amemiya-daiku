
// JQUERY
var J = jQuery.noConflict();
J(document).ready(function(){
	
	// NAVIGATION
	J('#x1').next("ul").hide();
	if (document.body.id == 'furniture' || document.body.id == 'buildings' || document.body.id == 'exchange') {
		J('#x1').next("ul").show();
	}
	J('#x1').click(function(event){
		event.preventDefault();
		J(this).next("ul").slideToggle(300);
		J('#x1').not(this).next("ul").slideUp(300);
	});
	
	// HEADER LOGO RIGHT
	J('#header-bg-box').hover(function(){
		J(this).stop();
		J(this).animate({height: 261},400);
	},function(){
		J(this).stop();
		J(this).animate({height: 166},300);
	});

	// LANGUAGE
        /*
	J('html[lang="ja"] #ja').hide();
	J('html[lang="en"] #en').hide();
	var href = location.href;
	var q = href.search("\\?");
	var l = href.length;
	if(q==-1){
		var goto = href;
	} else {
		var goto = href.substr(0,l-(l-q))
	};
	J('#en').click(function(event){
		event.preventDefault();
		location.assign(goto + "?l=en");
	});
	J('#ja').click(function(event){
		event.preventDefault();
		location.assign(goto + "?l=ja");
	});
        */
       
	// JQUERY LIGHTBOX
	J(function() {
		J('.gallery a.g1').lightBox();
		J('.gallery a.g2').lightBox();
		J('.gallery a.g3').lightBox();
		J('.gallery a.g4').lightBox();
		J('.gallery a.g5').lightBox();
	});
	
	// CUFON
	Cufon.replace('html[lang="en"] h2, html[lang="en"] h3, .cufon');
	/*
	Cufon.now();
	*/
});