<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        .login {
            font-size: 50px;
            font-weight: bold;

        }

        .login_form {
            width: 300px;
            height: 450px;
            border: 2px solid black;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .form-control {
            height: 40px;
            margin-top: 20px;
            border: none;
            box-shadow: 2px 2px black;
        }

        .btn {
            width: 100px;
            height: 35px;
            margin-top: 20px;
            font-size: 20px;
            border: none;
            border-radius: 5px;
            transition: 0.3s;

        }

        .btn:hover {
            box-shadow: 2px 2px black;
            background: #a39d9d;
        }
    </style>
</head>

<body>
    <?php
  
    ?>
    <form action="loginIG" method="post">
        <p>PHP CodeIgniter 3</p>
        <div class="login_form">
            <div class="login">
                <h3>Login</h3>
            </div>

            <div class="">
                <div class="">
                    <div class="">
                        <input type="text" class="form-control" name="user_name_lg" placeholder="Nhập tên đăng nhập...">
                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" name="passlg" placeholder="Nhập mật khẩu..." required>
                    </div>

                    <button type="submit" class="btn " name="dangnhap">Login</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>