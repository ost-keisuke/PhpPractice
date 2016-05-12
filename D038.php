<?php
    $input_lines = trim(fgets(STDIN));
    $N = $input_lines * ($input_lines - 1) / 2;
    echo "$N";
?>
