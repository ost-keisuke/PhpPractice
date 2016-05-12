<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $str = trim(fgets(STDIN));
    while($str){
        $arr[] = $str;
        $str = trim(fgets(STDIN));
    }
   echo $arr[0]. "@". $arr[1];
?>
