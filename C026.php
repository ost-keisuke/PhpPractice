<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $para = explode(" ", $arr[0]);
    for($i=0;$i<$para[0];$i++){
        $carrot[$i] = explode(" ", $arr[$i+1]);
    }
    $j = 0;
    $tole = [($para[1] - $para[2]), ($para[1] + $para[2])];
    $check = "not found";
    while(1){
        if($carrot[$j][1] >= $tole[0] and $carrot[$j][1] <= $tole[1]){
            if($check === "not found"){
                $check = $j + 1;
            }elseif($carrot[$check - 1][0] < $carrot[$j][0]){
                $check = $j + 1;
            }
        }
        if($j + 1 == $para[0]){
            echo $check;
            break;
        }
        $j++;
    }
?>
