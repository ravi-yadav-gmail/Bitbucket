

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

$array = [12, 46, 244, 0, 12, 83, 48, 98, 233, 83, 26, 91, 119, 148, 98];
$array_help = array();
# run over the array
foreach ($array as $val) {

    if (isset($array_help) && in_array($val,$array_help))
     # found if is set already !
        echo '1<br/>';

    else
       # its the first time this value appear
       $array_help[] = $val;
	   echo '0<br/>';
}
/*** repeated element out of the array of integers  ***/


$str = '12jan%^%%^';
$arr = preg_split('/(?<=[0-9])(?=[a-zA-Z]+)(?=[^a-zA-Z])/i',$str);                                                               
print_r($arr);
?> 
