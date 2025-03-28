<?php

    $json_str = '{"Nicolas": 17, "Paulo": 17, "Iago": 17}';
    $json_arr = json_decode($json_str, true);
    var_dump($json_arr);
?>