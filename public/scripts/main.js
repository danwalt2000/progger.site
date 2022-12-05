function toggleOverFlowHiddenMobileMenu() {
	var checked = $('#mobileNavToggle').is(":checked");
	if (checked == 0) {
		$('.index.home > a').removeClass('fade');
		$('body').addClass('overflow-hidden');
	} else {
		$('.index.home > a').addClass('fade');
		$('body').removeClass('overflow-hidden');
	}
}
$(document).ready(function () {
	$(".scrollIndicator").click(function () {
		$('html, body').animate({
			scrollTop: $(".page-content").offset().top
		}, 1600);
	});
	$("#mobileNavBars").click(function () {
		toggleOverFlowHiddenMobileMenu();
	});
	$(".icon-10").hover(function () {
		$(".icon-15,.icon-17,.icon-26, .icon-27, .icon-28").css("fill", "#585656");
	}, function () {
		$(".icon-15,.icon-17,.icon-26, .icon-27, .icon-28").css("fill", "#fff");
	});
	$(".icon-15").hover(function () {
		$(".icon-10,.icon-17,.icon-26, .icon-27, .icon-28").css("fill", "#585656");
	}, function () {
		$(".icon-10,.icon-17,.icon-26, .icon-27, .icon-28").css("fill", "#fff");
	});
	$(".icon-17").hover(function () {
		$(".icon-10,.icon-15,.icon-26, .icon-27, .icon-28").css("fill", "#585656");
	}, function () {
		$(".icon-10,.icon-15,.icon-26, .icon-27, .icon-28").css("fill", "#fff");
	});
	$(".icon-26").hover(function () {
		$(".icon-10,.icon-15,.icon-17, .icon-27, .icon-28").css("fill", "#585656");
	}, function () {
		$(".icon-10,.icon-15,.icon-17, .icon-27, .icon-28").css("fill", "#fff");
	});
	$(".icon-27").hover(function () {
		$(".icon-10,.icon-15,.icon-17, .icon-26, .icon-28").css("fill", "#585656");
	}, function () {
		$(".icon-10,.icon-15,.icon-17,.icon-26, .icon-28").css("fill", "#fff");
	});
	$(".icon-28").hover(function () {
		$(".icon-10,.icon-15,.icon-17, .icon-26, .icon-27").css("fill", "#585656");
	}, function () {
		$(".icon-10,.icon-15,.icon-17, .icon-26, .icon-27").css("fill", "#fff");
	});
	$("#moreSkillsButton").click(function(){
	      $("#circleRow2").removeClass("hidden");
	      $("#moreSkillsButton").hide();
	});
});