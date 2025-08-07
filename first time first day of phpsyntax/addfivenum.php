<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    enter 2 num <input type="text" name="f1" >
    enter 2 num <input type="text" name="f2" >
    enter 3 num <input type="text" name="f3" >
    enter 4 num <input type="text" name="f4" >
    enter 5 num <input type="text" name="f5" >
    <button name="r">Add 5 num</button>
    </form>
    <?php 
     if(isset($_POST['r'])){
        $f1 = $_POST['f1'];
        $f2 = $_POST['f2'];
        $f3 = $_POST['f3'];
        $f4 = $_POST['f4'];
        $f5 = $_POST['f5'];

        $r = $f1 +$f2 +$f3 +$f4 +$f5;
        echo "addtion of five numbers is : " . $r;
     }
    ?>
</body>
</html>