<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cadastro - PDI</title>

  <!-- css -->
  <link rel="stylesheet" href="../template/css/cadastro.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
</head>

<body>
  <main class="cadastro_mainContent">
    <form class="cadastro_mainContentForm" id="signUpForm" name="signUpForm" action="../sql/db_cadastrar.php"
      method="post">
      <section class="cadastro_mainContentFormBox">
        <h1 class="cadastro_mainContentFormTitle">Cadastro usuário</h1>
        <div class="cadastro_mainContentFormInputsBox">
          <input class="cadastro_mainContentFormInput" id="nameInput" name="nome_completo" type="text"
            placeholder="Nome completo">
          <input class="cadastro_mainContentFormInput" id="institutionalEmail" name="email_institucional" type="text"
            placeholder="Email institucional">
          <input class="cadastro_mainContentFormInput" id="institutionalEmail" name="ra" type="text" placeholder="RA">
          <input class="cadastro_mainContentFormInput" id="passwordInput" name="senha" type="text" placeholder="Senha">
          <input class="cadastro_mainContentFormInput" id="confirmePasswordInput" name="confirm_senha" type="text"
            placeholder="Confirma senha">
          <select class="cadastro_mainContentFormInput" id="genderInput" name="genero">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
          </select>
          <input class="cadastro_mainContentFormInput" id="birthdayInput" name="data_aniversario" type="date">
          <input class="cadastro_mainContentFormInput" id="phoneInput" name="celular" type="text"
            placeholder="xx xxxxx-xxxx">
          <input class="cadastro_mainContentFormInput" id="cepInput" name="cep" type="text" placeholder="CEP">
          <input class="cadastro_mainContentFormInput" id="addressInput" name="endereco" type="text"
            placeholder="Endereço">
          <input class="cadastro_mainContentFormInput" id="addressNumberInput" name="numero_endereco" type="text"
            placeholder="Complemento">
          <input class="cadastro_mainContentFormInput" id="cityInput" name="bairro" type="text" placeholder="Bairro">
          <input class="cadastro_mainContentFormInput" id="cityInput" name="cidade" type="text" placeholder="Cidade">
          <input class="cadastro_mainContentFormInput" id="stateInput" name="estado" type="text" placeholder="Estado">
          <input class="cadastro_mainContentFormInput" id="countryInput" name="pais" type="text" placeholder="País">
          <input class="cadastro_mainContentFormInput" id="courseInput" name="curso" type="text" placeholder="Curso">
          <select class="cadastro_mainContentFormInput" id="courseModalityInput" name="modaliadade_curso">
            <option value="Presencial">Presencial</option>
            <option value="Online">Online</option>
            <option value="Híbrido">Híbrido</option>
          </select>
          <input class="cadastro_mainContentFormInput" id="begginingCourseDateInput" name="inicio_curso" type="date">
          <input class="cadastro_mainContentFormInput" id="courseSemesterInput" name="semestre_curso" type="text"
            placeholder="Semestre atual">
        </div>
      </section>
      <button class="cadastro_mainContentSubmitBtn" id="submitBtn" name="submitBtn" type="submit">Enviar</button>
    </form>
  </main>
  <footer class="cadastro_footer">
    <p class="cadastro_footerCopyright">© 2023 Code Factory</p>
  </footer>
</body>

</html>