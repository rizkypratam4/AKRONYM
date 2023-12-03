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
