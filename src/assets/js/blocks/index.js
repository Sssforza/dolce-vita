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
// anim scroll main dolce pictures 1
export function animMainDolce1 () {
    if(document.querySelector('.mainDolceItem1_js')) {
        const dolceItem1 = document.querySelector('.mainDolceItem1_js');
        let clientHeight = document.documentElement.clientHeight/2;
        let clientRectTop;
        window.addEventListener('scroll', function() {
            clientRectTop = dolceItem1.getBoundingClientRect().top;
            if(clientRectTop < clientHeight) {
                dolceItem1.classList.add('show');
            }
        });
    }
}
// anim scroll main dolce pictures 2
export function animMainDolce2 () {
    if(document.querySelector('.mainDolceItem2_js')) {
        const dolceItem2 = document.querySelector('.mainDolceItem2_js');
        let clientHeight = document.documentElement.clientHeight/2;
        let clientRectTop;
        window.addEventListener('scroll', function() {
            clientRectTop = dolceItem2.getBoundingClientRect().top;
            if(clientRectTop < clientHeight) {
                dolceItem2.classList.add('show');
            }
        });
    }
}
// anim scroll main dolce pictures 3
export function animMainDolce3 () {
    if(document.querySelector('.mainDolceItem3_js')) {
        const dolceItem3 = document.querySelector('.mainDolceItem3_js');
        let clientHeight = document.documentElement.clientHeight/2;
        let clientRectTop;
        window.addEventListener('scroll', function() {
            clientRectTop = dolceItem3.getBoundingClientRect().top;
            if(clientRectTop < clientHeight) {
                dolceItem3.classList.add('show');
            }
        });
    }
}
// animation for text
export function animationForText () {
    if(document.querySelector('.mainDolceAbout_js')) {
        const dolceAbout = document.querySelector('.mainDolceAbout_js');
        let clientHeight = document.documentElement.clientHeight/2;
        let headerHeight = document.querySelector('.header_main').clientHeight;
        let clientRectTop;
        window.addEventListener('scroll', function() {
            clientRectTop = dolceAbout.getBoundingClientRect().top;
            if(clientRectTop < clientHeight + headerHeight) {
                dolceAbout.classList.add('show');
            }
        });
    }
}