<?php
include_once('../../sql/db_conexao_dgh.php');

session_start();

$email = $_SESSION['email'];


$query = ("SELECT * FROM cadastro_pdi_2");
$query2 = ("SELECT * FROM cadastro_adm WHERE email='$email'");
$sql_cont = ("SELECT COUNT(*) AS total_acessos FROM cadastro_pdi_2");
$sql_chamados = ("SELECT COUNT(*) AS total_chamados FROM chamados");



$result = $coat->query($query);
$obj = mysqli_fetch_assoc($result);

$result2 = $coat->query($query2);
$obj2 = mysqli_fetch_assoc($result2);

$result3 = $coat->query($sql_cont);
if ($result3->num_rows > 0) {
  $row = $result3->fetch_assoc();
  $total_acessos = $row['total_acessos'];
} else {
  $total_acessos = 0;
}


$result4 = $coat->query($sql_chamados);
if ($result4->num_rows > 0) {
  $row2 = $result4->fetch_assoc();
  $total_chamados = $row2['total_chamados'];
} else {
  $total_chamados = 0;
}



//busca da lupa 
if (!empty($_GET['search'])) {

  $data = $_GET['search'];
  $sql = ("SELECT * FROM cadastro_pdi_2 where idcadastro_pdi  LIKE '%$data%' or nome_completo LIKE '%$data%' or email_institucional LIKE '%$data%' ORDER BY idcadastro_pdi ASC");


} else {
  $sql = ("SELECT * FROM cadastro_pdi_2 ORDER BY nome_completo ASC ");

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

  <div class="cardbord">
    <!-- Conteúdo do cartão -->
    <h2>Quantidade de Acessos</h2>
    <img src="../../images/avatar.png" alt="" height="50" width="50">
    <p id="utilizadores">Utilizadores</p>
    <p id="contador">
      <?php echo $total_acessos; ?>
    </p>
    <p></p>
  </div>
  <br><br>
  <div class="cardbord">
    <!-- Conteúdo do cartão -->
    <h2>Chamados</h2>
    <a href="./chamados.php"><img src="../../images/avatar.png" alt="" height="50" width="50"></a>
    <p id="utilizadores">Em Aberto</p>
    <p id="contador">
      <?php echo $total_chamados; ?>
    </p>
    <p></p>
  </div>

  <div class="card">
    <?php echo ("<img id='photo' src='../../sql/imagesDBAdm/" . $obj2['path_foto'] . "' width='150' height='150' alt=''>"); ?>
    <a href="./foto.php" id="foto">Alterar Foto</a>
    <h5>Admin:
      <?php echo $_SESSION['nome']; ?>
    </h5>
    <h5>Email:
      <?php echo $_SESSION['email']; ?>
    </h5>
    <h6>Último Login:
      <?php echo $obj2['ultimo_loger']; ?>
    </h6>
    <h6>Última Modificação:
      <?php echo $obj2['ultima_modificacao']; ?>
    </h6>
    <h6>Última Criação:
      <?php echo $obj2['ultima_criacao']; ?>
    </h6>



  </div>
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
        <th scope="col">Foto</th>
        <th scope="col">Nome Completo</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">Gênero</th>
        <th scope="col">Celular</th>
        <th scope="col">E-mail Institucional</th>
        <th scope="col">Curso</th>
        <th scope="col">Código de Acesso</th>
        <th scope="col">Alter</th>
      </tr>
    </thead>
    <tbody class="table-primary">
      <?php
      if ($resultados->num_rows > 0) {
        while ($row = $resultados->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["idcadastro_pdi"] . "</td>";
          echo "<td><img id='imgbtn' height='50' width='50' src='../../sql/imagesDB/" . $row['path_foto'] . "' >";
          echo "<td>" . $row["nome_completo"] . "</td>";
          echo "<td>" . $row["data_aniversario"] . "</td>";
          echo "<td>" . $row["genero"] . "</td>";
          echo "<td>" . $row["celular"] . "</tsd>";
          echo "<td>" . $row["email_institucional"] . "</td>";
          echo "<td>" . $row["curso"] . "</td>";
          echo "<td>" . $row["codigo"] . "</td>";
          echo "<td> 
            <a href=editar_cadastro.php?idcadastro_pdi=$row[idcadastro_pdi]>
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
      window.location = 'dashboard.php?search=' + search.value;

    }
  </script>
</body>

</html>