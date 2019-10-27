function newPlusSign() {
    let PLUS_SIGN = document.createElement("inp");
    PLUS_SIGN.innerHTML = "add_circle";
    PLUS_SIGN.classList.add("material-icons", "plus-sign");

    return PLUS_SIGN;
}

function newMinusSign() {
    let MINUS_SIGN = document.createElement("inp");
    MINUS_SIGN.innerHTML = "remove_circle";
    MINUS_SIGN.classList.add("material-icons", "minus-sign");

    return MINUS_SIGN;
}

function insertAfter(newNode, referenceNode) {
    /*
    * utility function to insert after a node.
    * credits: stackoverflow.
    * */
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

document.querySelectorAll(".form-group").forEach(function (e) {

    /* label animation for text fields */
    e.querySelectorAll("input[type=text], input[type=password], textarea").forEach(function (elem) {
        elem.onchange = function () {
            if (elem.value) {
                e.querySelector("label").classList.add("active-label");

            } else {
                e.querySelector("label").classList.remove("active-label");
            }
        }
    });

    /* input type text */
    let inputNumber = e.querySelector("input[type=number]");
    if (inputNumber) {
        console.log(inputNumber);
        e.insertBefore(newMinusSign(), inputNumber);

        insertAfter(newPlusSign(), inputNumber);

        e.querySelector(".plus-sign").onclick = function () {
            inputNumber.stepUp(1);
        }

        e.querySelector(".minus-sign").onclick = function () {
            inputNumber.stepDown(1);
        }
    }

    /* textarea autoresize */
    let textarea = e.querySelector("textarea");
    if (textarea) {
        textarea.onkeydown = function () {

            setTimeout(function () {
                textarea.style.cssText = "height: auto; padding: 0";
                textarea.style.cssText = "height: " + textarea.scrollHeight + "px";
            }, 0);
        }
    }

    /* input 'date' mask */
    let inputDate = e.querySelector("input[data-role=date]");
    if (inputDate) {
        inputDate.onkeypress = function (event) {
            if (inputDate.value.length == 2 || inputDate.value.length == 5) {
                inputDate.value += "/";

            } else if (inputDate.value.length >= 10) {
                inputDate.value = inputDate.value.substr(0, inputDate.value.length - 1);
            }
        }
    }

    /* input 'time' mask */
    let inputTime = e.querySelector("input[data-role=time]");
    if (inputTime) {
        inputTime.onkeypress = function (event) {
            if (inputTime.value.length == 2) {
                inputTime.value += ":";

            } else if (inputTime.value.length >= 5) {
                inputTime.value = inputTime.value.substr(0, inputTime.value.length - 1);
            }
        }
    }
});
