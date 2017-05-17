$(function(){
	$("#mySidenav a,nav ul li a").click(function(e) {
		e.preventDefault(); 
		var enlace = $(this).attr("href");
		console.log(enlace);
    	$('html, body').animate({
        	scrollTop: $(enlace).offset().top
    	}, 2000);
	});

	//$('.vid-1,.vid-2').swipebox({ autoplayVideos: true });

	//$("#events").hide();
	//$(".hide-on-mobile").eq(0).find("nav ul li").eq(3).hide();
	
	setTimeout(function(){

		if( jQuery(".banner-home img").length>0 ) {
			var offset = jQuery("#inicio").offset();
				
			jQuery("html,body").animate({
				scrollTop: offset.top-118
			},1500,function(){
			    // Animation complete.			  
			});
		}

	},3000);

});