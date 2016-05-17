<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $num = $arr[0];
    $arrive = $arr[1];
    for($i=0;$i<$arrive;$i++){
        $sche[$i] = explode(" ", $arr[$i+2]);
    }
    $k = 0;
    for($j=0;$j<$arrive;$j++){
        if($j == 0){
            $paper[$j] = $sche[$j][2];
        }else{
            if($sche[$j-1][0] == $sche[$j][0]){
                $paper[$k] = $sche[$j][2] + $paper[$k];
            }elseif($sche[$j-1][0] != $sche[$j][0]){
                $k++;
                $paper[$k] = $sche[$j][2];
            }
        }
    }
    $collect = 0;
    for($l=0;$l<=$k;$l++){
        $collect = ceil($paper[$l] / $num) + $collect;
    }
    echo $collect;
?>
