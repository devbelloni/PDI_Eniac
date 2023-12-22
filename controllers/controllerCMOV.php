<?php
include_once("../sql/db_conexao_dgh.php");
if(isset($_SESSION));{
session_start();
}
// verifica o e-mail

$email = $_SESSION['email_institucional'];
// $email = '115312022@eniac.edu.br'; // e-mail para testes
// $email = '111132022@eniac.edu.br';  
$parts = explode('@', $email);
$RA = $parts[0];

//echo $RA;

// Configuração da requisição
$endpoint = 'https://www.cmov.com.br/api/v1/users/'.$RA.'/find';
$token = 'Token token=QIcAoMdCOkwIEe13TriYrHRUvkeHo34fJzgMBl3P';

//echo $endpoint;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: ' . $token,
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Faz a requisição
$response = curl_exec($ch);



// Verifica se a requisição foi bem-sucedida
if ($response === false) {
    die('Erro ao consumir a API: ' . curl_error($ch));
}

// Manipula a resposta da API (nesse exemplo, apenas exibe na tela)
//echo $response;

// Fecha a conexão cURL
curl_close($ch);

// Salva a resposta no arquivo JSON
$jsonFile = 'cmov.json';
file_put_contents($jsonFile, $response);

$cmovObj = json_decode($response);
//->message 
if($cmovObj->message  != "No user found"){

    $perfil1 = $cmovObj->data->first_profile;
    $perfil2 = $cmovObj->data->secondary_profile;
    $passo = $cmovObj->data->step;
    $linkedin = $cmovObj->data->linkedin;
    $resilience = $cmovObj->data->competences_evaluation->resilience;
    $interpersonal_relationship= $cmovObj->data->competences_evaluation->interpersonal_relationship;
    $communication= $cmovObj->data->competences_evaluation->communication;
    $adaptability_and_flexibility= $cmovObj->data->competences_evaluation->adaptability_and_flexibility;
    $self_development_and_self_management= $cmovObj->data->competences_evaluation->self_development_and_self_management;
    $creativity_and_innovation= $cmovObj->data->competences_evaluation->creativity_and_innovation;


    echo "E-mail: " . $cmovObj->data->email . "<br>";
    echo "Perfil 1: " . $perfil1 . "<br>";
    echo "Perfil 2: " . $perfil2 . "<br>";
    echo "Passo: " . $passo . "<br>";
    echo "LinkedIn: " . $linkedin . "<br>";
    echo "Resiliência: " . $resilience . "<br>";
    echo "Relações Interpessoais: " . $interpersonal_relationship . "<br>";
    echo "Comunicação: " .$communication . "<br>";
    echo "Adaptabilidade e Flexibilidade: " .$adaptability_and_flexibility . "<br>";
    echo "Auto-desenvolvimento e Auto-gestão: " .$self_development_and_self_management . "<br>";
    echo "Criatividade e Inovação: " .$creativity_and_innovation . "<br>";



    /*$sql = "INSERT INTO cadastro_pdi (perfil1, perfil2, passo, linkedin, resilience, interpersonal_relationship, communication, adaptability_and_flexibility, self_development_and_self_management, creativity_and_innovation)
        VALUES('$perfil1', '$perfil2', '$passo', '$linkedin', '$resilience', '$interpersonal_relationship', '$communication', '$adaptability_and_flexibility', '$self_development_and_self_management', '$creativity_and_innovation') 
        WHERE email = '" . $_SESSION['email'] . "'";
    INSERT INTO `cadastro_pdi`(`email`, `curso`, `modalidade`, `inicio_curso`, `semestre`, `pais`, `estado`, `cidade`, `cep`, `endereco`, `numero_casa_apartamento`, `nome`, `data_nascimento`, `sexo`, `email_2`, `celular`, `senha`, `conf_senha`, `nome_foto`) VALUES ('115312022@eniac.edu.br','Engenharia','On Line','01/01/1010','8','Brasil','SP','Guarulhos','00000-000','Rua B','1313','Bruno Aluno','02/02/2020','Masculino','bruno@gmail.com','11 11111-1111','123456','123456','115312022.jpg')
    */       

    $sql = "UPDATE `cadastro_pdi_2` SET `perfil1`='$perfil1',`perfil2`='$perfil2',`passo`='$passo',`linkedin`='$linkedin',`resilience`='$resilience',`interpersonal_relationship`='$interpersonal_relationship',`communication`='$communication',`adaptability_and_flexibility`='$adaptability_and_flexibility',`self_development_and_self_management`='$self_development_and_self_management',`creativity_and_innovation`='$creativity_and_innovation' WHERE email_institucional = '" . $_SESSION['email_institucional'] . "'"; 


    //    echo $sql;

    $resultados = $coat->query($sql);


    //      mysqli_close($coat);
}
?>
