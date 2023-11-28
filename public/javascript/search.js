document.addEventListener("DOMContentLoaded", function () {
    var searchInput = document.querySelector(".search-input");
    var optionsList = document.querySelector(".options-list");

    searchInput.addEventListener("input", function () {
        var searchTerm = searchInput.value.toLowerCase();

        Array.from(optionsList.children).forEach(function (option) {
            var optionText = option.textContent.toLowerCase();
            var optionValue = option.getAttribute("data-value").toLowerCase();
            var optionMatches =
                optionText.includes(searchTerm) ||
                optionValue.includes(searchTerm);
            option.style.display = optionMatches ? "block" : "none";
        });
    });

    optionsList.addEventListener("click", function (event) {
        if (event.target.tagName === "LI") {
            var selectedValue = event.target.getAttribute("data-value");
            searchInput.value = selectedValue;
            // You can handle the selected value as needed
        }
    });
});
