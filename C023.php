<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $elec = explode(" ", $arr[0]);
    $sht = $arr[1];
    for($i=0;$i<$sht;$i++){
        $lot[$i] = explode(" ", $arr[$i+2]);
    }
    for($j=0;$j<$sht;$j++){
        $dici = 0;
        for($k=0;$k<6;$k++){
            for($l=0;$l<6;$l++){
                if($elec[$k] == $lot[$j][$l]){
                    $dici++;
                }
            }
        }
        echo $dici. "\n";
    }
?>
