// Select Theme
document.addEventListener("DOMContentLoaded", function () {
    var themeNone = document.getElementById("theme-none");
    var themeLight = document.getElementById("theme-light");
    var themeDark = document.getElementById("theme-dark");
    var themeDarkTrendy = document.getElementById("theme-dark-trendy");

    themeNone.addEventListener("click", function () {
        removeThemes();
    });

    themeLight.addEventListener("click", function () {
        addTheme("theme-light");
    });

    themeDark.addEventListener("click", function () {
        addTheme("theme-dark");
    });

    themeDarkTrendy.addEventListener("click", function () {
        addTheme("theme-dark-trendy");
    });

    function removeThemes() {
        var themeElements = document.getElementsByClassName("theme");
        for (var i = 0; i < themeElements.length; i++) {
            themeElements[i].classList.remove(
                "theme-light",
                "theme-dark",
                "theme-dark-trendy"
            );
        }
    }

    function addTheme(theme) {
        removeThemes();
        var themeElements = document.getElementsByClassName("theme");
        for (var i = 0; i < themeElements.length; i++) {
            themeElements[i].classList.add(theme);
        }
    }
});
