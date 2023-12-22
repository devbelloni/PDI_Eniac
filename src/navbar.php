<?php
require "../sql/db_conexao_dgh.php";

// session_start();

$email_institucional = $_SESSION['email_institucional'];

$sql = ("SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '$email_institucional'");
$result = $coat->query($sql);
$obj = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <style>
    /* The side navigation menu */

    .sidenav {
      height: 100%;
      /* 100% Full-height */
      width: 0;
      /* 0 width - change this with JavaScript */
      position: fixed;
      /* Stay in place */
      z-index: 10;
      /* Stay on top */
      top: 0;
      /* Stay at the top */
      left: 0;
      background-image: linear-gradient(to right, #FFFEFC 0%, #FFFEFC 75%, rgba(50, 86, 159, 0.94) 25%, rgba(50, 86, 159, 0.94) 100%);
      box-shadow: 13px 4px 25px 0px rgba(0, 0, 0, 0.25);
      overflow-x: hidden;
      /* Disable horizontal scroll */
      padding-top: 5%;
      /* Place content 60px from the top */
      transition: 0.5s;
      /* 0.5 second transition effect to slide in the sidenav */
    }

    /* The navigation menu links */
    .sidenav a {
      padding: 8px 8px;
      text-decoration: none;
      font-size: 25px;
      display: block;
      transition: 0.3s;
      color: #0C1D40;
      font-family: Poppins;
      font-style: normal;
      font-weight: 400;
      line-height: normal;
      list-style-type: none;
    }

    /* When you mouse over the navigation links, change their color */

    .sidenav a:hover {
      color: #f1f1f1;
      cursor: pointer;
      padding: 1rem;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 50px;
      margin-left: 50px;
      color: black;
    }

    /* menu */

    ul {
      list-style-type: none;
    }

    li {
      display: block;
      position: relative;
    }

    .menu-buttons {
      width: 270px;
      height: 78px;
      justify-content: center;
      align-items: center;
      border-radius: 8px;
      padding: 0px 5px 5px 0px;
      background: #FFFEFC;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      text-align: center;
      color: #0C1D40;
      cursor: pointer;
      margin-top: 2vh;
    }

    .div-line {
      width: 250px;
      height: 1px;
      background: #DEDEDE;
      margin-top: 15vh;
      z-index: -2;
    }

    .fotoUsuario {
      margin-left: 18%;
    }

    .menu-text {
      margin-top: 2vh;
      margin-left: 10vw;
    }

    .sair {
      position: relative;
      margin-bottom: 10vh;
      color: red;
    }

    /*Sub-Menus*/

    ul ul {
      list-style-type: none;
      text-decoration: none;
    }

    li ul {
      visibility: hidden;
      opacity: 0;
      overflow-x: hidden;
      min-width: 5rem;
      position: absolute;
      transition: all 0.5s ease;
      margin-top: 1rem;
      left: 0;
      top: 0;
      display: none;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    li ul li {
      clear: both;
      width: 100%;
    }

    span {
      cursor: pointer;
    }

    /*Sub-Menus drop down control*/

    ul li:hover>ul,
    ul li:focus-within>ul,
    ul li ul:hover,
    ul li ul:focus {
      background: #FFFEFC;
      box-shadow: 13px 4px 25px 0px rgba(0, 0, 0, 0.25);
      height: max-content;
      visibility: visible;
      margin-top: 12vh;
      overflow-y: auto;
      opacity: 1;
      display: block;
      z-index: 11;
    }


    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
      transition: margin-left .5s;
      padding: 20px;
    }

    /* media queries for screens */

    @media screen and (min-width:1920px) {

      .sidenav {
        background-image: linear-gradient(to right, #FFFEFC 0%, #FFFEFC 40%, rgba(50, 86, 159, 0.94) 25%, rgba(50, 86, 159, 0.94) 100%);
      }

      .menu-buttons {
        width: 380px;
        height: 70px;
        font-size: 25px;
      }

      .menu-text {
        margin-left: 3.3rem;
        font-size: 25px;
      }

      .div-line {
        width: 38.5%;
      }

      .sair {
        font-size: 20px;
        color: red;
      }
    }

    @media screen and (min-width:1280px) {

      .sidenav {
        background-image: linear-gradient(to right, #FFFEFC 0%, #FFFEFC 25%, rgba(50, 86, 159, 0.94) 75%, rgba(50, 86, 159, 0.94) 100%);
      }

      .menu-buttons {
        width: 420px;
        height: 78px;
        font-size: 25px;
      }

      ul li {
        margin-left: 5vw;
      }

      ul div .menu-text {
        font-size: 25px;
        margin-left: 13vw;
      }

      .div-line {
        width: 440px;
      }

      .sidenav ul li a .sair {
        font-size: 20px;
        color: red;
      }
    }

    @media screen and (min-width:768px) {

      .sidenav {
        background-image: linear-gradient(to right, #FFFEFC 0%, #FFFEFC 50%, rgba(50, 86, 159, 0.94) 25%, rgba(50, 86, 159, 0.94) 100%);
      }

      .menu-buttons {
        width: 370px;
        height: 78px;
        font-size: 25px;
        margin-left: 0vw;
      }

      .fotoUsuario {
        margin-left: 15%;
      }

      .menu-text {
        margin-top: 2vh;
        margin-left: 10%;
        font-size: 25px;
      }

      .div-line {
        width: 50%;
      }

      .sair {
        font-size: 25px;

      }
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }
  </style>
</head>

<body>

  <div id="mySidenav" class="sidenav">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <ul>

      <div>
        <?php echo ("<img class='fotoUsuario' src='../sql/imagesDB/" . $obj['path_foto'] . "' width='150' height='150' alt=''>"); ?>
      </div>

      <div>
        <h3 class="menu-text">
          <?php echo $_SESSION['nome_completo']; ?>
        </h3>
      </div>

      <li><a href="../src/homepage.php"><button class="menu-buttons"><img class="menu-images"
              src="../images/IconeCasa.svg" alt="IconeCasa">Home</button></a></li>
      <li><a href="../src/editar_cadastro.php"><button class="menu-buttons"><img class="menu-images"
              src="../images/edit.svg" alt="editar">Editar Perfil</button></a></li>
      <li><a href="#"><button class="menu-buttons"><img class="menu-images" src="../images/IconeLink.svg"
              alt="IconeLink">Links externos</button></a>
        <ul>
          <li><a href="https://lp.cmov.com.br/"><button class="menu-buttons"><img class="menu-images"
                  src="../images/IconeLink.svg" alt="IconeLink">CMOV</button></a></li>
          <li><a href="https://br.linkedin.com/"><button class="menu-buttons"><img class="menu-images"
                  src="../images/IconeLink.svg" alt="IconeLink">Linkedin</button></a></li>
        </ul>
      </li>
      <li><a href="#"><button class="menu-buttons"><img class="menu-images" src="../images/IconeRegistro.svg"
              alt="IconeRegistro">Registro de atividades</button></a>
        <ul>
          <li><a href="../src/empregabilidade.php"><button class="menu-buttons"><img class="menu-images"
                  src="../images/IconeRegistro.svg" alt="IconeRegistro">Questionário empregabilidade</button></a></li>
          <li><a href="../src/experiencias_profissionais_index.php"><button class="menu-buttons"><img
                  class="menu-images" src="../images/IconeRegistro.svg" alt="IconeRegistro">Experiências
                Profissionais</button></a></li>
          <li><a href="../src/atividade_voluntario.php"><button class="menu-buttons"><img class="menu-images"
                  src="../images/IconeRegistro.svg" alt="IconeRegistro">Trabalho Voluntário</button></a></li>
          <li><a href="../src/importancia_portifolio.php"><button class="menu-buttons"><img class="menu-images"
                  src="../images/IconeRegistro.svg" alt="IconeRegistro">Projetos Integradores</button></a></li>
          <li><a href="../src/TCC.php"><button class="menu-buttons"><img class="menu-images"
                  src="../images/IconeRegistro.svg" alt="IconeRegistro">TCC</a></li>
          <li><a href="../src/projetos_de_extensão.php"><button class="menu-buttons"><img class="menu-images"
                  src="../images/IconeRegistro.svg" alt="IconeRegistro">Projetos de Extensão</button></a></li>
        </ul>
      </li>
      <li><a href="../src/PDI-Front.php"><button class="menu-buttons"><img class="menu-images"
              src="../images/IconePDI.png" alt="IconePDI">Seu PDI</button></a></li>


      <div class="div-line"></div>
      <li><a id="sair" class="sair" href="../src/index.php">Sair</a></li>
    </ul>
  </div>

  <!-- Use any element to open the sidenav -->
  <span onclick="openNav()"><img width="50" height="50" src="../images/hamburguer.svg" alt="hamburguer"></span>

  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  <div id="main">
  </div>

  <script>
    /* Set the width of the side navigation to 100% */
    function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>

</body>

</html>