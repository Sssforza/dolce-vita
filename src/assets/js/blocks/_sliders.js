let xs = 376
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
	if (slickSpecialist.length && document.documentElement.clientWidth > xs) {
		slickSpecialist.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			speed: 900,
			draggable: false,
			infinite: true,
			variableWidth: true,
			arrows: true,
			appendArrows: '.specialistSlider_js .slideArrows',
			prevArrow: '<div class="slideArrows__prev"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
			nextArrow: '<div class="slideArrows__next"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
		});
    }
};

// serviceStageSlider
export function serviceStageSlider () {
    const slickStage = $(".serviceStageSlider_js");
	if (slickStage.length) {
		var currentSlide;
		var slidesCount;
		var sliderCounter = document.createElement('div');
		sliderCounter.classList.add('serviceStage__counter');

		var updateSliderCounter = function(slick, currentIndex) {
			currentSlide = slick.slickCurrentSlide() + 1;
			slidesCount = slick.slideCount;
			$(sliderCounter).text(currentSlide + ' из ' +slidesCount)
		};

		slickStage.on('init', function(event, slick) {
			slickStage.append(sliderCounter);
			updateSliderCounter(slick);
		});

		slickStage.on('afterChange', function(event, slick, currentSlide) {
			updateSliderCounter(slick, currentSlide);
		});
		slickStage.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			speed: 900,
			draggable: false,
			arrows: true,
			appendArrows: '.serviceStage .slideArrows',
			prevArrow: '<div class="slideArrows__prev"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
			nextArrow: '<div class="slideArrows__next"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
		});
    }
};

// procedureSlider
export function procedureSlider () {
    const slickProcedure = $(".serviceProcedureSlider_js");
	if (slickProcedure.length && document.documentElement.clientWidth > xs) {
		slickProcedure.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			speed: 900,
			draggable: false,
			infinite: true,
			variableWidth: true,
			arrows: true,
			appendArrows: '.serviceProcedure .slideArrows',
			prevArrow: '<div class="slideArrows__prev"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
			nextArrow: '<div class="slideArrows__next"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
		});
    }
};

// cosmeticsSlider
export function cosmeticsSlider () {
    const slickCosmetics = $(".serviceCosmeticsSlider_js");
	if (slickCosmetics.length && document.documentElement.clientWidth > xs) {
		slickCosmetics.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			speed: 900,
			draggable: false,
			infinite: true,
			variableWidth: true,
			arrows: true,
			appendArrows: '.serviceCosmetics .slideArrows',
			prevArrow: '<div class="slideArrows__prev"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
			nextArrow: '<div class="slideArrows__next"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
		});
    }
};

// serviceResultPhotoSlider
export function serviceResultPhotoSlider () {
    const slickSpecialist = $(".serviceResultPhoto_js");
	if (slickSpecialist.length && document.documentElement.clientWidth > xs) {
		slickSpecialist.slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			speed: 900,
			draggable: false,
			infinite: true,
			variableWidth: true,
			arrows: true,
			appendArrows: '.serviceResultPhoto .slideArrows',
			prevArrow: '<div class="slideArrows__prev"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
			nextArrow: '<div class="slideArrows__next"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
		});
    }
};

// serviceProfessionalsSlider
export function serviceProfessionalsSlider () {
    const slickProfessional = $(".serviceProfessionals__list");
	if (slickProfessional.length && document.documentElement.clientWidth <= xs) {
		slickProfessional.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			speed: 900,
			draggable: false,
			infinite: false,
			arrows: true,
			appendArrows: '.serviceProfessionals .slideArrows',
			prevArrow: '<div class="slideArrows__prev"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
			nextArrow: '<div class="slideArrows__next"><svg width="81" height="30" viewBox="0 0 81 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.761719 14.9231H78.9993" stroke="#171719" stroke-width="2"/><path d="M65.0615 0.983398L79.0005 14.9224L65.0615 28.8613" stroke="#171719" stroke-width="2"/></svg></svg></div>',
		});
    }
};