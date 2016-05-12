<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    for($i=1;$i<=$in;$i++){
        $total = $total + $i;
    }
    echo $total;
?>
