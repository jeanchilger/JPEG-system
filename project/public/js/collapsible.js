let COLLAPSIBLE = document.getElementById("collapsible");

COLLAPSIBLE.querySelectorAll(".collapsible__item").forEach(function (collapsibleItem) {

    collapsibleItem.setAttribute("collapsed", "false");

    collapsibleItem.querySelector(".collapsible__header").onclick = function () {
        if (collapsibleItem.getAttribute("collapsed") == "false") {
            collapsibleItem.setAttribute("collapsed", "true");

            let collapsibleBody = collapsibleItem.querySelector(".collapsible__body");
            // collapsibleBody.style.display = "block";
            collapsibleBody.style.maxHeight = collapsibleBody.scrollHeight + "px";
            collapsibleBody.style.padding = "1rem";

        } else if (collapsibleItem.getAttribute("collapsed") == "true") {
            collapsibleItem.setAttribute("collapsed", "false");

            let collapsibleBody = collapsibleItem.querySelector(".collapsible__body");
            collapsibleBody.style.maxHeight = 0;
            collapsibleBody.style.padding = "0";

            setTimeout(function () {
                // collapsibleItem.querySelector(".collapsible__body").style.display = "none";
            }, 150);
        }
    }
});
