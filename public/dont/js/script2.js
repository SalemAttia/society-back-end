var data = [
   {
    value: 61,
    color: "#1781e0",
    label: "RAM"
}, {
    value: 25,
    color: "#153f78",
    label: "80"
}];

var options = {
    segmentShowStroke: false,
    animateRotate: true,
    animateScale: true,
    percentageInnerCutout: 50,
    tooltipTemplate: "<%= value %>%"
} 

var ctx = document.getElementById("myChartb").getContext("2d");

var myChart = new Chart(ctx).Doughnut(data, options);

// Note - tooltipTemplate is for the string that shows in the tooltip

// legendTemplate is if you want to generate an HTML legend for the chart and use somewhere else on the page

// e.g:

document.getElementById('js-legendb').innerHTML = myChart.generateLegend();