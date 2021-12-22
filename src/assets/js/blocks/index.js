// specialist hover
export function specialistHover () {
    if(document.querySelector('.specialistHover_js')) {
        const list = document.querySelector('.specialist__list ');
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