<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = trim(fgets(STDIN), "\n");
    for($i=1;$i<=9;$i++){
        $a = $n * $i;
    echo "$a";
    if($i!=9){
        echo " ";
    }
    }
?>
