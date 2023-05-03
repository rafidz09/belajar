<?php
$max=0;

for($a=1;$a<=100;$a++) {
    echo $a. " ";
    if($a>$max){
        $max = $a;
    }
}
echo "nilai terbesar adalah ". $max;
?>