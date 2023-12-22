<?php

class CRIPTO {



    
    public function criptografa($senha){
        $criptografada = md5($senha);
        return $criptografada; 
    }}

# Sugestão de implementação: 
# $CRIPTO = new CRIPTO();
#$criptosenha = $CRIPTO -> criptografa($_POST['senha']);

?>