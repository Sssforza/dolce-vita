// popup youtube
export function popupYoutube () {
    const popupYoutube = $(".popupYoutube_js");
	if(document.querySelector('.popupYoutube_js')) {
		$('.popupYoutube_js').magnificPopup({
			type: 'iframe',
			tClose: 'Закрыть (Esc)',
			tLoading: 'Загрузка...',
		});
    }
};

// popup slider info
export function popupsliderInfo () {
	if(document.querySelector('.sliderInfoBtn_js')) {
		$('.sliderInfoBtn_js').magnificPopup({
			type: 'inline',
			tClose: 'Закрыть (Esc)',
			tLoading: 'Загрузка...',
		});
		$(document).on('click', '.popupClose_js', function (e) {
			e.preventDefault();
			$.magnificPopup.close();
		});
    }
};