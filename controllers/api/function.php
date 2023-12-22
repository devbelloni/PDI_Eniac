<?php 
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "id20628149_pdi";

//servidor Belloni
// $servername = "127.0.0.1:3306";
// $username = "root";
// $password = "Karameikos1@";
// $dbname = "id20628149_pdi";

//no servidor
//  $servername = "localhost";
//  $password = "Uberlandia1@";
//  $dbname = "id20628149_pdi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


function error422($message){

    $data = [
        'status' => 422,
        'message' => $message
    ];
    header("HTTP/1.0 422 Unprocessable Entity");
    echo json_encode($data);
    exit();

}


function getCustomer($customerParams){
    global $conn;

    // session_start();

    // $ids = $_SESSION['idcadastro_pdi'];

    // print($id);


    if($customerParams['id'] == null){

        return error422('Enter your customer id ');

    }

    $customerId = mysqli_real_escape_string($conn, $customerParams['id']);

    $query = "SELECT  resilience, interpersonal_relationship, communication, adaptability_and_flexibility, self_development_and_self_management, creativity_and_innovation FROM cadastro_pdi_2 WHERE email_institucional='$customerId' LIMIT 1 ";
    $result = mysqli_query($conn, $query);

    if($result){

        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);
            $data = [
                'status' => 200,
                'message' => 'Customer Fetched Successfully',
                'data' => $res
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);
            // echo json_encode($data);

        }else{
            $data = [
                'status' => 404,
                'message' => 'No Customer Found',
            ];
            header("HTTP/1.0 404 Not Found");
            return json_encode($data);
        }

    }else{

        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);

    }

}

function getCustomer_Email(){
    global $conn;

    $sql = "SELECT * FROM cadastro_pdi_2";

      $sql_query = $conn->query($sql) or die("Falha ao se conectar". $conn->error);

      $quantidade = $sql_query->num_rows;
      if($quantidade == 1){

          $usuario = $sql_query->fetch_assoc();

          if(!isset($_SESSION)){
              session_start();
          }
          $_SESSION['idcadastro_pdi'] = $usuario['idcadastro_pdi'];
          $_SESSION['path'] = $usuario['path'];
          $_SESSION['senha'] = $usuario['senha'];
          $_SESSION['data_nascimento'] = $usuario['data_nascimento'];
          $_SESSION['nome_completo'] = $usuario['nome_completo'];
          $_SESSION['data_aniversario'] = $usuario['data_aniversario'];
          $_SESSION['genero'] = $usuario['genero'];
          $_SESSION['celular'] = $usuario['celular'];
          $_SESSION['cep'] = $usuario['cep'];
          $_SESSION['pais'] = $usuario['pais'];
          $_SESSION['estado'] = $usuario['estado'];
          $_SESSION['bairro'] = $usuario['bairro'];
          $_SESSION['cidade'] = $usuario['cidade'];
          $_SESSION['endereco'] = $usuario['endereco'];
          $_SESSION['email_institucional'] = $usuario['email_institucional'];
          $_SESSION['curso'] = $usuario['curso'];
          $_SESSION['modaliadade_curso'] = $usuario['modaliadade_curso'];
          $_SESSION['inicio_curso'] = $usuario['inicio_curso'];
          $_SESSION['semestre_curso'] = $usuario['semestre_curso'];
          $_SESSION['codigo'] = $usuario['codigo'];

          
          session_write_close();

      }else{
        //   echo "Falha ao logar! E-mail ou senha incorretos";

      }

    // $customerId = "218322023@eniac.edu.br";
     $customerId = $_SESSION['email_institucional'];


    $query = "SELECT  email_institucional FROM cadastro_pdi_2 WHERE email_institucional='$customerId' LIMIT 1 ";
    $result = mysqli_query($conn, $query);

    if($result){

        if(mysqli_num_rows($result) == 1){

            $res = mysqli_fetch_assoc($result);
            $data = [
                'status' => 200,
                'message' => 'Customer Fetched Successfully',
                'data' => $res
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);
            // echo json_encode($data);

        }else{
            $data = [
                'status' => 404,
                'message' => 'No Customer Found',
            ];
            header("HTTP/1.0 404 Not Found");
            return json_encode($data);
        }

    }else{

        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);

    }

}


function getCustomerList(){
    global $conn;

    $query = "SELECT * FROM cadastro_pdi_2";

    $query_run = mysqli_query($conn, $query);

    if($query_run){

       if(mysqli_num_rows($query_run) > 0){

           $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

           $data = [
               'status' => 200,
               'message' => 'Customer List Fetched Successfully',
               'data' => $res
           ];
           header("HTTP/1.0 200 OK");
           return json_encode($data);

       }else{

           $data = [
               'status' =>404,
               'message' => 'No Customer Found',
           ];
           header("HTTP/1.0 404 No Customer Found");
           return json_encode($data);

       }
    }
}




?>