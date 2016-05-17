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
        $ans[$i] = explode(" ", $arr[$i+1]);
    }

    $point = 0;

    for($j=0;$j<$num;$j++){
        if(strlen($ans[$j][0]) != strlen($ans[$j][1])){
            continue;
        }

        $dici = 0;

        $correct = str_split($ans[$j][0]);
        $pupil = str_split($ans[$j][1]);

        for($k=0;$k<strlen($ans[$j][0]);$k++){
            if($correct[$k] !== $pupil[$k]){
                $dici++;
                if($dici == 2){
                    break;
                }
            }
        }
        if($dici == 0){
            $point += 2;
        }elseif($dici == 1){
            $point += 1;
        }
    }
    echo $point;
?>
