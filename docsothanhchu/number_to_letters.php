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
    <input type="number" name="inp">
    <input type="submit" value="submit">
    <?php
    $arr = [
        '1' => 'one',
        '2' => 'two',
        '3' => 'three',
        '4' => 'four',
        '5' => 'five',
        '6' => 'six',
        '7' => 'seven',
        '8' => 'eight',
        '9' => 'nine',
    ];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['inp'];
        if ($number >= 1000 || $number < 0) {
            echo "out of ability";
        }
        if ($number == 0) {
            echo 'zero';
        }
        if ($number == 10) {
            echo 'ten';
        }
        if ($number == 20) {
            echo 'twenty';
        }
        if ($number == 100) {
            echo 'hundred';
        }
        if ($number > 0 and $number < 10) {
            foreach ($arr as $key => $value)
                if ($number == $key)
                    echo $value;
        };
        if ($number > 10 and $number < 20) {
            foreach ($arr as $key => $value)
                if (($number % 10) == $key)
                    echo $value . 'teen';
        };
        if ($number > 20 and $number < 30) {
            foreach ($arr as $key => $value)
                if (($number % 10) == $key)
                    echo 'twenty ' . $value;
        }
        if ($number >= 30 and $number < 100) {
            foreach ($arr as $key => $value)
                if (($number % 10) == $key) {
                    $units = $value;
                    $number /= 10;
                }
            foreach ($arr as $key => $value)
                if (($number % 10) == $key) {
                    echo $value . 'ty ' . $units;
                }
        };
        if ($number > 100 and $number < 1000) {
            if (($number % 100) > 20 and ($number % 100) < 30) {
                foreach ($arr as $key => $value) {
                    if (($number % 10) == $key)
                        $units = $value;
                }
                foreach ($arr as $key => $value) {
                    if (($number / 100) == $key)
                        echo $value . ' hundred and twenty ' . $units;
                }
            } else {
                foreach ($arr as $key => $value)
                    if (($number % 10) == $key) {
                        $units = $value;
                        $number /= 10;
                    }
                foreach ($arr as $key => $value)
                    if (($number % 10) == $key) {
                        $dozens = $value;
                        $number /= 10;
                    }
                foreach ($arr as $key => $value)
                    if (($number % 10) == $key) {
                        echo $value . ' hundred and ' . $dozens . 'ty ' . $units;
                    }
            }
        };
    }
    ?>
</form>
</body>
</html>