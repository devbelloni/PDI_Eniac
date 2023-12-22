<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>recuperar_senha</title>

  <!--css-->
  <link rel="stylesheet" href="../template/css/style.css">
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


</head>

<body>
  <div>

  </div>
  <div>
    <?php
    // convoca o rodapé
    include_once('../template/components/padrao.php');
    ?>
  </div>
  <div id="logo_cardeniac">
    <img id="logo_eniac" src="../images/favicon-192 1.png" alt="">
  </div>
  <div class="col-md-12">
    <img id="logo_carreira" src="../images/Carreiras Logo favicon.png" alt="">
  </div>
  <h1 id="recsenha_h1">E-mail ou Código inválidos. Acesso negado!</h1>

  <div id="recsenha_footer">

    <footer>
      <?php
      // convoca o rodapé
      include_once('../template/components/_footer.html');
      ?>
    </footer>
  </div>
</body>

</html>