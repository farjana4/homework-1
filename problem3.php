<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$arr = [];
$arr[] = range(10,20,2);
$arr[] = range(22,50,2);
$arr[][][][] = range(52,60,4);

print_r($arr);
echo '<br>';
array_walk_recursive($arr, function(&$value,$key){
	 $value*=10;
});
print_r($arr);

?>