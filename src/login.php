<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - PDI Eniac</title>

  <!-- css -->
  <link rel="stylesheet" href="../template/css/login.css">
  <link rel="stylesheet" href="../template/css/padrao.css">

</head>

<body>
  <section>
    <header class="headerContent">

      <!--DIVISÂO DA IMAGEM  -->

      <div id="logo_carreiras">
        <img src="../images/image 1.svg"> </img>
      </div>
      <br>
      <br>


    </header>

    <!--DIVISÂO MAIN -->

    <div>
      <div id="div_content">

        <!-- DIVISÂO FORM -->

        <div>


          <form action="../sql/db_login.php" method="post" id="form">


            <!-- DIVISÂO TITULO -->
            <h1 id="login_header">Faça seu login no Portal PDI Eniac!</h1>


            <!-- DIVISÂO EMAIL -->

            <div>
              <p id="text_email">E-mail</p>
              <input id="box_email" type="email" class="inputEmail" id="inputEmail" name="email_institucional"
                placeholder="E-mail">
              <br>
            </div>

            <!-- DIVISÃO SENHA -->

            <div>
              <p id="text_senha">Senha </p>
              <input id="box_senha" type="password" class="inputPassword" name="senha" id="inputPassword"
                placeholder="Senha">
            </div>

            <!-- DIVISÃO ESQUECEU SENHA -->

            <div id="esqueceu_senha">
              <p class="warningMessage" id="warningMessageInputPassword"></p>
              <p>Esqueceu sua senha? <a href="recuperarsenha.php" id="clique">Clique aqui</a></p>
              <br>
            </div>


            <!-- DIVISÃO BOTÃO ACESSAR -->

            <div id="botao1_login">
              <button type="submit" class="submitBtn" id="botao1">Acessar</button>
              <br>
            </div>
            <div>
              <p>Ainda não tem uma conta? <a href="cadastro.php" id="cadastre">Cadastre-se</a></p>
            </div>

            <!-- DIVISÃO BOTÃO GOOGLE -->

            <div class="loginGoogleAccountBox">
              <br>
              <p id="conta1">Logar no Google:</p>
              <br>
            </div>
            <div>
              <script src="https://apis.google.com/js/platform.js" async defer></script>
              <script src="./Google.js/login.js"></script>
            </div>
            <div><button id="botao_box2" type="button" class="loginGoogleAccount" onclick="signIn()">
                <img id="img_carreira" src="../images/image_ 2.svg">
              </button></div>




        </div>

        </form>
      </div>



    </div>
    </div>

    <!-- DIVISÂO FOOTER -->
    <div>
      <footer id="login_footer">
        <?php
        // convoca o rodapé
        include_once('../template/components/_footer.html');
        ?>
      </footer>
      <div>

</body>

</html>