//📁 /node_modules/  jquery 3.5.1
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import 'slick-carousel';

//📁 /node_modules/  magnific-popup 1.1.0
import 'magnific-popup';

//📁 /assets/js/blocks  _sliders.js
import {mainSlider} from "./blocks/_sliders.js";

document.addEventListener("DOMContentLoaded", function () {
    // slider main page
    mainSlider();
});