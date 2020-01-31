function Utils() {
    /*
     * Offers useful functions.
     * */
}

Utils.formatAsMoney = function (value, sep=" ") {
    /*
     * Format the given number as a monetary
     * value.
     * */

    let moneyValue = "" + Math.abs(parseFloat(value)).toFixed(2);

    let moneyFormat = "";

    let countPlaces = 0;

    for (let i=moneyValue.length-4; i >= 0; i--) {
        moneyFormat = moneyValue[i] + moneyFormat;

        countPlaces++;

        if (countPlaces % 3 == 0 && i != 0) {
            moneyFormat = sep + moneyFormat;
        }

    }

    return "R$ " +
            moneyFormat +
            moneyValue.substring(moneyValue.length-3, moneyValue.length);
}
