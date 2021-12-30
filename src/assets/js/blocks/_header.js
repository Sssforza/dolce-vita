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
                    document.body.classList.remove('openServicesMenu');
                } else {
                    item.classList.add('active');
                    document.body.classList.add('overflowHidden');
                    document.body.classList.add('openServicesMenu');
                }
            });
        });
    }
}
