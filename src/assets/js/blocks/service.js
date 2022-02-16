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