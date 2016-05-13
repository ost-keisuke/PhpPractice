<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    $search = ["A", "E", "G", "I", "O", "S", "Z"];
    $replace =["4", "3", "6", "1", "0", "5", "2"];
    echo str_replace($search, $replace, $in);
?>
