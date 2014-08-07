$(document).ready(function() {
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
});