let SIDENAV_WIDTH = "15rem";
let SIDENAV = document.getElementById("sidenav");

let sidenavOverlay = document.createElement("div");
sidenavOverlay.style.cssText = `
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
sidenavOverlay.id = "sidenav-overlay";
sidenavOverlay.onclick = function () {
    closeSidenav();
}

window.onload = function () {
    document.getElementsByTagName("body")[0].appendChild(sidenavOverlay);
}

function openSidenav() {
    sidenavOverlay.style.display = "block";
    sidenavOverlay.style.opacity = "1";

    SIDENAV.style.marginLeft = 0;
}

function closeSidenav() {
    sidenavOverlay.style.opacity = "0";
    setTimeout(function () {
        sidenavOverlay.style.display = "none";
    }, 150);
    
    SIDENAV.style.marginLeft = "-" + SIDENAV_WIDTH;
}

document.getElementById("sidenav-trigger").onclick = function () {
    openSidenav();
}

document.getElementById("sidenav-close").onclick = function () {
    closeSidenav();
}
