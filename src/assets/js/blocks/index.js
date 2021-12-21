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