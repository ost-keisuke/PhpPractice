<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
        $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    echo ceil($arr[1] / $arr[0]);
?>
