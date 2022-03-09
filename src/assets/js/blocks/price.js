
let lg = 1024
let xs = 376

// price content change
export function priceContentChange () {
    if (document.querySelector(".samplePrice_js")) {
        var samplePrice = document.querySelectorAll(".samplePrice_js");
        var sampleContent = document.querySelectorAll(".sampleContent_js");
        var priceContent = document.querySelectorAll(".priceContent_js");
        var priceAsideItems = document.querySelectorAll(".priceAsideItem_js");
        var sampleSelectedSpan = document.querySelector(".sampleSelectedOpted_js span");
        var sampleHeaderSpan = document.querySelector(".priceAsideOpted_js span");
        var samplePriceAside;
        var samplePriceAsideOne;
        var samplePriceAsideOneSpan;
        var samplePriceContent;
        var samplePriceContentOne;
        var choice;
        var name;
        samplePrice.forEach((item) => {
            item.addEventListener("click", () => {
                priceContent.forEach((i) => {
                    i.classList.add('hide');
                });
                priceAsideItems.forEach((i) => {
                    i.classList.remove('active');
                });
                samplePrice.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                choice = item.getAttribute('data-choice');
                name = item.innerHTML;
                sampleSelectedSpan.innerHTML = name;
                sampleContent.forEach((elem) => {
                    if (elem.getAttribute('data-category') === choice) {
                        sampleContent.forEach((i) => {
                            i.classList.add('hide');
                        });
                        elem.classList.remove('hide');
                        samplePriceAside = elem.querySelectorAll('.priceAsideItem_js');
                        samplePriceContent = elem.querySelectorAll('.priceContent_js');
                        samplePriceAsideOne = samplePriceAside[0];
                        samplePriceAsideOneSpan = samplePriceAside[0].querySelector('span').innerHTML;
                        samplePriceContentOne = samplePriceContent[0];
                        samplePriceAsideOne.classList.add('active');
                        samplePriceContentOne.classList.remove('hide');
                        sampleHeaderSpan.innerHTML = samplePriceAsideOneSpan;
                    }
                });
            });
        });
    }
}

// price detail content change
export function priceDetailContentChange () {
    if (document.querySelector(".priceAsideItem_js")) {
        var priceAsideItem = document.querySelectorAll(".priceAsideItem_js");
        var priceContent = document.querySelectorAll(".priceContent_js");
        var priceInput = document.querySelector(".priceAsideOpted_js");
        var priceInputSpan = document.querySelector(".priceAsideOpted_js span");
        var choice;
        var name;
        priceAsideItem.forEach((item) => {
            item.addEventListener("click", () => {
                priceAsideItem.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                choice = item.getAttribute('data-aside');
                priceInput.classList.remove("price__opted_action");
                name = item.querySelector("span").innerHTML;
                priceInputSpan.innerHTML = name;
                if(item.classList.contains('priceAside__item_action')) {
                    priceInput.classList.add("price__opted_action");
                }
                priceContent.forEach((elem) => {
                    if (elem.getAttribute('data-detail') === choice) {
                        priceContent.forEach((i) => {
                            i.classList.add('hide');
                        });
                        elem.classList.remove('hide');
                    }
                });
            });
        });
    }
}

// price service menu
export function priceServiceMenu () {
    if (document.querySelector(".priceAsideOpted_js")) {
        var sampleDetailed = document.querySelector(".price__container");
        var sampleHeaderClass = document.querySelector(".price__container");
        var sampleHeaderClick = sampleDetailed.querySelector(".priceAsideOpted_js");
        var sampleHeaderSpan = sampleDetailed.querySelector(".priceAsideOpted_js span");
        var toggleMenu = function() {
            sampleHeaderClass.classList.toggle('show');
        }
        sampleHeaderClick.addEventListener('click', function(e) {
            toggleMenu();
        });
        document.addEventListener('click', function(e) {
            const target = e.target;
            const its_sampleHeaderClick = target == sampleHeaderClick;
            const its_sampleHeaderSpan = target == sampleHeaderSpan;
            const menu_is_active = sampleHeaderClass.classList.contains('show');
            if (!its_sampleHeaderClick && !its_sampleHeaderSpan && menu_is_active) {
                toggleMenu();
            }
        });
    }
}

// page price hidden
export function pagePriceHidden () {
    if (document.querySelector(".pagePrice_js") && document.documentElement.clientWidth <= xs) {
        var footer = document.querySelector(".footer");
        footer.style.paddingBottom = 100 + `px`;
    }
}