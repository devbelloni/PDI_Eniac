<?php 
include_once('db_conexao_dgh.php');

session_start();

$email = $_SESSION['email'];

if(isset($_FILES['file'])){

    $arquivo = $_FILES['file'];
  
  
  
    if($arquivo['error'])
  
        die("Falha ao enviar o arquivo");
  
  
  
    if($arquivo['size'] > 2097152 )
  
        die("Arquivo muito grande !! Max. 2MB");
  
    $pasta = "./imagesDBAdm/";
  
  
  
    $nomeDoArquivo = $arquivo['name'];
  
    $novoNomeArquivo = uniqid();
  
    // $extensao = pathinfo($target_file,PATHINFO_EXTENSION);
  
  
  
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
  
  
  
    if($extensao != "jpg" && $extensao != "jpeg" && $extensao != "png" && $extensao != "gif" && $extensao != "jfif" )
  
        die("tipo de arquivo não aceito");
  
  
  
    $path = $pasta . $novoNomeArquivo . "." . $extensao;
  
  
  
  
  
    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
  
    if($deu_certo){
  
    //    echo "<p>Arquivo Enviado com Sucesso! Para acessá-lo, clique aqui <a herf=\"arquivo/$novoNomeArquivo.$extensao\">Clique aqui</a> </p>";
  
    }else{
  
        echo "<p>Falha ao enviar o Arquivo</p>";
  
    }

    $foto = $novoNomeArquivo . "." . $extensao;


    
    $sql = "UPDATE cadastro_adm SET path_foto = '$foto' WHERE email = '$email'";

    
    
    
    
    $resultados = $coat->query($sql);
    
    mysqli_close($coat);

  
  }  

header("Location:../src/Admin/dashboard.php");
?>