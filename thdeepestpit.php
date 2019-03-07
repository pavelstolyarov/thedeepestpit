<?php

function solution(array $a)
{
	$length = count($a);
	
	if ($length < 3) {
		return 0;
	}
	
	$maxDepth = -1;
	
	$P = null;
	$Q = null;
	$R = null;
	
	$i = null;
	$j = null;
	$k = null;
	
	for ($i = 0; $i < $length - 2; $i++) {
		
		$j = $i + 1;
		
		if ($a[$i] > $a[$j]) {
			
			$P = $a[$i];
			
			while ($j + 1 < $length && $a[$j] > $a[$j + 1]) {
				$j++;
			}
			
			$Q = $a[$j];
			
			$k = $j + 1;
			while ($k + 1 < $length && $a[$k] < $a[$k + 1]) {
				$k++;
			}
			
			if ($k >= $length) {
				continue;
			}
			
			$R = $a[$k];
			
			$currentDepth = min($P - $Q, $R - $Q);
			
			if ($currentDepth > $maxDepth) {
				$maxDepth = $currentDepth;
			}
			$i = $k - 1;
			
		}
	}
	
	return $maxDepth < 0 ? 0 : $maxDepth;
}


for ($i = 1; $i <= 100000; $i++) {
	$arr[] = rand(1, 100000000);
}

$depth = solution($arr);
