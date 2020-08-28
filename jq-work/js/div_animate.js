window.onload = function(){
		$(".cl_top").click(function(){
			$(this).animate({height:"350px",width:"1100px"},"slow","swing",slow_msg1());	
		});
		$(".cl_mid1").click(function(){
			$(this).animate({height:"350px",width:"1100px"},"slow","swing",slow_msg2());	
		});
		$(".cl_mid2").click(function(){
			$(this).animate({height:"1620px",width:"1100px"},"slow","swing",slow_msg3());	
		});
		$(".air_mid2").click(function(){
			$(this).animate({height:"1120px",width:"1100px"},"slow","swing",slow_msg3());	
		});
}
	function slow_msg1(){
		$(".cl_top_right").fadeIn(2000);
		$(".cl_top p").fadeIn(2000);
	}
	function slow_msg2(){
		$(".cl_mid1 p").fadeIn(2000);
	}
	function slow_msg3(){
		$(".cl_mid2_main").fadeIn(2000);
		$(".cl_foot").delay(3000).show("slow");
		$(".cl_footer").delay(3000).show("slow");
}