<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $deal = explode(" ", $arr[0]);
    $num = $arr[1];
    for($i=0;$i<$num;$i++){
        $play[$i] = explode(" ", $arr[$i+2]);
    }
    for($j=0;$j<$num;$j++){
        if($deal[0] < $play[$j][0]){
            echo "Low\n";
        }elseif($deal[0] > $play[$j][0]){
            echo "High\n";
        }else{
            if($deal[1] < $play[$j][1]){
                echo "High\n";
            }else{
                echo "Low\n";
            }
        }
    }
