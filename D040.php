<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = fgets(STDIN);
    while($in){
        $arr[] = $in;
        $in = fgets(STDIN);
    }
    $o = 0;
    for($i=0;$i<7;$i++){
        if ($arr[$i] <= 30 ){
            $o++;
        }
    }
    echo $o;

?>
