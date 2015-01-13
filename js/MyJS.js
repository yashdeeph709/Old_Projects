	$(document).ready(function() {
		    $curtainopen = false;
		
			$(".rope").click(function(){
				$(this).blur();
				if ($curtainopen == false){ 
					$(this).stop().animate({top: '0px' }, {queue:false, duration:350, easing:'easeOutBounce'}); 
					$(".leftcurtain").stop().animate({width:'60px'},{height:'612px'}, 2000 );					$(".rightcurtain").stop().animate({width:'60px'},{height:'612px'},2000 );                   $curtainopen = true;
					$('.rope').hide();
				}else{
					$(this).stop().animate({top: '-10px' }, {queue:false, duration:350, easing:'easeOutBounce'}); 
					$(".leftcurtain").stop().animate({width:'50%'}, 2000 );
					$(".rightcurtain").stop().animate({width:'51%'}, 2000 );
					$curtainopen = false;
						}
				return false;
			});
			
		});
