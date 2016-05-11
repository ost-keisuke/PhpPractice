<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN), "\n");
    $year = explode(" ", $input_lines);
    $diff = $year[1] - $year[0];
    echo $diff;
    ?>
