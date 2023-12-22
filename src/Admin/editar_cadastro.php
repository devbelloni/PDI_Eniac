<?php
include_once("../Admin/../../sql/db_conexao_dgh.php");

$query = ("SELECT * FROM cadastro_pdi_2");


$result = $coat->query($query);
$obj = mysqli_fetch_assoc($result);



if (!empty($_GET['idcadastro_pdi'])) {
    $idcadastro_pdi = $_GET['idcadastro_pdi'];

    $sql = "SELECT * FROM cadastro_pdi_2 WHERE idcadastro_pdi = '$idcadastro_pdi'";

    $result = $coat->query($sql);


    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome_completo = $user_data['nome_completo'];
            $data_nascimento = $user_data['data_aniversario'];
            $genero = $user_data['genero'];
            $celular = $user_data['celular'];
            $email_institucional = $user_data['email_institucional'];
            $curso = $user_data['curso'];
            // $senha = $user_data['senha'];
            // $conf_senha = $user_data['confirm_senha'];
            $id = $user_data['idcadastro_pdi'];
        }
    } else {
        // header('location: tabela.php');

    }





    mysqli_close($coat);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario ADM</title>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0px;
            padding: 0px;
            background-color: #002eb5;
        }

        .page {
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            color: white;
            margin-top: 20px;


        }

        .formLogin {
            display: flex;
            margin-top: 300px;
            flex-direction: column;
            margin-bottom: -280px;
            background-color: #011143;
            border-radius: 10px;
            padding: 80px;
            box-shadow: 10px 10px 40px rgba(55, 0, 255, 0.39);
            gap: 10px
        }

        .formLogin h1 {
            padding: 0;
            margin: 0;
            font-weight: 500;
            font-size: 2.3em;
        }

        .formLogin p {
            display: inline-block;
            font-size: 14px;
            color: rgb(255, 255, 255);
            margin-bottom: 25px;
        }

        .formLogin input {
            padding: 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            margin-top: 5px;
            border-radius: 4px;
            transition: all linear 160ms;
            outline: none;
        }


        .formLogin input:focus {
            border: 1px solid #25f730;
        }

        .formLogin label {
            font-size: 14px;
            font-weight: 600;
        }

        .btn {
            background-color: #3700ff;
            color: rgb(255, 255, 255);
            font-size: 14px;
            font-weight: 600;
            border: none !important;
            transition: all linear 160ms;
            cursor: pointer;
            margin: 0 !important;
            padding: 10px;

        }

        .btn:hover {
            transform: scale(1.05);
            background-color: #5295bb;

        }

        #photo {
            border-radius: 50%;
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <section>

        <div class="page">


            <form method="POST" class="formLogin" action="./salvar_dados.php">
                <h1>Editar Cadastro &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h1>
                <!-- <label for="number" >Código</label>
                <input type="number" placeholder="Código" autofocus="true" required> -->
                <label for="number">Nome Completo</label>
                <input type="text" name="nome_completo" placeholder="Nome Completo" autofocus="true"
                    value="<?php echo $nome_completo; ?>" required>
                <label for="name">Gênero</label>
                <input type="name" name="genero" placeholder="Gênero" autofocus="true" value="<?php echo $genero; ?>"
                    required />
                <label for="date">Data de Nascimento</label>
                <input type="date" name="data_nascimento" placeholder="Data de Nascimento" autofocus="true"
                    value="<?php echo $data_nascimento; ?>" required />
                <label for="E-mail">Celular</label>
                <input type="text" name="celular" placeholder="celular" autofocus="true" value="<?php echo $celular; ?>"
                    required />
                <label for="password">Email Institucional</label>
                <input type="text" name="email_institucional" placeholder="Email Institucional"
                    value="<?php echo $email_institucional; ?>" required />
                <label for="password">Curso</label>
                <input type="text" name="curso" placeholder="Curso" value="<?php echo $curso ?>" required />
                <label for="password">Senha</label>
                <input type="text" name="senha" placeholder="Senha" value="" required />
                <label for="password">Confirmar Senha</label>
                <input type="text" name="conf_senha" placeholder="Confirme a Senha" value="" required />
                <button type="submit" name="ok" class="btn">Enviar</button>
                <!-- <button type="submit" name="foi" value="Registre-se" class="btn">Enviar</button> -->
            </form>

        </div>


    </section>
</body>

</html>