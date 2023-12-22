<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            width: 100%;
            height: 100%;
        }

        .page {
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            color: white;
            background: #FFFEFC;


        }

        .formLogin {
            display: flex;
            flex-direction: column;
            background-color: #5787E6;
            border-radius: 10px;
            padding: 80px;
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
            height: 50px;
            background: #3700ff;
            color: rgb(255, 255, 255);
            font-size: 14px;
            font-weight: 600;
            border: none !important;
            transition: all linear 160ms;
            cursor: pointer;
            margin: 0 !important;

        }

        .btn:hover {
            transform: scale(1.05);
            background-color: #5295bb;

        }
    </style>
</head>

<body>

    <section>
        <div class="page">
            <form action="../../sql/db_cadastrar.php" class="formLogin" enctype="multipart/form-data" method="post">
                <h1>Cadastro Usuário</h1>

                <input class="inputStyle nameInput" id="cadastro1_inputnome" name="nome_completo" value=""
                    placeholder="Nome completo" required>
                <input class="inputStyle emailInput" id="cadastro1_inputemail" name="email_institucional" type="email"
                    value="" placeholder="@eniac.edu.br" required>
                <input class="inputStyle passwordInput" id="cadastro1_inputsenha" name="senha" type="password" value=""
                    placeholder="Senha" required>
                <input class="inputStyle passwordConfirmeInput" id="cadastro1_inputconfirme" name="confirm_senha"
                    type="password" value="" placeholder="Confirmar senha" required>
                <input class="inputStyle genderInput" id="cadastro1_inputgenero" name="genero" list="inputgenero"
                    value="" placeholder="Selecione:" autocomplete="off" required>
                <datalist id="inputgenero">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </datalist>
                <input class="inputStyle dataInput" id="cadastro1_inputdata" name="data_aniversario" type="date"
                    value="" placeholder="dd/mm/aaaa" required>
                <input class="inputStyle phoneInput" id="cadastro1_inputcelular" name="celular" value="" type="tel"
                    placeholder="xx xxxxx-xxxx" required>
                <input class="inputStyle cepInput" id="cadastro2_cep" name="cep" value="" placeholder="CEP" required>
                <input class="inputStyle addressInput" id="cadastro2_endereço" name="endereco" value=""
                    placeholder="Endereço" required>
                <input class="inputStyle addressNumberInput" id="cadastro2_numero" name="numero_endereco" value=""
                    placeholder="Número" required>
                <input class="inputStyle neighborhoodInput" id="cadastro2_bairro" name="bairro" value=""
                    placeholder="Bairro" required>
                <input class="inputStyle cityInput" id="cadastro2_cidade" name="cidade" value="" placeholder="Cidade"
                    required>
                <input class="inputStyle stateInput" id="cadastro2_estado" name="estado" value="" placeholder="Estado"
                    required>
                <input class="inputStyle countryInput" id="cadastro2_pais" name="pais" value="" placeholder="País"
                    required>
                <input class="inputStyle courseInput" id="cadastro3_curso" name="curso" value="" placeholder="Curso"
                    required>
                <input class="inputStyle modalityInput" id="cadastro3_modalidade" name="modaliadade_curso" value=""
                    placeholder="Modalidade" required>
                <input class="inputStyle beginningCourseInput" id="cadastro3_iniciocurso3" name="inicio_curso"
                    type="date" value="" placeholder="Inicio do curso" required>
                <input class="inputStyle semesterInput" id="cadastro3_atual" name="semestre_curso" value=""
                    placeholder="Semestre atual" required>
                <!-- <p id="img1" class="formulary">Insira uma foto de 2mb <input id="img2"  class="photoInput" id="photoInput" name="file" type="file" value="" required></p> -->
                <button type="submit" class="btn" name="ok" id="submitBtn">Enviar</button>
            </form>

        </div>
    </section>


</body>

</html>