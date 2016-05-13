<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    for($i=0;$i<$arr[0];$i++){
        $buy[$i] = explode(" ", $arr[$i+1]);
    }
    $total = 0;
    for($j=0;$j<$arr[0];$j++){
        $dic3 = strpos($buy[$j][0], "3");
        $dic5 = strpos($buy[$j][0], "5");
        if($dic3 !== false){
            $point[$j] = floor($buy[$j][1] * 0.03);
        }elseif($dic5 !== false){
            $point[$j] = floor($buy[$j][1] * 0.05);
        }else{
            $point[$j] = floor($buy[$j][1] * 0.01);
        }
        $total = $point[$j] + $total;
    }
    echo $total;
?>
