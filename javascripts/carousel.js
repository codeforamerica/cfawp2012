$(function() {
	var step = 1; 
	var current = 0; 
	var maximum = $('#mycarousel ul li').size(); 
	var visible = 4.5; 
	var speed = 100; 
	var liSize = 150;
	var carousel_height = 75;

	var ulSize = liSize * maximum;   
	var divSize = liSize * visible;  

	$('#mycarousel ul').css("width", ulSize+"px").css("left", -(current * liSize)).css("position", "absolute");

	$('#mycarousel').css("width", divSize+"px").css("height", carousel_height+"px").css("visibility", "visible").css("overflow", "hidden").css("position", "relative"); 

	$('.next').click(function() { 
		if(current + step < 0 || current + step > maximum - visible) {return; }
		else {
			current = current + step;
			$('#mycarousel ul').animate({left: -(liSize * current)}, speed, null);
		}
		return false;
	});

	$('.prev').click(function() { 
		if(current - step < 0 || current - step > maximum - visible) {return; }
		else {
			current = current - step;
			$('#mycarousel ul').animate({left: -(liSize * current)}, speed, null);
		}
		return false;
	});
});

$(function() {
	var step = 1; 
	var current = randomnumber=Math.floor(Math.random()*16); 
	var maximum = $('#fellowcarousel ul li').size(); 
	var visible = 4; 
	var speed = 100; 
	var liSize = 150;
	var carousel_height = 168;

	var ulSize = liSize * maximum;   
	var divSize = liSize * visible;  

	$('#fellowcarousel ul').css("width", ulSize+"px").css("left", -(current * liSize)).css("position", "absolute");

	$('#fellowcarousel').css("width", divSize+"px").css("height", carousel_height+"px").css("visibility", "visible").css("overflow", "hidden").css("position", "relative"); 

	$('.next').click(function() { 
		if(current + step < 0 || current + step > maximum - visible) {return; }
		else {
			current = current + step;
			$('#fellowcarousel ul').animate({left: -(liSize * current)}, speed, null);
		}
		return false;
	});

	$('.prev').click(function() { 
		if(current - step < 0 || current - step > maximum - visible) {return; }
		else {
			current = current - step;
			$('#fellowcarousel ul').animate({left: -(liSize * current)}, speed, null);
		}
		return false;
	});
});
