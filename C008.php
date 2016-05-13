<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $tag = explode(" ", $arr[0]);
    for($i=0;$i<2;$i++){
        $long[$i] = strlen($tag[$i]);
    }
    $j = 0;
    while(1){
        if($j==0){
            $posa[$j] = strpos($arr[1], $tag[0]);
            $posb[$j] = strpos($arr[1], $tag[1], $posa[$j]);
            $j++;
        }elseif($posa[$j-1] === false or $posb[$j-1] === false){
            break;
        }else{
            $posa[$j] = strpos($arr[1], $tag[0], $posb[$j-1]);
            $posb[$j] = strpos($arr[1], $tag[1], $posa[$j]);
            $j++;
        }
    }
    $k = 0;
    while($posa[$k] !== false and $posb[$k] !== false){
        $seaa = $posa[$k] + $long[0];
        $seab = $posb[$k] - $seaa;
        if($seab == 0){
            echo "<blank>";
        }else{
            echo substr($arr[1], $seaa, $seab);
        }
        if($posa !== false and $posb !== false){
            echo "\n";
        }
        $k++;
    }
?>
