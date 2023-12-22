<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario ADM</title>

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
            background-color: #3700ff;
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



            <form method="POST" class="formLogin" action="../../sql/cadastro_adm.php">
                <h1>Cadastro do Administrador</h1>
                <!-- <label for="number" >Código</label>
                <input type="number" placeholder="Código" autofocus="true" required> -->
                <label for="number">RA</label>
                <input type="number" name="ra" placeholder="RA" autofocus="true" required>
                <label for="name">Nome</label>
                <input type="name" name="nome" placeholder="Nome" autofocus="true" required />
                <label for="date">Data de Nascimento</label>
                <input type="date" name="data_nascimento" placeholder="Data de Nascimento" autofocus="true" required />
                <label for="E-mail">E-mail</label>
                <input type="email" name="email" placeholder="E-mail institucional" autofocus="true" required />
                <label for="password">Senha</label>
                <input type="password" name="senha" placeholder="Senha" required />
                <label for="password">Confirme a Senha</label>
                <input type="password" name="conf_senha" placeholder="Confirme a Senha" required />
                <button type="submit" name="ok" class="btn">Enviar</button>
                <!-- <button type="submit" name="foi" value="Registre-se" class="btn">Enviar</button> -->
            </form>

        </div>


    </section>
</body>

</html>