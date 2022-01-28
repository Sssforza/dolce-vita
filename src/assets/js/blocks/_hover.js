export function hover() {
    if (innerWidth <= 1024) {
        function hasTouch() {
            return (
                //Обнаружение устройств с сенсорным экраном
                "ontouchstart" in document.documentElement ||
                navigator.maxTouchPoints > 0 ||
                navigator.msMaxTouchPoints > 0
            );
        }

        if (hasTouch()) {
            // удаляет все :hover stylesheets
            try {
                // prevent exception on browsers not supporting DOM styleSheets properly
                for (var si in document.styleSheets) {
                    var styleSheet = document.styleSheets[si];
                    if (!styleSheet.rules) continue;

                    for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                        if (!styleSheet.rules[ri].selectorText) continue;
                        if (styleSheet.rules[ri].selectorText.match(":hover")) {
                            styleSheet.deleteRule(ri);
                        }
                    }
                }
            } catch (ex) {}
        }
    }
}