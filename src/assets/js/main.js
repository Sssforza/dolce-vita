//📁 /node_modules/  jquery 3.5.1
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import 'slick-carousel';

//📁 /node_modules/  magnific-popup 1.1.0
import 'magnific-popup';

//📁 /assets/js/blocks  _sliders.js
import {mainSlider, specialistSlider} from "./blocks/_sliders.js";

//📁 /assets/js/blocks  index.js
import {specialistHover, blogArticlesHover, showReviews, animMainDolce1, animMainDolce2, animMainDolce3, animationForText, firstAnimation} from "./blocks/index.js";

//📁 /assets/js/blocks  _header.js
import {dropLastHeader, openCloseHamburger} from "./blocks/_header.js";

//📁 /assets/js/blocks  validation.js
import {signConsultation} from "./blocks/validations.js";

document.addEventListener("DOMContentLoaded", function () {
    // slider main
    mainSlider();

    // slider specialist
    specialistSlider();

    // specialist hover
    specialistHover();

    // blogArticlesHover hover
    blogArticlesHover();

    // show reviews
    showReviews();

    // anim scroll main dolce pictures 1
    animMainDolce1();

    // anim scroll main dolce pictures 2
    animMainDolce2();

    // anim scroll main dolce pictures 3
    animMainDolce3();

    // animation for text
    animationForText();

    // drop last header
    dropLastHeader();

    // open/close hamburger
    openCloseHamburger();

    // first animation main page
    firstAnimation();

    // form in the main page
    signConsultation();
});