<?php
session_start();

if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email_institucional']);
    unset($_SESSION['senha']);
    unset($_SESSION['idcadastro_pdi']);
    header('Location: index.php');
    session_write_close();

}
include_once("../sql/db_conexao_dgh.php");

$sql = ("SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '" . $_SESSION['email_institucional'] . "'");
$result = mysqli_query($coat, $sql);
$obj = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/css/padrao.css">
    <link rel="stylesheet" href="../template/css/editar_foto.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Righteous&display=swap"
        rel="stylesheet">
    <title>Editar Foto</title>
</head>

<body>


    <!--convoca a navbar dentro do Cabeçalho-->
    <?php
    // convoca o rodapé
    include_once('../template/components/padrao.php');
    ?>

    <div class="div-header">
        <?php include_once('navbar.php'); ?>
    </div>
    <div id='editarfoto_main'>
        <div id='editarfoto_card'>
            <div id="editarfoto_cardheader">
                <h3>Editar Foto</h3>
                <div id='editarfoto_foto'>
                    <?php echo ("<img id='editarfoto_foto' src='../sql/imagesDB/" . $obj['path_foto'] . "' width='150' height='150' alt=''>"); ?>
                </div>
            </div>
            <div id="editarfoto_cardcontent">
                <p>Insira uma imagem ate 2mb nos formatos:jpg,peg,png ou jifif</p>
                <form id="editarfoto_form" action="../sql/editar_foto.php" enctype="multipart/form-data" method="post">
                    <input id='editarfoto_input' type="file" name="file"></input>
            </div>
        </div>
        <button type="submit" name="file">Salvar</button>
        </form>
        <a href="">Voltar</a>

    </div>
    <footer id="voluntario_footer">
        <?php
        // convoca o rodapé
        include_once('../template/components/_footer.html');
        ?>

    </footer>
</body>

</html>