$(document).ready(function(){
document.querySelector("#menu_bar").onclick = function () {
	var element = document.querySelector(".leftMenu");
	element.classList.toggle("openMenu");
	
	var closeAccordion = document.getElementsByClassName('dropdown');
	var i = 0;
	for (i = 0; i < closeAccordion.length; i++) {
	closeAccordion[i].classList.remove('active');
	}
	}
	
	var dropdown = document.getElementsByClassName('dropdown');
	var i = 0;
	for (i = 0; i < dropdown.length; i++) {
	dropdown[i].onclick = function () {
	this.classList.toggle('active');
	}
	}
	
	$("#menu_bar").click(function(){
	$(".main-header span:first").toggleClass("first border");
	$(".content-wrapper").toggleClass("content-wrapper-mid");
	$(".tooltip_nav p").toggleClass("hide");                   
	});

	
jQuery(function($)
{
    $("#settings_bar").click(function()
    {
        $(".navigation").toggleClass("open");
    })
});

$("#color01").click(function(){
	$("body").addClass("skin-green")
});

});	

$(document).ready(function(){
$(".user-profile").on("click", function(e) {
	$(".profile-hover").toggle();
	$(".popup-overlay").toggle();
	e.preventDefault();
	});

	$(".popup-overlay").click(function(){
	$(".popup-overlay").toggle();
	$(".profile-hover").toggle();
	});

	$(".notification-icon").on("click", function(e) {
	$(".notification-hover").toggle();
	$(".popup-overlay-bell").toggle();
	e.preventDefault();
	});

	$(".popup-overlay-bell").click(function(){
	$(".popup-overlay-bell").toggle();
	$(".notification-hover").toggle();
	});
});	
