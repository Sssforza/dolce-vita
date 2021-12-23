// specialist hover
export function specialistHover () {
    if(document.querySelector('.specialistHover_js')) {
        const list = document.querySelector('.specialist__list');
        const hoversElem = list.querySelectorAll('.specialistHover_js');
        let parent;
        hoversElem.forEach((item) => {
            item.onmouseover = function(elem) {
                parent = item.closest('.specialist__item');
                parent.classList.add('hover');
            };
            item.onmouseout = function(elem) {
                parent = item.closest('.specialist__item');
                parent.classList.remove('hover');
                parent.classList.remove('active');
            };
            item.onmousedown = function(elem) {
                parent = item.closest('.specialist__item');
                parent.classList.add('active');
            };
        });
    }
}
// show reviews
export function showReviews () {
    if (document.querySelector('.reviewsWhole_js')) {
        const wrapper = document.querySelector('.reviewsList_js');
        let whole = wrapper.querySelectorAll('.reviewsWhole_js');
        let parent;
        let text;
        whole.forEach((item) => {
            item.addEventListener("click", (e) => {
                parent = item.closest('.reviews__item');
                text = item.querySelector('.reviewsWhole_js span');
                if(parent.classList.contains('show')) {
                    parent.classList.remove('show');
                    text.innerHTML = 'Весь отзыв';
                } else {
                    parent.classList.add('show');
                    text.innerHTML = 'Скрыть';
                }
            });
        });
    }
}
// blogArticles hover
export function blogArticlesHover () {
    if(document.querySelector('.blogArticles_js')) {
        const list = document.querySelector('.blogArticles__list');
        const hoversElem = list.querySelectorAll('.blogArticles_js');
        let parent;
        hoversElem.forEach((item) => {
            item.onmouseover = function(elem) {
                parent = item.closest('.blogArticles__item');
                parent.classList.add('hover');
            };
            item.onmouseout = function(elem) {
                parent = item.closest('.blogArticles__item');
                parent.classList.remove('hover');
                parent.classList.remove('active');
            };
            item.onmousedown = function(elem) {
                parent = item.closest('.blogArticles__item');
                parent.classList.add('active');
            };
        });
    }
}
// anim scroll more dolce pictures
export function animScrollMoreDolce () {
    if(document.querySelector('.moreDolce_js')) {
        var element = $(".moreDolce__pictures");
        var elementAdd = $(".moreDolce_js");
		var height_el = element.offset().top;
		var element_stop = $(".aboutDolce_js");
		var height_el_stop = element_stop.offset().top;
		var height_header = $('.header_main').height();
        var elementMargin = document.querySelector('.aboutDolce_js');
        var elementPadding = document.querySelector('.moreDolce__content');
        var margin = getComputedStyle(elementMargin).marginTop.replace(/[\D]+/g, '');
        var padding = getComputedStyle(elementPadding).paddingRight.replace(/[\D]+/g, '');
		$(".moreDolce_js").css({
			"width": element.outerWidth(),
			"height": element.outerHeight()
		});
		$(window).scroll(function() {
			if($(window).scrollTop() > height_el_stop - elementAdd.outerHeight() - height_header - margin) {
				elementAdd.css({
					"top": elementAdd.offset().top,
                    "right": padding + 'px',
				}).removeClass("fixed").addClass("absolute");
			} else {
				if($(window).scrollTop() > height_el) {
					elementAdd.addClass("fixed").removeClass("absolute").css({
                        "top": height_header,
                        "right": padding + 'px',
                    });
				} else {
					elementAdd.removeClass("fixed absolute").attr("style", "");
				}
			}
		});
    }
}