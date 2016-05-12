<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    if($in < 10){
        echo "00". $in;
    }elseif($in < 100){
        echo "0". $in;
    }else{
        echo $in;
    }
?>
