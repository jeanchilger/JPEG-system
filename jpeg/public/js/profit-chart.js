let COLOR_PRIMARY = getComputedStyle(document.body).getPropertyValue("--primary");
let COLOR_PRIMARY_LIGHT = getComputedStyle(document.body).getPropertyValue("--primary-light");
let COLOR_PRIMARY_LIGHTER = getComputedStyle(document.body).getPropertyValue("--primary-lighter");
let COLOR_SECONDARY = getComputedStyle(document.body).getPropertyValue("--secondary");

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
                    return !item.text.includes("indicator");
                }
            }
        },

        tooltips: {
            mode: "nearest",
            intersect: false,
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
                        color: COLOR_SECONDARY,
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
                        color: COLOR_SECONDARY,
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

    this.buildChart = function(data) {
        /*
         * Builds a chart.
         * */

        this.chart = new Chart(this.canvas, {
            type: "line",
            data: {
                labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4"],
                datasets: [
                    {
                        label: "Valor em Caixa",

                        data: data,

                        backgroundColor: [
                            COLOR_PRIMARY,
                        ],

                        borderColor: [
                            COLOR_PRIMARY,
                        ],

                        borderWidth: 2,

                        fill: false,

                        pointBackgroundColor: COLOR_PRIMARY,

                        pointBorderWidth: 1,

                        lineTension: 0,

                        pointRadius: 4,

                    },
                    {
                        label: "indicator",

                        data: [0, 0, 0, 0],

                        backgroundColor: [
                            "rgb(200, 31, 15)",
                        ],

                        borderColor: [
                            "rgb(200, 31, 15)",
                        ],

                        borderWidth: 2,

                        fill: false,

                        pointBackgroundColor: "rgb(200, 31, 15)",

                    }
                ]
            },

            options: this.options,

        });
    }
}

// type: 'line',
// data: {
//     labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
//     datasets: [{
//         label: 'My First dataset',
//         backgroundColor: 'red',
//         borderColor: 'red',
//         data: [
//             40, 1, 34, 67, 12, 89, 12, 54, 19, 21
//         ],
//         fill: false,
//     }]
// },
// options: {
//     responsive: true,
//     title: {
//         display: true,
//         text: 'Chart.js Line Chart'
//     },
//     tooltips: {
//         mode: 'index',
//         intersect: false,
//     },
//     hover: {
//         mode: 'nearest',
//         intersect: true
//     },
//     scales: {
//         xAxes: [{
//             display: true,
//             scaleLabel: {
//                 display: true,
//                 labelString: 'Month'
//             }
//         }],
//         yAxes: [{
//             display: true,
//             scaleLabel: {
//                 display: true,
//                 labelString: 'Value'
//             }
//         }]
//     }
// }

// var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
// var config = {
// 	type: 'line',
// 	data: {
// 		labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
// 		datasets: [{
// 			label: 'My First dataset',
// 			backgroundColor: window.chartColors.red,
// 			borderColor: window.chartColors.red,
// 			data: [
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor()
// 			],
// 			fill: false,
// 		}, {
// 			label: 'My Second dataset',
// 			fill: false,
// 			backgroundColor: window.chartColors.blue,
// 			borderColor: window.chartColors.blue,
// 			data: [
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor()
// 			],
// 		}]
// 	},
// 	options: {
// 		responsive: true,
// 		title: {
// 			display: true,
// 			text: 'Chart.js Line Chart'
// 		},
// 		tooltips: {
// 			mode: 'index',
// 			intersect: false,
// 		},
// 		hover: {
// 			mode: 'nearest',
// 			intersect: true
// 		},
// 		scales: {
// 			xAxes: [{
// 				display: true,
// 				scaleLabel: {
// 					display: true,
// 					labelString: 'Month'
// 				}
// 			}],
// 			yAxes: [{
// 				display: true,
// 				scaleLabel: {
// 					display: true,
// 					labelString: 'Value'
// 				}
// 			}]
// 		}
// 	}
// };
//
// window.onload = function() {
// 	var ctx = document.getElementById('canvas').getContext('2d');
// 	window.myLine = new Chart(ctx, config);
// };
