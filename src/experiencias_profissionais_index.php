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

  <title>Experiências Profissionais</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../template/css/padrao.css">
  <link rel="stylesheet" href="../template/css/experienciaprofissional_index.css">
</head>



<body id="wrapper">

  <section>

    <header class="home_header">
      <nav class="home_headerNavbar">
        <?php include("../src/navbar.php") ?>
        <img class="home_headerNavbarLogo" src="../images/image 1@2x.png" alt="Logo do Carreiras">
      </nav>
      <section class="home_headerTitleBox">
        <h2 class="home_headerTitle">Carreiras</h2>
      </section>
    </header>
    <section>
      <div id="div">
        <div id="exp_card1">
          <br>
          <h2>Seu histórico profissional.</h2>
          <br>
          <p>Olá,vamos criar um portifólio para você poder demonstrar todo o seu potencial?</p>
          <p>Um portfólio profissional é uma ferramenta valiosa para destacar suas habilidades e conquistas, construir
            credibilidade e se destacar em um mercado de trabalho competitivo. É uma representação tangível do que você
            pode fazer e uma prova do seu potencial. Não importa se você é um profissional experiente ou alguém que está
            começando a carreira, criar e manter um portfólio é uma decisão inteligente que pode abrir inúmeras portas
            para o sucesso profissional. Explore nossos recursos para aprender como criar um portfólio que reflita o seu
            potencial e conquiste oportunidades.</p>
        </div>
        <div id="exp_card2">
          <br>
          <br>
          <h2>Conte-nos sobre a sua experiência</h2>

          <br>

          <div id="exp_bot">
            <a href="experiencias_profissionais1.php">
              <button>Experiência profissional 1</button>
            </a>
            <br>
            <br>
            <a href="experiencias_profissionais2.php">
              <button>Experiência profissional 2</button>
            </a>
            <br>
            <br>
            <a href="experiencias_profissionais3.php">
              <button>Experiência profissional 3</button>
            </a>
            <br>
            <br>
            <a href="experiencias_profissionais4.php">
              <button>Experiência profissional 4</button>
            </a>
            <br>
            <br>
            <a href="experiencias_profissionais5.php">
              <button>Experiência profissional 5</button>
            </a>
          </div>
        </div>
      </div>
    </section>
    <div id="exp_footer">
      <footer>
        <?php
        // convoca o rodapé
        include_once('../template/components/_footer.html');
        ?>
      </footer>


    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>


</body>

</html>