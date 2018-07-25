
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.11/angular.min.js"></script>
  <script src="/js/app.js"></script>

<script type="application/javascript" src="/js/controller.js"></script>



<script>
   $.getJSON('https://r.20-twenty.online/reporting/worldwide/4', function (data) {

    // Initiate the chart
    Highcharts.mapChart('worldmap', {
chart:{
borderWidth: 0,
            map: 'custom/world',
            backgroundColor:'rgba(255, 255, 255, 0.0)'
},
        title: {
            text: 'Global Downloads',
            color:'black'
        },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },
colorAxis: {
            min: 1,
            type: 'logarithmic',
            minColor: '#39cccc',
            maxColor: '#00a65a',
            stops: [
                [0, '#39cccc'],
                [0.67, '#17a2b8'],
                [1, '#00a65a']
            ]
        },
        series: [{
            data: data,
            mapData: Highcharts.maps['custom/world'],
            joinBy: ['iso-a2', 'code'],
            name: 'Total Downloads',
                    allAreas: false,

            borderColor: 'white',
            borderWidth: 0.2,
            states: {
                hover: {
                    borderWidth: 1
                }
            },
            tooltip: {
                valueSuffix: ' downloads'
            }
        }]
    });
});
</script>

<script>

Highcharts.chart('revenue-chart', {
    chart: {
        type: 'areaspline',
        backgroundColor:'rgba(255, 255, 255, 0.0)'
    },
    title: {
        text: 'Revenue by day'
    },
     credits: {
        enabled: false
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    xAxis: {
        lineWidth: 0,
   minorGridLineWidth: 0,
         majorGridLineWidth: 0,

   lineColor: 'transparent',
        categories: [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        ],
        plotBands: [{ // visualize the weekend
            from: 4.5,
            to: 6.5,
            color: 'rgba(68, 170, 213, .2)'
        }]
    },
    yAxis: {
        gridLineColor: 'transparent',
        title: {
            text: 'Fruit units'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' units'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        },
                            textShadow: false 
    },
    series: [{
        name: 'John',
        data: [3, 4, 3, 5, 4, 10, 12]
    }, {
        name: 'Jane',
        data: [1, 3, 4, 3, 3, 5, 4]
    }]
});
</script>

<script>

Highcharts.chart('view-chart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        backgroundColor:'rgba(255, 255, 255, 0.0)'
    },
    title: {
        text: 'Views by Devices and medium'
    },
     credits: {
        enabled: false
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color:  'black',
                                        textOutline: false,
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Sogou Explorer',
            y: 1.64
        }, {
            name: 'Opera',
            y: 1.6
        }, {
            name: 'QQ',
            y: 1.2
        }, {
            name: 'Other',
            y: 2.61
        }]
    }]
});
</script>

<script>

Highcharts.chart('rpm-chart', {
    chart: {
        type: 'spline',
        backgroundColor:'rgba(255, 255, 255, 0.0)'
    },
    title: {
        text: 'Revenue by week'
    },
    subtitle: {
        text: 'Revenue broken down by week'
    },
     credits: {
        enabled: false
    },
    xAxis: {
        lineWidth: 0,
   minorGridLineWidth: 0,
      majorGridLineWidth: 0,

   lineColor: 'transparent',
        type: 'datetime',
        dateTimeLabelFormats: { // don't display the dummy year
            month: '%e. %b',
            year: '%b'
        },
        title: {
            text: 'Date'
        }
    },
    yAxis: {
        gridLineColor: 'transparent',
        title: {
            text: 'Snow depth (m)'
        },
        min: 0
    },
    tooltip: {
        headerFormat: '<b>{series.name}</b><br>',
        pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
    },

    plotOptions: {
        spline: {
            marker: {
                enabled: true,
                                    textShadow: false 
            }
        }
    },

    colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

    // Define the data points. All series have a dummy year
    // of 1970/71 in order to be compared on the same x axis. Note
    // that in JavaScript, months start at 0 for January, 1 for February etc.
    series: [{
        name: "Winter 2014-2015",
        data: [
            [Date.UTC(1970, 10, 25), 0],
            [Date.UTC(1970, 11,  6), 0.25],
            [Date.UTC(1970, 11, 20), 1.41],
            [Date.UTC(1970, 11, 25), 1.64],
            [Date.UTC(1971, 0,  4), 1.6],
            [Date.UTC(1971, 0, 17), 2.55],
            [Date.UTC(1971, 0, 24), 2.62],
            [Date.UTC(1971, 1,  4), 2.5],
            [Date.UTC(1971, 1, 14), 2.42],
            [Date.UTC(1971, 2,  6), 2.74],
            [Date.UTC(1971, 2, 14), 2.62],
            [Date.UTC(1971, 2, 24), 2.6],
            [Date.UTC(1971, 3,  1), 2.81],
            [Date.UTC(1971, 3, 11), 2.63],
            [Date.UTC(1971, 3, 27), 2.77],
            [Date.UTC(1971, 4,  4), 2.68],
            [Date.UTC(1971, 4,  9), 2.56],
            [Date.UTC(1971, 4, 14), 2.39],
            [Date.UTC(1971, 4, 19), 2.3],
            [Date.UTC(1971, 5,  4), 2],
            [Date.UTC(1971, 5,  9), 1.85],
            [Date.UTC(1971, 5, 14), 1.49],
            [Date.UTC(1971, 5, 19), 1.27],
            [Date.UTC(1971, 5, 24), 0.99],
            [Date.UTC(1971, 5, 29), 0.67],
            [Date.UTC(1971, 6,  3), 0.18],
            [Date.UTC(1971, 6,  4), 0]
        ]
    }, {
        name: "Winter 2015-2016",
        data: [
            [Date.UTC(1970, 10,  9), 0],
            [Date.UTC(1970, 10, 15), 0.23],
            [Date.UTC(1970, 10, 20), 0.25],
            [Date.UTC(1970, 10, 25), 0.23],
            [Date.UTC(1970, 10, 30), 0.39],
            [Date.UTC(1970, 11,  5), 0.41],
            [Date.UTC(1970, 11, 10), 0.59],
            [Date.UTC(1970, 11, 15), 0.73],
            [Date.UTC(1970, 11, 20), 0.41],
            [Date.UTC(1970, 11, 25), 1.07],
            [Date.UTC(1970, 11, 30), 0.88],
            [Date.UTC(1971, 0,  5), 0.85],
            [Date.UTC(1971, 0, 11), 0.89],
            [Date.UTC(1971, 0, 17), 1.04],
            [Date.UTC(1971, 0, 20), 1.02],
            [Date.UTC(1971, 0, 25), 1.03],
            [Date.UTC(1971, 0, 30), 1.39],
            [Date.UTC(1971, 1,  5), 1.77],
            [Date.UTC(1971, 1, 26), 2.12],
            [Date.UTC(1971, 3, 19), 2.1],
            [Date.UTC(1971, 4,  9), 1.7],
            [Date.UTC(1971, 4, 29), 0.85],
            [Date.UTC(1971, 5,  7), 0]
        ]
    }, {
        name: "Winter 2016-2017",
        data: [
            [Date.UTC(1970, 9, 15), 0],
            [Date.UTC(1970, 9, 31), 0.09],
            [Date.UTC(1970, 10,  7), 0.17],
            [Date.UTC(1970, 10, 10), 0.1],
            [Date.UTC(1970, 11, 10), 0.1],
            [Date.UTC(1970, 11, 13), 0.1],
            [Date.UTC(1970, 11, 16), 0.11],
            [Date.UTC(1970, 11, 19), 0.11],
            [Date.UTC(1970, 11, 22), 0.08],
            [Date.UTC(1970, 11, 25), 0.23],
            [Date.UTC(1970, 11, 28), 0.37],
            [Date.UTC(1971, 0, 16), 0.68],
            [Date.UTC(1971, 0, 19), 0.55],
            [Date.UTC(1971, 0, 22), 0.4],
            [Date.UTC(1971, 0, 25), 0.4],
            [Date.UTC(1971, 0, 28), 0.37],
            [Date.UTC(1971, 0, 31), 0.43],
            [Date.UTC(1971, 1,  4), 0.42],
            [Date.UTC(1971, 1,  7), 0.39],
            [Date.UTC(1971, 1, 10), 0.39],
            [Date.UTC(1971, 1, 13), 0.39],
            [Date.UTC(1971, 1, 16), 0.39],
            [Date.UTC(1971, 1, 19), 0.35],
            [Date.UTC(1971, 1, 22), 0.45],
            [Date.UTC(1971, 1, 25), 0.62],
            [Date.UTC(1971, 1, 28), 0.68],
            [Date.UTC(1971, 2,  4), 0.68],
            [Date.UTC(1971, 2,  7), 0.65],
            [Date.UTC(1971, 2, 10), 0.65],
            [Date.UTC(1971, 2, 13), 0.75],
            [Date.UTC(1971, 2, 16), 0.86],
            [Date.UTC(1971, 2, 19), 1.14],
            [Date.UTC(1971, 2, 22), 1.2],
            [Date.UTC(1971, 2, 25), 1.27],
            [Date.UTC(1971, 2, 27), 1.12],
            [Date.UTC(1971, 2, 30), 0.98],
            [Date.UTC(1971, 3,  3), 0.85],
            [Date.UTC(1971, 3,  6), 1.04],
            [Date.UTC(1971, 3,  9), 0.92],
            [Date.UTC(1971, 3, 12), 0.96],
            [Date.UTC(1971, 3, 15), 0.94],
            [Date.UTC(1971, 3, 18), 0.99],
            [Date.UTC(1971, 3, 21), 0.96],
            [Date.UTC(1971, 3, 24), 1.15],
            [Date.UTC(1971, 3, 27), 1.18],
            [Date.UTC(1971, 3, 30), 1.12],
            [Date.UTC(1971, 4,  3), 1.06],
            [Date.UTC(1971, 4,  6), 0.96],
            [Date.UTC(1971, 4,  9), 0.87],
            [Date.UTC(1971, 4, 12), 0.88],
            [Date.UTC(1971, 4, 15), 0.79],
            [Date.UTC(1971, 4, 18), 0.54],
            [Date.UTC(1971, 4, 21), 0.34],
            [Date.UTC(1971, 4, 25), 0]
        ]
    }]
});
</script>