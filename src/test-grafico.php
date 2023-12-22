<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
        }
    </style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(getChartData);

        function getChartData() {
            $.ajax({
                url: 'http://localhost/Final_PDI_Servidor/controllers/API_Controller_Grafico.php?id=218322023@eniac.edu.br', // Substitua pelo caminho correto do seu arquivo PHP
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log('Dados recebidos:', data); // Verifique os dados recebidos no console

                    var chartData = [];
                    chartData.push(['Skill', 'Quantity']);

                    for (var skill in data.data) {
                        if (data.data.hasOwnProperty(skill)) {
                            chartData.push([skill, data.data[skill]]);
                        }
                    }

                    drawChart(chartData);
                },
                error: function (error) {
                    console.error('Erro ao buscar os dados:', error);
                }
            });
        }

        function drawChart(data) {
            var chartData = google.visualization.arrayToDataTable(data);
            console.log('Dados convertidos para o formato do gráfico:', chartData); // Verifique os dados convertidos para o formato do gráfico

            var options = {
                title: '',
                is3D: true,
                // Aqui você pode adicionar as opções do gráfico, se necessário
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

            chart.draw(chartData, options);

        }

        setInterval(getChartData, 5000); // Atualiza automaticamente a cada 5 segundos
    </script>
</head>

<body>
    <div id="chart_div" style="width: 500px; height: 300px;"></div>

</body>

</html>