<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    enter first num :<input type="text" name="f1" >
    enter second  num :<input type="text"  name="f2"  >
    <button name="b1">Add</button>
    <button name="b2">Sub</button>
    <button name="b3">Mul</button>
    <button name="b4">Div</button>

    </form>
    <?php 
       if(isset($_POST['b1'])){
        $a = $_POST['f1'];
        $b= $_POST['f2'];
        $c = $a + $b;
        echo "the addition of " ,$a ,"  ",$b ,"  :",$c;
       }
       if(isset($_POST['b2'])){
        $a = $_POST['f1'];
        $b = $_POST['f2'];
        $c = $a -$b;
        echo "sub is : ",$c;
       }

       if(isset($_POST['b3'])){
        $a =$_POST['f1'];
        $b =$_POST['f2'];
        $c =  $a * $b;

        echo "the multiplication is of first and senond num is ", $c;
       }

       if(isset($_POST['b4'])){
        $a=  $_POST['f1'];
        $b = $_POST['f2'];
        $c = $a /$b;
        echo "the devision is : ", $c;
       }

    ?>
</body>
</html>