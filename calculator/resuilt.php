<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Calculate = $_POST['inp'];
    $inp1 = $_POST['inp1'];
    $inp2 = $_POST['inp2'];
}
echo '<h1>' . 'Result:' . '</h1>' . '<br/>';
switch ($Calculate) {
    case '+':
        $result = $inp1 + $inp2;
        echo $inp1 . $Calculate . $inp2 . ' = ' . $result.'<br/>';
        break;
    case '-':
        $result = $inp1 - $inp2;
        echo $inp1 . $Calculate . $inp2 . ' = ' . $result.'<br/>';
        break;
    case '*':
        $result = $inp1 * $inp2;
        echo $inp1 . $Calculate . $inp2 . ' = ' . $result.'<br/>';
        break;
    case '/':
        if ($inp2 != 0) {
            $result = $inp1 / $inp2;
            echo $inp1 . $Calculate . $inp2 . ' = ' . $result.'<br/>';
        } else {
            echo 'error'.'<br/>';
        }
        break;
    case '%':
        if ($inp2 != 0) {
            $result = $inp1 % $inp2;
            echo $inp1 . $Calculate . $inp2 . ' = ' . $result.'<br/>';
        } else {
            echo 'error'.'<br/>';
        }
        break;
}
echo '<button>'.'<a href="tinhtin.php">Restart</a>'.'</button>'
?>