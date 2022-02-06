<?php

include_once 'connection.php';
global $conn;
if (isset($_POST['btn_media'])) {
    if (!empty($_POST['title_txt']) && !empty($_POST['Description']) && !empty($_FILES['file_img'])) {
        $files = $_FILES['file_img'];
        $fileName = $files['name'];
        $explode = explode('.', $fileName);
        $passwand = end($explode);
        $result = $conn->prepare("INSERT INTO media(title,Description,picture) VALUES (?,?,?)");
        $result->bindValue(1, $_POST['title_txt']);
        $result->bindValue(2, $_POST['Description']);
        if (in_array($passwand, ['JPG', 'JPEG', 'PNG', 'jpg', 'jpeg', 'png', 'mp4', 'MP4', 'wmv', 'mkv'])) {
            $newName = 'asbina_' . rand(1025, 989595) . $fileName;
            $result->bindValue(3, $newName);
            move_uploaded_file($files['tmp_name'], 'media/' . $newName);
            $result->execute();
        } else {
            $error = 'پسوند ارسالی جز پسوند فیلم یا عکس نمی باشد';
        }

        $message = 'رسانه با موفقیت اضافه شد';
    } else {
        $error2 = 'رسانه ای اضافه نشده است!';
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
    <title>Document</title>
</head>
<body style="background-color: #e3e2e2">
<div class="container my-3">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <?php
                    if (!empty($message)) {
                        ?>
                        <div class="col-sm-12 mx-auto alert alert-success alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <?php
                            echo $message;
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if (!empty($error)) {
                        ?>
                        <div class="col-sm-12 mx-auto alert alert-danger alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <?php
                            echo $error;
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if (!empty($error2)) {
                        ?>
                        <div class="col-sm-12 mx-auto alert alert-warning alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <?php
                            echo $error2;
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mt-2">
                            <label class="form-label">عنوان</label>
                            <input type="text" class="form-control" name="title_txt" autocomplete="off">
                        </div>
                        <div class="mt-2">
                            <label class="form-label">توضیحات</label>
                            <textarea name="Description" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="mt-3">
                            <label for="img" class="btn btn-info w-100">انتخاب عکس</label>
                            <input type="file" name="file_img" id="img" style="display: none" class="form-control">
                        </div>
                        <br><br>
                        <div class="col-md-7 mx-auto">
                            <button class="btn btn-success w-75 mx-auto d-block" name="btn_media">افزودن رسانه</button>
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
