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

var Calendar = function() {
    this.calendar = document.getElementById("calendar");
    this.events = 0;

    /*
     * Set calendar header, body, and other
     * fixed calendar elements.
     * */

    let currentDate = new Date();
    let month = currentDate.getMonth();

    this.calendar.innerHTML = `
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

Calendar.prototype.fillMissingDays = function (missingDays) {
    /*
     * fills the cells of calendar that do not contain
     * days for current month.
     * */

    for (let i=0; i < missingDays; i++) {
        this.calendar.querySelector("#calendar-days").innerHTML += `
            <li></li>
        `;
    }
}

Calendar.prototype.fillCalendarDays = function (maxDays) {
    /*
     * fills the cells of calendar with month
     * days for current days.
     * */

    for (let i = 0; i < maxDays; i++) {
        if (i < 10) {
            this.calendar.querySelector("#calendar-days").innerHTML += `
                <li id="day-0` + (i + 1) + `">` + (i + 1) + `</li>
            `;

        } else {
            this.calendar.querySelector("#calendar-days").innerHTML += `
                <li id="day-` + (i + 1) + `">` + (i + 1) + `</li>
            `;
        }
    }
}

Calendar.prototype.insertEvent = function (eventDate) {
    /*
     * adds a visual fill in the given day.
     * also increments the badge.
     * */

    let eventDay = eventDate.split("/")[0];
    let day = this.calendar.querySelector("#calendar-days")
                      .querySelector("#day-" + eventDay);

    console.log(eventDay);

    day.innerHTML = `
        <span class="active">` + day.innerHTML + `</span>
    `;

    this.events += 1;
    let badge = this.calendar.querySelector("#calendar-badge");

    if (this.events) {
        badge.style.display = "block";
    }

    badge.innerHTML = this.events;
}
