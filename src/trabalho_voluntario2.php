<?php
session_start();

if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email_institucional']);
    unset($_SESSION['senha']);
    unset($_SESSION['idcadastro_pdi']);
    header('Location: index.php');
    session_write_close();

}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../template/css/padrao.css"> -->
    <link rel="stylesheet" href="../template/css/padrao.css">
    <link rel="stylesheet" href="../template/css/trabalho_voluntario1.css">
</head>

<body>
    <section>
        <?php
        // convoca o rodapé
        include_once('../template/components/padrao.php');
        ?>
        <!-- Trabalho Voluntário 2 -->
        <article id="div">
            <form action="../sql/db_trabalho_voluntario.php" method="post">
                <br>
                <h2 id="voluntario1_h2">Trabalho Voluntário 2</h2>
                <br><br>

                <p id="voluntario1_p"> Tema do trabalho como voluntário:</p>
                <div>
                    <input id="voluntario1_input" name="tema_voluntario2" value="" placeholder="" required>
                </div><br>
                <p id="voluntario1_p">Atividades exercidas:</p>
                <div>
                    <input id="voluntario1_input" name="descricao_voluntario2" value="" placeholder="" required>
                </div><br>
                <p id="voluntario1_p">Data:</p>
                <div>
                    <input id="voluntario1_input" name="data_voluntario2" value="" type="date" placeholder="xx/xx/xxxx"
                        required>
                </div><br>
                <div>
                    <br>
                    <button class="" name="" type="submit">Enviar</button>
                </div>
            </form>
        </article>
    </section>
    <br><br>
    <footer id="voluntario1_footer">
        <?php
        // convoca o rodapé
        include_once('../template/components/_footer.html');
        ?>
    </footer>
</body>

</html>