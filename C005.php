<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    for($i=1;$i<=$arr[0];$i++){
        $dot = substr_count($arr[$i],".");
        if($dot != 3){
            echo "False";
        }else{
            $ip = explode(".", trim($arr[$i]));
            $deci = 0;
            for($j=0;$j<4;$j++){
                if(0 <= $ip[$j] && $ip[$j] <= 255){
                    $deci++;
                }
            }
            if($deci == 4){
                echo "True";
            }else{
                echo "False";
            }
        }
        if($i < $arr[0]){
            echo "\n";
        }
    }
?>
