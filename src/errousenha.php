<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>errou_senha</title>

    <!--css-->
    <link rel="stylesheet" href="../template/css/padrao.css">
    <link rel="stylesheet" href="../template/css/errousenha.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">


</head>

<body>
    <div id="errousenha_logo">
        <img id="logo_carreiraerrou" src="../images/image 1.svg" alt="">
    </div>
    <div id="errousenha_form">
        <div id="errousenha_input">
            <h1 id="errousenha_h1">Falha ao logar! E-mail ou Senha incorretos!</h1>
            <button class="submitBtn" id="errousenha_botao"><a href="./login.php">Voltar</a></button>
        </div>
        <!-- <div id="errousenha_footer"> -->
        <footer id="errou_footer">
            <?php
            // convoca o rodapé
            include_once('../template/components/_footer.html');
            ?>
        </footer>
        <!-- </div> -->
</body>

</html>