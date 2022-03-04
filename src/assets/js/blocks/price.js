// price content change
export function priceContentChange () {
    if (document.querySelector(".samplePrice_js")) {
        var samplePrice = document.querySelectorAll(".samplePrice_js");
        var sampleContent = document.querySelectorAll(".sampleContent_js");
        var priceContent = document.querySelectorAll(".priceContent_js");
        var priceAsideItems = document.querySelectorAll(".priceAsideItem_js");
        var samplePriceAside;
        var samplePriceAsideOne;
        var samplePriceContent;
        var samplePriceContentOne;
        var choice;
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
                sampleContent.forEach((elem) => {
                    if (elem.getAttribute('data-category') === choice) {
                        sampleContent.forEach((i) => {
                            i.classList.add('hide');
                        });
                        elem.classList.remove('hide');
                        samplePriceAside = elem.querySelectorAll('.priceAsideItem_js');
                        samplePriceContent = elem.querySelectorAll('.priceContent_js');
                        samplePriceAsideOne = samplePriceAside[0];
                        samplePriceContentOne = samplePriceContent[0];
                        samplePriceAsideOne.classList.add('active');
                        samplePriceContentOne.classList.remove('hide');
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
        var choice;
        priceAsideItem.forEach((item) => {
            item.addEventListener("click", () => {
                priceAsideItem.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                choice = item.getAttribute('data-aside');
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