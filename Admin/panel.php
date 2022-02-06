<?php
include_once 'connection.php';

global $conn;
?>

<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.rtl.css">
    <title>صفحه مدیریت</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<nav class="navbar navbar-light bg-dark bg-opacity-50 fixed-top">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-block">
            <a href="../index.php" class="btn btn-primary">نمایش سایت</a>
            <a href="exit.php" class="
            btn btn-danger">خروج</a>
        </form>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <?php
                if (isset($_SESSION['username'])) {
                    $select = $conn->prepare("SELECT fname FROM login_admin WHERE username=?");
                    $select->bindValue(1,$_SESSION['username']);
                    $select->execute();
                    $row = $select->fetch(PDO::FETCH_ASSOC);
                ?>
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <?php

                    echo 'خوش آمدید '.$row['fname'];
                    ?>
                </h5>
                <?php
                } else{
                    header('location:login.php?FirstLogin=error');
                }
                ?>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo 'panel.php?addBlog=ok' ?>">افزودن
                            بلاگ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo 'panel.php?addMedia=ok' ?>">افزودن رسانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo 'panel.php?display_blog=ok' ?>">نمایش بلاگ ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo 'panel.php?display_media=ok' ?>">نمایش مدیا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo 'panel.php?AboutUs=ok' ?>">درباره ما</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<br><br><br>
<?php
/* bejaye inke karbar linki ro click kone bere be
safhe ye jadid ba estefade az query string ma
miam in dastorhaye php ro minvesim ke vaght click kard
biad to safhe ye jari namayesh bedahad */
if (isset($_GET['addBlog']) && !empty($_GET['addBlog'])) {
    include_once 'addblog.php';
}
if (isset($_GET['addMedia']) && !empty($_GET['addMedia'])) {
    include_once 'addmedia.php';
}
if (isset($_GET['addMedia']) && !empty($_GET['addMedia'])) {
    include_once 'addmedia.php';
}
if (isset($_GET['addMedia']) && !empty($_GET['addMedia'])) {
    include_once 'addmedia.php';
}
if (isset($_GET['display_blog']) && !empty($_GET['display_blog'])) {
    include_once 'blog_display.php';
}
if (isset($_GET['display_media']) && !empty($_GET['display_media'])) {
    include_once 'media_display.php';
}
if (isset($_GET['display_media']) && !empty($_GET['display_media'])) {
    include_once 'media_display.php';
}
if (isset($_GET['AboutUs']) && !empty($_GET['AboutUs'])) {
    include_once 'about_us.php';
}
?>
<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>