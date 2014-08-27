function isMobileLayout() {
	return $('#mobile_layout_detector').css('display') == 'block'
}

// this stuff works in with the layout builder.
var equalHeightSelectors = [
        ".equal_height_columns > .row > .main, .equal_height_columns  > .row > .sidebar, .equal_height_columns  > .row > .rightbar",
        ".root_layout_container > ._right_sidebar > .row > .main, .root_layout_container > ._right_sidebar > .row > .sidebar",
        ".root_layout_container > ._left_sidebar > .row > .main, .root_layout_container > ._left_sidebar > .row > .sidebar",
];

function equalise_columns() {
	if (isMobileLayout()) {
        // clear any previously configured heights so that browser resizing works...
        $.each(equalHeightSelectors, function (key, value) {
            $(value).css("min-height", "");
        });

    } else {
        $.each(equalHeightSelectors, function (key, value) {
            $(value).syncHeight();
        });
    }
}

// use $(window).load instead of $(document).ready to wait until all images have been loaded.
// Otherwise common height may be calculated without taking all images into account
$(window).load(function () {
    equalise_columns();
});

$(window).resize(function () {
    equalise_columns();
});

