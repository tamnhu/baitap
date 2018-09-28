<?php
$numbers = array(1,2,3,4,5);
$i = 0;
$j = 0;
for (; $i > 2 || $j < 2 ;) {
$j = $i++ + ++$j;
echo $numbers[$i];
echo $numbers[$j];
}