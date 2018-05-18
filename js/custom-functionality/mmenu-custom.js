var $ = jQuery;

$(document).ready(function() {
	$("#site-navigation").mmenu({
		// options
		"extensions": [
			"fx-menu-zoom",
			"fx-panels-slide-up"
		]
	}, {
		// configuration
		clone: true,
		offCanvas: {
			pageSelector: "#page"
		}
	});
});