<?php
    
    function teste($x){
        foreach ($x as $nome) {
            echo "$nome <br>";
        }
    }


    $vetor = ['Nicolas', 'Pedro', 'vinicius'];

    teste($vetor);

?>