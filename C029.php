<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }

    $day = explode(" ", $arr[0]);

    for($i=0;$i<$day[0];$i++){
        $weath[$i] = explode(" ", $arr[$i+1]);
    }
    //とりあえず合計値
    for($j=0;$j<$day[0]-$day[1]+1;$j++){
        $per[$j] = 0;
        for($k=0;$k<$day[1];$k++){
            $per[$j] += $weath[$j+$k][1];
        }
    }
    //最小判定用
    $min = min($per);
    //出力
    for($l=0;$l<$day[0]-$day[1]+1;$l++){
        if($min == $per[$l]){
            echo $weath[$l][0]. " ". $weath[$l+$day[1]-1][0];
            break;
        }
    }
?>
