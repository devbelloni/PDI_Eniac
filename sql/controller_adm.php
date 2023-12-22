<?php 

class CRUD_ADM{
    public $ra;
    public $nome;
    public $data_nascimento;
    public $email;
    public $senha;
    public $confirm_senha;
    public $codigo;
    
    public function cadastrarAdm($ra,$nome,$data_nascimento,$email,$senha,$confirm_senha,$codigo){
        include('db_conexao_dgh.php');

        $this->ra = $ra;
        $this->nome = $nome;
        $this->data_nascimento = $data_nascimento;
        $this->email = $email;
        $this->senha = $senha;
        $this->confirm_senha = $confirm_senha;
        $this->codigo = $codigo;

        $cadastro = array(
            "ra" =>$ra ,
            "nome"=>$nome,
            "data_nascimento"=>$data_nascimento,
            "email"=>$email,
            "senha"=>$senha,
            "conf_senha"=>$confirm_senha,
            "codigo"=>$codigo

        );

        $sql = "INSERT INTO cadastro_adm(ra,nome,data_nascimento,email,senha,conf_senha,codigo) 
        VALUES('{$cadastro['ra']}','{$cadastro['nome']}','{$cadastro['data_nascimento']}','{$cadastro['email']}','{$cadastro['senha']}','{$cadastro['conf_senha']}','{$cadastro['codigo']}')";

        $resultados = $coat->query($sql);

        mysqli_close($coat);

        header('Location:../src/Admin/dashboard.php');

    }

}

?>