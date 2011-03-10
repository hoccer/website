var HoccerGraph = {};

(function() {
  var showTooltip = function(x, y, contents) {
      $('<div id="tooltip">' + contents + '</div>').css( {
          position: 'absolute',
          display: 'none',
          top: y + 5,
          left: x + 5,
          border: '1px solid #fdd',
          padding: '2px',
          'background-color': '#fee',
          opacity: 0.80
      }).appendTo("body").fadeIn(200);
  };

  HoccerGraph.graphs = function() {
    var previousPoint = null;

    $(".graph").each(function(index) {
      var element = $(this),
              url = $(this).attr("data-url");

      var request = $.getJSON(url, function(data) {
        $.plot(element,
              data,
              {  grid: { hoverable: true, clickable: true, color : '#666666' },
                 xaxis: { mode: 'time' },
                 yaxis: { min: 0 },
                 legend: { position: 'sw' },
                 points: { show: true },
                 lines: { show: true }
               });
       });

       element.bind("plothover", function (event, pos, item) {
           if (item) {
             if (previousPoint != item.datapoint) {
               previousPoint = item.datapoint;

               $("#tooltip").remove();
               var x = new Date(item.datapoint[0]).toLocaleDateString(),
                   y = item.datapoint[1].toFixed(2);

               showTooltip(item.pageX, item.pageY,
                           item.series.label + " of " + x + " = " + y);
             }
           } else {
               $("#tooltip").remove();
               previousPoint = null;
           }
       });

    });
  };
})();
