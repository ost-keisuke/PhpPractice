<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in =fgets(STDIN);
    while($in){
        $arr[] = $in;
        $in = fgets(STDIN);
    }
    $para = explode(" ", $arr[0]);
    $coef = explode(" ", $arr[1]);
    $j = 2; //入力された配列のXi以外の値を飛ばすための変数
    for($i=0;$i<$para[1];$i++){
        $poss = explode(" ", $arr[$j]);
        $j++;
        for($k=0;$k<$para[0];$k++){
            $res[$i][$k] = $poss[$k];
        }
    }
    for($a=0;$a<$para[1];$a++){
        for($b=0;$b<$para[0];$b++){
            if($b==0){
                $total[$a] = $res[$a][$b] * $coef[$b];
            }else{
                $total[$a] = $res[$a][$b] * $coef[$b] + $total[$a];
            }
        }
    }
    for($m=0;$m<$para[1];$m++){
        $total[$m] = round($total[$m]);
    }
    rsort($total, SORT_NUMERIC);
    for($l=0;$l<$para[2];$l++){
        echo $total[$l];
        if($l < $para[2]-1){
            echo "\n";
        }
    }
?>
