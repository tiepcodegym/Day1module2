<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .login {
            width:230px;
            margin:auto;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .login input {
            padding:5px; margin:5px
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div class="login">
        <h2>Login</h2>
    <lable>Username:
        <input type="text" name="Account" placeholder="Username">
    </lable>
    <lable>Password:
        <input type="password" name="Password" placeholder="Password">
    </lable>
    <button>Sign in</button>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $userName=$_POST['Account'];
    $Password=$_POST['Password'];
    if ($userName == "admin" && $Password == "admin") {
        echo "<h3>Welcome <span style='color:red'>" .$userName. "</span> to website</h3>";
    } else{
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
}
?>
</body>
</html>
