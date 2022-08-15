(function($) {
    /* "use strict" */

 var dzChartlist = function(){

	var withAreaChart = function(){
	 //Line chart with area

	  new Chartist.Line('#chart-with-area', {
		labels: [1, 2, 3, 4, 5, 6, 7, 8, 9],
		series: [
		  [1, 9, 7, 8, 5, 3, 5, 4, 3]
		]
	  }, {
		low: 0,
		showArea: true,
		fullWidth: true,
		plugins: [
		  Chartist.plugins.tooltip()
		]
	  });

	}

	/* Function ============ */
		return {
			init:function(){
			},


			load:function(){
				withAreaChart();
			},

			resize:function(){
				withAreaChart();
			}
		}

	}();

	jQuery(document).ready(function(){
	});

	jQuery(window).on('load',function(){
		dzChartlist.load();
	});

	jQuery(window).on('resize',function(){
		dzChartlist.resize();
	});

})(jQuery);
