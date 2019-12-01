let COLOR_PRIMARY = getComputedStyle(document.body).getPropertyValue("--primary");
let COLOR_PRIMARY_LIGHT = getComputedStyle(document.body).getPropertyValue("--primary-light");
let COLOR_PRIMARY_LIGHTER = getComputedStyle(document.body).getPropertyValue("--primary-lighter");

let COLOR_DANGER = getComputedStyle(document.body).getPropertyValue("--danger");
let COLOR_SUCCESS = getComputedStyle(document.body).getPropertyValue("--success");

let COLOR_SECONDARY = getComputedStyle(document.body).getPropertyValue("--secondary");
let COLOR_SECONDARY_LIGHT = getComputedStyle(document.body).getPropertyValue("--secondary-light");

function ProfitChart(canvasId) {
    /*
     * Utility object used to create a chart
     * using chart.js library.
     *
     * Needs the id of the canvas id where
     * the chart is going to be drawn.
     * */

    this.canvasId = canvasId;
    this.canvas = document.getElementById(canvasId);
    this.options = {
        legend: {
            labels: {
                fontColor: COLOR_PRIMARY_LIGHTER,
                fontSize: 13,
                fontFamily: "Roboto",

                filter: function(item, chart) {
                    return !item.text.includes("Limite de Segurança");
                }
            }
        },

        tooltips: {
            mode: "nearest",
            intersect: false,
            filter: function (tooltipItem, data) {
                tooltipItem.value = Utils.formatAsMoney(tooltipItem.value);

                return true;
            }
        },

        hover: {
			mode: "nearest",
			intersect: true
		},

        responsive: true,

        scales: {
            xAxes: [
                {
                    gridLines: {
                        color: "rgba(0, 0, 0, 0.5)",
                    },

                    ticks: {
                        fontColor: COLOR_PRIMARY_LIGHT,
                        fontSize: 13,
                        fontFamily: "Roboto",
                    },

                }
            ],

            yAxes: [
                {
                    gridLines: {
                        display: false,
                    },

                    ticks: {
                        fontColor: COLOR_PRIMARY_LIGHT,
                        fontSize: 13,
                        fontFamily: "Roboto",
                    },


                }
            ]
        }
    };

    this.datasetBase = {

        borderWidth: 2,

        fill: false,

        pointBorderWidth: 1,

        lineTension: 0,

        pointRadius: 4,
    };

    this.calculateData = function(dataExpenses, dataReceipts) {
        /*
         * Calculates the array coresponding
         * to the profit (or loss).
         * */

        let dataCalculated = [];

        for (var i = 0; i < Object.keys(dataExpenses).length; i++) {
            dataCalculated[i] = dataReceipts[i].total - dataExpenses[i].total;
        }

        console.log(dataCalculated);
        return dataCalculated;
    }

    this.formatData = function(dataObj) {
        /*
         * Formats the dataObj in the form
         * of a array.
         * */

        let dataArray = [];

        for (var i = 0; i < Object.keys(dataObj).length; i++) {
            dataArray[i] = dataObj[i].total;
        }

        return dataArray;
    }

    this.formatDataExpenses = function(dataExpenses) {
        /*
         * Sets every value within dataExpenses
         * to a negative value.
         * */

        let newDataExpenses = [];

        for (var i = 0; i < Object.keys(dataExpenses).length; i++) {
            newDataExpenses[i] = -1 * dataExpenses[i];
        }

        return newDataExpenses;
    }

    this.buildDataLabels = function(dataObj) {
        /*
         * Builds the labels for y axis.
         * */

        let dataLabels = [];

        for (var i = 0; i < Object.keys(dataObj).length; i++) {
            dataLabels[i] = /*"(" +*/ dataObj[i].startDate/* + " - " + dataObj[i].endDate + ")"*/;
        }

        return dataLabels;
    }

    this.buildChart = function(dataExpenses, dataReceipts) {
        /*
         * Builds a chart.
         * */

        console.log(dataExpenses, dataReceipts);

        this.dataExpenses = this.formatDataExpenses(this.formatData(dataExpenses));
        this.dataReceipts = this.formatData(dataReceipts);
        this.dataCalculated = this.calculateData(dataExpenses, dataReceipts);
        this.dataLabels = this.buildDataLabels(dataExpenses);

        this.chart = new Chart(this.canvas, {
            type: "line",
            data: {
                labels: this.dataLabels,
                datasets: [
                    //calculated value for profit or loss
                    {
                        ...this.datasetBase, ...{
                            label: "Valor em Caixa",

                            data: this.dataCalculated,

                            backgroundColor: [
                                COLOR_PRIMARY,
                            ],

                            borderColor: [
                                COLOR_PRIMARY,
                            ],

                            pointBackgroundColor: COLOR_PRIMARY,

                        }
                    },

                    // dataset for receipts
                    {
                        ...this.datasetBase, ...{
                            label: "Recebimentos",

                            data: this.dataReceipts,

                            backgroundColor: [
                                COLOR_SUCCESS,
                            ],

                            borderColor: [
                                COLOR_SUCCESS,
                            ],

                            pointBackgroundColor: COLOR_SUCCESS,

                        }
                    },

                    // dataset for expenses
                    {
                        ...this.datasetBase, ...{
                            label: "Despesas",

                            data: this.dataExpenses,

                            backgroundColor: [
                                COLOR_DANGER,
                            ],

                            borderColor: [
                                COLOR_DANGER,
                            ],

                            pointBackgroundColor: COLOR_DANGER,

                        }
                    },

                    // indicates the limit where there is neither profit nor loss
                    {
                        ...this.datasetBase, ...{
                            label: "Limite de Segurança",

                            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],

                            backgroundColor: [
                                COLOR_PRIMARY_LIGHT,
                            ],

                            borderColor: [
                                COLOR_PRIMARY_LIGHT,
                            ],

                            pointBackgroundColor: COLOR_PRIMARY_LIGHT,

                        }
                    },

                ]
            },

            options: this.options,

        });
    }
}
