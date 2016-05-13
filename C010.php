<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $con = explode(" ", $arr[0]);
    for($i=0;$i < $arr[1];$i++){
        $tree[$i] = explode(" ", $arr[$i+2]);
    }
    for($j=0;$j < $arr[1];$j++){
        $dici = pow($con[0] - $tree[$j][0], 2) + pow($con[1] - $tree[$j][1], 2);
        $dis = pow($con[2], 2);
        if($dici >= $dis){
            echo "silent";
        }else{
            echo "noisy";
        }
        if($j < $arr[1]-1){
            echo "\n";
        }
    }
?>
