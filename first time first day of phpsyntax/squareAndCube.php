<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
  Enter Number  <input type="text" name="t1">

  <button name="b1">Square</button>
  <button name="b2">Cube</button>
    </form>
    <?php
    if(isset($_POST['b1'])){
        $n =$_POST['t1'];
        echo "square is  : " ,$n*$n;

    }
    if(isset($_POST['b2'])){
        $n = $_POST['t1'];
        echo "Cube is ", $n*$n*$n ;
    }
    ?>
</body>
</html>