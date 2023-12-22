<?php

class CRUD
{
    public $nome_completo;
    public $genero;
    public $celular;
    public $email_institucional;
    public $curso;
    public $senha;
    public $conf_senha;
    public $codigo;

    public function update($nome_completo, $genero, $celular, $email_institucional, $curso, $senha, $conf_senha, $codigo)
    {
        $this->nome_completo = $nome_completo;
        $this->genero = $genero;
        $this->celular = $celular;
        $this->email_institucional = $email_institucional;
        $this->curso = $curso;
        $this->senha = $senha;
        $this->conf_senha = $conf_senha;
        $this->codigo = $codigo;

        include_once("../../sql/db_conexao_dgh.php");

        if ($codigo != null) {
            $sql = "UPDATE cadastro_pdi_2 SET nome_completo = '$nome_completo', genero ='$genero', celular = '$celular', email_institucional = '$email_institucional', curso = '$curso', senha = '$senha', confirm_senha = '$conf_senha' WHERE email_institucional = '$email_institucional'  ";

            $results = $coat->query($sql);

            if ($results == True) {
                date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para o Brasil (São Paulo)
                $data_e_hora = date('Y-m-d H:i:s');

                $sql = "UPDATE cadastro_adm SET ultima_modificacao = '$data_e_hora' WHERE codigo = '$codigo'";

                $results = $coat->query($sql);

                header('Location:dashboard.php');

            }

            header('Location:dashboard.php');
        }

    }
}


?>