<?php
$image = "./image/logo.png";
// session_start();
//  if(isset($_SESSION["username"]))

//  {
//     session_unset();
//     session_destroy();

//  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>LOGIN</title>
    <style>
        .login {
            font-size: 50px;
            font-weight: bold;


        }

        .login_form {
            width: 300px;
            height: 500px;
            border: 5px solid #eb7734;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding: 10px;
            border-radius: 20px;
           
        }

        .form-control {
            border-radius: 5px;
            margin-top: 10px;

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

        .link {
            text-decoration: none;
            color: white;
            font-size: 20px;
        }

        .btn:hover {
            box-shadow: 2px 2px black;
            background: #eb7734;
            border: 1px solid #eb7734;
        }

        .image {
            width: 70%;
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;



        }

        html body {

            background: linear-gradient(120deg, #3ca7ee, #9b408f);
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="app">
        <?php
        if (isset($_COOKIE["errorlogin"])) {
        ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Có lỗi!</strong> <?php echo $_COOKIE["errorlogin"]; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>


        <?php } ?>
        <?php
        if (isset($_COOKIE["successregister"])) {
        ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> <?php echo $_COOKIE["successregister"]; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>


        <?php } ?>
        <form class="body" action="loginIG" method="post">
            <p>PHP CodeIgniter 3</p>
            <div class="login_form">
                <div class="login">

                    <img class="image" src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-orange.png" />

                </div>

                <div class="">
                    <div class="">
                        <div class="">
                            <input type="text" id="form12" class="form-control" name="user_name_lg" placeholder="Nhập tên đăng nhập...">
                        </div>
                        <div class="form-group">

                            <input type="password" id="form12" class="form-control" name="passlg" placeholder="Nhập mật khẩu..." required>
                        </div>

                        <button type="submit" class="btn btn-outline-success " name="dangnhap">Login</button>
                        <br>
                        <a class="link" href="viewregister">Register</a>

                    </div>
                </div>

            </div>
        </form>
    </div>
</body>

</html>