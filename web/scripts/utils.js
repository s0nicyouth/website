$(document).ready(function() {
	$('a[href^="#"]').on('click', function(e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop' : $target.offset().top
		}, 900, 'swing', function() {
			window.location.hash = target;
		});
	})
});

function initMap() {
	var coords = {
		lat : 47.6903302,
		lng : 9.4801359
	};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom : 12,
		center : coords,
		disableDefaultUI: true
	});
	var marker = new google.maps.Marker({
		position : coords,
		map : map
	});
}