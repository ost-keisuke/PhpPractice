<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $quan = $arr[0];
    for($i=0;$i<$quan;$i++){
        $num[$i] = $arr[$i+1];
    }
    for($j=0;$j<$quan;$j++){
        for($k=1;$k<=$num[$j]/2;$k++){
            $dici = $num[$j] % $k;
            if($dici == 0){
                $divi[$j][] = $k;
            }
        }
    }
    for($a=0;$a<$quan;$a++){
        $n = count($divi[$a]);
        $total = 0;
        for($b=0;$b<$n;$b++){
            $total += $divi[$a][$b];
        }
        if($total == $num[$a]){
            echo "perfect\n";
        }elseif(abs($num[$a]-$total) == 1){
            echo "nearly\n";
        }else{
            echo "neither\n";
        }
    }
