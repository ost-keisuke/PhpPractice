<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    $in = explode(" ",$in);

    echo substr($in[0], $in[1]-1, 1);
?>
