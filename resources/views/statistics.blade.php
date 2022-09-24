@include('main')

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

<style>
    .chart {
        margin: auto;
        width: 65%;
        margin-top: -470px;
        padding: 10px;
        border-radius: 25px;
    }
</style>

<title>Statistics</title>

<div class="chart-container">
    <div class="pie-chart-container h-1/3 w-1/3 chart">
        <canvas id="pie-chart"></canvas>
    </div>
</div>

<script>
    $(function() {
        //get the pie chart canvas
        var cData = JSON.parse(`<?php echo $chart_data; ?>`);
        var ctx = $("#pie-chart");

        //pie chart data
        var data = {
            labels: cData.label,
            datasets: [{
                label: "Users Count",
                data: cData.data,
                backgroundColor: [
                    "#ffd45b",
                    "#faa41b",
                    "#f15b4c",
                    "#cc222b",
                    "#7ba591",
                    "#537c78",
                ],
                borderColor: [
                    "#ffd45b",
                    "#faa41b",
                    "#f15b4c",
                    "#cc222b",
                    "#7ba591",
                    "#537c78",
                ],

                borderWidth: [1, 1, 1, 1, 1, 1, 1]
            }]
        };

        //options
        var options = {
            responsive: true,
            title: {
                display: true,
                position: "top",
                text: "Expenses",
                fontSize: 18,
                fontColor: "#111"
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    fontSize: 16
                }
            }
        };

        //create Pie Chart class object
        var chart1 = new Chart(ctx, {
            type: "pie",
            data: data,
            options: options
        });

    });
</script>