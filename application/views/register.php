
<?php
// $connect = mysqli_connect('localhost', 'root', '', 'login1');
// mysqli_set_charset($connect, "utf8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Register</title>
    <style>

        .register {
            font-size: 50px;
            font-weight: bold;

        }
        html body {
            background: linear-gradient(120deg, #3ca7ee, #9b408f);
            height: 100vh;
        }

        .register_form {
            width: 350px;
            height: 550px;
            border: 5px solid #eb7734;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            border-radius: 20px;
            padding: 10px;
            
        }

        .form-control {
            height: 40px;
            margin-top: 20px;
            border: none;
            box-shadow: 2px 2px black;
            
        }

        .btn {
            width: 200px;
            margin-top: 20px;
            font-size: 20px;
            border-radius: 5px;
            transition: 0.3s;
            border: 3px solid #eb7734 !important;
            color: #eb7734;
            font-weight: bold;
            background: #eb7734;
            color: white;

        }

        .btn:hover {
            box-shadow: 2px 2px black;
            background: #eb7734;
            border: 1px solid #eb7734;
        }
        .btn-register{
            text-decoration: none;
            margin-top: 20px !important;
            color: black;
        }
        .link{
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        .registerbody{
            margin-top: 30%;
        }
    </style>
</head>

<body>

    <form action="register" method="post">
    <p>PHP CodeIgniter 3</p>

        <div class="register_form">
            

            <div class="registerbody">
                <div class="">
                    <div class="">
                        <input id="form12" type="text" class="form-control" name="user_name_rg" placeholder="Nhập tên đăng nhập...">
                    </div>
                    <div class="form-group">

                        <input id="form12" type="password" class="form-control" name="passrg" placeholder="Nhập mật khẩu..." required>
                    </div>
                    <div class="form-group">

                        <input id="form12" type="password" class="form-control" name="passrg_again" placeholder="Nhập lại mật khẩu..." required>
                    </div>
                    <div class="form-group">

                        <input id="form12" type="text" class="form-control" name="fullname" placeholder="Nhập đầy đủ họ tên..." required>
                    </div>
                    <br>
                    <?php
              
                    ?>
                    <br>

                    <button type="submit" class="btn btn-outline-success" name="dangky">Register</button>
                        <div class="btn-register">
                    <a  class="link" href="viewlogin">Login</a>
                </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>