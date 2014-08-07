$(document).ready(function() {
	$('#menu').sticky({topSpacing: 61});
	$('#menu').on('click', '.menu-toggle', function() {
		if ($(this).data('position') == 'collapsed') {
			$(this).data('position', 'expanded');
			$(this).append($('#menu .menu-collapse').html());
			$(this).find('ul').removeClass('list-inline').addClass('list-unstyled');
		} else {
			$(this).data('position', 'collapsed');
			$(this).find('ul').remove();
		}
	});

	if ($('#banner').length > 0) {
		var slideTo = function(slideIndex) {
			$('.slide').fadeOut(400);
			$('#slideelement-'+slideIndex).fadeIn(400);
			$('.slidewrapper').data('current', slideIndex)
		}
		var automaticSlice = setInterval(function() {
			var slideIndex = $('.slidewrapper').data('current') + 1;
			if (slideIndex > $('.slidewrapper').data('max')) {
				slideIndex = $('.slidewrapper').data('min');
			}
			slideTo(slideIndex);
		}, 5000);
		$('.slidewrapper').on('click', 'i', function() {
			var slideIndex = $('.slidewrapper').data('current');
			slideIndex = $(this).hasClass('prev') ? slideIndex - 1 : slideIndex + 1;
			if (slideIndex > $('.slidewrapper').data('max')) {
				slideIndex = $('.slidewrapper').data('min');
			}
			slideTo(slideIndex);
		});
	}

	/*if ($('.home_index .slideshow').length > 0) {
        var slideTo = function(index) {
            $('.slideshow').fadeOut(400);
            $('.slideButton').removeClass('active');
            $('#slideElement-'+index).fadeIn(400);
            $('#slideButton-'+index).addClass('active');
        }

        // slide automatique
        var automaticSlide = setInterval(function() {
            var slideIndex = parseInt($('.slideButtons .active').attr('id').substring(12)) + 1;
            if ($('#slideElement-'+slideIndex).length == 0) {
                slideIndex = 0;
            }
            slideTo(slideIndex);
        }, 8000);

        // clic pour changer de slide
        $('.slideWrapper').on('click', '.slideButton', function() {
            var slideIndex = $(this).attr('id').substring(12);
            slideTo(slideIndex);
        });
    }*/
});