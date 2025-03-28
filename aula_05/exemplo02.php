<?php
    $json_str = '{"empregados": '.
    '[{"nome": "Nicolas", "idade": 17, "genero": "M"},'.
    '{"nome": "Neudson", "idade": 53, "genero": "M"},'.
    '{"nome": "Paulo", "idade": 18, "genero": "M"}'.
    ']}';
    $jsonObj = json_decode($json_str);
    $empregados = $jsonObj->empregados;
    foreach ( $empregados as $e ){
        echo "nome: $e->nome - idade: $e->idade - genero $e->genero <br>";
    }
?>