<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" placeholder="nhap so luong snt" name="inp">
    <input type="submit">
    <?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $num=$_POST['inp'];
        $count=0;
        $i=2;
        while ($count<$num){
            $check=false;
           for($j=2;$j<$i;$j++) {
               if ($i % $j == 0) {
                   $check = true;
                   break;
               }
           }
               if ($check){
                   $i++;
               }else{
                   echo $i.' ';
                   $count++;
                   $i++;
               }
        }
    }
    ?>
</form>
</body>
</html>