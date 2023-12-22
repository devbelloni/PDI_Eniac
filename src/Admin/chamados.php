<?php
include_once('../../sql/db_conexao_dgh.php');

session_start();

$email = $_SESSION['email'];


$query = ("SELECT * FROM chamados");




$result = $coat->query($query);
$obj = mysqli_fetch_assoc($result);



//busca da lupa 
if (!empty($_GET['search'])) {

  $data = $_GET['search'];
  $sql = ("SELECT * FROM chamados where idchamados  LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY idchamados ASC");


} else {
  $sql = ("SELECT * FROM chamados ORDER BY nome ASC ");

}



$resultados = $coat->query($sql);



mysqli_close($coat);



?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script></head> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../Template/CSS/menu_adm.css">

  <style>
    body {
      background-image: url("../media/IMG/bg.jpg");
      background-color: black;
    }

    .box-search {
      display: flex;
      justify-content: center;
      gap: .1%;

    }

    #imgbtn {
      border-radius: 50%;
    }

    /* Estilos para o card */
    .card {
      width: 350px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      margin: 0 auto;
      padding: 20px;
      margin-left: 0px;
      margin-top: -355px;
    }

    /* Estilos para a imagem do card */
    .card img {
      /* max-width: 100%; */
      /* height: auto; */
      border-radius: 100px;
      margin-left: 60px;
    }

    /* Estilos para o título do card */
    .card h2 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    /* Estilos para a descrição do card */
    .card p {
      font-size: 1rem;
    }

    #foto {
      margin-left: 95px;
    }


    .cardbord {
      width: 500px;
      /* Largura do cartão */
      background-color: white;
      /* Cor de fundo branca */
      border: 1px solid #00ff00;
      /* Borda verde à direita */
      padding: 20px;
      /* Espaçamento interno */
      margin-left: 400px;
    }

    #contador {
      position: absolute;
      margin-left: 150px;
      font-size: 22px;
      margin-top: -15px;

    }

    #utilizadores {
      position: absolute;
      margin-left: 70px;
      font-size: 20px;
      margin-top: -46px;

    }
  </style>

</head>

<body>

  <nav class="navbar navbar-light bg-dark p-2">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="./saida.php?sair">Sair</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./cadastro.php">Cadastro Adm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login.php">Aplicação</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./mostrar_adm.php">Mostar ADM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./historico_cadastro.php">Histórico De Cadastro </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./teste_cadastro.php">Cadastrar Aluno</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./sobre_adm.php">Sobre ADM</a>
      </li>
    </ul>
  </nav>
  <br>


  <br>
  <div class="box-search">
    <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
    <button onclick="searchDate()" class="btn btn-primary">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
        viewBox="0 0 16 16">
        <path
          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
      </svg>
    </button>
  </div>
  <br>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Mensagem</th>
        <th scope="col">Alter</th>
      </tr>
    </thead>
    <tbody class="table-primary">
      <?php
      if ($resultados->num_rows > 0) {
        while ($row = $resultados->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["idchamados"] . "</td>";
          echo "<td>" . $row["nome"] . "</td>";
          echo "<td>" . $row["email"] . "</td>";
          echo "<td>" . $row["telefone"] . "</td>";
          echo "<td>" . $row["mensagem"] . "</tsd>";
          echo "<td> 
            <a href=finalizar_chamado.php?idchamados=$row[idchamados]>
              <img src='pencil.svg' id='imgbtn' height='' width=''></a>
            </td>";
          echo "</tr>";
        }
      } else {
        echo "Nenhum resultado encontrado.";
      }

      ?>


    </tbody>
  </table>
  <a href="../../sql/imagesDB/"></a>
  <script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function (event) {
      if (event.key === "Enter") {
        searchDate();
      }
    });
    function searchDate() {
      window.location = 'chamados.php?search=' + search.value;

    }
  </script>
</body>

</html>