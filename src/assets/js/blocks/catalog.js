// catalog open context clue
export function catalogOpenContextClue () {
    if(document.querySelector('.sampleSearchInput_js')) {
        let parent = document.querySelector('.sampleSearch');
        let clue = parent.querySelector('.searchContextual_js');
        let input = parent.querySelector('.sampleSearchInput_js');
        input.addEventListener("keyup", (e) => {
            if(input.value.length > 2) {
                clue.classList.add('show');
            } else {
                clue.classList.remove('show');
            }
        });
        document.addEventListener('click', function(e) {
            const target = e.target;
            const its_clue = target == clue;
            const its_input = target == input;
            if (!its_clue && !its_input) {
                clue.classList.remove('show');
            }
        });
    }
}

// sample header menu show/hide
export function sampleMenu () {
    if (document.querySelector(".sampleHeaderSelected_js")) {
        var sampleHeader = document.querySelector(".sampleHeader");
        var sampleHeaderClick = sampleHeader.querySelector(".sampleHeaderSelected_js");
        var sampleHeaderClass = sampleHeader.querySelector(".sampleHeaderMenu_js");
        var toggleMenu = function() {
            sampleHeaderClass.classList.toggle('show');
        }
        sampleHeaderClick.addEventListener('click', function(e) {
            toggleMenu();
        });
        document.addEventListener('click', function(e) {
            const target = e.target;
            const its_sampleHeaderClick = target == sampleHeaderClick;
            const menu_is_active = sampleHeaderClass.classList.contains('show');
            if (!its_sampleHeaderClick && menu_is_active) {
                toggleMenu();
            }
        });
    }
}

// sample header menu middle show/hide
export function sampleMenuMiddle () {
    if (document.querySelector(".sampleSelectedOpted_js")) {
        var sampleSelected = document.querySelector(".sampleSelected");
        var sampleSelectedClick = sampleSelected.querySelector(".sampleSelectedOpted_js");
        var sampleSelectedSpan = sampleSelected.querySelector(".sampleSelectedOpted_js span");
        var sampleSelectedClass = document.querySelector(".sampleSelected");
        var toggleMenu = function() {
            sampleSelectedClass.classList.toggle('show');
        }
        sampleSelectedClick.addEventListener('click', function(e) {
            toggleMenu();
        });
        document.addEventListener('click', function(e) {
            const target = e.target;
            const its_sampleSelectedClick = target == sampleSelectedClick;
            const its_sampleSelectedSpan = target == sampleSelectedSpan;
            const menu_is_active = sampleSelectedClass.classList.contains('show');
            if (!its_sampleSelectedClick && !its_sampleSelectedSpan && menu_is_active) {
                toggleMenu();
            }
        });
    }
}

// sample header menu detailed show/hide
export function sampleDetailed () {
    if (document.querySelector(".sampleDetailedSelected_js")) {
        var sampleDetailed = document.querySelector(".sampleDetailed");
        var sampleHeaderClass = document.querySelector(".sampleDetailed");
        var sampleHeaderClick = sampleDetailed.querySelector(".sampleDetailedSelected_js");
        var sampleHeaderSpan = sampleDetailed.querySelector(".sampleDetailedSelected_js span");
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

// catalog cards hover
export function catalogCardsHover () {
    if(document.querySelector('.catalogCards')) {
        const list = document.querySelector('.catalogCards');
        const hoversElem = document.querySelectorAll('.cardHover_js');
        let parent;
        hoversElem.forEach((item) => {
            item.onmouseover = function(elem) {
                parent = item.closest('.card');
                parent.classList.add('hover');
            };
            item.onmouseout = function(elem) {
                parent = item.closest('.card');
                parent.classList.remove('hover');
                parent.classList.remove('active');
            };
            item.onmousedown = function(elem) {
                parent = item.closest('.card');
                parent.classList.add('active');
            };
        });
    }
}

// sample content change
export function sampleContenChange () {
    if (document.querySelector(".sampleChoice_js")) {
        var sampleChoice = document.querySelectorAll(".sampleChoice_js");
        var catalogCards = document.querySelectorAll(".sampleContent_js");
        var choice;
        sampleChoice.forEach((item) => {
            item.addEventListener("click", () => {
                sampleChoice.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                choice = item.getAttribute('data-choice');
                catalogCards.forEach((elem) => {
                    if (elem.getAttribute('data-category') === choice) {
                        catalogCards.forEach((i) => {
                            i.classList.add('hide');
                        });
                        elem.classList.remove('hide');
                    }
                });
            });
        });
    }
}

// inner content change
export function innerContenChange () {
    if (document.querySelector(".middleChoice_js")) {
        var middleChoice = document.querySelectorAll(".middleChoice_js");
        var detailedChoice = document.querySelectorAll(".sampleDetailed_js");
        var sampleDetail = document.querySelectorAll(".sampleDetail_js");
        var catalogCardsList = document.querySelectorAll(".catalogCardsList_js");
        var input = document.querySelector(".sampleDetailedSelected_js span");
        var defaultValue = "Выберите проблему";
        var choice;
        var problem;
        var showList = function() {
            catalogCardsList.forEach((item) => {
                if (item.getAttribute('data-list') === choice) {
                    catalogCardsList.forEach((i) => {
                        i.classList.add('hide');
                    });
                    item.classList.remove('hide');
                }
            });
        }
        //menu middle
        middleChoice.forEach((item) => {
            item.addEventListener("click", () => {
                middleChoice.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                choice = item.getAttribute('data-middle');
                //выпадашка
                detailedChoice.forEach((elem) => {
                    if (elem.getAttribute('data-problem') === choice) {
                        detailedChoice.forEach((i) => {
                            i.classList.add('hide');
                        });
                        elem.classList.remove('hide');
                    }
                });
                input.innerHTML = defaultValue;
                sampleDetail.forEach((i) => {
                    i.classList.remove('active');
                });
                showList();
            });
        });
        //menu detail
        sampleDetail.forEach((item) => {
            item.addEventListener("click", () => {
                sampleDetail.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                choice = item.getAttribute('data-detail');
                problem = item.innerHTML;
                input.innerHTML = problem;
                showList();
            });
        });
    }
}