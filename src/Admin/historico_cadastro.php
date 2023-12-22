<?php
include_once('../../sql/db_conexao_dgh.php');


$query = ("SELECT * FROM historico_adm");


$result = $coat->query($query);
$obj = mysqli_fetch_assoc($result);



//busca da lupa 
if (!empty($_GET['search'])) {

  $data = $_GET['search'];
  $sql = ("SELECT * FROM historico_adm where cadastro_feito_pelo_adm  LIKE '%$data%' or cadastro_feito_pelo_adm LIKE '%$data%' or nome_pessoa_cadastrada LIKE '%$data%' ORDER BY idhistorico_adm ASC");


} else {
  $sql = ("SELECT * FROM historico_adm ORDER BY cadastro_feito_pelo_adm ASC ");

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
    }

    .box-search {
      display: flex;
      justify-content: center;
      gap: .1%;

    }

    #imgbtn {
      border-radius: 50%;
    }
  </style>

</head>

<body>

  <nav class="navbar navbar-light bg-dark p-2">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="./login.php">Sair</a>
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

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <!-- <th scope="col" >Foto</th> -->
        <th scope="col">Nome do Admin</th>
        <th scope="col">Nome Do Aluno Cadastrado</th>
        <th scope="col">Log De Hora </th>
        <!-- <th scope="col" >Senha</th> -->
        <!-- <th scope="col" >Código</th> -->
        <!-- <th scope="col" >Alter</th> -->
        <!-- <th scope="col" >Senha</th>
      <th scope="col" >Confirmação de Senha</th>
      <th scope="col" >Código de Acesso</th>
      <th scope="col" >Alter</th> -->
      </tr>
    </thead>
    <tbody class="table-primary">
      <?php
      if ($resultados->num_rows > 0) {
        while ($row = $resultados->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["idhistorico_adm"] . "</td>";
          // echo "<td><img id='imgbtn' height='50' width='50' src='../../sql/imagesDB/" . $row['path_foto']."' >";
          echo "<td>" . $row["cadastro_feito_pelo_adm"] . "</td>";
          echo "<td>" . $row["nome_pessoa_cadastrada"] . "</td>";
          echo "<td>" . $row["data_horario"] . "</td>";
          // echo "<td>" . $row["email"] . "</tsd>";
          // echo "<td>" . $row["senha"] . "</td>";
          // echo "<td>" . $row["codigo"] . "</td>";
          // echo "<td>" . $row["senha"] . "</td>";
          // echo "<td>" . $row["confirm_senha"] . "</td>";
          // echo "<td>" . $row["codigo"] . "</td>";
          // echo "<td> 
          // <a href=editar_cadastro.php?idcadastro_pdi=$row[idcadastro_pdi]>
          //   <img src='pencil.svg' id='imgbtn' height='' width=''></a>
          // </td>";
          // echo "</tr>";
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
      window.location = 'historico_cadastro.php?search=' + search.value;

    }
  </script>
</body>

</html>