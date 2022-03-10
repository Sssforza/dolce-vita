
// team content change
export function teamContentChange () {
    if (document.querySelector(".sampleTeam_js")) {
        var samplePrice = document.querySelectorAll(".sampleTeam_js");
        var sampleContent = document.querySelectorAll(".teamContent_js");
        var sampleSelectedSpan = document.querySelector(".sampleSelectedOpted_js span");
        var choice;
        var name;
        samplePrice.forEach((item) => {
            item.addEventListener("click", () => {
                samplePrice.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                choice = item.getAttribute('data-choice');
                name = item.innerHTML;
                sampleSelectedSpan.innerHTML = name;
                sampleContent.forEach((elem) => {
                    if (elem.getAttribute('data-content') === choice) {
                        sampleContent.forEach((i) => {
                            i.classList.add('hide');
                        });
                        elem.classList.remove('hide');
                    }
                });
            });
        });
    }
}