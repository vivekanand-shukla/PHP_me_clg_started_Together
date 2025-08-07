<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
    <label for="first">Enter First number</label>
    <input type="text" id="first" name="t1">
   
    <label for="second">Enter Second number</label>
    <input type="text" id="second" name="t2">
    <button name="b1">Add</button>
    </form>
    <?php
    if(isset($_GET['b1'])) {
        $a =$_GET['t1'];
        $b = $_GET['t2'];
        $c= $a+$b;
        echo "Addition is",$c;
    }
    ?>
</body>
</html>