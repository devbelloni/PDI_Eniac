<?php
session_start();

require('../sql/db_conexao_dgh.php');

if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email_institucional']);
    unset($_SESSION['senha']);
    unset($_SESSION['idcadastro_pdi']);
    header('Location: index.php');
    session_write_close();

}

$email = $_SESSION['email_institucional'];

$sql = "SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '$email'";
$result = $coat->query($sql);
$obj = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Projeto de Extensão 2 - PDI Eniac</title>

    <!-- css -->
    <link rel="stylesheet" href="../template/css/projetoDeExtensao.css">
    <link rel="stylesheet" href="../template/css/padrao.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <header class="home_header">
        <nav class="home_headerNavbar">
            <?php include("../src/navbar.php") ?>
            <img class="home_headerNavbarLogo" src="../images/image 1@2x.png" alt="Logo do Carreiras">
        </nav>
        <br>
        <section class="home_headerTitleBox">
            <br>
            <h2 class="home_headerTitle">Carreiras</h2>
            <br>
        </section>
        <br>
        <br>
    </header>
    <!-- main content -->
    <main class="projetoDeExtensao1_mainContent">
        <h1 class="projetoDeExtensao1_mainContentTitle">Projeto de Extensão 2</h1>
        <!-- formulário de envio -->
        <form class="projetoDeExtensao1_mainContentForm" action="../sql/db_outrosProjetos_extensao.php" method="post">
            <label class="projetoDeExtensao_label" for="projectTitleInput">Título</label>
            <input class="projetoDeExtensao1_mainContentInputForm" id="projectTitleInput" name="tituloOutro2"
                type="text" placeholder="Seu Título armazenado: <?php echo $obj['tituloOutro2']; ?>">

            <label class="projetoDeExtensao_label1" for="projectLinkInput">Link</label>
            <input class="projetoDeExtensao1_mainContentInputForm" id="projectLinkInput" name="linkOutro2" type="text"
                placeholder="Seu Link armazenado: <?php echo $obj['linkOutro2']; ?>">

            <label class="projetoDeExtensao_label2" for="projectSummaryInput">Resumo</label>
            <textarea class="projetoDeExtensao1_mainContentTextAreaForm" id="projectSummaryInput" name="resumoOutro2"
                cols="30" rows="10"
                placeholder="Sua Descrição armazenada: <?php echo $obj['resumoOutro2']; ?>"></textarea>

            <div class="projetoDeExtensao1_mainContentSubmitFormBox">
                <button class="projetoDeExtensao1_mainContentSubmitForm" name="submitBtn" type="submit">Enviar</button>
            </div>
        </form>
    </main>
    <!-- footer -->
    <footer class="projetoDeExtensao1_footer">
        <p class="projetoDeExtensao1_footerCopyright">© 2023 Code Factory</p>
    </footer>
</body>

</html>