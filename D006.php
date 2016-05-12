<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN), "\n");
    $array = explode(" ", $input_lines);
    if($array[1] == "m" ){
        echo $array[0] * 1000;
    }elseif($array[1] == "cm"){
        echo $array[0] * 10;
    }elseif($array[1] == "km"){
        echo $array[0] * 1000000;
    }
?>
