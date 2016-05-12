<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $str = trim(fgets(STDIN));
    $al = "A";
    for($i = 1; $i <= 26; $i++){
        if($str == $al){
            break;
        }else{
            $al++;
        }
    }
    echo $i;

?>
