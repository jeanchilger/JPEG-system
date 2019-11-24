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

let events = 0;

function initCalendar(calendar, month) {
    /*
     * Set calendar header, body, and other
     * fixed calendar elements.
     * */

    calendar.innerHTML = `
    <div class="calendar__badge" id="calendar-badge">

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
        calendar.querySelector("#calendar-days").innerHTML += `
        <li id="day-` + (i + 1) + `">` + (i + 1) + `</li>
        `;
    }
}

function insertEvent(eventDay) {
    /*
     * adds a visual fill in the given day.
     * also increments the badge.
     * */

    let day = calendar.querySelector("#calendar-days")
                      .querySelector("#day-" + eventDay);

    day.innerHTML = `
        <span class="active">` + eventDay + `</span>
    `;

    events += 1;
    let badge = calendar.querySelector("#calendar-badge");

    if (!events) {
        badge.style.display = "block";
    }

    badge.innerHTML = events;
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
