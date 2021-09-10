window.onload = function() {
 	scrollTo(0,0);
}

$(window).on('beforeunload', function() {
	// $(window).scrollTop(0);
	scrollTo(0,0);
});

$(window).bind('mousewheel DOMMouseScroll', function(event) {
	onMouseWheel(event);
	// console.log(event.type )
	// console.log(event.originalEvent.detail)
	clearInterval(timerscroll);
	return false;
});

endscrollingadd = true;
i=0;
arribaestoy= true;
abajoestoy= false;


//////////////// MOUSE EVENT
function onMouseWheel(event) {

	if (event.type == 'mousewheel') {
		variableposorneg = event.originalEvent.wheelDelta;
		if(variableposorneg > 0){
			scrollup();
		}else if(variableposorneg < 0){
			scrolldown();
		}
	}else if(event.type == 'DOMMouseScroll'){
		variableposorneg = event.originalEvent.detail;
		if(variableposorneg < 0){
			scrollup();
		}else if(variableposorneg > 0){
			scrolldown();
		}

	}


	
}


//////////////// CLICK EVENT
window.onclick = function (oEvent) {clearInterval(timerscroll);}

$(document).keydown(function(e){
			var keyCode = e.keyCode || e.which,
			arrow = {up: 33,down:34,arrowup:38,arrowdown:40,home: 36,end:35};

		  switch (keyCode) {
		    case arrow.up:
				e.preventDefault()
				scrollup();
		    break;
		    
		    case arrow.arrowup:
				e.preventDefault()
				scrollup();
		    break;
		    
		    case arrow.arrowdown:
				e.preventDefault()
				scrolldown();
		    break;
		    
		    case arrow.down:
				e.preventDefault()
				scrolldown();
			    break;

			    case arrow.home:
				e.preventDefault()
				arribadetododot();
		    break;
		    
		    case arrow.end:
				e.preventDefault()
				abajodetododot();
			    break;
		  }


		  clearInterval(timerscroll);
		});




$(document).ready(function(){
clicksarrays.unshift("body");
clicksarrays.push(".footer.clearfix.center");
howmanyelementsare = (clicksarrays.length - 1);
altodepantalla = window.innerHeight;
ultimoelemtoaltura = $('.description:last').height();	


	$('body').append('<ul class="onepage-pagination"></ul>')
		for(var j=0 ;j<=howmanyelementsare; j++){
			$('.onepage-pagination').append('<li class="clearfix"><a href="" onclick="scrolltomio('+j+');return false" class="'+j+'"></a></li>');
		}

			$('.onepage-pagination').css({'margin-top' : "-" +$('.onepage-pagination').height()/2 + "px"});

	seachractiveli(0);
	
	if (altodepantalla > ultimoelemtoaltura+109 ) {
		// console.log(ultimoelemtoaltura);
		// console.log(ultimoelemtoaltura + 109);
		// console.log(altodepantalla);
			$('.onepage-pagination li:last').remove();
	};

});



// timerscroll = 	setInterval(function() {
// 					i++;
// 					$(clicksarrays[i]).slideto({highlight: false});
// 					seachractiveli(i);
// 					arribaestoy= false;
// 					// console.log('6 seg')
// 					if(i > clicksarrays.length-1 && abajoestoy == false){
// 						abajodetododot();
// 						abajoestoy = true;
// 					}else if(i > clicksarrays.length-1 && abajoestoy == true){
// 						arribadetododot();
// 						abajoestoy = false;
// 					}
// 				},6000);


timerscroll = 	setInterval(function() {
					i++;
					$(clicksarrays[i]).slideto({highlight: false});
					seachractiveli(i);
					arribaestoy= false;
					console.log('24 seg')
					if(i > clicksarrays.length-1){
						arribadetododot();
					}
				},24000);


	function scrolldown(){
			// console.log(i  +'  '+ howmanyelementsare +endscrollingadd)
		if(i < howmanyelementsare && endscrollingadd == true){
			i++;
			$(clicksarrays[i]).slideto({highlight: false});
			// console.log(clicksarrays[i])
			endscrollingadd = false;
			seachractiveli(i);
		}else if(i == howmanyelementsare && endscrollingadd == true){
			$(clicksarrays[i]).slideto({highlight: false});
			// console.log(clicksarrays[i])
			endscrollingadd = false;
			seachractiveli(i);
		}
	}



function scrollup(){
			// console.log(i  +'  '+ howmanyelementsare +endscrollingadd)
	if(i > 0 && endscrollingadd == true){
		i--;
		$(clicksarrays[i]).slideto({highlight: false});
		endscrollingadd =false;
		// console.log(clicksarrays[i])
		seachractiveli(i);
	}else if(i == 0 && endscrollingadd == true){
		$(clicksarrays[i]).slideto({highlight: false});
		endscrollingadd =false;
		// console.log(clicksarrays[i])
		seachractiveli(i);
	}
}



function scrolltomio(haciadonde) {
	$(clicksarrays[haciadonde]).slideto({highlight: false});
	seachractiveli(haciadonde);
	endscrollingadd =false;
	i = haciadonde;
}


function seachractiveli(num) {
	$('.onepage-pagination li').find('a').removeClass('active');
	$($('.onepage-pagination li')[num]).find('a').addClass('active');
}




function arribadetododot () {
		$(clicksarrays[0]).slideto({highlight: false, slide_duration:1000});
		seachractiveli(0);
		i=0;
}


function abajodetododot () {
		$(clicksarrays[howmanyelementsare]).slideto({highlight: false});
		seachractiveli(howmanyelementsare);
		 i = howmanyelementsare;
}