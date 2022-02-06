<?php
include_once 'connection.php';
global $conn;

if (isset($_POST['btn_blog'])) {
    if (empty($_POST['title_txt'])) {
        $error1 = 'عنوان را وارد نکردید';
    }
    if (empty($_POST['link_txt'])) {
        $error2 = 'لینک را وارد نکردید';
    }
    if (empty($_POST['Description'])) {
        $error3 = 'توضیحات ذکر نشده';
    } else {
        $result = $conn->prepare("INSERT INTO blog (title,link,Description) VALUES (?,?,?)");
        $result->bindValue(1, $_POST['title_txt']);
        $result->bindValue(2, $_POST['link_txt']);
        $result->bindValue(3, $_POST['Description']);
        $result->execute();
        $message = 'بلاگ اضافه شد';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body style="background-color: #e3e2e2">
<div class="container my-3">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-header">افزودن بلاگ</div>
                <div class="card-body">
                    <?php
                    if (!empty($message)) {
                    ?>
                        <div class="col-sm-12 alert alert-success alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <?php echo $message;?>
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (!empty($error1)) {
                    ?>
                        <div class="col-sm-12 alert alert-danger alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                       <?php echo $error1;?>
                    </div>
                    <?php } ?>
                    <?php
                    if (!empty($error2)) {
                        ?>
                        <div class="col-sm-12 alert alert-danger alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <?php echo $error2;?>
                        </div>
                    <?php } ?>
                    <?php
                    if (!empty($error3)) {
                        ?>
                        <div class="col-sm-12 alert alert-danger alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <?php echo $error3;?>
                        </div>
                    <?php } ?>
                    <form method="post">
                        <div class="mt-2">
                            <label class="form-label">عنوان</label>
                            <input type="text" class="form-control" name="title_txt" autocomplete="off">
                        </div>
                        <div class="mt-2">
                            <label class="form-label">لینک</label>
                            <input type="text" class="form-control" name="link_txt" autocomplete="off">
                        </div>
                        <div class="mt-2">
                            <label class="form-label">توضیحات</label>
                            <textarea name="Description" rows="5" class="form-control"></textarea>
                        </div>
                        <br><br>
                        <div class="col-md-7 mx-auto">
                            <button class="btn btn-success w-75 mx-auto d-block" name="btn_blog">افزودن بلاگ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>
