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

function closeAllSelect (elem) {
    let x = document.getElementsByClassName("select__items");
    let selectedOpt = document.getElementsByClassName("option--selected");

    let arrNo = [];

    for (let i = 0; i < selectedOpt.length; i++) {
        if (elem == selectedOpt[i]) {
            arrNo.push(i);

        } else {
            selectedOpt[i].classList.remove("select-arrow-active");
        }
    }

    for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select--hide");
        }
    }
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
    let inputNumber = e.querySelector("input[data-role=input-number]");
    if (inputNumber) {
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
            }
        }
    }

    /* input 'time' mask */
    let inputTime = e.querySelector("input[data-role=time]");
    if (inputTime) {
        inputTime.onkeypress = function (event) {
            if (inputTime.value.length == 2) {
                inputTime.value += ":";
            }
        }
    }

    /* select */
    let selectParent = e.querySelector(".select");
    if (selectParent) {
        let selectGroup = selectParent.getElementsByTagName("select")[0];

        let selectedOpt = document.createElement("div");
        selectedOpt.setAttribute("class", "option--selected");
        selectedOpt.innerHTML = selectGroup.options[selectGroup.selectedIndex].innerHTML;

        selectParent.appendChild(selectedOpt);

        let optionGroup = document.createElement("div");
        optionGroup.setAttribute("class", "select__items select--hide");

        for(let j = 1; j < selectGroup.length; j++) {
            opt = document.createElement("div");
            opt.innerHTML = selectGroup.options[j].innerHTML;

            opt.addEventListener("click", function(e) {
                let selGroup = this.parentNode.parentNode.getElementsByTagName("select")[0];
                let selSelected = this.parentNode.previousSibling;

                for (let i = 0; i < selGroup.length; i++) {
                    if (selGroup.options[i].innerHTML == this.innerHTML) {
                        selGroup.selectedIndex = i;
                        selSelected.innerHTML = this.innerHTML;

                        let y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (let k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }

                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }

                selSelected.click();
            });

            optionGroup.appendChild(opt);
        }

        selectParent.appendChild(optionGroup);

        selectedOpt.addEventListener("click", function (e) {
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select--hide");
            // this.classList.toggle("select-arrow-active");
        });
    }
});

document.querySelectorAll("[data-role=select]").forEach(function (e) {
    e.querySelectorAll(".collection__item").forEach(function (elem) {
        elem.onclick = function () {
            elem.classList.toggle("selected");
            e.querySelectorAll(".collection__item").forEach(function (elem2) {
                if (elem != elem2 && elem2.classList.contains("selected")) {
                    elem2.classList.remove("selected");
                }
            });
        }
    });
});

document.addEventListener("click", closeAllSelect);
