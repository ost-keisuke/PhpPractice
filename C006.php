<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $para = explode(" ", $arr[0]);
    $coef = explode(" ", $arr[1]);
    $j = 2;
    for($i=0;$i<$para[1];$i++){
        $poss = explode(" ", $arr[$j]);
        $j++;
        for($k=0;$k<$para[0];$k++){
            $res[$i][$k] = $poss[$k];
        }
    }
    var_dump($res);
?>
