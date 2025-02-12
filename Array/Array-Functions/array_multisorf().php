<?php
//return a sorted array in ascending order 

$a=array("Dog","Cat","Horse","Bear","Zebra");
echo "return a sorted array in ascending order using array_multisort() function;";
echo "<pre>";
array_multisort($a);
print_r($a);

$a1=array("Ravi","Rajesh");
$a2=array("Karan","Durgesh");
array_multisort($a1,$a2);
echo "<pre>";
print_r($a1);

echo "<pre><br<br>";
print_r($a2);



//Return sorts in ascending order value when Two value are same.
echo "<br><br>Return a sorts in ascending order value when Two value are same.";
$a1=array("Dog","Dog","Cat");
$a2=array("Pluto","Fido","Missy");
array_multisort($a1,$a2);

echo "<pre>";
print_r($a1);
print_r($a2);


?>