<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tortorial </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    this is my first php website
<?php  
// arthematic oprator 
//assignment oprater 
//comparision oprator
//
$a = 1;
$b =4;
define('PI', 3.14);
echo  var_dump($a!=$b);
echo "<br>";
echo  var_dump($a>=$b);
echo "<br>";
echo  var_dump($a==$b);
echo "<br>";
echo  var_dump($a<=$b);
echo "<br>";

echo $a++;
echo $a--;
echo --$a;
echo ++$a;
echo PI;
//logical oprator
// and (&&)
//  or (||)
//   xor ()
//   

//data types
//sting 
//integer
//float
//boolean 
//array
//object
//
 $myVar = (true xor false);

//aray in php 
$lunguage = array("java" ,"python" ,"c++" ,"php");
echo $lunguage[0];
 $i = 0;
while($i <=10){
    echo "<br>The value  of a is :", $i;
     $i++;
}
foreach($lunguage as $value){
    echo "<br> the value is :";
    echo $value;

}
//function as js
// . is string concinator oprator
?>
</body>
</html>