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
    <input type="submit" value="Hiển Thị">
    <?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        for ($i=2;$i<100;$i++){
            $check=false;
            for($j=2;$j<$i;$j++) {
                if ($i % $j == 0) {
                    $check = true;
                    break;
                }
            }
            if ($check){
                continue;
            }else{
                echo $i.' ';
            }
        }
    }
    ?>
</form>
</body>
</html>