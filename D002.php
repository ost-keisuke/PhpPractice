<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN), "\n");
    $i = explode(" ",$input_lines);
    if($i[0] < $i[1]){
        echo $i[1];
    }elseif($i[0] > $i[1]){
        echo $i[0];
    }else{
        echo "eq";
    }
?>
