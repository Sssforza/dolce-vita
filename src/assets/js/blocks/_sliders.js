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
