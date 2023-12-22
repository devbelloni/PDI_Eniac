<?php
session_start();

if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email_institucional']);
  unset($_SESSION['senha']);
  unset($_SESSION['idcadastro_pdi']);
  header('Location: index.php');
  session_write_close();

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../template/css/padrao.css">
  <link rel="stylesheet" href="../template/css/tcc.css">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">
  <title>TCC</title>
</head>

<body>


  <!--convoca a navbar dentro do Cabeçalho-->

  <header class="home_header">
    <nav class="home_headerNavbar">
      <?php include("../src/navbar.php") ?>
      <img class="home_headerNavbarLogo" src="../images/image 1@2x.png" alt="Logo do Carreiras">
    </nav>
    <section class="home_headerTitleBox">
      <h2 class="home_headerTitle">Carreiras</h2>
    </section>
  </header>

  <!--Texto Sobre o TCC-->
  <div id="tcc_main">
    <div id="tcc_card1">
      <br>
      <div>
        <h2 class="projeto">Fale um pouco sobre o seu TCC</h2>
      </div>
      <br>
      <p>Vamos conhecer mais sobre o seu Trabalho de Conclusão de Curso no Eniac.</p>
      <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <!--Título TCC-->
    <!--Formulário de TCC-->
    <div id="tcc_card2">
      <br>
      <br>
      <div>
        <h2 id="trabalho">Trabalho de Conclusão de Curso</h2>
      </div>
      <br>
      <form class="tcc_form" action="../sql/db_tcc.php" method="post">
        <div id="card">
          <p>Tema</p>
          <input class="" type="text" name="tituloTCC" required>
          <p>Pitch(insira o link)</p>
          <input class="" type="text" name="linkTCC" required>
          <p>Resumo</p>
        </div>
        <div>
          <textarea name="resumoTCC" id="" cols="30" rows="10"></textarea>
        </div>
        <br>
        <br>
        <button type="submit" class="">Enviar</button>
      </form>
    </div>
  </div>

  <!--Controle de Rodapé-->
  <br>
  <br>
  <div class="footermove">
    <footer id="footer_p">© 2023 Code Factory</footer>
  </div>

</body>

</html>