<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/10/18
 * Time: 1:36 PM
 */
-->
<!-- JS API-->
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Posts', <?php echo 2; ?>],
            ['Comments', <?php echo 5; ?>],
            ['Pictures', <?php echo 8; ?>],
            ['Videos', <?php echo 1; ?>]
        ]);
        var options = {
            title: 'Activity',
            backgroundColor: 'transparent',
            is3D: true,
            pieSliceText: "none"
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
<!-- JS API-->
