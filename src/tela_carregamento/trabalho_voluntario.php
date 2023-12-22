<!DOCTYPE html>
<html>

<head>
  <title>Tela de Carregamento</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      padding: 20px;
      animation: fadeIn 1s;
    }

    h1 {
      color: #333;
      margin: 0;
    }

    .loader-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .loader {
      border: 6px solid #3498db;
      border-top: 6px solid transparent;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Seus dados Foram Registrados </h1>
    <div class="loader-container">
      <div class="loader"></div>
      <p>Aguarde enquanto redirecionamos...</p>
    </div>
  </div>

  <script>
    // Função para redirecionar após 3 segundos
    setTimeout(function () {
      window.location.href = '../atividade_voluntario.php'; // Substitua com o URL da página para a qual deseja redirecionar
    }, 3000); // 3000 milissegundos = 3 segundos
  </script>
</body>

</html>