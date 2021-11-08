<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <h1><strong>Từ Điển Anh-Việt</strong></h1>
    <input type="text" placeholder="Nhập từ cần tìm" name="inp">
    <button id="submit">Tìm</button>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $inp = $_POST['inp'];
        $count = 0;
        $arr = [
            'hello' => 'Xin chào',
            'How' => 'Làm sao',
            'What' => 'Cái gì',
            'Computer' => 'máy tính',
        ];
        foreach ($arr as $key => $value)
        if ($inp === $key) {
            echo "Từ: " . $inp . " có nghĩa là: " . $value;
            echo '<br/>';
            $count++;
        }
        if ($count === 0) {
            echo 'Không tìm được từ cần tra. ';
            echo '<br/>';
        }

    }
    ?>
</form>
</body>
</html>
