//📁 /node_modules/  jquery 3.5.1
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import 'slick-carousel';

//📁 /node_modules/  magnific-popup 1.1.0
import 'magnific-popup';

//📁 /assets/js/blocks  _hover
import {hover} from "./blocks/_hover.js";

//📁 /assets/js/blocks  _sliders.js
import {mainSlider, specialistSlider, serviceStageSlider, procedureSlider, cosmeticsSlider, serviceResultPhotoSlider, serviceProfessionalsSlider} from "./blocks/_sliders.js";

//📁 /assets/js/blocks  _popup.js
import {popupYoutube} from "./blocks/_popup.js";

//📁 /assets/js/blocks  index.js
import {specialistHover, guestCardClueHover, blogArticlesHover, showReviews, animMainDolce1, animMainDolce2, animMainDolce3, animationForText,
        firstAnimation, hideErrorForm, sliderReviews} from "./blocks/index.js";

//📁 /assets/js/blocks  service.js
import {firstScreenDepictionClueHover, procedureHover, serviceAnchor, benefitsHover, serviceTestimony, serviceFixedAsideBar,
        serviceStageMore, sliderServiceStage, seviceHidden, serviceHeaderMenu, serviceHeaderMenuSelection, serviceHeaderMenuMobile, asideBarActives} from "./blocks/service.js";

//📁 /assets/js/blocks  _header.js
import {dropLastHeader, openCloseHamburger, openCloseSearch, closeSearch, menuSelection, headerMenuBack,
        openContextClue, openCloseContactsMenu} from "./blocks/_header.js";

//📁 /assets/js/blocks  validation.js
import {signConsultation} from "./blocks/validations.js";

document.addEventListener("DOMContentLoaded", function () {
    // slider main
    mainSlider();

    // slider specialist
    specialistSlider();

    // service stage slider
    serviceStageSlider();

    // procedure slider
    procedureSlider();

    // cosmetics slider
    cosmeticsSlider();

    // result photo slider
    serviceResultPhotoSlider();

    // service professionals slider
    serviceProfessionalsSlider();

    // popup youtube
    popupYoutube();

    // specialist hover
    specialistHover();

    // guest card clue hover
    guestCardClueHover();

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

    // open/close search
    openCloseSearch();

    // clear search
    closeSearch();

    // header menu selection
    menuSelection();

    // header menu back
    headerMenuBack();

    // open context clue
    openContextClue();

    // open/close contacts menu
    openCloseContactsMenu();

    // first animation main page
    firstAnimation();

    // form in the main page
    signConsultation();

    // hide error form in the main page
    hideErrorForm();

    // custom slider reviews
    sliderReviews();

    // first screen depiction clue hover
    firstScreenDepictionClueHover();

    // procedure hover
    procedureHover();

    // service anchor links
    serviceAnchor();

    // service benefits hover
    benefitsHover();

    // service testimony dies
    serviceTestimony();

    // service fixed aside bar
    serviceFixedAsideBar();

    // show stage description
    serviceStageMore();

    // show stage description
    sliderServiceStage();

    // seviceHidden
    seviceHidden();

    // sevice header menu
    serviceHeaderMenu();

    // sevice header menu selection
    serviceHeaderMenuSelection();

    // sevice header menu mobile
    serviceHeaderMenuMobile();

    // aside bar actives
    asideBarActives();

    // custom slider service stage
    hover();
});