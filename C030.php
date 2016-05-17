<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }

    //配列取り出し
    $size = explode(" ", $arr[0]);
    for($i=0;$i<$size[0];$i++){
        $pixel[$i] = explode(" ", $arr[$i+1]);
    }

    //2値化
    for($j=0;$j<$size[0];$j++){
        for($k=0;$k<$size[1];$k++){
            if($pixel[$j][$k] <= 127){
                $pixel[$j][$k] = 0;
            }else{
                $pixel[$j][$k] = 1;
            }
            if($k == $size[1] - 1){
                echo $pixel[$j][$k]. "\n";
            }else{
                echo $pixel[$j][$k]. " ";
            }
        }
    }
?>
