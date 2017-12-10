	
	$('section.container').css({
	        'min-height': $(window).height() - 250
	});

	$().ready(function() {
		setTimeout(function () {
			$('p.alert.alert-success.text-center').hide();
			$('p.alert.alert-danger.text-center').hide();
			$('p.alert.alert-info.text-center').hide();
		}, 3200); 
	});
