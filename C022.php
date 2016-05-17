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
        $val[$i] = explode(" ", $arr[$i+1]);
    }
    for($j=0;$j<$num;$j++){
        $start[] = $val[$j][0];
        $end[] = $val[$j][1];
        $high[] = $val[$j][2];
        $low[] = $val[$j][3];
    }
    sort($low);
    rsort($high);
    echo $start[0]. " ". $end[$num-1]. " ". max($high). " ". min($low). "\n";
?>
