window.onload = function () {
    document.querySelectorAll(".form-group").forEach(function (e) {
        let inputText = e.querySelector("input[type=text]");
        let inputPassword = e.querySelector("input[type=password]");

        if (inputText.value) {
            e.querySelector("label").style.cssText = `
                top: 0;
            `;
        }
    });
}
