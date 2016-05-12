<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    for($i=0;$i < 7;$i++){
        if($arr[$i]==="no"){
            $h++;
        }
    }
    echo $h;
?>
