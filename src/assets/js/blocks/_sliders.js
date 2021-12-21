// mainSlider
export function mainSlider () {
    const slickMain = $(".mainSlider_js");

	if (slickMain.length) {
		slickMain.slick({
			fade: true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 9500,
			speed: 1000,
			pauseOnFocus: false,
			pauseOnHover: false,
			pauseOnDotsHover: false,
			slickPause: false,
			slidesToShow: 1,
			cssEase: 'ease',
			arrows: false,
			dots: true,
		});
    }
};

// specialistSlider
export function specialistSlider () {
    const slickSpecialist = $(".specialistSlider_js");

	if (slickSpecialist.length) {
		slickSpecialist.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			speed: 900,
			draggable: false,
			infinite: true,
			variableWidth: true,
			arrows: true,
			appendArrows: '.specialist__arrows',
			prevArrow: '<div class="specialist__prev"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
			nextArrow: '<div class="specialist__next"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
		});
    }
};
