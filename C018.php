<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $numn = $arr[0];
    $nump = $arr[$arr[0]+1];
    for($i=0;$i<$numn;$i++){
        $need[$i] = explode(" ", $arr[$i+1]);
    }
    for($j=0;$j<$nump;$j++){
        $prep[$j] = explode(" ", $arr[$j+$numn+2]);
    }
    $dici = 0;
    for($k=0;$k<$numn;$k++){
        for($a=0;$a<$nump;$a++){
            if($need[$k][0] === $prep[$a][0]){
                $make[$k] = floor($prep[$a][1] / $need[$k][1]);
                $dici++;
            }
        }
    }
    if($dici != $numn){
        echo "0\n";
    }else{
        echo min($make);
    }
