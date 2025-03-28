<?php
    $json_str = '{"empregados": '.
    '[{"nome": "Nicolas", "idade": 17, "genero": "M", "dependentes": ["Lucas","Pedro"]},'.
    '{"nome": "Neudson", "idade": 53, "genero": "M"},'.
    '{"nome": "Paulo", "idade": 18, "genero": "M"}'.
    '],
    "data": "12/10/2002"}';
    $jsonObj = json_decode($json_str);
    $empregados = $jsonObj->empregados;
    echo "data do arquivo:<br> $jsonObj->data<br><br>";
    foreach ( $empregados as $e ){
        echo "nome: $e->nome - idade: $e->idade - genero $e->genero <br>";
        if (property_exists($e, "dependentes")){
            $deps = $e->dependentes;
            echo "dependentes: <br>";
            foreach ($deps as $d) {
                echo "- $d<br>";
            }
        }
    }
?>