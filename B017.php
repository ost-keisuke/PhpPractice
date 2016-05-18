<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    //入力を配列に起こす
    $card = trim(fgets(STDIN));
    $alphabet = str_split($card);
    $alcheck = array();
    $wild = 0;

    for($i=0;$i<4;$i++){
        $alcheck[$i] = 0;
        for($j=0;$j<4;$j++){
            if($alphabet[$i] === $card[$j]){
                $alcheck[$i]++;
            }
        }
    }

    for($i=0;$i<4;$i++){
        if($alphabet[$i]==='*'){
            $wild++;
        }
    }

    $max = max($alcheck) + $wild;

    if($max === 1){
        echo 'NoPair';
    }elseif($max === 2 && $alcheck[1] === 2){
        echo 'TwoPair';
    }elseif($max === 2){
        echo 'OnePair';
    }elseif($max === 3){
        echo 'ThreeCard';
    }elseif($max === 4){
        echo 'FourCard';
    }
?>
