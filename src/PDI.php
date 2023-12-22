<?php

namespace chillerlan\QRCodeExamples;

include_once("../sql/db_conexao_dgh.php");
include_once("../controllers/controllerCMOV.php");
include '../vendor/autoload.php';

// session_start();

use chillerlan\QRCode\{QRCode, QROptions};

$usuario['idcadastro_pdi'] = $_SESSION['idcadastro_pdi'];

$sql = sprintf("SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '" . $_SESSION['email_institucional'] . "'");
$result = mysqli_query($coat, $sql);
$obj = mysqli_fetch_assoc($result);

$consulta = sprintf("SELECT nome_completo FROM cadastro_pdi_2 WHERE email_institucional = '" . $_SESSION['email_institucional'] . "'"); // Substitua pela sua consulta SQL

// Execute a consulta e obtenha o resultado do banco de dados
$resultado = mysqli_query($coat, $consulta); // Substitua "$conexao" pela sua conexão ao banco de dados
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

if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email_institucional']);
    unset($_SESSION['senha']);
    unset($_SESSION['idcadastro_pdi']);
    header('Location: index.php');
    session_write_close();

}
$logado = $_SESSION['idcadastro_pdi'];

//busca da lupa 
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = ("SELECT * FROM cadastro_pdi_2 where idcadastro_pdi  LIKE '%$data%' or nome LIKE '%$data%' or email_institucional LIKE '%$data%' ORDER BY idusuarios ASC");

} else {
    $sql = ("SELECT * FROM cadastro_pdi_2 ORDER BY nome_completo ASC ");
}

//Configurações do QRCode
$options = new QROptions([
    'version' => 5,
    'outputType' => QRCode::OUTPUT_MARKUP_SVG,
    'eccLevel' => QRCode::ECC_L,
]);

$cel = $obj['celular'];
$perfil1 = $obj['perfil1'];
$perfil2 = $obj['perfil2'];
$passo = $obj['passo'];
$linkedin = $obj['linkedin'];
$resilience = $obj['resilience'];
$interpersonal_relationship = $obj['interpersonal_relationship'];
$communication = $obj['communication'];
$adaptability_and_flexibility = $obj['adaptability_and_flexibility'];
$self_development_and_self_management = $obj['self_development_and_self_management'];
$creativity_and_innovation = $obj['creativity_and_innovation'];


$dados = $coat->query($sql);

$email = $_SESSION['email_institucional'];
$parts = explode('@', $email);
$RA = $parts[0];
$zapzap = str_replace([' ', '-'], '', $cel);
$whatsapp = "https://api.whatsapp.com/send/?phone=+55" . $zapzap . "&text&type=phone_number&app_absent=0";

//invoca uma nova instância QRCode
$qrcode = new QRCode($options);
//Gerar a imagem e salvar a imagem do QR no servidor
if ($linkedin != null) {
    $qrcode->render($linkedin, '../SQL/QrCodes/' . $RA . 'ld.svg');
}
if ($whatsapp != null) {
    $qrcode->render($whatsapp, '../SQL/QrCodes/' . $RA . 'zap.svg');
}

mysqli_close($coat);

if ($obj['tema_voluntario1'] == null) {
    $displayVol = "none";
} else if ($obj['tema_voluntario1'] != null) {
    $displayVol = "block";
}

if ($obj['empresa1'] == null) {
    $displayProfi = "none";
} else if ($obj['empresa1'] != null) {
    $displayProfi = "block";
}

if ($obj['titulo1'] == null) {
    $displayProj = "none";
} else if ($obj['titulo1'] != null) {
    $displayProj = "block";
}

if ($obj['perfil1'] == null) {
    $displayCar = "none";
} else if ($obj['perfil1'] != null) {
    $displayCar = "block";
}

if ($obj['resilience'] == null) {
    $displayComp = "none";
} else if ($obj['resilience'] != null) {
    $displayComp = "block";
}

if ($linkedin == null) {
    $displayLink = "none";
} else if ($linkedin != null) {
    $displayLink = "block";
}

if ($obj['grauInstrucao'] == null) {
    $displayEmprega = "none";
} else if ($obj['grauInstrucao'] != null) {
    $displayEmprega = "flex";
}

if ($obj['saida1'] == "0000-00-00") {
    $saida1 = "Trabalhando nesta empresa.";
} else if ($obj['saida1'] != "0000-00-00") {
    $saida1 = $obj['saida1'];
}




?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="../template/css/stylePdi.css" />

    <link rel="icon" href=".\..\media\IMG\Carreiras Logo favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="pdiCompleto.css">

    <style>
        #photo2 {
            border-radius: 50%;
        }
    </style>



    <title>PDI - ENIAC</title>

</head>


<body>
    <header>
        <nav class="navbar navbar-light bg-dark p-1">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <?php echo ("<img id='photo2' width='60' height='60' src='../sql/imagesDB/" . $obj['path_foto'] . "' width='500' height='200' alt=''>"); ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="homepage.php">Home</a>
                </li>
                <li class="nav-item dropdown">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Usuário</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="editar_cadastro.php">Editar cadastro</a>
                        <a class="dropdown-item" href="meus_dados.php">Meus Dados</a>
                        <a class="dropdown-item" href="login.php">Sair</a>
                    </div>
                </li>
            </ul>
            <ul class="nav nav-pills ml-auto">
                <li class="nav-item bg-light">
                    <button onclick="window.print();" class="btn btn-sm btn-outline-secondary"
                        type="button">Imprimir</button>
                </li>
            </ul>
        </nav>


    </header>


    <div id="retangulo" class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <img id="logo" src=".\..\media\IMG\Carreiras Logo.png" alt="">
                <h1>PDI - PLANO DE</h1>
                <h1>DESENVOLVIMENTO</h1>
                <h1>INDIVIDUAL PROFISSIONAL</h1>
            </div>
        </div>
        <br> <br>
        <div class="row justify-content-ceter">
            <div class="col-md-6 text-center" id="photoBox" style="align-items: center;">
                <?php echo ("<img id='photo' src='../sql/imagesDB/" . $obj['path_foto'] . "' width='500' height='200' alt=''>"); ?>
            </div>
            <div class="col-md-6 text-center  mb-4" id="photoBox" style="align-items: center; text-align: center;">
                <br>
                <p id='name'>
                    <?php echo ($obj['nome_completo']); ?>
                </p>
                <p id='RA'>
                    <?php echo $RA; ?>
                </p>
                <p id='EMAIL_INST'>
                    <?php echo $_SESSION['email_institucional']; ?>
                </p>
                <p id='NASC'>
                    <?php list($ano, $mes, $dia) = explode('-', $_SESSION['data_aniversario']);
                    echo $dia . "/" . $mes . "/" . $ano; ?>
                </p>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-sm-6 text-center mb-4" style="display:<?php echo $displayLink; ?>;">
                <h1>Linkedin</h1>
                <?php echo "<img src='../SQL/QrCodes/" . $RA . "ld.svg' width='200'>"; ?>
            </div>

            <div class="col-sm-6 text-center mb-4" style="display:block;">
                <h1>Whatsapp</h1>
                <?php echo "<img src='../SQL/QrCodes/" . $RA . "zap.svg' width='200'>"; ?>
            </div>
        </div>

        <div class="row justify-content-center" id="cardmove">
            <div class="col d-flex mb-4">
                <div class="card flex-fill" id="card_dados">
                    <div class="card-body">
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">DADOS DO ALUNO</h5>
                        <p class="card-text text-left">
                        <p class="black" id="color">
                            <?php echo "Gênero: " . $_SESSION['genero']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Celular: " . $_SESSION['celular']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "CEP: " . $_SESSION['cep']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Pais: " . $_SESSION['pais']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Estado: " . $_SESSION['estado']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Cidade: " . $_SESSION['cidade']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Cidade: " . $_SESSION['bairro']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Endereço: " . $_SESSION['endereco']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "E-mail: " . $_SESSION['email_institucional']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Curso: " . $_SESSION['curso']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Modalidade do Curso: " . $obj['modaliadade_curso']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php
                            list($ano, $mes, $dia) = explode('-', $_SESSION['inicio_curso']);
                            echo "Início do Curso: " . $dia . "/" . $mes . "/" . $ano;
                            ; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Semestre do Curso: " . $_SESSION['semestre_curso']; ?>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row justify-content-center" id="mover_grafico">
            <div class="col-sm d-flex mb-4"> <!-- Adicionando a classe "mb-4" para criar uma margem inferior -->
                <div class="card flex-fill" style="border-radius: 25px 0 25px 0; display:<?php echo $displayComp; ?>;">
                    <div class="card-body">
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">COMPETÊNCIAS</h5>
                        <canvas id="meuGrafico"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm d-flex mb-4"> <!-- Adicionando a classe "mb-4" para criar uma margem inferior -->
                <div class="card flex-fill" style="border-radius: 25px 0 25px 0; display:<?php echo $displayCar; ?>;">
                    <div class="card-body">
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">CARREIRAS</h5>
                        <p class="card-text text-left">
                        <p class="black" id="color">
                            <?php echo "Perfil do Sistema: " . ($perfil1); ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Perfil Declarado: " . ($perfil2) . "</p>"; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Passo: " . $passo . "</p>"; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "LinkedIn: " . $linkedin . "</p>"; ?>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-sm-6 mb-4">
                <div class="card" id="card_dados"
                    style="border-radius: 25px 0 25px 0; display:<?php echo $displayProj; ?>;">
                    <div class="card-body">
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">PORTFÓLIO</h5>
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">Projetos Integradores</h5>
                        <p class="card-text text-left">
                        <p class="card-text text-left">
                        <p class="black" id="color">
                            <?php echo $obj['titulo1']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link1']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo1']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['titulo2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['titulo3']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link3']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo3']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['titulo4']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link4']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo4']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['titulo5']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link5']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo5']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['titulo6']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link6']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo6']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['titulo7']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link7']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo7']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['titulo8']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link8']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo8']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['titulo9']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link9']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo9']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['titulo10']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['link10']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumo10']; ?>
                        </p>
                        <br>
                        </p>
                        <br><br>
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">TCC</h5>
                        <p class="card-text text-left">
                        <p class="black" id="color">
                            <?php echo $obj['tituloTCC']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['linkTCC']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['resumoTCC']; ?>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-sm-6 mb-4">
                <div class="card" id="card_dados"
                    style="border-radius: 25px 0 25px 0; display:<?php echo $displayEmprega; ?>;">
                    <div class="card-body">
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">EMPREGABILIDADE</h5>
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">Pesquisa de Empregabilidade
                        </h5>
                        <p class="card-text text-left">
                        <p class="card-text text-left">
                        <p class="black" id="color">
                            <?php echo "Grau de Instrução: " . $obj['grauInstrucao']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Situação de Emprego: " . $obj['emprego']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Atividade Profissional: " . $obj['atividadeProfissional']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo "Colocação: " . $obj['colocacao']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-sm-6 mb-4">
                <div class="card" id="card_dados"
                    style="border-radius: 25px 0 25px 0; display:<?php echo $displayProfi; ?>;">
                    <div class="card-body">
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">EXPERIÊNCIA PROFISSIONAL
                        </h5>
                        <p class="card-text text-left">
                        <p class="black" id="color">
                            <?php echo $obj['empresa1']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['funcao1']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['entrada1']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $saida1; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['empresa2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['funcao2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['entrada2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['saida2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['empresa3']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['funcao3']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['entrada3']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['saida3']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['empresa4']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['funcao4']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['entrada4']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['saida4']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['empresa5']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['funcao5']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['entrada5']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['saida5']; ?>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card" id="card_dados"
                    style="border-radius: 25px 0 25px 0; display:<?php echo $displayVol; ?>;">
                    <div class="card-body">
                        <h5 class="nameBlack card-title card-text text-center" id="color-2">TRABALHOS VOLUNTÁRIOS</h5>
                        <p class="card-text text-left">
                        <p style="color: white;">
                            <?php echo $obj['tema_voluntario1']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['data_voluntario1']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['descricao_voluntario1']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['tema_voluntario2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['data_voluntario2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['descricao_voluntario2']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['tema_voluntario3']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['data_voluntario3']; ?>
                        </p>
                        <p class="black" id="color">
                            <?php echo $obj['descricao_voluntario3']; ?>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <script>
            // script.js

            // Dados do gráfico de pizza
            const dadosPizza = {
                labels: ['Autodesenvolvimento e Autogestão', 'Criatividade e Inovação', 'Relacionamento Interpessoal', 'Adaptabilidade e Flexibilidade', 'Comunicação Assertiva', 'Resiliência', 'Negociação'],
                datasets: [{
                    label: 'Habilidades',
                    backgroundColor: ['rgba(75, 192, 192, 0.6)', 'rgba(255, 99, 132, 0.6)', 'rgba(54, 162, 235, 0.6)', 'rgba(255, 206, 86, 0.6)', 'rgba(153, 102, 255, 0.6)', 'rgba(255, 159, 64, 0.6)', 'rgba(75, 192, 192, 0.6)'],
                    data: [30, 20, 15, 10, 12, 8, 5],
                }]
            };

            // Configurações do gráfico de pizza
            const configPizza = {
                type: 'pie',
                data: dadosPizza,
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
            };

            // Criando o gráfico de pizza
            const meuGrafico = new Chart(
                document.getElementById('meuGrafico'),
                configPizza
            );



        </script>


</body>

</html>