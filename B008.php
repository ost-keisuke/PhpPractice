<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    //入力を配列に分割
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $num = explode(" ", $arr[0]);
    //0なら終了
    if($num[0] == 0 or $num[1] == 0){
        echo "0\n";
        exit;
    }
    //列ごとに一人のデータを分解
    for($i=0;$i<$num[1];$i++){
        $mem[$i] = explode(" ", $arr[$i+1]);
    }
    //ライブごとの合計値
    for($i=0;$i<$num[1];$i++){
        $sum[$i] = 0;
        for($j=0;$j<$num[0];$j++){
            $sum[$i] += $mem[$i][$j];
        }
    }
    //赤字ならライブしない
    $total = 0;
    for($i=0;$i<$num[1];$i++){
        if($sum[$i] > 0){
            $total += $sum[$i];
        }
    }
    echo $total;
?>
