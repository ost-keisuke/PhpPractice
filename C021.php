<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $typ = explode(" ", $arr[0]);
    $mem = $arr[1];
    for($i=0;$i<$mem;$i++){
        $pnt[$i] = explode(" ", $arr[$i+2]);
    }
    $typi = $typ[2] ** 2;
    $typo = $typ[3] ** 2;
    for($j=0;$j<$mem;$j++){
        $dici = ($typ[0] - $pnt[$j][0]) ** 2 +($typ[1] - $pnt[$j][1]) ** 2;
        if($typi <= $dici and $typo >= $dici){
            echo "yes\n";
        }else{
            echo "no\n";
        }
    }
?>
