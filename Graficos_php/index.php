<html>

<head>
    <title>Graficos em PHP - MySQL</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
    <script type="text/javascript">
        $(Document).ready(function(){
            $.ajax({
                url:"data.php",
                dataType: "JSON",
                success: function(result){
                    google.charts.load('current', {
                           'packges': ['corechart'] 
                    });
                    google.charts.setOnLoadCallback(function(){
                        drawChart(result);
                    });
                }
            });
        });

        function drawChart() {

        }
    </script>
</head>

<body>

    <div id="chart_div"></div>
</body>

</html>