<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    for($a=0;$a<$arr[1];$a++){
        $room[$a] = $arr[$a+2];
    }
    $j = 0;
    for($i=0;$i<$arr[1];$i++){
        $hate[$i] = strpos($room[$i], $arr[0]);
        if($hate[$i] === false){
            echo $room[$i]."\n";
            $j++;
        }
    }
    if($j == 0){
        echo "none";
    }
?>
