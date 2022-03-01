import { contains } from "jquery";

let lg = 1024
let xs = 376

// first screen depiction clue hover
export function firstScreenDepictionClueHover () {
    if(document.querySelector('.firstScreenDepictionClue_js')) {
        let list = document.querySelector('.firstScreenDepiction');
        let hoversElem = list.querySelector('.firstScreenDepictionClue_js svg');
        let close = list.querySelector('.firstScreenDepiction__close');
        let parent;

        if (document.documentElement.clientWidth > xs) {
            hoversElem.onmouseover = function(elem) {
                parent = hoversElem.closest('.firstScreenDepiction__item');
                parent.classList.add('hover');
            };
            hoversElem.onmouseout = function(elem) {
                parent = hoversElem.closest('.firstScreenDepiction__item');
                parent.classList.remove('hover');
            };
        }
        if (document.documentElement.clientWidth <= xs) {
            hoversElem.addEventListener('click', function (e) {
                parent = hoversElem.closest('.firstScreenDepiction__item');
                parent.classList.add('hover');
                document.body.classList.add('overflowHidden');
            });
            close.addEventListener('click', function (e) {
                parent = close.closest('.firstScreenDepiction__item');
                parent.classList.remove('hover');
                document.body.classList.remove('overflowHidden');
            });

        }
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

// seviceHidden
export function seviceHidden () {
    if (document.querySelector(".seviceHidden")) {
        var seviceHidden = document.querySelector(".seviceHidden");
        var headerFirst = document.querySelector(".header_first");
        var headerMain = document.querySelector(".header_main");
        headerFirst.classList.add('header_first_sevice');
        headerMain.classList.add('header_main_sevice');
        if (document.documentElement.clientWidth <= xs ) {
            headerFirst.style.position = `absolute`;
        }
    }
}

// sevice header menu
export function serviceHeaderMenu () {
    if (document.querySelector(".serviceHeaderMenuSelected_js")) {
        var wrapper = document.querySelector(".serviceHeader__dt");
        if (document.documentElement.clientWidth <= xs) {
            wrapper = document.querySelector(".serviceHeader__drop");
        }
        var serviceHeaderMenu = wrapper.querySelector(".serviceHeaderMenu");
        var serviceHeaderMenuSelected = wrapper.querySelector(".serviceHeaderMenuSelected_js");
        var serviceHeaderMenuSpan = wrapper.querySelector(".serviceHeaderMenuSelected_js span");
        var toggleMenu = function() {
            serviceHeaderMenu.classList.toggle('show');
        }
        serviceHeaderMenuSelected.addEventListener('click', function(e) {
            toggleMenu();
        });
        document.addEventListener('click', function(e) {
            const target = e.target;
            const its_serviceHeaderMenuSelected = target == serviceHeaderMenuSelected;
            const its_serviceHeaderMenuSpan = target == serviceHeaderMenuSpan;
            const menu_is_active = serviceHeaderMenu.classList.contains('show');
            if (!its_serviceHeaderMenuSelected && !its_serviceHeaderMenuSpan && menu_is_active) {
                toggleMenu();
            }
        });
    }
}

// sevice header menu selection
export function serviceHeaderMenuSelection () {
    if (document.querySelector(".serviceHeaderMenuBox_js")) {
        var wrapper = document.querySelector(".serviceHeader__dt");
        if (document.documentElement.clientWidth <= xs) {
            wrapper = document.querySelector(".serviceHeader__drop");
        }
        var menuSelected = wrapper.querySelector(".serviceHeaderMenuSelected_js span");
        var menuBox = document.querySelector('.serviceHeader__box');
        var menuItems = wrapper.querySelectorAll('.serviceHeaderMenuLi_js');
        var menuItemsSpan;
        var headerSeance = wrapper.querySelector('.serviceHeader__seance_sitting');
        var headerTime = wrapper.querySelector('.serviceHeader__seance_time');
        var dataSeance= '';
        var dataTime= '';
        var dataCost= '';
        var dataCostIndividually= '';
        var dataCostDiscount= '';
        var dataCostBefore= '';
        var dataCostAfter= '';
        menuItems.forEach((item) => {
            item.addEventListener("click", () => {
                menuItems.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                menuItemsSpan = item.querySelector('.serviceHeaderMenu__name').innerHTML;
                menuSelected.innerHTML = menuItemsSpan;
                if (item.hasAttribute('data-seance') === true) {
                    dataSeance = item.getAttribute('data-seance');
                    if (dataSeance != '') {
                        headerSeance.innerHTML = dataSeance;
                    }
                }
                if (item.hasAttribute('data-time') === true) {
                    dataTime = item.getAttribute('data-time');
                    if (dataTime != '') {
                        headerTime.innerHTML = dataTime;
                    }
                }
                if (item.hasAttribute('data-cost') === true) {
                    dataCost = item.getAttribute('data-cost');
                    if (dataCost != '') {
                        document.querySelector('.serviceHeader__cost').remove();
                        let divCost = document.createElement('div');
                        divCost.className = "serviceHeader__cost";
                        divCost.innerHTML = dataCost;
                        menuBox.append(divCost);
                    }
                }
                if (item.hasAttribute('data-individually') === true) {
                    dataCostIndividually = item.getAttribute('data-individually');
                    if (dataCostIndividually != '') {
                        document.querySelector('.serviceHeader__cost').remove();
                        let divCostIndividually = document.createElement('div');
                        divCostIndividually.className = "serviceHeader__cost serviceHeader__cost_individually";
                        divCostIndividually.innerHTML = "цена <br>индивидуальна";
                        menuBox.append(divCostIndividually);
                    }
                }
                if (item.hasAttribute('data-discount') === true) {
                    dataCostDiscount = item.getAttribute('data-discount');
                    dataCostBefore = item.getAttribute('data-before');
                    dataCostAfter = item.getAttribute('data-after');
                    if (dataCostBefore != '' && dataCostAfter != '') {
                        document.querySelector('.serviceHeader__cost').remove();

                        let divCostDiscount = document.createElement('div');
                        divCostDiscount.className = "serviceHeader__cost serviceHeader__cost_discount";

                        let divCostDiscountBefore = document.createElement('div');
                        divCostDiscountBefore.className = "serviceHeader__sale";

                        let divCostDiscountAfter = document.createElement('div');
                        divCostDiscountAfter.className = "serviceHeader__total";

                        divCostDiscountBefore.innerHTML = dataCostBefore;
                        divCostDiscountAfter.innerHTML = dataCostAfter;

                        menuBox.append(divCostDiscount);
                        divCostDiscount.append(divCostDiscountBefore);
                        divCostDiscount.append(divCostDiscountAfter);
                    }
                }
            });
        });
    }
}

// sevice header menu mobile
export function serviceHeaderMenuMobile () {
    if (document.querySelector(".serviceHeaderArrow_js") && document.documentElement.clientWidth <= xs) {
        var serviceHeader = document.querySelector(".serviceHeaderMenu_js");
        var serviceHeaderArrow = document.querySelectorAll(".serviceHeaderArrow_js");

        var toggleMenu = function() {
            parent.classList.toggle('open');
        }
        serviceHeaderArrow.forEach((item) => {
            item.addEventListener('click', function(e) {
                parent = item.closest('.serviceHeaderMenu_js');
                toggleMenu();
            });
        });
    }
}