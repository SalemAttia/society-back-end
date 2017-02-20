$(function () {

    $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=world-population.json&callback=?', function (data) {

        var mapData = Highcharts.geojson(Highcharts.maps['custom/world']);

        // Correct UK to GB in data
        $.each(data, function () {
            if (this.code === 'UK') {
                this.code = 'GB';
            }
        });

        $('#container').highcharts('Map', {
            chart : {
                borderWidth : 0
            },
            legend: {
                enabled: false,
            },
            title:{
    text:''
},
credits: {
      enabled: false
  },
            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    enabled:false
                }
            },

            series : [{
                name: 'Countries',
                mapData: mapData,
                color: '#E0E0E0',
                enableMouseTracking: false
            }, {
                type: 'mapbubble',
                mapData: mapData,
                name: 'Population 2013',
                joinBy: ['iso-a2', 'code'],
                data: data,
                minSize: 4,
                maxSize: '12%',
                tooltip: {
                    pointFormat: '{point.code}: {point.z} thousands'
                }
            }]
        });

    });
});