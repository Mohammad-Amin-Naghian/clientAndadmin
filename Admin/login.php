<?php
include_once 'connection.php';
global $conn;

if (isset($_POST['btn_login'])) {

        $result = $conn->prepare("SELECT * FROM login_admin WHERE username=? AND password=?");
        $result->bindValue(1, $_POST['username']);
        $result->bindValue(2, md5($_POST['password']));
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $_SESSION['username'] = $_POST['username'];
            if (!empty($_POST['Remember'])) {
                setcookie("Username", $_POST['username'], time() + (10 * 365 * 24 * 60 * 60));
                setcookie("Password", $_POST['password'], time() + (10 * 365 * 24 * 60 * 60));
            } else {
                if (isset($_COOKIE['Username'])) {
                    setcookie("Username", "");
                }
                if (isset($_COOKIE['Password'])) {
                    setcookie("Password", "");
                }
            }
            header('location:panel.php');
        } else {
            if (empty($_POST['username'])) {
                $error1 = 'نام کاربری وارد نشده است';
            }
            if (empty($_POST['password'])) {
                $error2 = 'پسورد وارد نشده است';
            } else {
                $error3 = 'نام کاربری یا رمز عبور به درستی وارد نشده یا از قبل وجود ندارد';
            }
        }
}

?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.rtl.css">
    <title>صفحه ورود مدیریت آسبینا</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-login-admin">
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 my-5">
            <div class="card">
                <div class="card-header text-center fs-3 bg-gradient text-white" style="background-color: #B53F29;">
                    پنل ورود مدیریت
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="mt-3">
                            <label class="form-label">نام کاربری</label>
                            <input type="text" class="form-control" name="username"
                                   value="<?php if (isset($_COOKIE['Username'])) {
                                       echo $_COOKIE['Username'];
                                   } ?>" autocomplete="off">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">رمز عبور</label>
                            <input type="password" class="form-control" name="password"
                                   value="<?php if (isset($_COOKIE['Password'])) {
                                       echo $_COOKIE['Password'];
                                   } ?>" autocomplete="off">
                        </div>
                        <div class="form-check form-switch mt-3">
                            <input type="checkbox" class="form-check-input"
                                   name="Remember" <?php if (isset($_COOKIE['Username'])) { ?> checked <?php } ?> >
                            <label class="form-check-label">مرا به خاطر بسپار</label>
                        </div>
                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-danger bg-gradient d-block" name="btn_login">ورود
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    رمز عبور خود را فراموش کردید؟
                    <a href="#" class="text-decoration-none">اینجا</a>
                    کلیک کنید
                </div>
            </div>
        </div>
        <?php
        if (!empty($error3)) {
            ?>
            <div class="col-sm-6 mx-auto alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <?php
                echo $error3;
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        if (!empty($error1)) {
            ?>
            <div class="col-sm-6 mx-auto alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <?php
                echo $error1;
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        if (!empty($error2)) {
            ?>
            <div class="col-sm-6 mx-auto alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <?php
                echo $error2;
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($_GET['FirstLogin']) && !empty($_GET['FirstLogin'])) {
        ?>
        <div class="col-sm-6 mx-auto alert alert-warning alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            کاربر گرامی می بایست قبل از ورود به پنل موارد فوق را وارد نمایید
        </div>
        <?php } ?>
    </div>
</div>
<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>