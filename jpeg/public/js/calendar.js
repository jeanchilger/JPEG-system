const MONTH_NAMES = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro",
];

function initCalendar(calendar, month) {
    /*
     * Set calendar header, body, and other
     * fixed calendar elements.
     * */

    calendar.innerHTML = `
    <div class="calendar__badge">
        4
    </div>

    <div class="calendar__header" id="calendar-header">
    ` + MONTH_NAMES[month] + `
    </div>

    <div class="calendar__body" id="calendar-body">
        <ul class="calendar__weekdays">
            <li>Dom</li>
            <li>Seg</li>
            <li>Ter</li>
            <li>Qua</li>
            <li>Qui</li>
            <li>Sex</li>
            <li>Sáb</li>
        </ul>

        <ul class="calendar__days" id="calendar-days">
        </ul>
    </div>
    `;
}

function fillMissingDays(missingDays, calendar) {
    /*
     * fills the cells of calendar that do not contain
     * days for current month.
     * */

    for (let i=0; i < missingDays; i++) {
        calendar.querySelector("#calendar-days").innerHTML += `
        <li></li>
        `;
    }
}

function fillCalendarDays(maxDays, calendar) {
    /*
     * fills the cells of calendar with month
     * days for current days.
     * */


    for (let i = 0; i < maxDays; i++) {
        if (i == 12 || i == 16 || i == 24 || i == 28) {
            calendar.querySelector("#calendar-days").innerHTML += `
            <li><span class=active>` + (i + 1) + `</span></li>
            `;

        } else {
            calendar.querySelector("#calendar-days").innerHTML += `
            <li>` + (i + 1) + `</li>
            `;
        }
    }
}

let calendar = document.getElementById("calendar");
// calendar.onload = function () {

    let currentDate = new Date();
    let month = currentDate.getMonth();
    let year = currentDate.getFullYear();

    let firstDay = new Date(year, month, 1).getDay();
    let maxDays = new Date(year, month + 1, 0).getDate();

    initCalendar(calendar, month);
    fillMissingDays(firstDay, calendar);
    fillCalendarDays(maxDays, calendar);
// }
