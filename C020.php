<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    $tra = explode(" ", $in);
    $wei = $tra[0];
    $p = (100 - $tra[1]) / 100;
    $q = (100 - $tra[2]) / 100;
    echo ($tra[0] * $p) * $q;
?>
