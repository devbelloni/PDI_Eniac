<?php
session_start();

if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email_institucional']);
    unset($_SESSION['senha']);
    unset($_SESSION['idcadastro_pdi']);
    header('Location: index.php');
    session_write_close();

}

require('../sql/db_conexao_dgh.php');

$email_institucional = $_SESSION['email_institucional'];


$sql = "SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '$email_institucional'";
$result = $coat->query($sql);
$obj = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empregabilidade</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../template/css/padrao.css">
    <link rel="stylesheet" href="../template/css/empregabilidade.css">
</head>

<body>
    <section>

        <header class="home_header">
            <nav class="home_headerNavbar">
                <?php include("../src/navbar.php") ?>
                <img class="home_headerNavbarLogo" src="../images/image 1@2x.png" alt="Logo do Carreiras">
            </nav>
            <section class="home_headerTitleBox">
                <h2 class="home_headerTitle">Carreiras</h2>
            </section>
        </header>
        <section>
            <div id="card1">
                <div>
                    <h2 id="emp_oque"> O que é Empregabilidade</h2>
                </div>
                <br>
                <div>
                    <div>
                        <p id="emp_txt">Olá, vamos conhecer sobre o trabalho de empregabilidade no Eniac?</p>
                    </div>
                    <br>
                    <div>
                        <p id="emp_txt">A empregalidade é mais do que apenas encontrar um emprego; é sobre manter uma
                            mentalidade de crescimento e se tornar uma força no mercado de trabalho em constante
                            mudança. Investir no desenvolvimento de suas habilidades, construir relacionamentos
                            profissionais sólidos e permanecer aberto à aprendizagem contínua são os pilares dessa
                            abordagem. Este site está aqui para ajudá-lo a entender e cultivar a empregalidade em sua
                            própria vida profissional.</p>
                    </div>
                </div>
            </div>
            <div id="card2">
                <br>
                <form action="../sql/db_empregabilidade.php" method="post">
                    <h2 id="emp_resposta">Responda</h2>
                    <br>
                    <div id="emp_form1">
                        <div>
                            <p id="emp_txt1">Grau de instrução </p>
                            <div id="emp_input1">
                                <input class="emp_input" list="intrucao" name="grauInstrucao" value=""
                                    placeholder="Selecione:" required>
                            </div>
                        </div>
                        <datalist id="intrucao">
                            <option selected disabled value="">Selecione:</option>
                            <option>Ensino Médio Incompleto</option>
                            <option>Ensino Médio Completo</option>
                            <option>Graduação Cursando</option>
                            <option>Graduação Completa</option>
                            <option>Especialização Cursando</option>
                            <option>Especialização Completa</option>
                            <option>MBA Cursando</option>
                            <option>MBA Completo</option>
                            <option>Mestrado Cursando</option>
                            <option>Mestrado Completo</option>
                            <option>Doutorado Cursando</option>
                            <option>Doutorado Completo</option>
                        </datalist>
                    </div>
                    <div id="emp_form2">
                        <p id="emp_txt1">Situação de emprego</p>
                        <div id="emp_input1">
                            <input class="emp_input" list="situacaoDeEmprego" name="emprego" value=""
                                placeholder="Selecione:" required>
                        </div>
                        <datalist id="situacaoDeEmprego">
                            <option selected disabled value="">Selecione</option>
                            <option>Desempregado</option>
                            <option>Procurando emprego em qualquer área</option>
                            <option>Procurando emprego na área do curso</option>
                            <option>Graduação Completa</option>
                            <option>Especialização Cursando</option>
                            <option>Especialização Completa</option>
                            <option>MBA Cursando</option>
                            <option>MBA Completo</option>
                            <option>Mestrado Cursando</option>
                            <option>Mestrado Completo</option>
                            <option>Doutorado Cursando</option>
                            <option>Doutorado Completo</option>
                            <option>Estágio</option>
                        </datalist>
                    </div>


                    <div id="emp_form3">
                        <p class="form-label3">
                        <p id="emp_txt2">A atividade profissional que exerce atualmente tem ligação com o seu curso?</p>
                        <div id="emp_input1">
                            <input class="emp_input" list="atividadeProfi" name="atividadeProfissional" value=""
                                placeholder="Selecione:" required>
                        </div>
                        <datalist id="atividadeProfi">
                            <option selected disabled value="">Selecione</option>
                            <option>Sim</option>
                            <option>Não</option>
                            <option>Não estou empregado(a) no momento</option>
                        </datalist>
                    </div>

                    <div id="emp_form4">
                        <p class="form-label4">
                        <p id="emp_txt2">Você obteve sua colocação no mercado mediante alguma ação ou apoio do ENIAC?
                        </p>
                        <div id="emp_input1">
                            <input class="emp_input" list="empregoEniac" name="colocacao" value=""
                                placeholder="Selecione:" required>
                        </div>
                        <datalist id="empregoEniac">
                            <option selected disabled value="">Selecione</option>
                            <option>Sim</option>
                            <option>Não</option>
                            <option>Não estou empregado(a) no momento</option>
                        </datalist>
                    </div>
                    <br>
                    <br>
                    <div id="empregabilidade_btn">
                        <button style="align-items: center;" class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>

        </section>

        <footer id="emp_footer">
            <?php
            // convoca o rodapé
            include_once('../template/components/_footer.html');
            ?>
        </footer>


</body>

</html>