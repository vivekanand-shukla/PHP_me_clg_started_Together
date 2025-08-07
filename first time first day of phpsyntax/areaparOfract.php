<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    enter length: <input type="text" name="l">
    enter bridth: <input type="text" name="b">
    <button name="b1">AREA of rect</button>
    <button name="b2">Parameter of rect</button>
</form>
<?php 
if(isset($_POST['b1'])){
    $n=$_POST['l'];
    $m=$_POST['b'];
    echo "Area is : " , $n * $m ;

}
if(isset($_POST['b2'])){
    $n = $_POST['l'];
    $m = $_POST['b'];

    echo "Perimeter is , ",  2 * ($n + $m) ;
}

?>
</body>
</html>