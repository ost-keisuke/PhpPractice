<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $num = $arr[0];
    for($i=0;$i<$num;$i++){
        $odr[$i] = explode(" ", $arr[$i+1]);
    }
    $var1 = 0;
    $var2 = 0;
    for($j=0;$j<$num;$j++){
        if($odr[$j][0] === "SET"){
            ${"var".$odr[$j][1]} = (int)$odr[$j][2];
        }elseif($odr[$j][0] === "ADD"){
            $var2 = $var1 + $odr[$j][1];
        }elseif($odr[$j][0] === "SUB"){
            $var2 = $var1 - $odr[$j][1];
        }
    }
    echo $var1. " ". $var2. "\n";
?>
