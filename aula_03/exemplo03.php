<?php
    // função sem parametros e com retorno

    function mensagem(){
        $a = "Nicolas";
        return $a;
    }

    $frase = "Olá, ";
    $frase .= mensagem();

    echo $frase;

?>