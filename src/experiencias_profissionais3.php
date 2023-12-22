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
    <title>Experiências profissionais</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../template/css/padrao.css">
    <link rel="stylesheet" href="../template/css/experienciaprofissional1.css">
</head>


</head>

<body>
    <section>
        <?php
        // convoca o rodapé
        include_once('../template/components/padrao.php');
        ?>
        <div id="exp1_card">
            <article id="">
                <form class="formu" action="../sql/db_experiencias_profissionais.php" method="post">
                    <br>
                    <h2>Experiência Profissional 3</h2>
                    <br><br>
                    <section>
                        <p id="exp1_nome"> Nome da Empresa:</p>
                        <div id="exp1_input1">
                            <input id="exp1_input" name="empresa3" value="" placeholder="" required>
                        </div>
                        <br>
                        <p id="exp1_nome">Função:</p>
                        <div id="exp1_input1">
                            <input id="exp1_input" name="funcao3" value="" placeholder="" required>
                            <div>
                                <br>
                                <p id="exp1_data">Data de entrada:</p>
                                <div id="exp1_input1">
                                    <input id="exp1_input" name="entrada3" value="" type="date" placeholder="xx/xx/xxxx"
                                        required>
                                </div>
                                <br>
                                <p id="exp1_nome">Data de saída(Caso continue na empresa desconsiderar):</p>
                                <div id="exp1_input1">
                                    <input id="exp1_input" name="saida3" value="" type="date" placeholder="xx/xx/xxxx">
                                </div>
                                <br>
                                <br>
                                <button class="" type="submit">Enviar</button>
                    </section>
                </form>
            </article>
        </div>
    </section>
    <br><br>
    <footer id="exp1_footer">
        <?php
        // convoca o rodapé
        include_once('../template/components/_footer.html');
        ?>
    </footer>
</body>

</html>