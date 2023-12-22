
<?php 

    session_start();
    
    include("controller.php");

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_SESSION['email_institucional']; 
    
        if(isset($_POST['titulo1']) != null){
            $n = "1";
            $titulo= $_POST['titulo1'];
            $link = $_POST['link1'];
            $resumo = $_POST['resumo1'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
    
        }
    
        
        if(isset($_POST['titulo2']) != null){
            $n = "2";
            $titulo= $_POST['titulo2'];
            $link = $_POST['link2'];
            $resumo = $_POST['resumo2'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
    
        }
    
    
        if(isset($_POST['titulo3']) != null){
            $n = "3";
            $titulo = $_POST['titulo3'];
            $link = $_POST['link3'];
            $resumo = $_POST['resumo3'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
    
        }
    
    
        if(isset($_POST['titulo4']) != null){
            $n = "4";
            $titulo= $_POST['titulo4'];
            $link = $_POST['link4'];
            $resumo = $_POST['resumo4'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
        }
            
        if (isset($_POST['titulo5']) != null){
            $n = "5";
            $titulo= $_POST['titulo5'];
            $link = $_POST['link5'];
            $resumo = $_POST['resumo5'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
        }
    
        if (isset($_POST['titulo6']) != null){
            $n = "6";
            $titulo= $_POST['titulo6'];
            $link = $_POST['link6'];
            $resumo = $_POST['resumo6'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
        }
    
        if(isset($_POST['titulo7']) != null){
            $n = "7";
            $titulo= $_POST['titulo7'];
            $link = $_POST['link7'];
            $resumo = $_POST['resumo7'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
        }
    
        if(isset($_POST['titulo8']) != null){
            $n = "8";
            $titulo = $_POST['titulo8'];
            $link = $_POST['link8'];
            $resumo = $_POST['resumo8'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
        }
    
        if(isset($_POST['titulo9']) != null){
            $n = "9";
            $titulo= $_POST['titulo9'];
            $link = $_POST['link9'];
            $resumo = $_POST['resumo9'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
        }
    
        if(isset($_POST['titulo10']) != null){
            $n = "10";
            $titulo= $_POST['titulo10'];
            $link = $_POST['link10'];
            $resumo = $_POST['resumo10'];
            $exp = new EXP();
            $exp->integracao($titulo, $link, $resumo, $email, $n);
            return;
        }
    

    }

    
?>