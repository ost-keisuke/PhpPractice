<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $in = trim(fgets(STDIN));
    $menu = 21 % $in;
    if($menu == 0){
        echo $in;
    }else{
        echo $menu;
    }
?>
