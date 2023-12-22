<?php 


class CRUD {
    public $nome_completo;
    public $email_institucional;
    public $senha;
    public $confirmar_senha;
    public $confirm_senha;
    public $data_aniversario;
    public $genero;
    public $data_nascimento;
    public $celular;
    public $cep;
    public $pais;
    public $estado;
    public $cidade;
    public $bairro;
    public $endereco;
    public $numero_endereco;
    public $modalidade;
    public $modaliadade_curso;
    public $inicio_curso;
    public $semestre_atual;
    public $semestre_curso;
    public $codigo;
    public $grauindtrucao;
    public $colacao;
    public $empresa;
    public $funcao;
    public $entrada;
    public $saida;
    public $titulo_tcc;
    public $link_tcc;
    public $resumo_tcc;
    public $tema_tcc;
    public $titulo_outro;
    public $link_outro;
    public $resumo_outro;
    public $recuperar_senha;
    public $curso;
    public $nomeDoArquivo;
    public $foto;
    public $idcadastro_pdi;
    public $id;
    public $tematcc;
    public $linkTcc;
    public $resumoTcc;
    public $tema_voluntario;
    public $descricao_voluntario;
    public $data_voluntario;
    public $email;
    public $n;
    public $grauInstrucao;
    public $emprego;
    public $atividadeProfissional;
    public $colocacao;

    public $ra;

   

        public function cadastrar($senha,$confirm_senha,$nome_completo,$ra,$data_aniversario,$genero,$celular,$cep,$pais,$estado,$cidade,$bairro,$endereco,$numero_endereco,$email_institucional,$curso,$modaliadade_curso,$inicio_curso,$semestre_curso,$codigo){
            $this->senha = $senha;
            $this->confirm_senha = $confirm_senha;
            $this->nome_completo = $nome_completo;
            $this->ra = $ra;
            $this->data_aniversario = $data_aniversario;
            $this->genero = $genero;
            $this->celular = $celular;
            $this->cep = $cep;
            $this->pais = $pais;
            $this->estado = $estado;
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->endereco = $endereco;
            $this->numero_endereco = $numero_endereco;
            $this->email_institucional = $email_institucional;
            $this->curso = $curso;
            $this->modaliadade_curso= $modaliadade_curso;
            $this->inicio_curso = $inicio_curso;
            $this->semestre_curso = $semestre_curso;
            $this->codigo = $codigo;
            
            include('db_conexao_dgh.php');

            $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

    
            $cadastro = array(
    
                'senha' => $hashSenha,
            
                'confirm_senha' => $confirm_senha,
            
                'nome_completo' => $nome_completo,
            
                'data_aniversario' => $data_aniversario,
            
                'ra' => $ra,
            
                'genero' => $genero,
            
                'celular' => $celular,
            
                'cep' => $cep,
            
                'pais' => $pais,
            
                'estado' => $estado,
            
                'cidade' => $cidade,
            
                'bairro' => $bairro,
            
                'endereco' => $endereco,
            
                'numero_endereco' => $numero_endereco,
            
                'email_institucional' => $email_institucional,
            
                'curso' => $curso,
            
                'modaliadade_curso' => $modaliadade_curso,
            
                'inicio_curso' => $inicio_curso,
            
                'semestre_curso' => $semestre_curso,
            
                'codigo' => $codigo
            
            );

            
                $sql = "INSERT INTO cadastro_pdi_2(senha,confirm_senha,nome_completo,data_aniversario,ra,genero,celular,cep,pais,estado,cidade,bairro,endereco,numero_endereco,email_institucional,curso,modaliadade_curso,inicio_curso,semestre_curso,codigo) 
                VALUES ('{$cadastro['senha']}','{$cadastro['confirm_senha']}','{$cadastro['nome_completo']}','{$cadastro['data_aniversario']}','{$cadastro['ra']}','{$cadastro['genero']}','{$cadastro['celular']}','{$cadastro['cep']}','{$cadastro['pais']}','{$cadastro['estado']}','{$cadastro['cidade']}','{$cadastro['bairro']}','{$cadastro['endereco']}','{$cadastro['numero_endereco']}','{$cadastro['email_institucional']}','{$cadastro['curso']}','{$cadastro['modaliadade_curso']}','{$cadastro['inicio_curso']}','{$cadastro['semestre_curso']}','{$cadastro['codigo']}')";
        
        
                $resultados = $coat->query($sql);

                // if($resultados == True){
                //     date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para o Brasil (São Paulo)
                //     $data_e_hora = date('Y-m-d H:i:s');

                //     $sql = "UPDATE cadastro_adm SET ultima_criacao = '$data_e_hora' WHERE codigo = '$codigo_adm'";

                //     $results = $coat->query($sql);

                //     if($results == True){


                //         $sql = "INSERT INTO historico_adm (cadastro_feito_pelo_adm, nome_pessoa_cadastrada,data_horario) VALUES ('$nome_adm','$nome_completo','$data_e_hora')";

                //         $results = $coat->query($sql);
    
                //     }

                // }
        
                mysqli_close($coat);
    
                header('Location:../src/tela_carregamento/cadastro.php');

            
    
        }
        
        //FUNÇÃO DB_TRABALHO_VOLUNTARIO

    public function insertDB($tema_voluntario, $descricao_voluntario, $data_voluntario, $email_institucional, $n) {

        $this->tema_voluntario = $tema_voluntario;
        $this->descricao_voluntario = $descricao_voluntario;
        $this->data_voluntario = $data_voluntario;
        $this->email_institucional = $email_institucional;
        $this->n = $n;

        include_once("../sql/db_conexao_dgh.php");
        
        $sql = "UPDATE cadastro_pdi_2 SET `tema_voluntario{$n}` = ?, `data_voluntario{$n}` = ?, `descricao_voluntario{$n}` = ? WHERE email_institucional = ?";
        
        $result = $coat->prepare($sql);
        
        if ($result) {
            // Associe os valores às variáveis de substituição
            $result->bind_param("ssss", $tema_voluntario, $data_voluntario, $descricao_voluntario, $email_institucional);
            
            // Execute a consulta
            $result->execute();
            
            // Verifique se a consulta foi bem-sucedida ou não
            if ($result->affected_rows > 0) {
                echo "Atualização bem-sucedida.";
            } else {
                echo "Nenhuma linha atualizada.";
            }

            mysqli_close($coat);

        header("Location:./../src/tela_carregamento/trabalho_voluntario.php");
        }
    }

    //FUNCAO DB_RECUPERARSENHA

    public function recuperarSenha($email_institucional,$codigo){
        
        $this->email_institucional = $email_institucional;
        $this->codigo = $codigo;

        include('db_conexao_dgh.php');

            $email_institucional = $coat->real_escape_string($_POST['email_institucional']);
            $codigo = $coat->real_escape_string($_POST['codigo']);
        
          
            if($email_institucional == null && $codigo == null){
                echo "Não pode ser vazio";
            }
              
            if(!filter_var($email_institucional, FILTER_VALIDATE_EMAIL)){
                $erro[] = "E_mail invalido.";
            }
        
               
        
                $query = "SELECT email_institucional, codigo FROM cadastro_pdi_2 WHERE email_institucional = '$email_institucional' AND codigo = '$codigo'";
        
                $resultado = mysqli_query($coat, $query);
                $dado =  $resultado->fetch_assoc();
                $total = $resultado->num_rows;
        
                // Verifica se a consulta retornou resultados
                if (mysqli_num_rows($resultado) === 1) {
                    // echo "E-mail e Código válidos. Acesso permitido!";
                    header('Location:../src/senha_recuperada.php');
                } else {
                    // echo "E-mail ou Código inválidos. Acesso negado!";
                    header('Location:../src/senha_invalida.php');
                }
        
            // Fechar a conexão
        
            if( $total == 0 ){
                $erro[] = "O email informado não existe";
                $erro[] = "O Código informado não existe";
        
            }
        
            if( $total > 0){
                
                    $novasenha = substr(md5(time()),0, 6);
                    $nscriptografada = md5(md5($novasenha));
                    $sql = "UPDATE cadastro_pdi_2 SET senha = '$nscriptografada' where email_institucional = '$email_institucional'";
                    $sql_query = $coat->query($sql);
             
            }
        
           
        
            // if(mail($email, "sua nova senha","Sua nova senha: ".$novasenha)){
            //     $sql = "UPDATE cadastro_pdi_2 SET senha = '$nscriptografada' where email = '$email'";
            //     $sql_query = $coat->query($sql) or die($mysqli->error);
            
        
            // }
            mysqli_free_result($resultado);
        
            // Fecha a conexão
            mysqli_close($coat);
        
        



    }

    //FUNÇÃO DB_LOGIN

    // public function logar($email_institucional,$senha){

    //     $this->email_institucional = $email_institucional;
    //     $this->senha = $senha;
        
    //     include('db_conexao_dgh.php');
   
    //     if(isset($_POST['email_institucional']) && isset($_POST['senha'])){
            
    //         if(strlen($_POST['email_institucional']) == 0 ){
    //             echo "Preencher E-mail";
    //         } 

    //         elseif (strlen($_POST['senha']) == 0){
    //             echo "Preencher Senha";
    //         }

    //         else {
    //             $email_institucional = $coat->real_escape_string($_POST['email_institucional']);
    //             $senha = $coat->real_escape_string($_POST['senha']); 


    //             $sql = "SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '$email_institucional' AND senha = '$senha'";

    //             $result = mysqli_query($coat, $sql);

    //             if($coat->query($sql)){
    //                 echo "Foi";
    //             }else{
    //                 echo "não foi";
    //             }

    //             $quantidade = $result-> num_rows;
    //             if($quantidade == 1){

    //                 $usuario;

    //                 $usuario = $result->fetch_assoc();

    //                 if(!isset($_SESSION)){

    //                     session_start();
    //                 }
                        

    //                     $_SESSION['email_institucional'] = $email_institucional;
    //                     $_SESSION['senha'] = $senha;

    //                     session_write_close();
    //              header('Location:../src/home.php');

    //             }else { 

    //                 echo "Falha ao logar ! E-mail ou Senha Incorretos";

    //              }

    //              mysqli_close($coat);

            
    //         }


    //     }
    
    // }

    //FUNÇÃO DB_EMPREGABILIDADE
    
    public function empregabilidade($grauInstrucao, $emprego, $atividadeProfissional,$colocacao,$email_institucional){
       
        $this->grauInstrucao =  $grauInstrucao;
        $this->emprego =  $emprego;
        $this->atividadeProfissional =  $atividadeProfissional;
        $this->colocacao =  $colocacao;
        $this->email_institucional =  $email_institucional;

        include('db_conexao_dgh.php');


        $sql = "UPDATE `cadastro_pdi_2` SET `grauInstrucao` = '$grauInstrucao', `emprego` = '$emprego', `atividadeProfissional` =  '$atividadeProfissional', `colocacao` = '$colocacao'  WHERE email_institucional = '$email_institucional'";

        $resultados = $coat->query($sql);

        mysqli_close($coat);

        header('Location:../src/tela_carregamento/empregabilidade.php');


    } 

        //FUNÇÃO DB_TCC
        

        //FUNÇÃO DB_HISTORICO_PROFISSIONAL

        public function historico ($empresa,$funcao,$entrada,$saida,$email_institucional,$n){

            $this->empresa = $empresa;
            $this->funcao = $funcao;
            $this->entrada = $entrada;
            $this->saida = $saida; 
            $this->email_institucional = $email_institucional;
            $this->n=$n;

            include_once ("../sql/db_conexao_dgh.php");

            $sql = "UPDATE `cadastro_pdi_2` SET `empresa{$n}` = '$empresa' , `funcao{$n}` = '$funcao' , `entrada{$n}` = '$entrada' , `saida{$n}` = '$saida' WHERE `email_institucional` = '$email_institucional'";
            
            if (mysqli_query($coat, $sql)) {
                echo "Record updated successfully";
                } else {
                echo "Error updating record: " . mysqli_error($coat);
                }
                
                mysqli_close($coat);

                header('Location:../src/tela_carregamento/experiencias_profissionais.php');
        
        }


        public function editarCadastrar($senha,$nome_completo,$data_aniversario,$genero,$celular,$cep,$pais,$estado,$cidade,$bairro,$endereco,$numero_endereco,$email_institucional,$curso,$modaliadade_curso,$inicio_curso,$semestre_curso){
            $this->senha = $senha;
            $this->nome_completo = $nome_completo;
            $this->data_aniversario = $data_aniversario;
            $this->genero = $genero;
            $this->celular = $celular;
            $this->cep = $cep;
            $this->pais = $pais;
            $this->estado = $estado;
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->endereco = $endereco;
            $this->numero_endereco = $numero_endereco;
            $this->email_institucional = $email_institucional;
            $this->curso = $curso;
            $this->modaliadade_curso= $modaliadade_curso;
            $this->inicio_curso = $inicio_curso;
            $this->semestre_curso = $semestre_curso;

            include('db_conexao_dgh.php');
    
 
            $sql =  "UPDATE cadastro_pdi_2 SET senha='$senha',nome_completo='$nome_completo',data_aniversario='$data_aniversario',genero='$genero',celular='$celular',cep='$cep',pais='$pais', estado='$estado', cidade='$cidade', bairro='$bairro', endereco='$endereco',numero_endereco='$numero_endereco', curso='$curso', modaliadade_curso='$modaliadade_curso',inicio_curso='$inicio_curso',semestre_curso='$semestre_curso'  WHERE email_institucional='$email_institucional' ";
            $resultados = $coat->query($sql);

            header('Location:../src/editar_cadastro.php');
    
            mysqli_close($coat);
        }


        public function Alterar_Senha($senha,$conf_senha ,$email_institucional){

            $this->senha = $senha;
            $this->conf_senha = $conf_senha;
            $this->email_institucional = $email_institucional;

            global $coat;

            $hashSenha = password_hash($senha, PASSWORD_DEFAULT);


            include_once("../sql/db_conexao_dgh.php");

            $sql =  "UPDATE cadastro_pdi_2 SET senha='$hashSenha', confirm_senha='$conf_senha' WHERE email_institucional='$email_institucional' ";
            $resultados = $coat->query($sql);

            header('Location:../src/editar_cadastro.php');
    
            mysqli_close($coat);

            




        }



}


    class EXP {

    
    public $titulo;
    public $link;
    public $resumo;
    public $email;
    public $tema_tcc;
    public $link_tcc;
    public $resumo_tcc;
    public $email_institucional;
    public $n;
    public $tituloOutro;
    public $linkOutro;
    public $resumoOutro;

    public function inserirNoBanco($tituloOutro, $linkOutro, $resumoOutro, $email, $n) {

        $this->tituloOutro = $tituloOutro;
        $this->linkOutro = $linkOutro;
        $this->resumoOutro = $resumoOutro;
        $this->email = $email;
        $this->n = $n;

        print($resumoOutro);

        include_once("../sql/db_conexao_dgh.php");

        $sql = "UPDATE cadastro_pdi_2 SET `tituloOutro{$n}` = ?, `linkOutro{$n}` = ?, `resumoOutro{$n}` = ? WHERE email_institucional = ?";
        
        $result = $coat->prepare($sql);
        
        if ($result) {
            // Associe os valores às variáveis de substituição
            $result->bind_param("ssss", $tituloOutro, $linkOutro, $resumoOutro, $email);
            
            // Execute a consulta
            $result->execute();
            
            // Verifique se a consulta foi bem-sucedida ou não
            if ($result->affected_rows > 0) {
                echo "Atualização bem-sucedida.";
            } else {
                echo "Nenhuma linha atualizada.";
            }

            mysqli_close($coat);
        header("Location:../src/tela_carregamento/projeto_extensao.php");
        }
    }

    
    public function inserirTcc($tema_tcc,$link_tcc,$resumo_tcc,$email_institucional){
   
        include_once('../sql/db_conexao_dgh.php');

        $this->tema_tcc = $tema_tcc;
        $this->link_tcc = $link_tcc;
        $this->resumo_tcc = $resumo_tcc;
        $this->email_institucional = $email_institucional;


        $sql = "UPDATE cadastro_pdi_2 SET tituloTCC='$tema_tcc', linkTCC='$link_tcc', resumoTCC ='$resumo_tcc' WHERE email_institucional = '$email_institucional' ";

        if (mysqli_query($coat, $sql)) {
        $data = [
            'status' => 200,
            'mensagem' => 'Record updated successfully'
        ];

        } else {
        $data = [
            'status' => 400,
            'mensagem' => 'Error updating record:'
        ];
        }
        
        mysqli_close($coat);

        header("Location:../src/tela_carregamento/tcc.php");

    }


    //DB_PROJETO_INTEGRADOR FUNÇÃO

    public function integracao($titulo, $link, $resumo, $email, $n){

        include_once('../sql/db_conexao_dgh.php');
    
        $this->titulo = $titulo;
        $this->link = $link;
        $this->resumo = $resumo;
        $this->email = $email;
        $this->n = $n;
    
        $sql = "UPDATE cadastro_pdi_2 SET `titulo{$n}` = ?, `link{$n}` = ?, `resumo{$n}` = ? WHERE email_institucional = ?";
        
        $result = $coat->prepare($sql);
        
        if ($result) {
            // Associe os valores às variáveis de substituição
            $result->bind_param("ssss", $titulo, $link, $resumo, $email);
            
            // Execute a consulta
            $result->execute();
            
            // Verifique se a consulta foi bem-sucedida ou não
            if ($result->affected_rows > 0) {
                echo "Atualização bem-sucedida.";
            } else {
                echo "Nenhuma linha atualizada.";
            }

            header('Location:../src/tela_carregamento/projeto_integrador.php');

            mysqli_close($coat);
        }
    }


   
    

}




?>