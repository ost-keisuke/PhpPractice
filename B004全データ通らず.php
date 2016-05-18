<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    //入力を配列に分割
    $in = trim(fgets(STDIN));
    while($in){
        $arr[] = $in;
        $in = trim(fgets(STDIN));
    }
    $para = explode("." ,$arr[0]);

    for($i=2;$i<4;$i++){
        $para[$i] = trim($para[$i], "[]");
        $para[$i] = str_replace('*', 256, $para[$i]);
    }

    $num = $arr[1];
    for($i=0;$i<$num;$i++){
        $log[$i] = explode(" ", $arr[$i+2]);
    }
    //邪魔な文字の削除
    for($i=0;$i<$num;$i++){
        $log[$i][3] = trim($log[$i][3], "[");
    }

    //検索用にlogのIPを分割+邪魔な文字の削除
    for($i=0;$i<$num;$i++){
        $ip[$i] = explode(".", $log[$i][0]);
        $ip[$i][2] = trim($ip[$i][2],"[]");
        $ip[$i][3] = trim($ip[$i][3],"[]");
    }


    //検索部分　範囲指定があればそこを配列に落として判定する
    $count = 0;
    for($i=0;$i<$num;$i++){
        $flag = 0;
        for($j=2;$j<4;$j++){
            if($para[$j] == 256){
                $flag++;
            }elseif(strpos($para[$j],"-") === false){
                if($ip[$i][$j] == $para[$j]){
                    $flag++;
                }
            }else{
                $search = explode("-", $para[$j]);
                if($search[0] <= $ip[$i][$j] && $ip[$i][$j] <= $search[1]){
                    $flag++;
                }
            }
        }
        if($flag == 2){
            $print[$count] = $i;
            $count++;
        }
    }

    for($i=0;$i<$count;$i++){
        echo $log[$print[$i]][0]. " ". $log[$print[$i]][3]. " ". $log[$print[$i]][6]. "\n";
    }
?>
