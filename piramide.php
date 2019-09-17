<?php
echo "Hoeveel stapels wil je hebben?\r\n";
$stapels = readline();
for ($i = 1; $i <= $stapels; $i++) {
	for ($a = 1; $a <= $i; $a++) {
		echo "*";
	}
	echo "\r\n";
}
?>