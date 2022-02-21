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
	if(document.querySelector('.serviceAside') && document.documentElement.clientWidth > 376) {
        var serviceAside = $(".serviceAside");
		var serviceAsideTop = serviceAside.offset().top;
		var serviceAsideHeight = serviceAside.outerHeight();
		var headerHeight = $(".header").outerHeight();
		var serviceHeight = $(".service").outerHeight();
		var firstSectionHeight = $(".firstSection_js").outerHeight();
		var page = document.querySelector(".page");
		var paddingPage = getComputedStyle(page).paddingBottom.replace(/[\D]+/g, '');
        var top;
        if (document.documentElement.clientWidth <= 1024) {
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