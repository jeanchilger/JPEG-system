let MODAL = document.getElementById("modal");

let modalOverlay = document.createElement("div");
modalOverlay.style.cssText = `
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.38);
    z-index: 9;
    transition: var(--transition-medium) all;
    display: none;
    opacity: 0;
`;

modalOverlay.id = "modal-overlay";
modalOverlay.onclick = function () {
    closeModal();
}

window.onload = function () {
    document.getElementsByTagName("body")[0].appendChild(modalOverlay);
}

function closeModal() {
    modalOverlay.style.opacity = "0";
    setTimeout(function () {
        modalOverlay.style.display = "none";
    }, 150);

    MODAL.classList.add("modal-close");

    setTimeout(function () {
        MODAL.style.display = "none";
        MODAL.classList.remove("modal-close");
    }, 350);
}

function openModal() {
    modalOverlay.style.display = "block";
    modalOverlay.style.opacity = "1";

    MODAL.style.display = "block";
    MODAL.classList.add("modal-open");

    setTimeout(function () {
        MODAL.classList.remove("modal-open");
    }, 400);
}

document.getElementById("modal-trigger").onclick = function () {
    openModal();
}
