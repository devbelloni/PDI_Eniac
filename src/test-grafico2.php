<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Pizza</title>
    <style>
        body {
            background-color: black;
        }

        #Bar {
            max-width: 500px;
            max-height: 500px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">

        var email_institucional = ''; // Variável global para armazenar o email institucional

        // Função para buscar e atribuir o email institucional
        function fetchEmail() {
            $.ajax({
                url: 'http://localhost/Final_PDI_Servidor/controllers/API_Controller_Email.php', // Substitua pela URL correta para buscar o email
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    console.log('Resposta completa:', response); // Exibe a resposta completa no console

                    if (response.status === 200 && response.data && response.data.email_institucional) {
                        email_institucional = response.data.email_institucional; // Atribui o email retornado à variável global
                        console.log('Email Institucional:', email_institucional); // Exibe o email no console
                    } else {
                        console.error('Formato de resposta inválido ou email não encontrado.');
                    }
                },
                error: function (error) {
                    console.error('Erro ao buscar o email institucional:', error);
                }
            });
        }

        // Chama a função para buscar e atribuir o email institucional
        fetchEmail();

        function getChartData() {

            $.ajax({
                url: 'http://localhost/Final_PDI_Servidor/controllers/API_Controller_Grafico.php?id=' + email_institucional,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log('Dados recebidos:', data); // Verifique os dados recebidos no console

                    drawChart(data);
                },
                error: function (error) {
                    console.error('Erro ao buscar os dados:', error);
                }
            });
        }

        function drawChart(data) {
            var ctx = document.getElementById('chart').getContext('2d');

            var chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    // labels: Object.keys(data.data),

                    labels: ['Resiliência', 'Relacionamento Interpessoal', 'Comunicação Assertiva', 'Adaptabilidade e Flexibilidade', 'Desenvolvimento e Gerenciamento', 'Criatividade e Inovação'],
                    datasets: [{
                        data: Object.values(data.data),
                        backgroundColor: [
                            'red', 'blue', 'green', 'yellow', 'purple', 'orange' // Cores para os segmentos
                        ]
                    }]
                },
                options: {
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += context.parsed + ' %';
                                    return label;
                                }
                            }
                        }
                    }
                }
            });
        }


        // Chamada para buscar e definir o email institucional

        setInterval(getChartData, 5000); // Atualiza automaticamente a cada 5 segundos
    </script>
</head>

<body>
    <div id="Bar"><canvas id="chart" width="70" height="70"></canvas></div>

</body>

</html>