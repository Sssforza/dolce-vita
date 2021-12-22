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
