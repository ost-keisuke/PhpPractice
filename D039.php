<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $str = trim(fgets(STDIN));
    while($str){
        $arr[] = $str;
        $str = trim(fgets(STDIN));
    }
     if($arr[0] == $arr[1]){
        if($arr[0] == $arr[2]){
            echo "YES";
        }else{
            echo "NO";
        }
    }else{
        echo "NO";
    }
?>
