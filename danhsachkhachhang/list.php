<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <caption><H1>Danh sách khách hàng</H1></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    </thead>
    <?php
    $arr = [
        '1' => [
            'name' => 'Đặng Ngọc Thành',
            'Date' => '09/12/2003',
            'Adress' => 'Phú Thọ',
            'Image' => 'dnt.jpg',

        ],
        '2' => [
            'name' => 'Vũ Thùy Linh',
            'Date' => '15/09/2004',
            'Adress' => 'Phú Thọ',
            'Image' => 'linh.jpg'
        ],
        '3' => [
            'name' => 'Bùi Thị Hồng Linh',
            'Date' => '12/04/2004',
            'Adress' => 'Phú Thọ',
            'Image' => 'hlinh.jpg',

        ],'4' => [
            'name' => 'Bùi Thị Hồng Linh',
            'Date' => '12/04/2004',
            'Adress' => 'Phú Thọ',
            'Image' => 'hlinh1.jpg',

        ]
    ]
    ?>

    <tbody>
        <?php foreach ($arr as $key => $value):?>
            <tr>
                <td><?php echo $key?></td>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['Date']?></td>
                <td><?php echo $value['Adress']?></td>
                <td><img src="<?php echo $value['Image']?>" alt="" width="200"></td>
            </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
