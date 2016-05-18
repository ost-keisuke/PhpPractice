<?php

$in = explode(' ',trim(fgets(STDIN)));
$x = $in[0];
$y = $in[1];
$k = (int)(trim(fgets(STDIN)));
$landNum = trim(fgets(STDIN));
$landGroup = array();
$distance = array();
for($i=0;$i<$landNum;$i++){
    $landGroup[$i] = explode(' ',trim(fgets(STDIN)));
    $distance[$i] = sqrt(pow($x-$landGroup[$i][0],2)+pow($y-$landGroup[$i][1],2));
}

$cnt = 0;
$ave = 0;
asort($distance);
foreach ($distance as $key => $value) {
    if($cnt===$k) break;
    $ave += $landGroup[$key][2];
    $cnt++;
}
echo (int)($ave/$k+0.5);
?>
