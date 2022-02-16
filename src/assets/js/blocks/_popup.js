// popup youtube
export function popupYoutube () {
    const popupYoutube = $(".popupYoutube_js");
	// if (popupYoutube.length) {
	// 	$('.popupYoutube_js').magnificPopup({
	// 		disableOn: 700,
	// 		type: 'iframe',
	// 		mainClass: 'mfp-youtube',
	// 		removalDelay: 160,
	// 		preloader: false,
	// 		fixedContentPos: false
	// 	});
    // }
	if(document.querySelector('.popupYoutube_js')) {
		$('.popupYoutube_js').magnificPopup({
			type: 'iframe',
			tClose: 'Закрыть (Esc)',
			tLoading: 'Загрузка...',
		});
    }
};