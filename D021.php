<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    if($arr[0] === $arr[1]){
        echo "Yes";
    }else{
        echo "No";
    }
?>
