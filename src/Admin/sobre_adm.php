<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <style>
        body {
            background-color: black;
        }

        .card {
            width: 350px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            padding: 20px;
            margin-top: 60px;
            /* margin-left:px; */
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
    <div class="card">
        <h2>Sobre Ser Admin: </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consectetur pariatur nobis eligendi laborum
            minus atque. Consectetur, natus distinctio? Quasi ut reprehenderit libero. Amet, quasi non dolores quae
            porro ab.</p>
        <h2>Política: </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consectetur pariatur nobis eligendi laborum
            minus atque. Consectetur, natus distinctio? Quasi ut reprehenderit libero. Amet, quasi non dolores quae
            porro ab.</p>
        <h2>Regras: </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consectetur pariatur nobis eligendi laborum
            minus atque. Consectetur, natus distinctio? Quasi ut reprehenderit libero. Amet, quasi non dolores quae
            porro ab.</p>
        <h2>Sistemas: </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, consectetur pariatur nobis eligendi laborum
            minus atque. Consectetur, natus distinctio? Quasi ut reprehenderit libero. Amet, quasi non dolores quae
            porro ab.</p>




    </div>
</body>

</html>