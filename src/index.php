<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home - Portal PDI</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../template/css/padrao.css">
  <link rel="stylesheet" href="../template/css/index.css">
</head>

<body>
  <section>
    <div>
      <img id="index_imagem" src="../images/image 1.svg" alt="">
    </div>
    <div class="row">
      <div id="index_txt">
        <h1 id="index_h2">PDI - PLANO DE DESENVOLVIMENTO INDIVIDUAL PROFISSIONAL</h1>
      </div>
    </div>
    <div id="index_card">
      <div id="index_item1">
        <div>
          <h2>Acesso do Aluno</h2>
        </div>
        <div>
          <p>Faça seu login!</p>
        </div>
        <br>
        <div>
          <a href="./login.php">
            <button type="button">Entrar</button>
          </a>
        </div>
      </div>
      <div id="index_item2">
        <div>
          <h2>Acesso Restrito</h2>
        </div>
        <div>
          <p>Faça seu login!</p>
        </div>
        <br>
        <div>
          <a href="../src/Admin/login.php">
            <button type="button">Entrar</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <footer id="index_footer">
    <?php
    // convoca o rodapé
    include_once('../template/components/_footer.html');
    ?>
  </footer>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>AOS.init();</script>


</body>

</html>