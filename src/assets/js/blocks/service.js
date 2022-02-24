let lg = 1024
let xs = 376

// first screen depiction clue hover
export function firstScreenDepictionClueHover () {
    if(document.querySelector('.firstScreenDepictionClue_js')) {
        const list = document.querySelector('.firstScreenDepiction');
        const hoversElem = list.querySelector('.firstScreenDepictionClue_js svg');
        let parent;

        hoversElem.onmouseover = function(elem) {
            parent = hoversElem.closest('.firstScreenDepiction__item');
            parent.classList.add('hover');
        };
        hoversElem.onmouseout = function(elem) {
            parent = hoversElem.closest('.firstScreenDepiction__item');
            parent.classList.remove('hover');
        };
    }
}

// procedure hover
export function procedureHover () {
    if(document.querySelector('.serviceProcedureHover_js')) {
        const list = document.querySelector('.serviceProcedureSlider_js');
        const hoversElem = list.querySelectorAll('.serviceProcedureHover_js');
        let parent;
        hoversElem.forEach((item) => {
            item.onmouseover = function(elem) {
                parent = item.closest('.serviceProcedure__item');
                parent.classList.add('hover');
            };
            item.onmouseout = function(elem) {
                parent = item.closest('.serviceProcedure__item');
                parent.classList.remove('hover');
                parent.classList.remove('active');
            };
            item.onmousedown = function(elem) {
                parent = item.closest('.serviceProcedure__item');
                parent.classList.add('active');
            };
        });
    }
}

// service anchor links
export function serviceAnchor () {
    if(document.querySelector('.serviceAnchor_js')) {
        const anchors = document.querySelectorAll('.serviceAnchor_js')

        for (let anchor of anchors) {
            anchor.addEventListener('click', function (e) {
                e.preventDefault()

                const blockID = anchor.getAttribute('href')

                document.querySelector(blockID).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                })
            })
        }
    }
}

// service benefits hover
export function benefitsHover () {
    if(document.querySelector('.serviceBenefitsHover_js')) {
        const list = document.querySelector('.serviceBenefitsList_js');
        const hoversElem = list.querySelectorAll('.serviceBenefitsHover_js');
        let parent;
        hoversElem.forEach((item) => {
            item.onmouseover = function(elem) {
                parent = item.closest('.serviceBenefits__item');
                parent.classList.add('hover');
            };
            item.onmouseout = function(elem) {
                parent = item.closest('.serviceBenefits__item');
                parent.classList.remove('hover');
                parent.classList.remove('active');
            };
            item.onmousedown = function(elem) {
                parent = item.closest('.serviceBenefits__item');
                parent.classList.add('active');
            };
        });
    }
}

// service testimony dies
export function serviceTestimony () {
    if(document.querySelector('.serviceTestimonyRoster_js')) {
		$('.serviceTestimonyRoster_js .serviceTestimonyHeader_js').on('click', serviceTestimonyDies);
		function serviceTestimonyDies(){
			$('.serviceTestimonyRoster_js .serviceTestimonyHeader_js').not($(this)).removeClass('show');
			if($(this).hasClass('show')) {
				$(this).removeClass('show');
			} else {
				$(this).addClass('show');
			}
			$('.serviceTestimonyRoster_js .serviceTestimonyList_js').not($(this).next()).slideUp(500);
			$(this).next().slideToggle(500);
		}
	}
}

// service fixed aside bar
export function serviceFixedAsideBar () {
	if(document.querySelector('.serviceAside') && document.documentElement.clientWidth > xs) {
        var serviceAside = $(".serviceAside");
		var serviceAsideTop = serviceAside.offset().top;
		var serviceAsideHeight = serviceAside.outerHeight();
		var headerHeight = $(".header").outerHeight();
		var serviceHeight = $(".service").outerHeight();
		var firstSectionHeight = $(".firstSection_js").outerHeight();
		var page = document.querySelector(".page");
		var paddingPage = getComputedStyle(page).paddingBottom.replace(/[\D]+/g, '');
        var top;
        if (document.documentElement.clientWidth <= lg) {
            var serviceAsideDopCount = $(".serviceAside__anchor span").length;
            var serviceAsideDopHeight = $(".serviceAside__anchor span").outerHeight();
            var serviceAsideDop = serviceAsideDopCount * serviceAsideDopHeight;
            serviceAsideHeight = serviceAside.outerHeight() + serviceAsideDop;
        }
		$(window).scroll(function() {
			if($(window).scrollTop() > serviceAsideTop - headerHeight) {
				serviceAside.addClass("fixed");
			} else {
				serviceAside.removeClass("fixed");
			}
            if($(window).scrollTop() > serviceHeight + firstSectionHeight - headerHeight - paddingPage) {
                serviceAside.removeClass("fixed");
                $(".serviceAside").css({
                    "top": serviceHeight - serviceAsideHeight
                });
			} else {
                $('.serviceAside').attr('style', '');
            }
		});
    }
};

// show stage description
export function serviceStageMore () {
    if (document.querySelector('.serviceStageMore_js')) {
        const wrapper = document.querySelector('.serviceStageSlider_js');
        let whole = wrapper.querySelectorAll('.serviceStageMore_js');
        let parent;
        let text;
        let textHeight;
        whole.forEach((item) => {
            item.addEventListener("click", (e) => {
                parent = item.closest('.serviceStage__item');
                text = item.querySelector('.serviceStageMore_js span');
                if(parent.classList.contains('show')) {
                    parent.querySelector('.serviceStage__description').setAttribute("style", "");
                    parent.classList.remove('show');
                    text.innerHTML = 'Читать далее';
                } else {
                    textHeight = parent.querySelector('.serviceStage__description').scrollHeight;
                    parent.querySelector('.serviceStage__description').style.maxHeight = `${textHeight}px`;
                    parent.classList.add('show');
                    text.innerHTML = 'Скрыть';
                }
            });
        });
    }
}

// custom slider service stage
export function sliderServiceStage () {
    if (document.querySelector('.serviceStage_js')) {
        let serviceStage = document.querySelector('.serviceStage_js');
        let arrowsParent = serviceStage.querySelector('.serviceStage__arrows');
        let arrowPrev = serviceStage.querySelectorAll('.serviceStage__arrow_prev');
        let arrowsNext = serviceStage.querySelectorAll('.serviceStage__arrow_next');
        let amount = serviceStage.querySelectorAll('.serviceStage__item').length;
        let list = serviceStage.querySelector('.serviceStageSlider_js');
        let counterLeft = serviceStage.querySelector('.serviceStage__counter_left');
        let counterRight = serviceStage.querySelector('.serviceStage__counter_right');
        let child
        let count = 1;
        let childCount;
        let shift = 0;
        counterRight.innerHTML = amount;

        function hideDescription(){
			const wrapper = document.querySelector('.serviceStageSlider_js');
            let whole = wrapper.querySelectorAll('.serviceStageMore_js span');
            let items = wrapper.querySelectorAll('.serviceStage__item');
            let descriptions = wrapper.querySelectorAll('.serviceStage__description');
            items.forEach((item) => {
                item.classList.remove('show');
            });
            whole.forEach((item) => {
                item.innerHTML = 'Читать далее';
            });
            descriptions.forEach((item) => {
                item.setAttribute("style", "");
            });
		}

        arrowPrev.forEach((item) => {
            item.addEventListener("click", () => {
                child = serviceStage.querySelectorAll('.serviceStage__item');
                arrowsNext.forEach((item) => {
                    item.classList.remove('disabled');
                });
                count = count - 1;
                counterLeft.innerHTML = count;
                childCount = count - 1;
                child.forEach((item) => {
                    item.classList.add('hide');
                });
                child[childCount].classList.remove('hide');
                shift = shift + xs;
                list.style.transform = `translateX(${shift}px)`;
                if (count === 1) {
                    arrowPrev.forEach((item) => {
                        item.classList.add('disabled');
                    });
                }
                hideDescription();
            });
        });
        arrowsNext.forEach((item) => {
            item.addEventListener("click", () => {
                child = serviceStage.querySelectorAll('.serviceStage__item');
                arrowPrev.forEach((item) => {
                    item.classList.remove('disabled');
                });
                count = count + 1;
                counterLeft.innerHTML = count;
                childCount = count - 1;
                child.forEach((item) => {
                    item.classList.add('hide');
                });
                child[childCount].classList.remove('hide');
                shift = shift - xs;
                list.style.transform = `translateX(${shift}px)`;
                if (count === amount) {
                    arrowsNext.forEach((item) => {
                        item.classList.add('disabled');
                    });
                }
                hideDescription();
            });
        });
    }
}