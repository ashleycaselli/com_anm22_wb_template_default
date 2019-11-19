$(document).ready(function(){
	
	if($.cookie("cookies") != 1){
		$('.cookie_banner').css("display","block");
	}
	
	$('.cookie_banner .got_it').click(function(){
		$('.cookie_banner').fadeTo(1000,0,function(){
			$('.cookie_banner').css("display","none");
		});
		$.cookie("cookies",1,{expires: 365, path: '/'});
	});
	
});