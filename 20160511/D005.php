<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN), "\n");
    $n = explode(" ",$input_lines);
    for($i=0;$i<=9;$i++){
        $a = $n[0] + $n[1] * $i;
        echo $a;
        if($i!==9){
            echo " ";
        }
    }
?>
