<?php
include_once 'panel.php';

include_once 'function.php';

if (isset($_GET['UpdateID']) && !empty($_GET['UpdateID'])) {
    $id = $_GET['UpdateID'];
    $updated=update_blog($id);
    $remeber = Read_Blog($id);
    if ($updated) {
        header('location:panel.php?display_blog=ok');
        $message = 'تغییرات با موفقیت اعمال شد';
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
                <div class="card-header">ویرایش بلاگ</div>
                <div class="card-body">
                    <?php
                    if (!empty($message)) {
                    ?>
                        <div class="col-sm-12">
                            <?php echo $message;?>
                        </div>
                    <?php
                    }
                    ?>
                    <form method="post">
                        <div class="mt-2">
                            <label class="form-label">عنوان</label>
                            <input type="text" class="form-control" name="title_txt_update" value="<?php echo $remeber['title'];?>" autocomplete="off">
                        </div>
                        <div class="mt-2">
                            <label class="form-label">لینک</label>
                            <input type="text" class="form-control" name="link_txt_update" value="<?php echo $remeber['link'];?>" autocomplete="off">
                        </div>
                        <div class="mt-2">
                            <label class="form-label">توضیحات</label>
                            <textarea name="Description_update" rows="5" class="form-control"><?php echo $remeber['Description'];?></textarea>
                        </div>
                        <br><br>
                        <div class="col-md-7 mx-auto">
                            <button class="btn btn-success w-75 mx-auto d-block" name="btn_blog_update">ویرایش بلاگ</button>
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
