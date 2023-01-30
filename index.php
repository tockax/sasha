<?php
$arr = [$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];

foreach($arr as $key => $val){
	$en[] = $key;
	$ru[] = $val;
}
echo "<pre>";
print_r($en);
print_r($ru);
