

<?php 
/*** An efficient PHP program to find sum of diagonals  ***/
$MAX = 100; 
  
function printDiagonalSums($mat, $n) 
{ 
    global $MAX; 
    $principal = 0; $secondary = 0;  
    for ($i = 0; $i < $n; $i++)  
    { 
        $principal += $mat[$i][$i]; 
        $secondary += $mat[$i][$n - $i - 1];      
    } 
  
    echo "Principal Diagonal:" , 
               $principal ,"\n"; 
    echo "Secondary Diagonal:" ,  
               $secondary ,"\n"; 
}
// Driver Code 
$a = array(array(1, 2, 3, 4), 
           array(5, 6, 7, 8),  
           array(1, 2, 3, 4), 
           array(5, 6, 7, 8)); 
printDiagonalSums($a, 4); 
  
/*** An efficient PHP program to find sum of diagonals  ***/

/*** repeated element out of the array of integers  ***/
echo "<pre>";
$array = [12, 46, 12, 0, 12, 83, 0, 12, 233, 83, 233, 12, 0, 148, 46];
$array_help = array();
# run over the array
foreach ($array as $val) {

    if (isset($array_help) && in_array($val,$array_help)){
     # found if is set already !
        echo '1<br/>';

}else{
       # its the first time this value appear
       $array_help[] = $val;
	   echo '0<br/>';
	}
}
echo "</pre>";
/*** repeated element out of the array of integers  ***/
if (defined('STDIN')) {
	$str = $argv[1];
//$str = 'dfgdfYV6765^&*^%876hvgVUYtvytv';
preg_match_all('/(\d)|(\w)|(.*?)/', $str, $matches);
//print_r($matches);
$numbers = implode($matches[1]);
$letters = implode($matches[2]);
$ss = implode($matches[3]);
print_r($numbers);
print_r($letters);
print_r($ss);
echo "<pre>";
$numarr = $letterarr = $ssymbolarr = array();
for ($i=0; $i<strlen($str); $i++) 
{ 
	if (is_numeric($str[$i])) 
		$numarr[] = $str[$i]; 
	else if(($str[$i] >= 'A' && $str[$i] <= 'Z') || 
			($str[$i] >= 'a' && $str[$i] <= 'z')) 
		$letterarr[] = $str[$i]; 
	else
		$ssymbolarr[] = $str[$i]; 
}
echo "<pre>";
print_r($numarr);
print_r($letterarr);
print_r($ssymbolarr);
}
//var_dump($numbers, $letters,$ss);
?> 
