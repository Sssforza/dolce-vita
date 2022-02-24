let xs = 376
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
        let textHeight;
        whole.forEach((item) => {
            item.addEventListener("click", (e) => {
                parent = item.closest('.reviews__item');
                text = item.querySelector('.reviewsWhole_js span');
                if(parent.classList.contains('show')) {
                    parent.querySelector('.reviewsRecall_js').setAttribute("style", "");
                    parent.classList.remove('show');
                    text.innerHTML = 'Весь отзыв';
                } else {
                    textHeight = parent.querySelector('.reviewsRecall_js').scrollHeight;
                    parent.querySelector('.reviewsRecall_js').style.maxHeight = `${textHeight}px`;
                    parent.classList.add('show');
                    text.innerHTML = 'Скрыть';
                }
            });
        });
    }
}
// guest card clue hover
export function guestCardClueHover () {
    if(document.querySelector('.guestCard_js')) {
        const list = document.querySelector('.guestCardList_js');
        const hoversElem = list.querySelectorAll('.guestCard_js');
        hoversElem.forEach((item) => {
            item.onmouseover = function(elem) {
                item.classList.add('hover');
            };
            item.onmouseout = function(elem) {
                item.classList.remove('hover');
            };
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
        if(document.documentElement.clientWidth <= xs) {
            clientHeight = document.documentElement.clientHeight;
        }
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
        let headerHeight = document.querySelector('.header_main').clientHeight;
        let clientRectTop;
        if(window.screen.availWidth <= xs) {
            clientHeight = document.documentElement.clientHeight;
        }
        window.addEventListener('scroll', function() {
            clientRectTop = dolceItem2.getBoundingClientRect().top;
            if(clientRectTop < clientHeight + headerHeight) {
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
        let headerHeight = document.querySelector('.header_main').clientHeight;
        let clientRectTop;
        if(window.screen.availWidth <= xs) {
            clientHeight = document.documentElement.clientHeight;
        }
        window.addEventListener('scroll', function() {
            clientRectTop = dolceItem3.getBoundingClientRect().top;
            if(clientRectTop < clientHeight + headerHeight) {
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
        if(window.screen.availWidth <= xs) {
            clientHeight = document.documentElement.clientHeight;
        }
        window.addEventListener('scroll', function() {
            clientRectTop = dolceAbout.getBoundingClientRect().top;
            if(clientRectTop < clientHeight + headerHeight) {
                dolceAbout.classList.add('show');
            }
        });
    }
}
// first animation main page
export function firstAnimation () {
    if(document.querySelector('.firstAnimation') && pageYOffset === 0) {
        // document.body.classList.add('overflowHidden');
        // document.body.classList.add('firstAnimation');
    }
}
// hide error form
export function hideErrorForm () {
    if (document.querySelector('.signMessageBtn_js')) {
        let signMessage = document.querySelector('.signMessageError_js');
        let btn = signMessage.querySelector('.signMessageBtn_js');
        btn.addEventListener("click", () => {
            signMessage.classList.remove('show');
        });
    }
}
// custom slider reviews
export function sliderReviews () {
    if (document.querySelector('.reviews_js')) {
        const wrapper = document.querySelector('.reviews_js');
        let list = wrapper.querySelector('.reviewsList_js');
        let arrows = wrapper.querySelectorAll('.reviews__arrow');
        let arrowLeft = wrapper.querySelector('.reviewsArrowLeft_js');
        let arrowRight = wrapper.querySelector('.reviewsArrowRight_js');
        let amount = wrapper.querySelectorAll('.reviews__item').length;
        let count = 1;
        let shift = 0;
        const wrapperWhole = document.querySelector('.reviewsList_js');
        let child
        let childCount;

        function hideRecall(){
            const wrapper = document.querySelector('.reviews_js');
            let whole = wrapper.querySelectorAll('.reviewsWhole_js span');
            let items = wrapper.querySelectorAll('.reviews__item');
            let descriptions = wrapper.querySelectorAll('.reviewsRecall_js');
            items.forEach((item) => {
                item.classList.remove('show');
            });
            whole.forEach((item) => {
                item.innerHTML = 'Весь отзыв';
            });
            descriptions.forEach((item) => {
                item.setAttribute("style", "");
            });
		}

        arrows.forEach((item) => {
            item.addEventListener("click", () => {
                child = wrapper.querySelectorAll('.reviews__item');
                if(item.classList.contains('reviews__arrow_right')) {
                    count = count + 1;

                    childCount = count - 1;
                    child.forEach((item) => {
                        item.classList.add('hide');
                    });
                    child[childCount].classList.remove('hide');

                    if(count != amount){
                        shift = shift - xs;
                        list.style.transform = `translateX(${shift}px)`;
                        arrowLeft.classList.remove('disabled');
                    }
                    if(count === amount){
                        shift = shift - xs;
                        list.style.transform = `translateX(${shift}px)`;
                        arrowRight.classList.add('disabled');
                    }
                } else {
                    count = count - 1;

                    childCount = count - 1;
                    child.forEach((item) => {
                        item.classList.add('hide');
                    });
                    child[childCount].classList.remove('hide');

                    if(count === 1){
                        shift = shift + xs;
                        list.style.transform = `translateX(${shift}px)`;
                        arrowLeft.classList.add('disabled');
                    } else {
                        shift = shift + xs;
                        list.style.transform = `translateX(${shift}px)`;
                        arrowRight.classList.remove('disabled');
                    }
                }
                hideRecall();
            });
        });
    }
}