<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Dados</title>

    <!-- css -->
    <link rel="stylesheet" href="../template/css/padrao.css">
    <link rel="stylesheet" href="../template/css/meusdados.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include_once("navbar.php");


    ?>
    <!-- <?php
    // convoca o rodapé
    //   include_once('../template/components/padrao.html'); 
    
    session_start();

    if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email_institucional']);
        unset($_SESSION['senha']);
        unset($_SESSION['idcadastro_pdi']);
        header('Location: index.php');
        session_write_close();

    }
    ?> -->

    <div id="meusdados_main">


        <div id="home_video2">
            <div>
                <h1 id="dados">SEUS DADOS, NÃO COMPARTILHE </h1>
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

            </div>

        </div>

        <div id="home_video3">
            <div>
                <br>
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
                <p class="black" id="color">
                    <?php echo "Código: " . $_SESSION['codigo']; ?>
                </p>

            </div>

        </div>
        <br>
        <footer class="home_footer">
            <?php
            // convoca o rodape
            include_once('../template/components/_footer.html');
            ?>
            <footer>
                <?php
                // convoca o rodapé
                include_once('../template/components/_footer.html');
                ?>
            </footer>
</body>

</html>