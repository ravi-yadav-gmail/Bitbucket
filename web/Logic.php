<?php
ini_set('display_errors',1);
set_time_limit(0);
/* ============ Factorial of any number ====================  */
	// n! = n x (n - 1) x (n - 2) x (n - 3) ... 3 x 2 x 1
	// Example: 6! = 6 x 5 x 4 x 3 x 2 x 1 = 720
/* ============ Factorial of any number ====================  */
$number = 6;
$fact = 1;

for($i=1;$i<=$number;++$i){
	$fact = $fact*$i;
}
echo "Factorial of ".$number." is ".$fact;
echo "</br>";

/* ============ Fibonacci series =========================== */
	// Example: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
/* ============ Fibonacci series =========================== */
$first = 0;
$second = 1;
$endnumber = 10;
echo $first.", ".$second;
for($i=0;$i<=$endnumber;$i++){
	$third = $first + $second;
	echo " ,".$third;
	$first = $second;
	$second = $third;
}
/* Start Swap two numbers witout using third variable */
$a = 5;
$b = 6;
echo "<pre>";
echo $a."--".$b;
echo "</pre>";
$a = $a + $b; // 5+6 = 11;
$b = $a - $b; // 11-6 = 5
$a = $a - $b; //11-5 = 6

echo "<pre>";
echo $a."--".$b;
echo "</pre>";
/* End Swap two numbers witout using third variable */
//exit;
/* Start Reverse an array without using internal function */
$array = array(1, 2, 3, 4);
$size = sizeof($array);
//echo $size;
for($i=$size-1; $i>=0; $i--){
  $array[] = $array[$i];
  unset($array[$i]);
}
print_r($array);
/* End Reverse an array without using internal function */
$str = '2342sdfsf34345dfgdf&^%$&^sdfsdfsd3453SSSSUJGIJ5';
$arr = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$str);
echo "</pre>";
print_r($arr);
echo "<pre>";
$x = array(5,6,7,8,2,1);
$y = array(4,10,9,8,3,5);
$lenght = count($x);
$z = array();
for($i=0; $i<=$lenght-1;$i++){
	for($j=0;$j<=$lenght-1;$j++){
		if($x[$j] != $y[$i] ){
			$z[] = $x[$j];
		}else{
			$z[] = $y[$i];
		}
	}
	
//print_r($lenght);exit;
}
echo "<pre>";print_r($z);