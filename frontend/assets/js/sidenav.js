let SIDENAV_WIDTH = "15rem";
let SIDENAV = document.getElementById("sidenav");

function openSidenav() {
    SIDENAV.style.marginLeft = 0;
}

function closeSidenav() {
    SIDENAV.style.marginLeft = "-" + SIDENAV_WIDTH;
}

document.getElementById("sidenav-trigger").onclick = function () {
    openSidenav();
}

document.getElementById("sidenav-close").onclick = function () {
    closeSidenav();
}
