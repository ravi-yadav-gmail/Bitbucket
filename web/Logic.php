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

/* Input=> array(
	array('PQR','good','123'),
	array('PQR','good','123'),
	array('ABC','good','123'),
	array('ABC','good','123'),
	array('ABC','good','123'),
	array('ABC','good','123'),
	array('ABC','good','123'),
	array('ABC','good','123'),
	array('XYZ','bad','456'),
	array('ABC','good','123'),
	array('XYZ','bad','456')
	)
Output=> Array
(
    [["PQR","good","123"]] => 2
    [["ABC","good","123"]] => 7
    [["XYZ","bad","456"]] => 2
) */
$arraydata = array(array('PQR','good','123'),array('PQR','good','123'),array('ABC','good','123'),array('ABC','good','123'),array('ABC','good','123'),array('ABC','good','123'),array('ABC','good','123'),array('ABC','good','123'),array('XYZ','bad','456'),array('ABC','good','123'),array('XYZ','bad','456'));
$jsonecode  = json_encode($arraydata);
$jsondecode  = json_decode($jsonecode);
$mytempvar = array();
if(!empty($jsondecode)){
	foreach($jsondecode as $eachjsondecode){
		$mytempvar[] = json_encode($eachjsondecode);
		
	}
	$myVararr = array();
	for($i=0;$i<count($mytempvar); $i++){
		$key = $mytempvar[$i];
		if(isset($myVararr[$key]) && $myVararr[$key]>=1 ){
			$myVararr[$key]++;
		}else{
            $myVararr[$key]=1;
		}
	}
}
echo "<pre>";print_r($myVararr);

/* Input=> "abcdefgh" Output=> "badcfehg" */
$mystr = "abcdefgh";
$mystrlen = strlen($mystr);
$myevenarr = $myoddarr = array();
$myfinal = '';
for($i=0;$i<$mystrlen;$i++){
	if($i%2==0){
		$myevenarr[] = $mystr[$i];
	}else{
		$myoddarr[] = $mystr[$i];
	}
}
foreach($myevenarr as $key=>$value){
	$myfinal.= $myoddarr[$key];
	$myfinal.= $value;
}
/* Sort the array in  asc order */
$unsortedarr = array(8,2,10,56,3,5,32,75,21,9,7,3,98,76,23,12);
$temp = '';
for($j=0;$j<count($unsortedarr);$j++){
	for($i=0;$i<count($unsortedarr)-1;$i++){
		if($unsortedarr[$i] > $unsortedarr[$i+1]){
			$temp = $unsortedarr[$i+1];
			$unsortedarr[$i+1] = $unsortedarr[$i];
			$unsortedarr[$i] = $temp;
		}
	}
}
echo "<pre>";print_r($unsortedarr);
/*
OUTPUT : 	*
			**
			***
			****
			*****
			******
			*******
*/
$number = 8;
for($i=0;$i<$number;$i++){
	for($j=0;$j<$i;$j++){
		echo "*";
	}
	echo "</br>";
}
echo "<pre>";
/*
OUTPUT : 	********
			*******
			******
			*****
			****
			***
			**
			*
*/
$number = 8;
for($i=$number;$i>0;$i--){
	for($j=0;$j<$i;$j++){
		echo "*";
	}
	echo "</br>";
}

$variable = '';
$variable1 = NULL;
if(isset($variable)){
	echo "ISSET BLANK";
}
if(isset($variable1)){
	echo "ISSET NULL";
}
if(empty($variable)){
	echo "EMPTY BLANK";
}
if(empty($variable1)){
	echo "EMPTY NULL";
}

$x = 'vars';
echo $$x; //print undefined variable vars
echo "$$x"; // print $vars
echo '$$x'; // print $$x
echo "<pre>";
/* Start Generate a radom string */
function randomString($n){
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomnos = '';
	for($i=0;$i<$n;$i++){
		$index = rand(0,strlen($characters)-1);
		//echo "$index<pre>";
		$randomnos.=$characters[$index];
	}
	return $randomnos;
}
echo randomString(10);
/* End Generate a radom string */
echo "<pre>";
class myTest{
	public function foo(){
		var_dump(__FUNCTION__);
	}
	public function bar(){
		var_dump(__METHOD__);
	}
}
$myobj = new myTest();
$myobj->foo();
$myobj->bar();
echo "<pre>";
/* Merge two arrays without changing their keys */
	$array_1 = array(1=>"a",2=>"b",3=>"c",4=>"a",5=>"e");
	$array_2 = array(6=>"d",7=>"f",8=>"g",9=>"h",10=>"a");
	$merged_arr = $array_1 + $array_2;
	var_dump($merged_arr);
/* Merge two arrays without changing their keys */
echo "<pre>";
echo $_SERVER['HTTP_HOST'];
echo "<pre>";
echo $_SERVER['SERVER_NAME']; 

echo "<pre>";
/* Measuring script execution time in PHP */
$start_time = microtime(true); 
$a=1; 
// Start loop 
for($i = 1; $i <=1000; $i++) 
{ 
    $a++; 
}  
// End clock time in seconds 
$end_time = microtime(true); 
// Calculate script execution time 
$execution_time = ($end_time - $start_time); 
echo " Execution time of script = ".$execution_time." sec";   
