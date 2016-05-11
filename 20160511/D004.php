<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
   $input_lines = trim(fgets(STDIN));
   echo "Hello". " ";
for ( $i = 0; $i < $input_lines; $i++) {
  $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $s = explode(",", $s);
    echo $s[0];
   if($i==$input_lines -1 ){
       echo ".";
   }else{
       echo ",";
   }
}
?>
