(function ($) {
    "use strict";

    /* -----  Apex Line Chart ----- */
    var options = {
        chart: {
            height: 300,
            type: 'line',
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            }
        },
        colors: ['#04a9f5'],
        series: [{
            name: "عنوان",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        grid: {
            row: {
                colors: ['transparent', 'transparent'],
                opacity: .2
            },
            borderColor: 'rgba(0,0,0,0.05)'
        },
        xaxis: {
            categories: ['مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند', 'فروردین', 'تیر', 'مرداد'],
            axisBorder: {
                show: true,
                color: 'rgba(0,0,0,0.05)'
            },
            axisTicks: {
                show: true,
                color: 'rgba(0,0,0,0.05)'
            }
        }
    }
    var chart = new ApexCharts(
        document.querySelector("#apex-line-chart"),
        options
    );
    chart.render();
    /* -----  Apex Area Chart ----- */
    var options = {
        chart: {
            height: 300,
            type: 'area',
            toolbar: {
                show: false
            },
            zoom: {
                type: 'x',
                enabled: false,
                autoScaleYaxis: true
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
        },
        colors: ['#04a9f5', '#d4d8de'],
        series: [{
            name: 'داخلی',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'خارجی',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        legend: {
            show: false,
        },
        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],
            axisBorder: {
                show: true,
                color: 'rgba(0,0,0,0.05)'
            },
            axisTicks: {
                show: true,
                color: 'rgba(0,0,0,0.05)'
            }
        },
        grid: {
            row: {
                colors: ['transparent', 'transparent'],
                opacity: .2
            },
            borderColor: 'rgba(0,0,0,0.05)'
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        }
    }
    var chart = new ApexCharts(
        document.querySelector("#apex-area-chart"),
        options
    );
    chart.render();

    /* -----  Apex Bar Chart ----- */
    var options = {
        chart: {
            height: 300,
            type: 'bar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '25%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        colors: ['#04a9f5', '#d4d8de'],
        series: [{
            name: 'Net Profit',
            data: [44, 55, 57, 56, 61, 58]
        }, {
            name: 'عنوان',
            data: [76, 85, 101, 98, 87, 105]
        }],
        legend: {
            show: false,
        },
        xaxis: {
            categories: ['شنبه', 'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه'],
            axisBorder: {
                show: true,
                color: 'rgba(0,0,0,0.05)'
            },
            axisTicks: {
                show: true,
                color: 'rgba(0,0,0,0.05)'
            }
        },
        grid: {
            row: {
                colors: ['transparent', 'transparent'],
                opacity: .2
            },
            borderColor: 'rgba(0,0,0,0.05)'
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "تومان" + val + " دوشنبه"
                }
            }
        }
    }
    var chart = new ApexCharts(
        document.querySelector("#apex-bar-chart"),
        options
    );
    chart.render();

    /* Apex Stacked Bar Chart */
    var options = {
        chart: {
            height: 300,
            type: 'bar',
            stacked: true,
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '20%',
            },
        },
        colors: ['#04a9f5', '#d4d8de'],
        series: [{
            name: 'Earning',
            data: [5, 7, 8, 6, 7, 5, 6, 6, 7, 4]
        }, {
            name: 'پرداختی',
            data: [5, 4, 4, 5, 3, 4, 3, 5, 4, 6]
        }],
        xaxis: {
            type: 'datetime',
            categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT', '01/07/2011 GMT', '01/08/2011 GMT', '01/09/2011 GMT', '01/10/2011 GMT'],
            axisBorder: {
                show: true,
                color: 'rgba(0,0,0,0.05)'
            },
            axisTicks: {
                show: true,
                color: 'rgba(0,0,0,0.05)'
            }
        },
        grid: {
            row: {
                colors: ['transparent', 'transparent'],
                opacity: .2
            },
            borderColor: 'rgba(0,0,0,0.05)'
        },
        legend: {
            show: false
        },
        fill: {
            opacity: 1
        },
    }
    var chart = new ApexCharts(
        document.querySelector("#apex-stacked-bar-chart"),
        options
    );
    chart.render();
    /* -- Apex Pie Chart -- */
    var options = {
        chart: {
            type: 'donut',
            width: 250,
        },
        plotOptions: {
            pie: {
                donut: {
                    size: "85%"
                }
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#04a9f5', '#18d26b', '#d4d8de'],
        series: [60, 45, 25],
        labels: ['الکترونیک', 'لباس', 'غذا'],
        legend: {
            show: true,
            position: 'bottom'
        },
    }
    var chart = new ApexCharts(
        document.querySelector("#apex-pie-chart"),
        options
    );
    chart.render();
    /* Apex Radial Chart */
    var options = {
        chart: {
            height: 250,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                dataLabels: {
                    name: {
                        fontSize: '18px',
                        fontFamily: 'Muli',
                    },
                    value: {
                        fontSize: '16px',
                        fontFamily: 'Muli',
                    },
                    total: {
                        show: true,
                        label: 'Total',
                        formatter: function (w) {
                            return 249
                        }
                    }
                }
            }
        },
        colors: ['#04a9f5', '#18d26b', '#ffa800', '#d4d8de'],
        series: [44, 55, 67, 83],
        labels: ['خبر', 'موزیک', 'عنوان', 'عنوان'],
    }
    var chart = new ApexCharts(
        document.querySelector("#apex-radial-chart"),
        options
    );
    chart.render();


    var options = {
        chart: {
            height: 300,
            type: 'bar',
        },
        colors: ["#6610f2", "#7ee5e5", "#4d8af0"],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'عنوان',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
            name: 'عنوان',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
            name: 'عنوان',
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
        xaxis: {
            categories: ['مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند', 'فروردین', 'تیر', 'مرداد'],
        },
        yaxis: {
            title: {
                text: 'تومان (دوشنبه)'
            }
        },
        fill: {
            opacity: 1

        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "تومان" + val + " دوشنبه"
                }
            }
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#apex-bar"),
        options
    );

    chart.render();

    var options = {
        chart: {
            height: 300,
            type: 'bar',
            stacked: true,
            toolbar: {
                show: true
            },
            zoom: {
                enabled: true
            }
        },
        colors: ["#6610f2", "#7ee5e5", "#4d8af0"],
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: 'bottom',
                    offsetX: -10,
                    offsetY: 0
                }
            }
            }],
        plotOptions: {
            bar: {
                horizontal: false,
            },
        },
        series: [{
            name: 'محصول A',
            data: [44, 55, 41, 67, 22, 43]
            }, {
            name: 'محصول B',
            data: [13, 23, 20, 8, 13, 27]
            }, {
            name: 'محصول C',
            data: [11, 17, 15, 15, 21, 14]
            }, {
            name: 'محصول D',
            data: [21, 7, 25, 13, 22, 8]
            }],
        xaxis: {
            type: 'datetime',
            categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT'],
        },
        legend: {
            position: 'right',
            offsetY: 40
        },
        fill: {
            opacity: 1
        },
    }

    var chart = new ApexCharts(
        document.querySelector("#apexStacked"),
        options
    );

    chart.render();


    var options = {
        annotations: {
            points: [{
                x: 'موز',
                seriesIndex: 0,
                label: {
                    borderColor: '#775DD0',
                    offsetY: 0,
                    style: {
                        color: '#fff',
                        background: '#775DD0',
                    },
                    text: 'عنوان',
                }
        }]
        },
        chart: {
            height: 300,
            type: 'bar',
        },
        colors: ["#6610f2", "#7ee5e5", "#4d8af0"],
        plotOptions: {
            bar: {
                columnWidth: '50%',
                endingShape: 'rounded'
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 2
        },
        series: [{
            name: 'سرویس',
            data: [44, 55, 41, 67, 22, 43, 21, 33, 45, 31, 87, 65, 35]
      }],
        grid: {
            row: {
                colors: ['#fff', '#f2f2f2']
            }
        },
        xaxis: {
            labels: {
                rotate: -45
            },
            categories: ['هلو', 'نارنگی', 'پرتغال', 'سیب', 'نارگیل', 'موز',
          'عنوان', 'عنوان', 'عنوان', 'عنوان', 'عنوان', 'طالبی', 'هندوانه'
        ],
        },
        yaxis: {
            title: {
                text: 'سرویس',
            },

        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: "horizontal",
                shadeIntensity: 0.25,
                gradientToColors: undefined,
                inverseColors: true,
                opacityFrom: 0.85,
                opacityTo: 0.85,
                stops: [50, 0, 100]
            },
        },

    }

    var chart = new ApexCharts(
        document.querySelector("#apexRotated"),
        options
    );

    chart.render();


    var colors = ['#6610f2', '#00E396', '#FEB019', '#FF4560', '#775DD0', '#546E7A', '#26a69a', '#D10CE8'];
    var options = {
        chart: {
            height: 300,
            type: 'bar',
            events: {
                click: function (chart, w, e) {
                    console.log(chart, w, e)
                }
            },
        },
        colors: colors,
        plotOptions: {
            bar: {
                columnWidth: '45%',
                distributed: true
            }
        },
        dataLabels: {
            enabled: false,
        },
        series: [{
            data: [21, 22, 10, 28, 16, 21, 13, 30]
            }],
        xaxis: {
            categories: ['محمد', 'علی', 'هادی', 'امیر', 'نیلوفر', 'سارا', 'حسن', 'حسین'],
            labels: {
                style: {
                    colors: colors,
                    fontSize: '14px'
                }
            }
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#apexDistributed"),
        options
    );

    chart.render();


    // Apex Line chart start
    var options = {
        chart: {
            height: 300,
            type: "line",
            parentHeightOffset: 0
        },
        colors: ["#6610f2", "#7ee5e5", "#4d8af0"],
        grid: {
            borderColor: "rgba(77, 138, 240, .1)",
            padding: {
                bottom: -15
            }
        },
        series: [
            {
                name: "عنوان a",
                data: [45, 52, 38, 45]
      },
            {
                name: "عنوان b",
                data: [12, 42, 68, 33]
      },
            {
                name: "عنوان c",
                data: [8, 32, 48, 53]
      }
    ],
        xaxis: {
            type: "datetime",
            categories: ["2015", "2016", "2017", "2018"]
        },
        markers: {
            size: 0
        },
        stroke: {
            width: 3,
            curve: "smooth",
            lineCap: "round"
        },
        legend: {
            show: true,
            position: "top",
            horizontalAlign: 'left',
            containerMargin: {
                top: 30
            }
        },
        responsive: [
            {
                breakpoint: 500,
                options: {
                    legend: {
                        fontSize: "11px"
                    }
                }
      }
    ]
    };
    var apexlinechartChart = new ApexCharts(document.querySelector("#apexlinechart"), options);
    apexlinechartChart.render();
    // Apex Line chart end

    // Apex Bar chart start
    var options = {
        chart: {
            type: 'bar',
            height: '320',
            parentHeightOffset: 0
        },
        colors: ["#6610f2"],
        grid: {
            borderColor: "rgba(77, 138, 240, .1)",
            padding: {
                bottom: -15
            }
        },
        series: [{
            name: 'فروش',
            data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
    }],
        xaxis: {
            type: 'datetime',
            categories: ['01/01/1991', '01/01/1992', '01/01/1993', '01/01/1994', '01/01/1995', '01/01/1996', '01/01/1997', '01/01/1998', '01/01/1999']
        }
    }

    var apexbarchartChart = new ApexCharts(document.querySelector("#apexbarchart"), options);

    apexbarchartChart.render();
    // Apex Bar chart end

    // Apex Area chart start
    var options = {
        chart: {
            type: "area",
            height: 300,
            parentHeightOffset: 0,
            foreColor: "#999",
            stacked: true,
            dropShadow: {
                enabled: true,
                enabledSeries: [0],
                top: -2,
                left: 2,
                blur: 5,
                opacity: 0.06
            }
        },
        colors: ["#6610f2", "#7ee5e5"],
        stroke: {
            curve: "smooth",
            width: 3
        },
        dataLabels: {
            enabled: false
        },
        series: [{
            name: 'عنوان ',
            data: generateDayWiseTimeSeries(0, 18)
    }, {
            name: 'عنوان ',
            data: generateDayWiseTimeSeries(1, 18)
    }],
        markers: {
            size: 0,
            strokeColor: "#fff",
            strokeWidth: 3,
            strokeOpacity: 1,
            fillOpacity: 1,
            hover: {
                size: 6
            }
        },
        xaxis: {
            type: "datetime",
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            }
        },
        yaxis: {
            tickAmount: 4,
            min: 0,
            labels: {
                offsetX: 24,
                offsetY: -5
            },
            tooltip: {
                enabled: true
            }
        },
        grid: {
            borderColor: "rgba(77, 138, 240, .1)",
            padding: {
                left: -5,
                right: 5,
                bottom: -15
            }
        },
        tooltip: {
            x: {
                format: "dd MMM yyyy"
            },
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left'
        },
        fill: {
            type: "solid",
            fillOpacity: 0.7
        }
    };

    var chart = new ApexCharts(document.querySelector("#apexareachart"), options);

    chart.render();

    function generateDayWiseTimeSeries(s, count) {
        var values = [[
      4, 3, 10, 9, 29, 19, 25, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5
    ], [
      2, 3, 8, 7, 22, 16, 23, 7, 11, 5, 12, 5, 10, 4, 15, 2, 6, 2
    ]];
        var i = 0;
        var series = [];
        var x = new Date("11 Nov 2012").getTime();
        while (i < count) {
            series.push([x, values[s][i]]);
            x += 86400000;
            i++;
        }
        return series;
    }
    // Apex Area chart end

    // Apex Donut chart start
    var options = {
        chart: {
            height: 300,
            type: "donut"
        },
        stroke: {
            colors: ['rgba(0,0,0,0)']
        },
        colors: ["#6610f2", "#7ee5e5", "#4d8af0", "#fbbc06"],
        legend: {
            position: 'top',
            horizontalAlign: 'center'
        },
        dataLabels: {
            enabled: false
        },
        series: [44, 55, 13, 33]
    };

    var chart = new ApexCharts(document.querySelector("#apexdonutchart"), options);

    chart.render();
    // Apex Donut chart start

    // Apex Pie chart end
    var options = {
        chart: {
            height: 300,
            type: "pie"
        },
        colors: ["#6610f2", "#7ee5e5", "#4d8af0", "#fbbc06"],
        legend: {
            position: 'top',
            horizontalAlign: 'center'
        },
        stroke: {
            colors: ['rgba(0,0,0,0)']
        },
        dataLabels: {
            enabled: false
        },
        series: [44, 55, 13, 33]
    };

    var chart = new ApexCharts(document.querySelector("#apexpiechart"), options);

    chart.render();
    // Apex Pie chart end

    // Apex Mixed chart start
    var options = {
        chart: {
            height: 300,
            type: 'line',
            stacked: false,
            parentHeightOffset: 0
        },
        grid: {
            borderColor: "rgba(77, 138, 240, .1)",
            padding: {
                bottom: -15
            }
        },
        stroke: {
            width: [0, 2, 5],
            curve: 'smooth'
        },
        plotOptions: {
            bar: {
                columnWidth: '50%'
            }
        },
        series: [{
            name: 'تیم A',
            type: 'column',
            data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
    }, {
            name: 'تیم B',
            type: 'area',
            data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
    }],
        legend: {
            position: 'top',
            horizontalAlign: 'left'
        },
        fill: {
            opacity: [0.85, 0.25, 1],
            gradient: {
                inverseColors: false,
                shade: 'light',
                type: "vertical",
                opacityFrom: 0.85,
                opacityTo: 0.55,
                stops: [0, 100, 100, 100]
            }
        },
        labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003', '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'],
        markers: {
            size: 0
        },
        xaxis: {
            type: 'datetime'
        },
        yaxis: {
            title: {
                text: 'Points',
            },
        },
        tooltip: {
            shared: true,
            intersect: false,
            y: [{
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " امتیاز";
                    }
                    return y;
                }
      }, {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(2) + " تومان";
                    }
                    return y;
                }
      }]
        }
    }
    var chart = new ApexCharts(
        document.querySelector("#apexmixedchart"),
        options
    );
    chart.render();
    // Apex Mixed chart end

    // Apex Radar chart start
    var options = {
        chart: {
            height: 300,
            type: 'radar',
            parentHeightOffset: 0,
        },
        colors: ["#6610f2", "#7ee5e5", "#4d8af0"],
        grid: {
            borderColor: "rgba(77, 138, 240, .1)",
            padding: {
                bottom: -15
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left'
        },
        series: [{
            name: 'سری 1',
            data: [80, 50, 30, 40, 100, 20],
    }, {
            name: 'سری 2',
            data: [20, 30, 40, 80, 20, 80],
    }, {
            name: 'سری 3',
            data: [44, 76, 78, 13, 43, 10],
    }],
        stroke: {
            width: 0
        },
        fill: {
            opacity: 0.4
        },
        markers: {
            size: 0
        },
        labels: ['2011', '2012', '2013', '2014', '2015', '2016']
    }

    var chart = new ApexCharts(
        document.querySelector("#apexradarchart"),
        options
    );

    chart.render();
    // Apex Radar chart end

    // Apex Radialbar chart start
    var options = {
        chart: {
            height: 300,
            type: "radialBar",
            parentHeightOffset: 0
        },
        colors: ["#6610f2", "#7ee5e5", "#4d8af0", "#fbbc06"],
        grid: {
            borderColor: "rgba(77, 138, 240, .1)",
            padding: {
                top: 10
            }
        },
        plotOptions: {
            circle: {
                dataLabels: {
                    showOn: "hover"
                }
            }
        },
        series: [44, 55, 67, 83],
        labels: ["سیب", "پرتغال", "موز", "کیوی"]
    };

    var chart = new ApexCharts(document.querySelector("#apexRadialBarchart"), options);

    chart.render();

    var chartAreaBounds = chart.w.globals.dom.baseEl.querySelector('.apexcharts-inner').getBoundingClientRect();

    chart.addText({
        x: chartAreaBounds.width / 2,
        y: 10,
        text: "0",
        fontSize: 16,
        textAnchor: "middle"
    });

    chart.addText({
        x: chartAreaBounds.width - 5,
        y: chartAreaBounds.height / 2 + 10,
        text: "90",
        fontSize: 16,
        textAnchor: "start"
    });

    chart.addText({
        x: chartAreaBounds.width / 2,
        y: chartAreaBounds.height + 30,
        text: "180",
        fontSize: 16,
        textAnchor: "middle"
    });

    chart.addText({
        x: 5,
        y: chartAreaBounds.height / 2 + 10,
        text: "270",
        fontSize: 16,
        textAnchor: "end"
    });
    // Apex Radialbar chart end

    // Apex Scatter chart start
    var options = {
        chart: {
            height: 300,
            type: 'scatter',
            parentHeightOffset: 0,
            zoom: {
                enabled: true,
                type: 'xy'
            }
        },
        colors: ["#6610f2", "#7ee5e5", "#4d8af0"],
        grid: {
            borderColor: "rgba(77, 138, 240, .1)",
            padding: {
                bottom: -15
            }
        },
        stroke: {
            colors: ['rgba(0,0,0,0)']
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left'
        },
        series: [{
            name: "مثال A",
            data: [
      [16.4, 5.4], [21.7, 2], [25.4, 3], [19, 2], [10.9, 1], [13.6, 3.2], [10.9, 7.4], [10.9, 0], [10.9, 8.2], [16.4, 0], [16.4, 1.8], [13.6, 0.3], [13.6, 0], [29.9, 0], [27.1, 2.3], [16.4, 0], [13.6, 3.7], [10.9, 5.2], [16.4, 6.5], [10.9, 0], [24.5, 7.1], [10.9, 0], [8.1, 4.7], [19, 0], [21.7, 1.8], [27.1, 0], [24.5, 0], [27.1, 0], [29.9, 1.5], [27.1, 0.8], [22.1, 2]]
    }, {
            name: "مثال B",
            data: [
      [36.4, 13.4], [1.7, 11], [5.4, 8], [9, 17], [1.9, 4], [3.6, 12.2], [1.9, 14.4], [1.9, 9], [1.9, 13.2], [1.4, 7], [6.4, 8.8], [3.6, 4.3], [1.6, 10], [9.9, 2], [7.1, 15], [1.4, 0], [3.6, 13.7], [1.9, 15.2], [6.4, 16.5], [0.9, 10], [4.5, 17.1], [10.9, 10], [0.1, 14.7], [9, 10], [12.7, 11.8], [2.1, 10], [2.5, 10], [27.1, 10], [2.9, 11.5], [7.1, 10.8], [2.1, 12]]
    }, {
            name: "مثال C",
            data: [
      [21.7, 3], [23.6, 3.5], [24.6, 3], [29.9, 3], [21.7, 20], [23, 2], [10.9, 3], [28, 4], [27.1, 0.3], [16.4, 4], [13.6, 0], [19, 5], [22.4, 3], [24.5, 3], [32.6, 3], [27.1, 4], [29.6, 6], [31.6, 8], [21.6, 5], [20.9, 4], [22.4, 0], [32.6, 10.3], [29.7, 20.8], [24.5, 0.8], [21.4, 0], [21.7, 6.9], [28.6, 7.7], [15.4, 0], [18.1, 0], [33.4, 0], [16.4, 0]]
    }],
        xaxis: {
            tickAmount: 10,
            labels: {
                formatter: function (val) {
                    return parseFloat(val).toFixed(1)
                }
            }
        },
        yaxis: {
            tickAmount: 7
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#apexscatterchart"),
        options
    );

    chart.render();
    // Apex Scatter chart end

    // Apex Heat chart start
    function generateData(count, yrange) {
        var i = 0;
        var series = [];
        while (i < count) {
            var x = 'w' + (i + 1).toString();
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

            series.push({
                x: x,
                y: y
            });
            i++;
        }
        return series;
    }


    var options = {
        chart: {
            height: 300,
            type: 'heatmap',
            parentHeightOffset: 0
        },
        grid: {
            borderColor: "rgba(77, 138, 240, .1)",
            padding: {
                bottom: -15
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: ["#008FFB"],
        series: [{
                name: 'عنوان 1',
                data: generateData(18, {
                    min: 0,
                    max: 90
                })
      },
            {
                name: 'عنوان 2',
                data: generateData(18, {
                    min: 0,
                    max: 90
                })
      },
            {
                name: 'عنوان 3',
                data: generateData(18, {
                    min: 0,
                    max: 90
                })
      },
            {
                name: 'عنوان 4',
                data: generateData(18, {
                    min: 0,
                    max: 90
                })
      },
            {
                name: 'عنوان 5',
                data: generateData(18, {
                    min: 0,
                    max: 90
                })
      },
            {
                name: 'عنوان 6',
                data: generateData(18, {
                    min: 0,
                    max: 90
                })
      },
            {
                name: 'عنوان 7',
                data: generateData(18, {
                    min: 0,
                    max: 90
                })
      },
            {
                name: 'عنوان 8',
                data: generateData(18, {
                    min: 0,
                    max: 90
                })
      },
            {
                name: 'عنوان 9',
                data: generateData(18, {
                    min: 0,
                    max: 90
                })
      }
    ],
        title: {
            text: 'HeatMap Chart (Single color)'
        },

    }

    var chart = new ApexCharts(
        document.querySelector("#HeatMapchart"),
        options
    );

    chart.render();
    // Apex Heat chart end

})(jQuery);