
endscrollingadd = true;
var myarrayofthings=[];
var mynavbar=[];


var idCollection=[];






jQuery(document).ready(function($) {
	mynavbar = $(".navbar-nav").children('li');

	mynavbar_drop =$(".dropdown-menu").children('li');

	// myarrayofthings= $(".nav.nav-pills").children('li').text().split(" ");

	$.each($(".navbar-nav").find('a') , function( key, value ) {
	// alert( key + ": " + value );
	// console.log( $(value).attr("href").replace("#", ""));
	myarrayofthings.push( $(value).attr("href").replace("#", ""));
	$($(value).attr("href")).prepend('<div class="fake_section '+$(value).attr("href").replace("#", "")+'"></div>');
	// $($(value).attr("href")).before('<div class="fake_section '+$(value).attr("href").replace("#", "")+'"></div>')





	// var intro1= document.querySelector('#ArielBarrios').offsetHeight;
	// var intro2= document.querySelector('#Works').offsetHeight;
	// var intro3= document.querySelector('#Contact').offsetHeight;
	// var intro1= $('#ArielBarrios').css('height');
	// var intro2= $('#Works').css('height');
	// var intro3= $('#Contact').css('height');
	// documentheight =   intro1 + intro2 +intro3;

	documentheight = document.documentElement.scrollHeight - 10;
	$('.layout').css({'height' : documentheight + 'px'});


	$('.bg-dakr').css({'height' : documentheight+40 + 'px'})

});



// bg_cahnge;




});





var mytimer;
var mytimer2;
bg_cahnge = setInterval(function(){
	if ($('.layout').hasClass('layout_b')) {
		$('.layout').removeClass('layout_b');
		// console.log("cero");
		mytimer = setTimeout(blink, 400);
		mytimer2 = setTimeout(blink2, 800);
	} else{
		$('.layout').addClass('layout_b');
	};
;

 }, 20000);



function blink () {
		$('.layout').addClass('layout_b');
		clearTimeout(mytimer);
		// console.log("uno");
	}

function blink2 () {
		$('.layout').removeClass('layout_b');
		clearTimeout(mytimer2);
		// console.log("dos");
	}


function active_deactive(element) {
	if( mynavbar.length > 0){
			for (var i = 0; i < mynavbar.length; i++) {
				$(mynavbar[i]).removeClass('active');
				$(mynavbar_drop[i]).removeClass('active');
			};
			$(element).parent().addClass('active');
			$('.transparent').show();
			// $('.navbar-collapse navbar-ex1-collapse collapse in').show();
			$('.navbar-collapse.navbar-ex1-collapse.collapse').removeClass('in');
	}
}








window.onscroll = function() {
// endscrollingadd es una variable que trae el plugin de jquery.slideto.min.js
	if (endscrollingadd == true){
		myFunction();

	} else{};

};



window.onresize  = function() {
	documentheight = document.documentElement.scrollHeight - 10;
	$('.layout').css({'height' : documentheight + 'px'});
	$('.bg-dakr').css({'height' : documentheight+40 + 'px'});

};

	var seleccionado ='';

	function myFunction() {
		numero = $('html').scrollTop();
		if (numero > 50){
			$('.scrolldown-cont').addClass('deactive');
			for (var i = 0; i < myarrayofthings.length; i++) {
				var headerlink =  '.header_' + myarrayofthings[i];
				if(isScrolledIntoView(myarrayofthings[i]) == true){
// 					console.log(seleccionado);
					if(seleccionado != myarrayofthings[i]){
						$('.navbar-nav a').removeClass('active');
						$(headerlink).addClass('active');
						seleccionado = myarrayofthings[i];
					}
				}
			}
		} else{
			$('.scrolldown-cont').removeClass('deactive');
		}
	}



function isScrolledIntoView(elem){
	var $elem = $('.' + elem);
	var $window = $(window);

    var elemTop = Math.round($elem.offset().top)-100;
	// var elemBottom = Math.round(elemTop + $elem.height());

	var docViewTop = Math.round($window.scrollTop());
	// var docViewBottom = Math.round(docViewTop + $window.height());

	return ((elemTop < docViewTop) );

}




var splide;
var slidecreated = false;
var activeslider;

function triggerPopupSlide(id) {

	if (slidecreated == false ) {
		idCollection.forEach(element => ($($('.' + element)[0])).removeClass('active'));
		$($('.' + id)[0]).addClass('active');
		$('.bg-dakr').addClass('active');
		splide = new Splide('#' + id, {
			'arrowPath':'M18.9,17.2L18.9,17.2L2,0.3c-0.4-0.4-1-0.4-1.3,0L0.3,0.6c-0.4,0.4-0.4,1,0,1.3l16.3,16.3c0.4,0.4,0.4,1,0,1.3L0.3,35.9 c-0.4,0.4-0.4,1,0,1.3l0.4,0.4c0.4,0.4,1,0.4,1.3,0l16.9-16.9l1-1c0.4-0.4,0.4-1,0-1.3L18.9,17.2z'
		});
		splide.mount();

		activeslider = id;
		slidecreated = true;
		console.log($($('.' + id)[0]))
		console.log(slidecreated)
		// $('.slidercont').css('top', (($(document).scrollTop()) - 1000 )+ 'px' )

		var  actual_index = idCollection.indexOf(id);
		var previous_gal = idCollection[actual_index - 1];
		var next_gal = idCollection[actual_index + 1];


		if(previous_gal != undefined){
				const title_prev_section = $($('.' + previous_gal)[0]).find('h3').text();
				$($('.' + id)[0]).append('<span class="previous_gal d-none d-md-block "  onclick="closepopup(\''+ id + '\');triggerPopupSlide(\''+ previous_gal + '\')" title="'+ title_prev_section + '">Previous</span>');

				var  previous_gal_img	=$($('.'+ previous_gal )[0]).find('.front-image img');
				$(previous_gal_img).clone().appendTo($($('.previous_gal')[0]));
				console.log(previous_gal);
		}

		if(next_gal != undefined){
			const title_next_section = $($('.' + next_gal)[0]).find('h3').text();
			$($('.' + id)[0]).append('<span class="next_gal d-none d-md-block"  onclick="closepopup(\''+ id + '\');triggerPopupSlide(\''+ next_gal + '\')" title="'+ title_next_section + '">Next</span>');
			var  next_gal_img	=$($('.'+ next_gal )[0]).find('.front-image img');
			$(next_gal_img).clone().appendTo($($('.next_gal')[0]));
			console.log(next_gal);
		}

	}
}


function closepopup(id) {
	// destroy(completely = true)
	console.log($($('.' + id)[0]))
	$($('.' + id)[0]).removeClass('active');
	$('.bg-dakr').removeClass('active');
	splide.destroy(completely = true);
	slidecreated = false;
	removeallGalButton();
	// return false
}


function closepopupall() {
	$($('.' + activeslider)[0]).removeClass('active');
	$('.bg-dakr').removeClass('active');
	splide.destroy(completely = true);
	slidecreated = false;

	removeallGalButton();
	// return false


}


function removeallGalButton(){
	$('.previous_gal').remove();
	$('.next_gal').remove();



}
