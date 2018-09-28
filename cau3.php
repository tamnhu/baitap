<?php
	echo "3A --- ";
	$temp = 0;
	$n=71;
	for($i=1;$i<= $n/2;$i++)
	{
		if(($n % $i)==0) $temp++;
	}
	if($temp>=2) echo "$n Khong la so nguyen to";
	else echo  "$n La so nguyen to";
	?>
	<br>
	<?php
	echo "3B --- ";
	$temp1 = 0;
	$n1=71;
	for($i=1;$i<$n1;$i++)
	{
		if(($n1 % $i)==0) $temp1+=$i;
	}
	if($temp1>=2) echo "$n1 La so hoan hao";
	else echo "$n1 Khong la so hoan hao";
	?>
	<br>
	<?php
	echo "3C --- So qua lon";
?>