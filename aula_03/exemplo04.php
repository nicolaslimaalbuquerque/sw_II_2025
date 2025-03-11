<?php
    // função sem parametros e com retorno

    function mensagem($x){
        $a = "Nicolas".$x;
        return $a;
    }

    $sobrenome = "Lima";

    $frase = "Olá, ";
    $frase .= mensagem($sobrenome);
    $frase .= "bem vindo";

    echo $frase;

?>