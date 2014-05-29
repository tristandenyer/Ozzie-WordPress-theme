$(document).ready(function($) {
	$(".featured-backstretch").height($(window).height()*.7);
});

$(window).resize(function(){
    $(".featured-backstretch").height($(window).height()*.7);
});