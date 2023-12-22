<?php 

namespace chillerlan\QRCodeExamples;

use chillerlan\QRCode\{QRCode, QROptions};

include_once("../sql/db_conexao_dgh.php");
// include_once("../controllers/controllerCMOV.php");
include '../vendor/autoload.php';

session_start();

$email_institucional = $_SESSION['email_institucional'];


$usuario['idcadastro_pdi'] = $_SESSION['idcadastro_pdi'] ;

$sql = sprintf("SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '" . $_SESSION['email_institucional'] . "'");
$result = mysqli_query($coat, $sql);
$obj = mysqli_fetch_assoc($result);

$consulta = sprintf("SELECT nome_completo FROM cadastro_pdi_2 WHERE email_institucional = '" . $_SESSION['email_institucional'] . "'"); // Substitua pela sua consulta SQL

// Execute a consulta e obtenha o resultado do banco de dados
$resultado = mysqli_query($coat,$consulta); // Substitua "$conexao" pela sua conexão ao banco de dados
if ($resultado && mysqli_num_rows($resultado) > 0) {
    $dados = mysqli_fetch_assoc($resultado);
    // Atribua o valor obtido à variável de sessão
    $_SESSION['nome_completo'] = $dados['nome_completo'];
    // Salve as alterações na variável de sessão
    session_write_close();
    // Exemplo de saída
//    echo 'Variável de sessão alterada com sucesso!';
} else {
    // Erro ao consultar o banco de dados
    echo 'Erro ao obter dados do banco de dados!'; 
}

if((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email_institucional'] );
    unset($_SESSION['senha']);
    unset($_SESSION['idcadastro_pdi']);
    header('Location: index.php');
    session_write_close();

}
$logado = $_SESSION['idcadastro_pdi'];

//busca da lupa 
if(!empty($_GET['search'])){
    $data = $_GET['search'];
    $sql = ("SELECT * FROM cadastro_pdi_2 where idcadastro_pdi  LIKE '%$data%' or nome LIKE '%$data%' or email_institucional LIKE '%$data%' ORDER BY idusuarios ASC");

}else{
  $sql = ("SELECT * FROM cadastro_pdi_2 ORDER BY nome_completo ASC ");
}

//Configurações do QRCode
$options = new QROptions([
	'version'    => 5,
	'outputType' => QRCode::OUTPUT_MARKUP_SVG,
	'eccLevel'   => QRCode::ECC_L,
]);

$cel = $obj['celular'];
$perfil1 = $obj['perfil1'];
$perfil2 = $obj['perfil2'];
$passo = $obj['passo'];
$linkedin = $obj['linkedin'];
$resilience = $obj['resilience'];
$interpersonal_relationship= $obj['interpersonal_relationship'];
$communication= $obj['communication'];
$adaptability_and_flexibility= $obj['adaptability_and_flexibility'];
$self_development_and_self_management= $obj['self_development_and_self_management'];
$creativity_and_innovation= $obj['creativity_and_innovation'];


$dados = $coat->query($sql);

$email = $_SESSION['email_institucional'];
$parts = explode('@', $email);
$RA = $parts[0];
$zapzap = str_replace([' ', '-'], '', $cel);
$whatsapp = "https://api.whatsapp.com/send/?phone=+55".$zapzap."&text&type=phone_number&app_absent=0";

//invoca uma nova instância QRCode
$qrcode = new QRCode($options);
//Gerar a imagem e salvar a imagem do QR no servidor
if($linkedin!=null){$qrcode->render($linkedin, '../SQL/QrCodes/' . $RA . 'ld.svg');}
if($whatsapp!=null){$qrcode->render($whatsapp, '../SQL/QrCodes/' . $RA . 'zap.svg');}
  
  mysqli_close($coat);

//   if ($obj['tema_voluntario1']==null){$displayVol = "none";}  
//   else if ($obj['tema_voluntario1']!=null){$displayVol = "block";}  
  
//   if ($obj['empresa1']==null){$displayProfi = "none";}  
//   else if ($obj['empresa1']!=null){$displayProfi = "block";}

//   if ($obj['titulo1']==null){$displayProj = "none";}  
//   else if ($obj['titulo1']!=null){$displayProj = "block";}  

//   if ($obj['perfil1']==null){$displayCar = "none";}  
//   else if ($obj['perfil1']!=null){$displayCar = "block";}  

//   if ($obj['resilience']==null){$displayComp = "none";}  
//   else if ($obj['resilience']!=null){$displayComp = "block";}  

//   if ($linkedin==null){$displayLink = "none";}  
//   else if ($linkedin!=null){$displayLink = "block";}  

//   if ($obj['grauInstrucao']==null){$displayEmprega = "none";}  
//   else if ($obj['grauInstrucao']!=null){$displayEmprega = "flex";}  
  
//   if($obj['saida1']=="0000-00-00"){$saida1 = "Trabalhando nesta empresa.";}  
//   else if ($obj['saida1']!="0000-00-00"){$saida1 = $obj['saida1'];}
  



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/css/final_pdi.css">
    <link rel="stylesheet" href="../template/css/padrao.css">
    <style>
         #Bar{
            max-width: 500px;
            max-height: 500px;
        }
    </style>

   
    <title>PDI</title>


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
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                label += ': ';
                                }
                                label += context.parsed + ' %';
                                return label;
                            }
                            }
                        }
    }                }
            });
        }


// Chamada para buscar e definir o email institucional

        setInterval(getChartData, 5000); // Atualiza automaticamente a cada 5 segundos
    </script>
</head>
<body>
<header class="home_header">
        <nav class="home_headerNavbar">
        <?php include('navbar.php') ?>  
            <img class="home_headerNavbarLogo" src="../images/image 1@2x.png" alt="Logo do Carreiras">
        </nav>
        <section class="home_headerTitleBox">
            <h2 class="home_headerTitle">Carreiras</h2>
        </section>
</header>

    <main>
        <div class="pdi-mae">
            <div class="card-filho-pdi">
                <div>
                     <h1>PDI - Plano de <br>
                         Desenvolvimento <br>
                         Individual Profissional</h1>
                </div>
                <div class=card-foto>
                <?php echo ("<img  src='../sql/imagesDB/" . $obj['path_foto']."' width='150' height='150' alt=''>");?>                </div>
                <div class=dados-aluno>
                    <p>Nome Completo:<?php echo $obj['nome_completo'] ?></p>
                    <p>RA:<?php echo $obj['ra'] ?></p>
                    <p>Email Institucional:<?php echo $obj['email_institucional'] ?></p>
                    <p>data: <?php echo $obj['data_aniversario'] ?></p>
                    <button onclick='print()' class="print">Imprimir PDI</button>
                </div>   
            </div>
            <div class="qrcode">
                 <div class="linkedin">
                    <p>Linkedin</p>
                    <?php echo "<img src='../SQL/QrCodes/" . $RA . "ld.svg' width='200'>";?>

                    <!-- <svg class="pos-lin" xmlns="http://www.w3.org/2000/svg" width="105" height="97" viewBox="0 0 105 97" fill="#FFFEFC">
                    <path d="M47.0232 15.52H20.1768C19.3414 15.52 18.5402 15.8266 17.9494 16.3723C17.3587 16.9181 17.0268 17.6582 17.0268 18.43V43.65C17.0268 44.4218 17.3587 45.1619 17.9494 45.7077C18.5402 46.2534 19.3414 46.56 20.1768 46.56H47.0232C47.8586 46.56 48.6598 46.2534 49.2506 45.7077C49.8413 45.1619 50.1732 44.4218 50.1732 43.65V18.43C50.1732 17.6582 49.8413 16.9181 49.2506 16.3723C48.6598 15.8266 47.8586 15.52 47.0232 15.52ZM43.8732 40.74H23.3268V21.34H43.8732V40.74ZM37.8 27.16H29.4V34.92H37.8V27.16ZM4.2 38.8C5.31391 38.8 6.3822 38.3912 7.16985 37.6636C7.9575 36.9359 8.4 35.949 8.4 34.92V11.64C8.40111 10.6113 8.84397 9.62498 9.63138 8.89756C10.4188 8.17014 11.4864 7.76103 12.6 7.76H37.8C38.9139 7.76 39.9822 7.35122 40.7698 6.62357C41.5575 5.89593 42 4.90904 42 3.88C42 2.85096 41.5575 1.86407 40.7698 1.13643C39.9822 0.408784 38.9139 0 37.8 0H12.6C9.2593 0.00308155 6.05637 1.23043 3.69414 3.41268C1.3319 5.59494 0.0033357 8.55383 0 11.64V34.92C0 35.949 0.442499 36.9359 1.23015 37.6636C2.0178 38.3912 3.08609 38.8 4.2 38.8ZM47.0232 50.44H20.1768C19.3414 50.44 18.5402 50.7466 17.9494 51.2923C17.3587 51.8381 17.0268 52.5782 17.0268 53.35V78.57C17.0268 79.3418 17.3587 80.082 17.9494 80.6277C18.5402 81.1734 19.3414 81.48 20.1768 81.48H47.0232C47.8586 81.48 48.6598 81.1734 49.2506 80.6277C49.8413 80.082 50.1732 79.3418 50.1732 78.57V53.35C50.1732 52.5782 49.8413 51.8381 49.2506 51.2923C48.6598 50.7466 47.8586 50.44 47.0232 50.44ZM43.8732 75.66H23.3268V56.26H43.8732V75.66ZM37.8 62.08H29.4V69.84H37.8V62.08ZM37.8 89.24H12.6C11.4864 89.239 10.4188 88.8299 9.63138 88.1024C8.84397 87.375 8.40111 86.3887 8.4 85.36V62.08C8.4 61.051 7.9575 60.0641 7.16985 59.3364C6.3822 58.6088 5.31391 58.2 4.2 58.2C3.08609 58.2 2.0178 58.6088 1.23015 59.3364C0.442499 60.0641 0 61.051 0 62.08V85.36C0.0033357 88.4462 1.3319 91.4051 3.69414 93.5873C6.05637 95.7696 9.2593 96.9969 12.6 97H37.8C38.9139 97 39.9822 96.5912 40.7698 95.8636C41.5575 95.1359 42 94.149 42 93.12C42 92.091 41.5575 91.1041 40.7698 90.3764C39.9822 89.6488 38.9139 89.24 37.8 89.24ZM100.8 58.2C99.6861 58.2 98.6178 58.6088 97.8301 59.3364C97.0425 60.0641 96.6 61.051 96.6 62.08V85.36C96.5989 86.3887 96.156 87.375 95.3686 88.1024C94.5812 88.8299 93.5136 89.239 92.4 89.24H67.2C66.0861 89.24 65.0178 89.6488 64.2301 90.3764C63.4425 91.1041 63 92.091 63 93.12C63 94.149 63.4425 95.1359 64.2301 95.8636C65.0178 96.5912 66.0861 97 67.2 97H92.4C95.7407 96.9969 98.9436 95.7696 101.306 93.5873C103.668 91.4051 104.997 88.4462 105 85.36V62.08C105 61.051 104.558 60.0641 103.77 59.3364C102.982 58.6088 101.914 58.2 100.8 58.2ZM65.1 71.78H56.7V79.54H65.1V71.78ZM56.7 60.1167H65.1V52.3567H56.7V60.1167ZM92.4 0H67.2C66.0861 0 65.0178 0.408784 64.2301 1.13643C63.4425 1.86407 63 2.85096 63 3.88C63 4.90904 63.4425 5.89593 64.2301 6.62357C65.0178 7.35122 66.0861 7.76 67.2 7.76H92.4C93.5136 7.76103 94.5812 8.17014 95.3686 8.89756C96.156 9.62498 96.5989 10.6113 96.6 11.64V34.92C96.6 35.949 97.0425 36.9359 97.8301 37.6636C98.6178 38.3912 99.6861 38.8 100.8 38.8C101.914 38.8 102.982 38.3912 103.77 37.6636C104.558 36.9359 105 35.949 105 34.92V11.64C104.997 8.55383 103.668 5.59494 101.306 3.41268C98.9436 1.23043 95.7407 0.00308155 92.4 0ZM67.2 34.92H75.6V27.16H67.2V34.92ZM75.6 69.84V62.08H67.2V69.84H75.6ZM84.8232 46.56C85.6586 46.56 86.4598 46.2534 87.0506 45.7077C87.6413 45.1619 87.9732 44.4218 87.9732 43.65V18.43C87.9732 17.6582 87.6413 16.9181 87.0506 16.3723C86.4598 15.8266 85.6586 15.52 84.8232 15.52H57.9768C57.1414 15.52 56.3402 15.8266 55.7494 16.3723C55.1587 16.9181 54.8268 17.6582 54.8268 18.43V43.65C54.8268 44.4218 55.1587 45.1619 55.7494 45.7077C56.3402 46.2534 57.1414 46.56 57.9768 46.56H84.8232ZM61.1268 21.34H81.6732V40.74H61.1268V21.34ZM86.1 52.3567H77.7V60.1167H86.1V52.3567ZM77.7 79.54H86.1V71.78H77.7V79.54Z" fill="#FFFEFC"/>
                    </svg> -->
                </div>
                <div class="whatsapp">
                    <p>Whatsapp</p>
                    <?php echo "<img src='../SQL/QrCodes/" . $RA . "zap.svg' width='200'>";?>

                    <!-- <svg class="pos-wa" xmlns="http://www.w3.org/2000/svg" width="105" height="97" viewBox="0 0 105 97" fill="#FFFEFC">
                    <path d="M47.0232 15.52H20.1768C19.3414 15.52 18.5402 15.8266 17.9494 16.3723C17.3587 16.9181 17.0268 17.6582 17.0268 18.43V43.65C17.0268 44.4218 17.3587 45.1619 17.9494 45.7077C18.5402 46.2534 19.3414 46.56 20.1768 46.56H47.0232C47.8586 46.56 48.6598 46.2534 49.2506 45.7077C49.8413 45.1619 50.1732 44.4218 50.1732 43.65V18.43C50.1732 17.6582 49.8413 16.9181 49.2506 16.3723C48.6598 15.8266 47.8586 15.52 47.0232 15.52ZM43.8732 40.74H23.3268V21.34H43.8732V40.74ZM37.8 27.16H29.4V34.92H37.8V27.16ZM4.2 38.8C5.31391 38.8 6.3822 38.3912 7.16985 37.6636C7.9575 36.9359 8.4 35.949 8.4 34.92V11.64C8.40111 10.6113 8.84397 9.62498 9.63138 8.89756C10.4188 8.17014 11.4864 7.76103 12.6 7.76H37.8C38.9139 7.76 39.9822 7.35122 40.7698 6.62357C41.5575 5.89593 42 4.90904 42 3.88C42 2.85096 41.5575 1.86407 40.7698 1.13643C39.9822 0.408784 38.9139 0 37.8 0H12.6C9.2593 0.00308155 6.05637 1.23043 3.69414 3.41268C1.3319 5.59494 0.0033357 8.55383 0 11.64V34.92C0 35.949 0.442499 36.9359 1.23015 37.6636C2.0178 38.3912 3.08609 38.8 4.2 38.8ZM47.0232 50.44H20.1768C19.3414 50.44 18.5402 50.7466 17.9494 51.2923C17.3587 51.8381 17.0268 52.5782 17.0268 53.35V78.57C17.0268 79.3418 17.3587 80.082 17.9494 80.6277C18.5402 81.1734 19.3414 81.48 20.1768 81.48H47.0232C47.8586 81.48 48.6598 81.1734 49.2506 80.6277C49.8413 80.082 50.1732 79.3418 50.1732 78.57V53.35C50.1732 52.5782 49.8413 51.8381 49.2506 51.2923C48.6598 50.7466 47.8586 50.44 47.0232 50.44ZM43.8732 75.66H23.3268V56.26H43.8732V75.66ZM37.8 62.08H29.4V69.84H37.8V62.08ZM37.8 89.24H12.6C11.4864 89.239 10.4188 88.8299 9.63138 88.1024C8.84397 87.375 8.40111 86.3887 8.4 85.36V62.08C8.4 61.051 7.9575 60.0641 7.16985 59.3364C6.3822 58.6088 5.31391 58.2 4.2 58.2C3.08609 58.2 2.0178 58.6088 1.23015 59.3364C0.442499 60.0641 0 61.051 0 62.08V85.36C0.0033357 88.4462 1.3319 91.4051 3.69414 93.5873C6.05637 95.7696 9.2593 96.9969 12.6 97H37.8C38.9139 97 39.9822 96.5912 40.7698 95.8636C41.5575 95.1359 42 94.149 42 93.12C42 92.091 41.5575 91.1041 40.7698 90.3764C39.9822 89.6488 38.9139 89.24 37.8 89.24ZM100.8 58.2C99.6861 58.2 98.6178 58.6088 97.8301 59.3364C97.0425 60.0641 96.6 61.051 96.6 62.08V85.36C96.5989 86.3887 96.156 87.375 95.3686 88.1024C94.5812 88.8299 93.5136 89.239 92.4 89.24H67.2C66.0861 89.24 65.0178 89.6488 64.2301 90.3764C63.4425 91.1041 63 92.091 63 93.12C63 94.149 63.4425 95.1359 64.2301 95.8636C65.0178 96.5912 66.0861 97 67.2 97H92.4C95.7407 96.9969 98.9436 95.7696 101.306 93.5873C103.668 91.4051 104.997 88.4462 105 85.36V62.08C105 61.051 104.558 60.0641 103.77 59.3364C102.982 58.6088 101.914 58.2 100.8 58.2ZM65.1 71.78H56.7V79.54H65.1V71.78ZM56.7 60.1167H65.1V52.3567H56.7V60.1167ZM92.4 0H67.2C66.0861 0 65.0178 0.408784 64.2301 1.13643C63.4425 1.86407 63 2.85096 63 3.88C63 4.90904 63.4425 5.89593 64.2301 6.62357C65.0178 7.35122 66.0861 7.76 67.2 7.76H92.4C93.5136 7.76103 94.5812 8.17014 95.3686 8.89756C96.156 9.62498 96.5989 10.6113 96.6 11.64V34.92C96.6 35.949 97.0425 36.9359 97.8301 37.6636C98.6178 38.3912 99.6861 38.8 100.8 38.8C101.914 38.8 102.982 38.3912 103.77 37.6636C104.558 36.9359 105 35.949 105 34.92V11.64C104.997 8.55383 103.668 5.59494 101.306 3.41268C98.9436 1.23043 95.7407 0.00308155 92.4 0ZM67.2 34.92H75.6V27.16H67.2V34.92ZM75.6 69.84V62.08H67.2V69.84H75.6ZM84.8232 46.56C85.6586 46.56 86.4598 46.2534 87.0506 45.7077C87.6413 45.1619 87.9732 44.4218 87.9732 43.65V18.43C87.9732 17.6582 87.6413 16.9181 87.0506 16.3723C86.4598 15.8266 85.6586 15.52 84.8232 15.52H57.9768C57.1414 15.52 56.3402 15.8266 55.7494 16.3723C55.1587 16.9181 54.8268 17.6582 54.8268 18.43V43.65C54.8268 44.4218 55.1587 45.1619 55.7494 45.7077C56.3402 46.2534 57.1414 46.56 57.9768 46.56H84.8232ZM61.1268 21.34H81.6732V40.74H61.1268V21.34ZM86.1 52.3567H77.7V60.1167H86.1V52.3567ZM77.7 79.54H86.1V71.78H77.7V79.54Z" fill="#FFFEFC"/>
                    </svg> -->
                </div> 
            </div>
            <div class="card-filho-aluno">
                <div>
                    <h1>Dados do Aluno</h1>
                </div>
                <div>
                    <p>Gênero:<?php echo $obj['genero'] ?></p>
                    <p>Celular:<?php echo $obj['celular'] ?></p>
                    <p>Cep:<?php echo $obj['cep'] ?></p>
                    <p>País:<?php echo $obj['pais'] ?></p>
                    <p>Estado:<?php echo $obj['estado'] ?></p>
                    <p>Cidade:<?php echo $obj['cidade'] ?></p>
                    <p>Endereço:<?php echo $obj['endereco'] ?></p>
                    <p>Email:<?php echo $obj['email_institucional'] ?></p>
                </div>
            </div>
            <div class="card-filho-grafico">
                  <div>
                       <h1>Competências</h1>
                       <div id="Bar"><canvas id="chart" width="400" height="400"></canvas></div>
                 </div>
                 <div id="piechart_3d"></div>
            </div>
            <div class="card-filho-portfolio">
                <div>
                    <h1>Portfólio </h1>
                </div>
                <div>
                    <h1>Projetos Integradores </h1>
                </div>
                <div>
                <p>Título 01: <?php echo $obj['titulo1'] ?></p>
                <p>Link 01: <?php echo $obj['link1'] ?></p>
                <p>Descrição 01: <?php echo $obj['resumo1'] ?></p>
                <br>
                <p>Título 02: <?php echo $obj['titulo2'] ?></p>
                <p>Link 02: <?php echo $obj['link2'] ?></p>
                <p>Descrição 02: <?php echo $obj['resumo2'] ?></p>
                <br>
                <p>Título 03: <?php echo $obj['titulo3'] ?></p>
                <p>Link 03: <?php echo $obj['link3'] ?></p>
                <p>Descrição 03: <?php echo $obj['resumo3'] ?></p>
                <br>
                <p>Título 04: <?php echo $obj['titulo4'] ?></p>
                <p>Link 04: <?php echo $obj['link4'] ?></p>
                <p>Descrição 04: <?php echo $obj['resumo4'] ?></p>
                <br>
                <p>Título 05: <?php echo $obj['titulo5'] ?></p>
                <p>Link 05: <?php echo $obj['link5'] ?></p>
                <p>Descrição 05: <?php echo $obj['resumo5'] ?></p>
                <br>
                <p>Título 06: <?php echo $obj['titulo6'] ?></p>
                <p>Link 06: <?php echo $obj['link6'] ?></p>
                <p>Descrição 06: <?php echo $obj['resumo6'] ?></p>
                <br>
                <p>Título 07: <?php echo $obj['titulo7'] ?></p>
                <p>Link 07: <?php echo $obj['link7'] ?></p>
                <p>Descrição 07: <?php echo $obj['resumo7'] ?></p>
                <br>
                <p>Título 08: <?php echo $obj['titulo8'] ?></p>
                <p>Link 08: <?php echo $obj['link8'] ?></p>
                <p>Descrição 08: <?php echo $obj['resumo8'] ?></p>
                <br>
                
                </div>
            </div>
            <div class="card-filho-portfolio">
                <div>
                    <h1>Projeto de Extensão </h1>
                </div>
                <div>
                <p>Título 01: <?php echo $obj['tituloOutro1'] ?></p>
                <p>Link 01: <?php echo $obj['linkOutro1'] ?></p>
                <p>Descrição 01: <?php echo $obj['resumoOutro1'] ?></p>
                <br>
                <p>Título 02: <?php echo $obj['tituloOutro2'] ?></p>
                <p>Link 02: <?php echo $obj['linkOutro2'] ?></p>
                <p>Descrição 02: <?php echo $obj['resumoOutro2'] ?></p>
                <br>
                <p>Título 03: <?php echo $obj['tituloOutro3'] ?></p>
                <p>Link 03: <?php echo $obj['linkOutro3'] ?></p>
                <p>Descrição 03: <?php echo $obj['resumoOutro3'] ?></p>
                <br>

                </div>
            </div>

            <div class="card-filho-portfolio">
                <div>
                    <h1>TCC</h1>
                </div>
                <div>
                   
                    <p>Título: <?php echo $obj['tituloTCC'] ?></p>
                    <p>Link: <?php echo $obj['linkTCC'] ?></p>
                    <p>Descrição: <?php echo $obj['resumoTCC'] ?></p>
                    <br>
                </div>
                <div>
                    
                </div>
            </div>
            
            <div class="card-filho-portfolio">
                <div>
                    <h1>EMPREGABILIDADE</h1>
                </div>
                <div>
                    <h2>Pesquisa de Empregabilidade</h2>
                </div>
                <div>
                    <p>Grau de instrução: <?php echo $obj['grauInstrucao'] ?></p>
                    <p>Situação de emprego: <?php echo $obj['emprego'] ?></p>
                    <p>A atividade profissional: <?php echo $obj['atividadeProfissional'] ?></p>
                    <p>Colocação no Mercado: <?php echo $obj['colocacao'] ?></p>
                </div>
            </div>

            <div class="card-filho-portfolio">
                <div>
                    <h1>EXPERIÊNCIAS PROFISSIONAIS</h1>
                </div>
                <div>
                    <p>Empresa 01: <?php echo $obj['empresa1'] ?></p>
                    <p>Função 01: <?php echo $obj['funcao1'] ?></p>
                    <p>Data de Entrada 01: <?php echo $obj['entrada1'] ?></p>
                    <p>Data de Saída 01: <?php echo $obj['saida1'] ?></p>
                    <br>
                    <p>Empresa 02: <?php echo $obj['empresa2'] ?></p>
                    <p>Função 02: <?php echo $obj['funcao2'] ?></p>
                    <p>Data de Entrada 02: <?php echo $obj['entrada2'] ?></p>
                    <p>Data de Saída 02: <?php echo $obj['saida2'] ?></p>
                    <br>
                    <p>Empresa 03: <?php echo $obj['empresa3'] ?></p>
                    <p>Função 03: <?php echo $obj['funcao3'] ?></p>
                    <p>Data de Entrada 03: <?php echo $obj['entrada3'] ?></p>
                    <p>Data de Saída 03: <?php echo $obj['saida3'] ?></p>
                    <br>   
                    <p>Empesa 04: <?php echo $obj['empresa4'] ?></p>
                    <p>Função 04: <?php echo $obj['funcao4'] ?></p>
                    <p>Data de Entrada 04: <?php echo $obj['entrada4'] ?></p>
                    <p>Data de Saída 04: <?php echo $obj['saida4'] ?></p>
                    <br>     
                    <p>Empresa 05: <?php echo $obj['empresa5'] ?></p>
                    <p>Função 05: <?php echo $obj['funcao5'] ?></p>
                    <p>Data de Entrada 05: <?php echo $obj['entrada5'] ?></p>
                    <p>Data de Saída 05: <?php echo $obj['saida5'] ?></p>

                </div>
            </div>
            <div class="card-filho-portfolio">
                <div>
                    <h1> TRABALHOS VOLUNTÁRIOS</h1>
                </div>
                <div>
                    <p>Trabalho 01: <?php echo $obj['tema_voluntario1'] ?></p>
                    <p>Descrição 01: <?php echo $obj['descricao_voluntario1'] ?></p>
                    <p>Data 01: <?php echo $obj['data_voluntario1'] ?></p>
                    <br>
                    <p>Trabalho 02: <?php echo $obj['tema_voluntario2'] ?></p>
                    <p>Descrição 02: <?php echo $obj['descricao_voluntario2'] ?></p>
                    <p>Data 02: <?php echo $obj['data_voluntario2'] ?></p>
                    <br>
                    <p>Trabalho 03: <?php echo $obj['tema_voluntario3'] ?></p>
                    <p>Descrição 03: <?php echo $obj['descricao_voluntario3'] ?></p>
                    <p>Data 03: <?php echo $obj['data_voluntario3'] ?></p>
                </div>
            </div>
        </div>
    </main>
    <footer class="home_footer">
        <p class="home_footerCopyright">© 2023 Code Factory</p>
    </footer>
</body>
</html>