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
import {specialistHover, blogArticlesHover, showReviews} from "./blocks/index.js";

//📁 /assets/js/blocks  _header.js
import {dropLastHeader} from "./blocks/_header.js";

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

    // drop last header
    dropLastHeader();
});