<?php
include_once 'panel.php';
include_once 'function.php';
if (isset($_GET['Update_Id']) && !empty($_GET['Update_Id'])) {
    $id = $_GET['Update_Id'];
    $update = update_media($id);
    $remeber = Read_Media($id);
    if ($update) {
        header('location:panel.php?display_media=ok');
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
                <div class="card-header">ویرایش رسانه</div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mt-2">
                            <label class="form-label">عنوان</label>
                            <input type="text" class="form-control" name="title_TXT_update" value="<?php echo $remeber['title'];?>" autocomplete="off">
                        </div>
                        <div class="mt-2">
                            <label class="form-label">توضیحات</label>
                            <textarea name="Description_update_TXT" rows="5" class="form-control"><?php echo $remeber['Description'];?></textarea>
                        </div>
                        <br><br>
                        <div class="col-md-7 mx-auto">
                            <button class="btn btn-success w-75 mx-auto d-block" name="btn_media_update"> ویرایش رسانه</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>

