document.addEventListener("DOMContentLoaded", function () {
    myFormAkun();
    myFormTeam();
    myChangePasswordForm();
});

const myFormAkun = () => {
    const action = document.getElementById("actionFormAkun");
    const formKota = document.getElementById("kota");
    const formProvinsi = document.getElementById("provinsi");
    const btnSubmit = document.getElementById("btnSubmit");

    const show = [formKota, formProvinsi];

    action.onclick = () => {
        show.forEach((element) => {
            element.classList.remove("form-control-plaintext");
            element.classList.add("form-control");
            element.removeAttribute("readonly");
            element.value = "";
            btnSubmit.classList.remove("d-none");
        });
    };
};

const myFormTeam = () => {
    const action = document.getElementById("actionFormTeam");
    const inputPlayers = document.querySelectorAll(".form-team");
    const btnSubmit = document.getElementById("btnTeam");

    action.onclick = () => {
        inputPlayers.forEach((element) => {
            element.classList.remove("form-control-plaintext");
            element.classList.add("form-control");
            element.removeAttribute("readonly");
            element.value = "";
            btnSubmit.classList.remove("d-none");
            btnSubmit.classList.add("d-flex");
        });
    };
};

const myChangePasswordForm = () => {
    const action = document.getElementById("actionFormChangePassword");
    const passwordInputs = document.querySelectorAll(
        ".form-control-plaintext.password-input"
    );
    const btnSubmit = document.getElementById("btnGantiPass");

    action.onclick = () => {
        passwordInputs.forEach((element) => {
            element.classList.remove("form-control-plaintext");
            element.classList.add("form-control");
            element.removeAttribute("readonly");
            element.value = "";
            btnSubmit.classList.remove("d-none");
        });
    };
};

function updateUrl(tabName) {
    var stateObj = { tab: tabName };
    var url = window.location.href.split("?")[0] + "?tab=" + tabName;
    history.pushState(stateObj, "", url);
}

document
    .getElementById("profileTabs")
    .addEventListener("click", function (event) {
        event.preventDefault();
        var tab = new bootstrap.Tab(event.target);
        tab.show();

        var tabId = event.target.getAttribute("href");
        var contentContainer = document.querySelector(tabId);
        if (contentContainer.innerHTML.trim() === "") {
            loadContent(tabId);
        }
    });

function loadContent(tabId) {
    var content = "<p>This content is loaded dynamically.</p>";
    document.querySelector(tabId).innerHTML = content;
}

const searchProvinsi = () => {
    const input = document.getElementById("provinsi");
    const listProvinsi = document.getElementById("listProvinsi");
    const notFoundMessage = document.getElementById("notFoundMessage");

    input.addEventListener("input", function () {
        const searchTerm = input.value.toLowerCase();
        const listItems = listProvinsi.querySelectorAll("li");

        let found = false;

        listItems.forEach((item) => {
            const itemName = item.textContent;

            if (itemName.toLowerCase().includes(searchTerm)) {
                item.style.display = "block";
                found = true;
            } else {
                item.style.display = "none";
            }

            item.addEventListener("click", function () {
                input.value = itemName;
                hideListAndMessage();
            });
        });

        if (found) {
            listProvinsi.classList.remove("d-none");
            notFoundMessage.classList.add("d-none");
        } else {
            notFoundMessage.classList.remove("d-none");
        }

        if (searchTerm === "") {
            notFoundMessage.classList.remove("d-none");
        }
    });

    document.addEventListener("click", function (event) {
        const isClickInsideList = listProvinsi.contains(event.target);
        const isClickInsideInput = input.contains(event.target);

        if (!isClickInsideList && !isClickInsideInput) {
            hideListAndMessage();
        }
    });

    function hideListAndMessage() {
        listProvinsi.classList.add("d-none");
        notFoundMessage.classList.add("d-none");
    }
};

const searchKota = () => {
    const input = document.getElementById("kota");
    const listKota = document.getElementById("listKota");
    const notFoundMessage = document.getElementById("notFoundMessage");

    input.addEventListener("input", function () {
        const searchTerm = input.value.toLowerCase();
        const listItems = listKota.querySelectorAll("li");

        let found = false;

        listItems.forEach((item) => {
            const itemName = item.textContent;

            if (itemName.toLowerCase().includes(searchTerm)) {
                item.style.display = "block";
                found = true;
            } else {
                item.style.display = "none";
            }

            item.addEventListener("click", function () {
                input.value = itemName;
                hideListAndMessage();
            });
        });

        if (found) {
            listKota.classList.remove("d-none");
            notFoundMessage.classList.add("d-none");
        } else {
            notFoundMessage.classList.remove("d-none");
        }

        if (searchTerm === "") {
            notFoundMessage.classList.remove("d-none");
        }
    });

    document.addEventListener("click", function (event) {
        const isClickInsideList = listKota.contains(event.target);
        const isClickInsideInput = input.contains(event.target);

        if (!isClickInsideList && !isClickInsideInput) {
            hideListAndMessage();
        }
    });

    function hideListAndMessage() {
        listKota.classList.add("d-none");
        notFoundMessage.classList.add("d-none");
    }
};
