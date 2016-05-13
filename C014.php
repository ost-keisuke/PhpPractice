<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $prov = explode(" ", $arr[0]);
    $diam = $prov[1] * 2;
    for($i=0;$i<$prov[0];$i++){
        $size[$i] = explode(" ", $arr[$i+1]);
    }
    for($j=0;$j<$prov[0];$j++){
        $dici = 0;
        for($k=0;$k<3;$k++){
            if($size[$j][$k] >= $diam){
                $dici++;
            }
        }
        if($dici == 3){
            echo $j+1;
            echo "\n";
        }
    }
