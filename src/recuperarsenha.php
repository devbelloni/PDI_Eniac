<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>recuperar_senha</title>

  <!--css-->
  <link rel="stylesheet" href="../template/css/padrao.css">
  <link rel="stylesheet" href="../template/css/recuperarsenha.css">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">


</head>

<body>
  <div id="recsenha_logo">
    <img id="logo_carreira" src="../images/Carreiras Logo favicon.png" alt="">
  </div>
  <h1 id="recsenha_h1">Recupere sua senha!</h1>
  <div id="recsenha_form">
    <form action="../sql/db_recuperarSenha.php" method="post" id="recsenha_card1">
      <div id="recsenha_input">
        <p id="recsenha_email1">E-mail</p>
        <input id=recsenha_email type="email" class="inputEmail" id="inputEmail" name="email_institucional"
          placeholder="E-mail">
      </div>
      <div id="recsenha_botao">
        <button type="submit" class="submitBtn" id="recsenha_botao1">Enviar</button>
      </div>
    </form>
  </div>
  <div id="recsenha_footer">
    <?php
    // convoca o rodapé
    include_once('../template/components/_footer.html');
    ?>
    </footer>
  </div>
</body>

</html>