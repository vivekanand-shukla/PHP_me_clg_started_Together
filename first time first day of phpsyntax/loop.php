<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>
<body>
    <?php
    // php local veriable
    function test(){
        $x  = 5;
        echo $x;
    }
    test();

    $x = 5;
    function test1(){
        // echo $x;
    }
    echo $x;
    test1();
   $cars = array("volvo" ,"BMW" , "TOyota");
   echo "<br>";
   echo  $cars[0];
   echo "<br>";
   echo $cars[1];
   echo "<br>";
   echo $cars[2];
   echo "<br>";
   $car = array("Ford" , "Mustang", 1964);
   $car[1] = "Bentley";
   foreach($car as $x){
    echo "$x <br>";
   }

  $newCar = array("Volvo", "BMW", "Toyota");
  unset($newCar[1]);
  var_dump($newCar);


    ?>
<pre>
    
    <?php
    $newCar = array("Volvo", "BMW", "Toyota");
  unset($newCar[1]);
  var_dump($newCar);
    ?>
    
</pre>
   <?php
   $cars = array("Volvo" ,"BMW","Toyota");
   sort($cars);
   $clength =  count($cars);
   for($x =0; $x < $clength ; $x++){
    echo $cars[$x];
    echo "<br>";
   }


   ?>

   <?php
   
     echo strcmp("hello world","hello world111");
     echo '<br>';
     echo str_replace("world" ,"vivek", "hello world");
     echo '<br>';
     echo strlen("vivek");
     echo '<br>';
     echo strtolower("hello WORLD");
     echo '<br>';
     echo strtoupper("hello WoRlD");
   ?>

   <form method = "post" >
     First Number : <input type="text" name="t1" id="">
     Second Number : <input type="text" name="t2" id="">
     Third Number : <input type="text" name="t3" id="">
      <button name="b1">Product</button>
   </form>
    <?php 
      if(isset($_POST['b1'])){
           $a = $_POST['t1'];
           $b = $_POST['t2'];
           $c = $_POST['t3'];
           $p = $a*$b*$c;
           echo "result is : $p";
      }
    
    ?> 
   <form method = "post" >
     First Number : <input type="text" name="e1" id="">
     Second Number : <input type="text" name="e2" id="">

      <button name="b2">Compare</button>
   </form>
   <?php
   if(isset($_POST['b2'])){
    $a = $_POST['e1'];
    $b = $_POST['e2'];
    if($a > $b){
        echo "first number is grater";
    }else{
        echo "second number is grater";

    }
   }
   
   ?>

   <form method="post">
		Enter Age<input name="t11"><br>
		<button name="b11">Check</button>
		</form>
		<?php
		if(isset($_POST['b11']))
		{
			$n=$_POST['t11'];
			if($n>=18)
				echo "Eligible to Vote";
			else
				echo "Not Eligible to Vote";
		}
		?>


</body>
</html>

