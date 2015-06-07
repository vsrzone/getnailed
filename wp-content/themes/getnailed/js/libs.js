
var vid = document.getElementById("landing-video");
$(document).ready(function(){
	sizeLandingSections();
	// initSlider();
	preloadImages();
	playVideo();
	setToDate()

	$(document).on('click', '#more-arrow', function(){
		
	});

	$("#more-arrow").click(function() {
    $('html, body').animate({
        scrollTop: $("#main-info").offset().top
    }, 500);
});

});

$(window).resize(function(){
	sizeLandingSections();
	// initSlider();
	preloadImages();
});



//init functions
function initSlider(){
	$('#landing-slider').flexslider({
		animation: "slide",
		directionNav : true,
		controlNav : false
	});
}

function playVideo(){

	window.requestAnimationFrame(function(e) {
		if(vid.currentTime > 8.2){
			vid.currentTime = 0;
		}
		playVideo();
	});
}

//sizing of divs
function sizeLandingSections(){
	$('#slider-wrapper').css('max-height', window.innerHeight);
}


//image preload
function preloadImages(callback){
	var preLoadImageArray = [];
	$('.pre-load').each(function(){
		if($(this).data('background') !== undefined){
			preLoadImageArray.push({ element: $(this), image: $(this).data('background'), type: 'background' });
		}
		if($(this).data('image') !== undefined){
			preLoadImageArray.push({ element: $(this), image: $(this).data('image'), type: 'image' });
		}
	});

	var loader = new PxLoader();

	for(var i=0; i < preLoadImageArray.length; i++){
		var pxImage = new PxLoaderImage(preLoadImageArray[i].image);
		loader.add(pxImage);
	}

	loader.addCompletionListener(function() {
		for(var i=0; i < preLoadImageArray.length; i++){
			if(preLoadImageArray[i].type == 'background'){
				var element = preLoadImageArray[i].element;
				element.css('background-image', "url('"+ preLoadImageArray[i].image +"')");
				element.removeClass('pre-load');
			}else if(preLoadImageArray[i].type == 'image'){
				var element = preLoadImageArray[i].element;
				element.attr('src',preLoadImageArray[i].image);
				element.removeClass('pre-load');
			}
		}

		if(callback !== undefined){
			callback();
		}
	});
	loader.start();
}

function setToDate(){
	var eventDate = new Date("July 04 2015 00:00:00");
	var today = new Date();

    var diff = (eventDate - today);

    var Days =  parseInt(diff/(24*3600*1000));

    var Hours = parseInt((diff/(3600*1000))%24);

    $('#slider-days').text(Days);
    $('#slider-hours').text(Hours);
}

