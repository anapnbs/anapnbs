// Script.js

// Scroll to Top
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrolltoTop").style.display = "block";
    } else {
        document.getElementById("scrolltoTop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// Google Map
function initMap(){
	// Map options
	var options = {
		scrollwheel: false,
		zoom:16,
		center:{lat:35.235155, lng:129.012035}
	}

	// New map
	var map = new google.maps.Map(document.getElementById('map'), options);

	// Add marker
	var marker = new google.maps.Marker({
		position:{lat:35.235155, lng:129.012035},
		map:map,
		icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
	});

	var infoWindow = new google.maps.InfoWindow({
		content:'<p class="lead text-primary">anapnbs clinic</p>'
	});

	marker.addListener('click', function(){
		infoWindow.open(map, marker);
	});

}









