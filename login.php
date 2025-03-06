<?php
require 'function.php';

if (!isset($_SESSION['login'])) {
} else {
    //belum login
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Arsipel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100" style="background-image:url(images/buku.jpg);">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="judul" style="display:flex; justify-content:center; align-items:center;">
                <img src="images/icon-arsip.png" style="background:white; border-radius:50%; margin-right:10px;">
                <h1 style="margin-left:10px; color:white;">Arsipel</h1>
            </div>
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="authincation-content" style="border-radius:13%; height:430px; margin-top:-200px;">
                        <div class="row no-gutters">
                            <div class="col-xl-11">
                                <div class="auth-form" style="margin-left:37px; ">
                                    <h4 class="text-center mb-4" style="font-size:30px;"><b>Sign In</b></h4>
                                    <form action="tes_login.php" method="POST">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" name="user_name">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>

</body>

</html>