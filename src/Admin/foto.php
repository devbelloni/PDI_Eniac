<?php
include_once('../../sql/db_conexao_dgh.php');

session_start();

$email = $_SESSION['email'];

$query = ("SELECT * FROM cadastro_pdi_2");
$query2 = ("SELECT * FROM cadastro_adm WHERE email='$email'");



$result = $coat->query($query);
$obj = mysqli_fetch_assoc($result);

$result2 = $coat->query($query2);
$obj2 = mysqli_fetch_assoc($result2);



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
      /* margin-left:300px; */
    }

    /* Estilos para a imagem do card */
    .card img {
      border-radius: 50%;
      margin-left: 75px;
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

    #btn {
      border-radius: 50px;
      margin-left: 115px;
    }
  </style>

</head>

<body>
  <br><br><br><br>

  <br>
  <div class="card">
    <!-- <img src="https://via.placeholder.com/200" alt="Imagem do Card"> -->
    <form method="post" enctype="multipart/form-data" action="../../sql/db_alterar_foto_adm.php">

      <?php echo ("<img id='photo' src='../../sql/imagesDBAdm/" . $obj2['path_foto'] . "' width='150' height='150' alt=''>"); ?>
      <br>

      <p id="img" class="formulary">Insira uma imagem com até 2mb nos formatos jpg, peg, png ou jfif: <input
          class="photoInput" id="photoInput" name="file" type="file" value=""></p>

      <BUtton onclick="confirmPassworw(); return false" id="btn" name="update">Salvar</BUtton>
      <!-- <a href="editar_cadastro.php" id="voltar">Voltar</a> -->

    </form>

  </div>
  <br>

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