<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    principal : <input name="p">
    rate : <input name="r">
    time : <input name="t">
    <button name="res">Res</button>
</form>
<?php 
if(isset($_POST['res'])){
  $p = $_POST['p'];
  $r = $_POST['r'];
  $t = $_POST['t'];
 $res = ( $p * $r *$t)/100;
   echo "the simple interest of you given input is : " , $res;
}

?>
</body>
</html>