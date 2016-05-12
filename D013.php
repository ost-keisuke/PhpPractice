<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $num = trim(fgets(STDIN));
    $n = explode(" ", $num);
    echo (int)($n[0] / $n[1]). " ". $n[0] % $n[1];
?>
