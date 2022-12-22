'use strict';

$(document).ready(function() {

	// Revenue Chart

	if($('#apexcharts-revenue').length > 0) {
		var options = {
			chart: {
				height: 350,
				type: "area",
				toolbar: {
					show: true
				},
			},
			dataLabels: {
				enabled: true
			},
			stroke: {
				curve: "smooth"
			},
			series: [{
				name: "Income in $",
				color: '#FFB058',
				data: [145, 601, 752, 541, 442, 842, 730, 810, 988, 922, 678, 675]
			}],
			xaxis: {
				categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			}
		}
		var chart = new ApexCharts(
			document.querySelector("#apexcharts-revenue"),
			options
		);
		chart.render();
	}

});
