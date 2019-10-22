let PLUS_SIGN = document.createElement("inp");
PLUS_SIGN.innerHTML = "add_circle";
PLUS_SIGN.classList.add("material-icons", "plus-sign");

let MINUS_SIGN = document.createElement("inp");
MINUS_SIGN.innerHTML = "remove_circle";
MINUS_SIGN.classList.add("material-icons", "minus-sign");

function insertAfter(newNode, referenceNode) {
    /*
    * utility function to insert after a node.
    * credits: stackoverflow.
    * */
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

document.querySelectorAll(".form-group").forEach(function (e) {

    /* label animation for text fields */
    e.querySelectorAll("input[type=text], input[type=password]").forEach(function (elem) {
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
        e.insertBefore(MINUS_SIGN, inputNumber);

        insertAfter(PLUS_SIGN, inputNumber);

        e.querySelector(".plus-sign").onclick = function () {
            inputNumber.stepUp(1);
        }

        e.querySelector(".minus-sign").onclick = function () {
            inputNumber.stepDown(1);
        }
    }
});
