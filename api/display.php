<?php
include("connection.php");
$query = "SELECT * FROM monitoring";
$data = mysqli_query($conn,$query);

$numRows=mysqli_num_rows($data);
if(numRows>0)
{
	$result = mysqli_fetch_assoc($data);
}

else
{
	echo "table empty" ;
}

?>
<html>
  <head>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Temperature', 0],
          ['Humidity', 0],
        ]);

        var options = {
          width: 700, height: 300,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1,<?php echo $result['temperature']; ?> );
          chart.draw(data, options);
        }, 1000);
        setInterval(function() {
          data.setValue(1, 1,<?php echo $result['humidity']; ?>);
          chart.draw(data, options);
        }, 1000);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 400px; height: 120px;"></div>
  </body>
</html>
