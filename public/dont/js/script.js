var data = [
   {
    value: 70,
    color: "#1781e0",
    label: "Totalclicks"
}, {
    value: 30,
    color: "#153f78",
    label: "Conversion"
}];
 
var options = {
    segmentShowStroke: false,
    animateRotate: true,
    animateScale: true,
    percentageInnerCutout: 50,
    tooltipTemplate: "<%= value %>%"
}

var ctx = document.getElementById("myChart").getContext("2d");

var myChart = new Chart(ctx).Doughnut(data, options);

// Note - tooltipTemplate is for the string that shows in the tooltip

// legendTemplate is if you want to generate an HTML legend for the chart and use somewhere else on the page

// e.g:

document.getElementById('js-legend').innerHTML = myChart.generateLegend();