<?php 
include_once('../sql/db_conexao_dgh.php');

if(isset($_POST['ok'])){
    print('Entrada de VPN');
    header('Location:Menu.php');
}else{
    print('Chamada não recebida');
}


class entrada{

    private $log, $tempo, $desc;

    public function logar($log, $tempo , $desc){
        $this->log = $log;
        $this->tempo = $tempo;
        $this->$desc = $desc;
        include_once('../SQL/conexao.php');

        $sql = "INSERT INTO ´SDSD´ (`entrada`,`log`, `tempo`) VALUE ('$log','$tempo','$desc')";

        $resultados = $conn->query($sql);

        mysqli_close($resultados);


        if(isset($_SERVER['id']) || isset($_SERVER['log']) || isset($_SERVER['IP']) ){
            $id = $_SERVER['id'];
            $log = $_SERVER['log'];
            $ip = $_SERVER['IP'];

            header('location:login.php');
            for($i = 0; $i < $ip; $i ++ ){
                $ip = $_SERVER['IP'];
                memory_get_usage('IP');
            }
        }else{
            echo "Foi não possui o acesso a essa página, seu IP não corresponde. {$ip}";
            echo "<button type='submit' name='ok'>Logar com VPN</button>";
        }


    }

}


class tipo extends entrada{
    private $_log;



    private function  loger($loper){
        $this->$loper = $loper;

    }

    private function loper(){

        
        
    }
}


session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_SESSION['email_institucional'];
    
    if($_POST['empresa1'] != null && $_POST['saida1'] == null){
        $n = "1";
         $funcao1 = $_POST['funcao1'];
        $entrada1 = $_POST['entrada1'];
        $saida1 = "0/0/0";
        $exp = new EXP();
        $exp->inserirNoBanco($empresa1, $funcao1, $entrada1, $saida1, $email, $n);
        return;

    }

    if($_POST['empresa1'] != null){
        $n = "1";
        $empresa1 = $_POST['empresa1'];
        $funcao1 = $_POST['funcao1'];
        $entrada1 = $_POST['entrada1'];
        $saida1 = $_POST['saida1'];
        $exp = new EXP();
        $exp->inserirNoBanco($empresa1, $funcao1, $entrada1, $saida1, $email, $n);
        return;

    }

    if($_POST['empresa2'] != null){
        $n = "2";
        $empresa2 = $_POST['empresa2'];
        $funcao2 = $_POST['funcao2'];
        $entrada2 = $_POST['entrada2'];
        $saida2 = $_POST['saida2'];
        $exp = new EXP();
        $exp->inserirNoBanco($empresa2, $funcao2, $entrada2, $saida2, $email, $n);
        return;
    }

    if($_POST['empresa3'] != null){
        $n = "3";
        $empresa3 = $_POST['empresa3'];
        $funcao3 = $_POST['funcao3'];
        $entrada3 = $_POST['entrada3'];
        $saida3 = $_POST['saida3'];
        $exp = new EXP();
        $exp->inserirNoBanco($empresa3, $funcao3, $entrada3, $saida3, $email, $n);
        return;
    }
        
    if($_POST['empresa4'] != null){
        $n = "4";
        $empresa4 = $_POST['empresa4'];
        $funcao4 = $_POST['funcao4'];
        $entrada4 = $_POST['entrada4'];
        $saida4 = $_POST['saida4'];
        $exp = new EXP();
        $exp->inserirNoBanco($empresa4, $funcao4, $entrada4, $saida4, $email, $n);
        return;
    }
   
    if($_POST['empresa5'] != null){
        $n = "5";
        $empresa5 = $_POST['empresa5'];
        $funcao5 = $_POST['funcao5'];
        $entrada5 = $_POST['entrada5'];
        $saida5 = $_POST['saida5'];
        $exp = new EXP();
        $exp->inserirNoBanco($empresa5, $funcao5, $entrada5, $saida5, $email, $n);
        return;
    }
    
}

    class EXP {
        public function inserirNoBanco($empresa, $funcao, $entrada, $saida, $email, $n) {
            include_once("conexao.php");
            $sql = "UPDATE `cadastro_pdi_2` SET `empresa" . $n . "` = '$empresa', `funcao".$n."` = '$funcao', `entrada".$n."` =  '$entrada', `saida".$n."` =  '$saida' WHERE email_institucional = '$email'";
            $resultados = $coat->query($sql);
            mysqli_close($coat);
            header("Location:./../src/experiencias.php");
        }
    }
?>


