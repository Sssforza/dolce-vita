// drop last header
export function dropLastHeader () {
    if(document.querySelector('.header_main')) {
        const header = document.querySelector('.header_main');
        const headerHeight = document.querySelector('.header_main').offsetHeight;
        const emergence = document.querySelector('.firstSection_js').offsetHeight;
        window.addEventListener('scroll', function() {
            if(pageYOffset > (emergence - headerHeight)) {
                header.classList.remove('hide');
            } else {
                header.classList.add('hide');
            }
        });
    }
}

// open/close hamburger
export function openCloseHamburger () {
    if(document.querySelector('.hamburger_js')) {
        let hamburger = document.querySelectorAll('.hamburger_js');
        hamburger.forEach((item) => {
            item.addEventListener("click", (e) => {
                if(item.classList.contains('active')) {
                    hamburger.forEach((i) => {
                        i.classList.remove('active');
                    });
                    document.body.classList.remove('overflowHidden');
                    document.body.classList.remove('openHeaderMenu');
                } else {
                    item.classList.add('active');
                    document.body.classList.add('overflowHidden');
                    document.body.classList.add('openHeaderMenu');
                }
            });
        });
    }
}

// header menu selection
export function menuSelection () {
    if(document.querySelector('.menuMain_js')) {
        let wrapper = document.querySelector('.headerMenu_js');
        let menuMain = wrapper.querySelectorAll('.menuMain_js');
        let menuMiddle = wrapper.querySelectorAll('.menuMiddle_js');
        let menuMiddleDetail = wrapper.querySelectorAll('.menuMiddleDetail_js');
        let menuInterim = wrapper.querySelectorAll('.menuInterim_js');
        let menuInterimDetail = wrapper.querySelectorAll('.menuInterimDetail_js');
        let menuProcedures = wrapper.querySelectorAll('.menuProcedures_js');

        let mainActive;
        let middleDetailActive;
        let interimDetailActive;

        var removeActive = function () {
            menuMiddle.forEach((i) => {
                i.classList.remove('active');
            });
            menuMiddleDetail.forEach((i) => {
                i.classList.remove('active');
            });
            menuInterim.forEach((i) => {
                i.classList.remove('active');
            });
            menuInterimDetail.forEach((i) => {
                i.classList.remove('active');
            });
        }
        var addHidden = function () {
            menuMiddle.forEach((elem) => {
                elem.classList.add('hidden');
            });
            menuInterim.forEach((elem) => {
                elem.classList.add('hidden');
            });
            menuProcedures.forEach((elem) => {
                elem.classList.add('hidden');
            });
        }

        var menuInterimForEach = function () {
            menuInterim.forEach((elem) => {
                if (elem.hasAttribute('data-menuInterim') === middleDetailActive){
                    console.log('da')
                } else {
                    console.log('not')
                }
                if (elem.getAttribute('data-menuInterim') === middleDetailActive) {     //нашла по menuMiddleDetail menuInterim
                    elem.classList.remove('hidden');
                    let neededInterimDetail = elem.querySelectorAll('.menuInterimDetail_js');     //взяла нужные menuInterimDetail
                    neededInterimDetail[0].classList.add('active');     //первому menuInterimDetail add active
                    interimDetailActive = neededInterimDetail[0].getAttribute('data-menuInterimDetail');     //взяла аттр первого menuInterimDetail
                }
            });
        }
        var menuProceduresForEach = function () {
            menuProcedures.forEach((elem) => {
                if (elem.getAttribute('data-menuProcedures') === interimDetailActive) {
                    elem.classList.remove('hidden');
                }
            });
        }

        menuMain.forEach((item) => {
            item.addEventListener("click", (e) => {
                mainActive = item.getAttribute('data-menuMain');    //нашла menuMain
                console.log('mainActive ' + mainActive)
                menuMain.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                removeActive();
                addHidden();

                menuMiddle.forEach((elem) => {
                    if (elem.getAttribute('data-menuMiddle') === mainActive) {     //нашла по menuMain menuMiddle
                        elem.classList.remove('hidden');
                        let neededMiddleDetail = elem.querySelectorAll('.menuMiddleDetail_js');     //взяла нужные menuMiddleDetail
                        neededMiddleDetail[0].classList.add('active');     //первому menuMiddleDetail add active
                        middleDetailActive = neededMiddleDetail[0].getAttribute('data-menuMiddleDetail');     //взяла аттр первого menuMiddleDetail
                    }
                });
                menuInterimForEach();
                menuProceduresForEach();
            });
        });

        menuMiddleDetail.forEach((item) => {
            item.addEventListener("click", (e) => {
                middleDetailActive = item.getAttribute('data-menuMiddleDetail');    //нашла menuMiddleDetail
                console.log('middleDetailActive ' + middleDetailActive)

                menuMiddleDetail.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                menuInterimDetail.forEach((i) => {
                    i.classList.remove('active');
                });
                menuInterim.forEach((elem) => {
                    elem.classList.add('hidden');
                });
                menuProcedures.forEach((elem) => {
                    elem.classList.add('hidden');
                });

                menuInterimForEach();
                menuProceduresForEach();
            });
        });

        menuInterimDetail.forEach((item) => {
            item.addEventListener("click", (e) => {
                interimDetailActive = item.getAttribute('data-menuInterimDetail');    //нашла menuInterimDetail
                console.log('menuInterimDetail ' + interimDetailActive)

                menuInterimDetail.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');

                menuProcedures.forEach((elem) => {
                    elem.classList.add('hidden');
                });

                menuProceduresForEach();
            });
        });
    }
}