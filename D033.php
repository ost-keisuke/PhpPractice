<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    $name = explode(" ", $in);
    echo substr($name[0], 0, 1). ".".substr($name[1], 0, 1);
?>
