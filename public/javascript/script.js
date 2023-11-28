document.addEventListener("DOMContentLoaded", function () {
    document.body.addEventListener("click", function (event) {
        if (event.target.classList.contains("options")) {
            const selectedLi = event.target.closest("li");
            if (selectedLi) {
                updateName(selectedLi);
            }
        }
    });

    function updateName(selectedLi) {
        const wrapper = selectedLi.closest(".wrapper");
        const selectBtn = wrapper.querySelector(".select-btn");
        selectBtn.querySelector("span").innerText = selectedLi.innerText;
        wrapper.classList.remove("active");
    }

    const searchInputs = document.querySelectorAll(".wrapper .search input");
    searchInputs.forEach(function (searchInp) {
        const wrapper = searchInp.closest(".wrapper");
        const options = wrapper.querySelectorAll(".options li");

        const noResultMessage = document.createElement("div");
        noResultMessage.className = "no-result-message";
        noResultMessage.innerText = "Oops, tidak ditemukan";
        searchInp.parentElement.appendChild(noResultMessage);

        function updateNoResultMessage() {
            const searchedValue = searchInp.value.toLowerCase();
            let hasResults = false;

            options.forEach((option) => {
                const optionText = option.innerText.toLowerCase();
                const displayStyle = optionText.includes(searchedValue)
                    ? "block"
                    : "none";
                option.style.display = displayStyle;

                if (displayStyle === "block") {
                    hasResults = true;
                }
            });

            noResultMessage.style.display =
                hasResults || searchedValue === "" ? "none" : "block";
        }

        searchInp.addEventListener("input", () => {
            updateNoResultMessage();
        });

        options.forEach((option) => {
            option.addEventListener("click", () => {
                updateName(option);
            });
        });

        const selectBtn = wrapper.querySelector(".select-btn");
        selectBtn.addEventListener("click", () => {
            wrapper.classList.toggle("active");
        });

        updateNoResultMessage();
    });
});

function submitForm() {
    document.getElementById("logoForm").submit();
}

function displayImage(input) {
    var fileInput = input.files[0];

    if (fileInput) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById("profile-image-preview").src =
                e.target.result;
        };

        reader.readAsDataURL(fileInput);
    }
}


